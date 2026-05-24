<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Yajra\DataTables\DataTables;

class StudentController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

        public function index(Request $request)
        {
            if ($request->ajax()) {
                $students = Student::latest()->get();

                return DataTables::of($students)
                    ->addIndexColumn()
                    ->addColumn('image', function ($row) {
                        return $row->image
                            ? '<img src="' . asset($row->image) . '" style="width:60px; height:60px; object-fit:cover; border-radius:5px;">'
                            : '<span class="badge bg-secondary">No Image</span>';
                    })
                    ->addColumn('facebook', function ($row) {
                        return $row->facebook
                            ? '<a href="' . $row->facebook . '" target="_blank" class="btn btn-sm btn-outline-primary"><i class="fab fa-facebook-f"></i></a>'
                            : '<span class="text-muted">N/A</span>';
                    })
                    ->addColumn('linkedin', function ($row) {
                        return $row->linkedin
                            ? '<a href="' . $row->linkedin . '" target="_blank" class="btn btn-sm btn-outline-primary"><i class="fab fa-linkedin-in"></i></a>'
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
                                    action="' . route('student.destroy', $row->id) . '"
                                    method="POST" style="display:none;">
                                    ' . csrf_field() . method_field('DELETE') . '
                                </form>';

                        $btn .= '</div>';
                        return $btn;
                    })
                    ->rawColumns(['image', 'facebook', 'linkedin', 'action'])
                    ->make(true);
            }

            return view('admin.pages.student.index');
        }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'facebook'  => 'nullable|url',
            'linkedin'   => 'nullable|url',
        ]);

        $request->merge([
            'name' => strip_tags($request->name),
        ]);

        Student::newStudent($request);

        $this->toastr->success('Student created successfully!');
        return redirect()->route('student.index');
    }

    public function edit(Student $student)
    {
        return view('admin.pages.student.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'image'     => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'facebook'  => 'nullable|url',
            'linkedin'   => 'nullable|url',
        ]);

        $request->merge([
            'name' => strip_tags($request->name),
        ]);

        Student::updateStudent($request, $student->id);

        $this->toastr->success('Student updated successfully!');
        return redirect()->route('student.index');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        Student::deleteStudent($student);

        $this->toastr->success('Student deleted successfully!');
        return redirect()->route('student.index');
    }
}