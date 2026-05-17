<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Pickup;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\Warehouse;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductController extends BaseController
{
    protected $toastr;
    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
        $this->middleware('permission:view product')->only(['index']);
        $this->middleware('permission:create product')->only(['create','store']);
        $this->middleware('permission:update product')->only(['edit','update']);
        $this->middleware('permission:delete product')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query= Product::query();
            // check for surching
                if ($request->category_id) {
                    $query->where('category_id', $request->category_id);
                }
                if ($request->brand_id) {
                    $query->where('brand_id', $request->brand_id);
                }
                if ($request->status !== null) { // status can be 0 or 1, so explicitly check for null
                    $query->where('status', $request->status);
                }
                if ($request->warehouse) {
                    $query->where('warehouse', $request->warehouse);
                }
            $products = $query->get();
            return DataTables::of($products)
            ->addIndexColumn()
            ->addColumn('thumbnail', function ($row) {
                if ($row->thumbnail) {
                    return '<img src="' . asset($row->thumbnail) . '" alt="Thumbnail" class="img-fluid center-image" style="max-width: 40px; display: block; margin: 0 auto;">';
                } else {
                    return 'No logo uploaded';
                }
            })
            ->editColumn('category_name',function($row){
                return $row->category->category_name;
            })
            ->editColumn('subcategory_name',function($row){
                return $row->subcategory->subcategory_name;
            })
            ->editColumn('brand_name',function($row){
                return $row->brand->brand_name;
            })
            ->editColumn('featured', function($row) {
                if ($row->featured == 1) {
                    return '<a href="javascript:void(0)" data-id="'.$row->id.'" class="deactive_featurd"><i class="fas fa-thumbs-down text-danger"></i> <span class="badge badge-success">active</span></a>';
                } else {
                    return '<a href="" data-id="'.$row->id.'" class="active_featurd"><i class="fas fa-thumbs-up text-success"></i> <span class="badge badge-danger">inactive</span></a>';
                }
            })
            ->editColumn('today_deal',function($row){
                if ($row->today_deal == 1) {
                    return '<a href="javascript:void(0)" data-id="'.$row->id.'" class="deactive_deal"><i class="fas fa-thumbs-down text-danger"></i> <span class="badge badge-success">active</span></a>';
                } else {
                    return '<a href="" data-id="'.$row->id.'" class="active_deal"><i class="fas fa-thumbs-up text-success"></i> <span class="badge badge-danger">inactive</span></a>';
                }
            })
            ->editColumn('status',function($row){
                if ($row->status == 1) {
                    return '<a href="javascript:void(0)" data-id="'.$row->id.'" class="deactive_status"><i class="fas fa-thumbs-down text-danger"></i> <span class="badge badge-success">active</span></a>';
                } else {
                    return '<a href="" data-id="'.$row->id.'" class="active_status"><i class="fas fa-thumbs-up text-success"></i> <span class="badge badge-danger">inactive</span></a>';
                }
            })
           ->addColumn('action', function ($row) {
                    $actionBtn = '';

                    // Edit Permission
                    if (auth('admin')->user()->can('update product')) {
                        $actionBtn .= '<a href="' . route('product.edit', $row->id) . '" class="btn btn-info btn-sm me-1 edit">
                                            <i class="fa fa-edit"></i>
                                        </a>';
                    }

                    // View (optional, if you have permission for show)
                    if (auth('admin')->user()->can('view product')) {
                        $actionBtn .= '<a href="#" class="btn btn-primary btn-sm me-1 show">
                                            <i class="fa fa-eye"></i>
                                        </a>';
                    }

                    // Delete Permission
                    if (auth('admin')->user()->can('delete product')) {
                        $actionBtn .= '<button class="btn btn-danger btn-sm delete" data-id="' . $row->id . '">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <form id="delete-form-' . $row->id . '" action="' . route('product.destroy', $row->id) . '" method="POST" style="display: none;">
                                            ' . csrf_field() . method_field('DELETE') . '
                                        </form>';
                    }

                    return $actionBtn;
                })

            ->rawColumns(['thumbnail','action','category_name','subcategory_name','brand_name','featured','today_deal', 'status'])
            ->make(true);
        }
        $categories=Category::all();
        $brands=Brand::all();
        $warehouses=Warehouse::all();
        return view('admin.product.index', compact('categories','brands','warehouses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $pickuppoints = Pickup::all();
        $warehouses = Warehouse::all();
        return view('admin.product.create', compact('categories', 'brands', 'pickuppoints', 'subcategories', 'warehouses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'product_name' => 'required',
            'product_code' => 'required|string|max:255',
            'subcategory_id' => 'required',
            'brand_id' => 'required',
            'unit' => 'required',
            'selling_price' => 'required',
            'color' => 'required',
            'description' => 'required',
        ]);

        Product::newProduct($request);
        $this->toastr->success('Product Inserted successfully!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $pickuppoints = Pickup::all();
        $warehouses = Warehouse::all();
        return view('admin.product.edit', compact('product','categories', 'brands', 'pickuppoints', 'subcategories', 'warehouses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product);
        return response()->json(['success' => true, 'message' => 'Product deleted successfully!']);
    }
    /**
     * Not Featured
     */
    public function notfeatured($id)
    {
        Product::where('id', $id)->update(['featured' => 0]);
        return response()->json(['message' => 'Product is no longer featured.']);
    }
    /**
     * Active Featured
     */
    public function activefeatured($id)
    {
        Product::where('id', $id)->update(['featured' => 1]);
        return response()->json(['message' => 'Product Featured Activate.']);
    }
    /**
     * Not Featured
     */
    public function notdeal($id)
    {
        Product::where('id', $id)->update(['today_deal' => 0]);
        return response()->json(['message' => 'Product is Not Deal Today.']);
    }
    /**
     * Active Featured
     */
    public function activedeal($id)
    {
        Product::where('id', $id)->update(['today_deal' => 1]);
        return response()->json(['message' => 'Product Deal Activate.']);
    }
    /**
     * Not Featured
     */
    public function notstatus($id)
    {
        Product::where('id', $id)->update(['status' => 0]);
        return response()->json(['message' => 'Product Status is not Active.']);
    }
    /**
     * Active Featured
     */
    public function activestatus($id)
    {
        Product::where('id', $id)->update(['status' => 1]);
        return response()->json(['message' => 'Product Status Activate.']);
    }

}
