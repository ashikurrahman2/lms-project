<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Childcategory;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Yajra\DataTables\DataTables;

class CategorieController extends BaseController
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
        
        // আপনার আগের পারমিশন মিডলওয়্যারগুলো অক্ষুণ্ণ রাখা হয়েছে
        $this->middleware('permission:view category')->only(['index']);
        $this->middleware('permission:create category')->only(['create', 'store']);
        $this->middleware('permission:update category')->only(['edit', 'update']);
        $this->middleware('permission:delete category')->only(['destroy']);
    }

    /**
     * Display a listing of the resource using Yajra DataTables.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $categories = Category::latest()->get();

            return DataTables::of($categories)
                ->addIndexColumn()
                ->addColumn('icon', function ($row) {
                    return $row->icon
                        ? '<i class="' . $row->icon . '"></i> ' . $row->icon
                        : '<span class="text-muted">No Icon</span>';
                })
                ->addColumn('home_page', function ($row) {
                    return $row->home_page == 1
                        ? '<span class="badge bg-success">Yes</span>'
                        : '<span class="badge bg-danger">No</span>';
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
                                action="' . route('category.destroy', $row->id) . '"
                                method="POST" style="display:none;">
                                ' . csrf_field() . method_field('DELETE') . '
                            </form>';

                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['icon', 'home_page', 'action'])
                ->make(true);
        }

        return view('admin.category.category.index');
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
            'category_name' => 'required|string|max:255',
            'icon'          => 'nullable|string|max:255',
            'home_page'     => 'nullable|integer',
            'view_count'    => 'nullable|integer',
        ]);

        $request->merge([
            'category_name' => strip_tags($request->category_name),
        ]);

        // মডেলের 'newCategories' মেথডটি কল করা হয়েছে (উইথ ক্যাপিটাল 'C')
        Category::newCategories($request);

        $this->toastr->success('Category created successfully!');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'icon'          => 'nullable|string|max:255',
            'home_page'     => 'nullable|integer',
            'view_count'    => 'nullable|integer',
        ]);

        $request->merge([
            'category_name' => strip_tags($request->category_name),
        ]);

        Category::updateCategories($request, $category);

        $this->toastr->success('Category updated successfully!');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        Category::deleteCategory($category);

        $this->toastr->success('Category deleted successfully!');
        return redirect()->route('category.index');
    }
}