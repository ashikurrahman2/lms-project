<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Flasher\Toastr\Prime\ToastrInterface;

class CourseController extends Controller
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $courses = Course::latest()->get();
            return DataTables::of($courses)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $src = file_exists(public_path($row->image)) ? asset($row->image) : asset('upload/no-image.png');
                    return '<img src="' . $src . '" style="width:60px; height:60px; object-fit:cover; border-radius:5px;">';
                })
                ->addColumn('price', function ($row) {
                    return '৳' . number_format($row->price, 2);
                })
                ->addColumn('action', function ($row) {
                    return '
                        <div class="d-flex align-items-center justify-content-center gap-1">
                            <a href="javascript:void(0)" class="btn btn-primary btn-sm edit" data-id="' . $row->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form id="delete-form-' . $row->id . '" action="' . route('course.destroy', $row->id) . '" method="POST" style="display:none;">
                                ' . csrf_field() . method_field('DELETE') . '
                            </form>
                        </div>';
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        }
        return view('admin.pages.course.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'           => 'required|string|max:255',
            'price'           => 'required|numeric|min:0',
            'instructor_name' => 'required|string|max:255',
            'duration'        => 'required|string|max:255',
            'image'           => 'required|image|mimes:jpg,jpeg,png,webp|max:2048', // DB তে Not Null তাই Required দিলাম
        ]);

        try {
            Course::newCourse($request);
            $this->toastr->success('Course created successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return back()->withErrors('Error: ' . $e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.pages.course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'           => 'required|string|max:255',
            'price'           => 'required|numeric|min:0',
            'instructor_name' => 'required|string|max:255',
            'duration'        => 'required|string|max:255',
            'image'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        try {
            Course::updateCourse($request, $id);
            $this->toastr->success('Course updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return back()->withErrors('Update Error: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        Course::deleteCourse($course);
        $this->toastr->success('Course deleted successfully!');
        return redirect()->back();
    }
}