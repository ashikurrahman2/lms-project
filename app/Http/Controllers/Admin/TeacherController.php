<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Yajra\DataTables\DataTables;

class TeacherController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $teachers = Teacher::latest()->get();

            return DataTables::of($teachers)
                ->addIndexColumn()
                ->addColumn('t_img', function ($row) {
                    return $row->t_img
                        ? '<img src="' . asset($row->t_img) . '" style="width:60px; height:60px; object-fit:cover; border-radius:5px;">'
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
                                action="' . route('teacher.destroy', $row->id) . '"
                                method="POST" style="display:none;">
                                ' . csrf_field() . method_field('DELETE') . '
                            </form>';

                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['t_img', 'action'])
                ->make(true);
        }

        return view('admin.pages.teacher.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            't_name'   => 'required|string|max:255',
            't_img'    => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',
            't_design' => 'nullable|string|max:255',
        ]);

        $request->merge([
            't_name' => strip_tags($request->t_name),
        ]);

        Teacher::newTeacher($request);

        $this->toastr->success('Teacher created successfully!');
        return redirect()->route('teacher.index');
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.pages.teacher.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            't_name'   => 'required|string|max:255',
            't_img'    => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',
            't_design' => 'nullable|string|max:255',
        ]);

        $request->merge([
            't_name' => strip_tags($request->t_name),
        ]);

        Teacher::updateTeacher($request, $teacher->id);

        $this->toastr->success('Teacher updated successfully!');
        return redirect()->route('teacher.index');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        Teacher::deleteTeacher($teacher);

        $this->toastr->success('Teacher deleted successfully!');
        return redirect()->route('teacher.index');
    }
}