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
        $leaderships = Leadership::latest()->get();

        return DataTables::of($leaderships)
            ->addIndexColumn()
            ->addColumn('l_img', function ($row) {
                return $row->l_img
                    ? '<img src="' . asset($row->l_img) . '" style="width:60px; height:60px; object-fit:cover; border-radius:5px;">'
                    : '<span class="badge bg-secondary">No Image</span>';
            })
            ->addColumn('l_ldn', function ($row) {
                return $row->l_ldn
                    ? '<a href="' . $row->l_ldn . '" target="_blank" class="btn btn-sm btn-outline-primary">
                            <i class="fab fa-linkedin-in"></i>
                       </a>'
                    : '<span class="text-muted">N/A</span>';
            })
            ->addColumn('l_fc', function ($row) {
                return $row->l_fc
                    ? '<a href="' . $row->l_fc . '" target="_blank" class="btn btn-sm btn-outline-primary">
                            <i class="fab fa-facebook-f"></i>
                       </a>'
                    : '<span class="text-muted">N/A</span>';
            })
            ->addColumn('action', function ($row) {
                $btn = '<div class="d-flex align-items-center justify-content-center gap-1">';

                $btn .= '<a href="javascript:void(0)"
                            class="btn btn-primary btn-sm edit"
                            data-id="' . $row->id . '"
                            data-bs-toggle="modal"
                            data-bs-target="#editModal"
                            title="Edit">
                            <i class="fa fa-edit"></i>
                        </a>';

                $btn .= '<button class="btn btn-danger btn-sm delete"
                            data-id="' . $row->id . '"
                            title="Delete">
                            <i class="fa fa-trash"></i>
                        </button>
                        <form id="delete-form-' . $row->id . '"
                              action="' . route('leadership.destroy', $row->id) . '"
                              method="POST" style="display:none;">
                            ' . csrf_field() . method_field('DELETE') . '
                        </form>';

                $btn .= '</div>';
                return $btn;
            })
            ->rawColumns(['l_img', 'l_ldn', 'l_fc', 'action'])
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