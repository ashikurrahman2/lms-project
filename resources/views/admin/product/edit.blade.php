@extends('layouts.admin')
@section('title', 'Product Edit')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Update Product</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="ph-duotone ph-house"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Home</a></li>
                            <li class="breadcrumb-item" aria-current="page">Update Product</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ form-element ] start -->
        <form action="{{ route('product.update', $product->id) }}" method="post" id="add-form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h5 class="text-light">Update Product</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Product Name <sup class="text-size-20 top-1">*</sup></label>
                                        <div class="input-group">
                                            <input id="product_name" type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Product Code <sup class="text-size-20 top-1">*</sup></label>
                                        <div class="input-group">
                                            <input id="product_code" type="text" name="product_code" class="form-control" value="{{ $product->product_code }}" required placeholder="Product Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Category/Subcategory <sup class="text-size-20 top-1">*</sup></label>
                                        <div class="input-group">
                                            <select class="form-control" name="subcategory_id" id="subcategory_id" required>
                                                <option disabled="" selected="">==choose category==</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" style="color: blue" disabled="">{{ $category->category_name }}</option>
                                                    @foreach ($subcategories as $subcategory)
                                                        @if ($subcategory->category_id == $category->id)
                                                            <option value="{{ $subcategory->id }}" {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>---- {{ $subcategory->subcategory_name }}</option>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Child Category <sup class="text-size-20 top-1">*</sup></label>
                                        <div class="input-group">
                                            <select name="childcategory_id" id="childcategory_id" class="form-control">
                                                <!-- Options will be dynamically loaded -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Brand <sup class="text-size-20 top-1">*</sup></label>
                                        <div class="input-group">
                                            <select name="brand_id" class="form-control">
                                                @foreach ($brands as $brand)
                                                    <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->brand_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Pickup Point</label>
                                        <div class="input-group">
                                            <select name="pickup_point_id" class="form-control">
                                                @foreach ($pickuppoints as $pickuppoint)
                                                    <option value="{{ $pickuppoint->id }}" {{ $product->pickup_point_id == $pickuppoint->id ? 'selected' : '' }}>{{ $pickuppoint->pickup_point_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Unit <sup class="text-size-20 top-1">*</sup></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="unit" value="{{ $product->unit }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tags</label>
                                        <input type="text" name="tags" class="form-control" value="{{ $product->tags }}" data-role="tagsinput">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Purchase Price</label>
                                        <div class="input-group">
                                            <input id="purchase_price" type="text" name="purchase_price" value="{{ $product->purchase_price }}" class="form-control" placeholder="Purchase Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Selling Price <sup class="text-size-20 top-1">*</sup></label>
                                        <div class="input-group">
                                            <input id="selling_price" type="text" name="selling_price" value="{{ $product->selling_price }}" class="form-control" required placeholder="Selling Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Discount Price</label>
                                        <div class="input-group">
                                            <input id="discount_price" type="text" name="discount_price" value="{{ $product->discount_price }}" class="form-control" placeholder="Discount Price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Warehouse <sup class="text-size-20 top-1">*</sup></label>
                                        <div class="input-group">
                                            <select name="warehouse" class="form-control">
                                                @foreach ($warehouses as $warehouse)
                                                    <option value="{{ $warehouse->id }}" {{ $product->warehouse_id == $warehouse->id ? 'selected' : '' }}>{{ $warehouse->warehouse_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Stock</label>
                                        <div class="input-group">
                                            <input id="stock_quantity" type="text" name="stock_quantity" value="{{ $product->stock_quantity }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Color</label>
                                            <input id="color" type="text" name="color" value="{{ $product->color }}" class="form-control" data-role="tagsinput">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Size</label>
                                            <input id="size" type="text" name="size" value="{{ $product->size }}" class="form-control" data-role="tagsinput">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Page Details</label>
                                        <textarea class="form-control textarea" name="description" id="summernote" rows="4">{{ $product->description }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Video Embed Code</label>
                                        <textarea class="form-control textarea" name="video" rows="2">{{ $product->video }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="thumbnail" class="col-form-label pt-0">Main Thumbnail <sup class="text-size-20 text-danger">*</sup></label>
                                <input type="file" class="dropify" data-height="200" name="thumbnail" />
                                @if ($product->thumbnail)
                                    <img src="{{ asset($product->thumbnail) }}" alt="Thumbnail" class="mt-2" width="200">
                                @endif
                            </div>
                            <div class="form-group">
                                <table class="table table-bordered" id="dynamicTable">
                                    <small class="card-title">More Images (Click Add For More Image)</small>
                                    @if ($product->images)
                                        @foreach (json_decode($product->images, true) as $image)
                                            <tr>
                                                <td><img src="{{ asset($image) }}" alt="Image" width="100"></td>
                                                <td><button type="button" class="btn btn-danger remove-image">Remove</button></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    <tr>
                                        <td><input type="file" accept="image/*" name="images[]" class="form-control name_list"></td>
                                        <td><button type="button" name="add" id="add" class="btn btn-primary">Add</button></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="card p-4">
                                <h6>Featured Product</h6>
                                <input type="checkbox" name="featured" id="featured" value="1" data-toggle="switchbutton" {{ $product->featured ? 'checked' : '' }} data-onstyle="primary">
                            </div>
                            <div class="card p-4">
                                <h6>Today Deal</h6>
                                <input type="checkbox" name="today_deal" id="today_deal" value="1" data-toggle="switchbutton" {{ $product->today_deal ? 'checked' : '' }} data-onstyle="primary">
                            </div>
                            <div class="card p-4">
                                <h6>Slider Product</h6>
                                <input type="checkbox" name="product_slider" id="product_slider" value="1" data-toggle="switchbutton" {{ $product->product_slider ? 'checked' : '' }} data-onstyle="primary">
                            </div>
                            <div class="card p-4">
                                <h6>Status</h6>
                                <input type="checkbox" name="status" id="status" value="1" data-toggle="switchbutton" {{ $product->status ? 'checked' : '' }} data-onstyle="primary">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </form>
        <!-- [ form-element ] end -->
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#subcategory_id").change(function() {
            var id = $(this).val();
            $.ajax({
                url: "{{ url('/get-child-category/') }}/" + id,
                type: 'GET',
                success: function(data) {
                    $('select[name="childcategory_id"]').empty();
                    $.each(data, function(key, data) {
                        $('select[name="childcategory_id"]').append('<option value="'+ data.id +'">'+ data.childcategory_name +'</option>');
                    });
                }
            });
        });

        // Dynamically add more images
        var i = 0;
        $('#add').click(function() {
            i++;
            $('#dynamicTable').append('<tr id="row'+i+'"><td><input type="file" accept="image/*" name="images[]" class="form-control name_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Remove</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });

        $(document).on('click', '.remove-image', function() {
            $(this).closest('tr').remove();
        });
    });
</script>
@endsection