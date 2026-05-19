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
            $students = Student::all();
            return DataTables::of($students)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $src = $row->image && file_exists(public_path($row->image))
                        ? asset($row->image)
                        : asset('frontend/assets/img/default-student.jpg');
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
                                    <form id="delete-form-' . $row->id . '" action="' . route('student.destroy', $row->id) . '" method="POST" style="display: none;">
                                        ' . csrf_field() . '
                                        ' . method_field('DELETE') . '
                                    </form>';

                    return $actionbtn;
                })
                ->rawColumns(['image', 'action'])
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