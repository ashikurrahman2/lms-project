<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SliderController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
        $this->middleware('permission:view slider')->only(['index']);
        $this->middleware('permission:create slider')->only(['create', 'store']);
        $this->middleware('permission:update slider')->only(['edit', 'update']);
        $this->middleware('permission:delete slider')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     */
   public function index(Request $request)
{
    if ($request->ajax()) {
        $sliders = Slider::latest()->get();

        return DataTables::of($sliders)
            ->addIndexColumn()
            ->addColumn('s_img', function ($row) {
                return $row->s_img
                    ? '<img src="' . asset($row->s_img) . '" style="width:60px; height:60px; object-fit:cover; border-radius:5px;">'
                    : '<span class="badge bg-secondary">No Image</span>';
            })
            ->addColumn('action', function ($row) {
                $btn = '<div class="d-flex align-items-center justify-content-center gap-1">';

                if (auth()->user()->can('update slider')) {
                    $btn .= '<a href="javascript:void(0)"
                                class="btn btn-primary btn-sm edit"
                                data-id="' . $row->id . '"
                                data-bs-toggle="modal"
                                data-bs-target="#editModal"
                                title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>';
                }

                if (auth()->user()->can('delete slider')) {
                    $btn .= '<button class="btn btn-danger btn-sm delete"
                                data-id="' . $row->id . '"
                                title="Delete">
                                <i class="fa fa-trash"></i>
                            </button>
                            <form id="delete-form-' . $row->id . '"
                                  action="' . route('slider.destroy', $row->id) . '"
                                  method="POST" style="display:none;">
                                ' . csrf_field() . method_field('DELETE') . '
                            </form>';
                }

                $btn .= '</div>';
                return $btn;
            })
            ->rawColumns(['s_img', 'action'])
            ->make(true);
    }

    return view('admin.pages.slider.index');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'caption_text' => 'required|string|max:255',
            'heading_text' => 'required|string|max:255',
            's_img'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5000',
        ]);

        $request->merge([
            'caption_text' => strip_tags($request->caption_text),
            'heading_text' => strip_tags($request->heading_text),
        ]);

        Slider::newSlider($request);

        $this->toastr->success('Slider created successfully!');
        return redirect()->route('slider.index');
    }

      public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.pages.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'caption_text' => 'required|string|max:255',
            'heading_text' => 'required|string|max:255',
            's_img'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5000',
        ]);

        $request->merge([
            'caption_text' => strip_tags($request->caption_text),
            'heading_text' => strip_tags($request->heading_text),
        ]);

        Slider::updateSlider($request, $slider->id);

        $this->toastr->success('Slider updated successfully!');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        Slider::deleteSlider($slider);

        $this->toastr->success('Slider deleted successfully!');
        return redirect()->route('slider.index');
    }
}