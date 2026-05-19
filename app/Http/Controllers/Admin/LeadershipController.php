<?php

namespace App\Http\Controllers\Admin;

use App\Models\Leadership;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Yajra\DataTables\DataTables;

class LeadershipController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $leaderships = Leadership::all();
            return DataTables::of($leaderships)
                ->addIndexColumn()
                ->addColumn('l_img', function ($row) {
                    $src = $row->l_img && file_exists(public_path($row->l_img))
                        ? asset($row->l_img)
                        : asset('frontend/assets/img/default-leadership.jpg');
                    return '<img src="' . $src . '" alt="image" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">';
                })
                ->addColumn('action', function ($row) {
                    $actionbtn = '';

                    $actionbtn .= '<a href="javascript:void(0)" class="btn btn-primary btn-sm me-1 edit"
                                    data-id="' . $row->id . '"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editModal">
                                        <i class="fa fa-edit"></i>
                                    </a>';

                    $actionbtn .= '<button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <form id="delete-form-' . $row->id . '" action="' . route('leadership.destroy', $row->id) . '" method="POST" style="display: none;">
                                        ' . csrf_field() . '
                                        ' . method_field('DELETE') . '
                                    </form>';

                    return $actionbtn;
                })
                ->rawColumns(['l_img', 'action'])
                ->make(true);
        }

        return view('admin.pages.leadership.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'l_name' => 'required|string|max:255',
            'l_img'  => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'l_desg' => 'nullable|string|max:255',
            'l_ldn'  => 'nullable|string|max:255',
            'l_fc'   => 'nullable|string|max:255',
        ]);

        $request->merge([
            'l_name' => strip_tags($request->l_name),
        ]);

        Leadership::newLeadership($request);

        $this->toastr->success('Leadership created successfully!');
        return redirect()->route('leadership.index');
    }

    public function edit(Leadership $leadership)
    {
        return view('admin.pages.leadership.edit', compact('leadership'));
    }

    public function update(Request $request, Leadership $leadership)
    {
        $request->validate([
            'l_name' => 'required|string|max:255',
            'l_img'  => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'l_desg' => 'nullable|string|max:255',
            'l_ldn'  => 'nullable|string|max:255',
            'l_fc'   => 'nullable|string|max:255',
        ]);

        $request->merge([
            'l_name' => strip_tags($request->l_name),
        ]);

        Leadership::updateLeadership($request, $leadership->id);

        $this->toastr->success('Leadership updated successfully!');
        return redirect()->route('leadership.index');
    }

    public function destroy($id)
    {
        $leadership = Leadership::findOrFail($id);
        Leadership::deleteLeadership($leadership);

        $this->toastr->success('Leadership deleted successfully!');
        return redirect()->route('leadership.index');
    }
}