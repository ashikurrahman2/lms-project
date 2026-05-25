<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallary;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Yajra\DataTables\DataTables;

class GallaryController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $galleries = Gallary::latest()->get();

            return DataTables::of($galleries)
                ->addIndexColumn()
                ->addColumn('g_img', function ($row) {
                    return $row->g_img
                        ? '<img src="' . asset($row->g_img) . '" style="width:60px; height:60px; object-fit:cover; border-radius:5px;">'
                        : '<span class="badge bg-secondary">No Image</span>';
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
                                  action="' . route('gallary.destroy', $row->id) . '"
                                  method="POST" style="display:none;">
                                ' . csrf_field() . method_field('DELETE') . '
                            </form>';

                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['g_img', 'action'])
                ->make(true);
        }

        return view('admin.pages.gallary.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'g_title' => 'nullable|string|max:255',
            'g_img'   => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        if ($request->filled('g_title')) {
            $request->merge([
                'g_title' => strip_tags($request->g_title),
            ]);
        }

        Gallary::newGallery($request);

        $this->toastr->success('Gallery created successfully!');
         return back();
    }

    public function edit(Gallary $gallary)
    {
        return view('admin.pages.gallary.edit', compact('gallary'));
    }

    public function update(Request $request, Gallary $gallary)
    {
        $request->validate([
            'g_title' => 'nullable|string|max:255',
            'g_img'   => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        if ($request->filled('g_title')) {
            $request->merge([
                'g_title' => strip_tags($request->g_title),
            ]);
        }

        Gallary::updateGallery($request, $gallary->id);

        $this->toastr->success('Gallery updated successfully!');
         return back();
    }

    public function destroy($id)
    {
        $gallery = Gallary::findOrFail($id);
        Gallary::deleteGallery($gallery);

        $this->toastr->success('Gallery deleted successfully!');
        return back();
    }
}