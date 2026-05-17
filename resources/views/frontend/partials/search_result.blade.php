@forelse($products as $product)
    <a href="{{ url('product/'.$product->product_slug) }}" class="list-group-item list-group-item-action">
        <div class="d-flex align-items-center">
            <img src="{{ asset($product->thumbnail) }}" width="50" height="50" class="me-2" />
            <div>
                <strong>{{ $product->product_name }}</strong><br>
                <small>{{ $product->price }}৳</small>
            </div>
        </div>
    </a>
@empty
    <div class="list-group-item">No products found</div>
@endforelse
