<div>
    <div class="row">
        @forelse ($products as $productItem )
        <div class="col-md-3">
            <div class="product-card">
                <div class="product-card-img">
                    @if( $productItem->quantity > 0 )
                    <label class="stock bg-success">In Stock</label>
                    @else
                    <label class="stock bg-danger">Out of Stock</label>
                    @endif

                    @if($productItem->productImages->count()>0)
                    <a href="">
                    </a>
                    <img src="{{ asset($productItem->productImages[0]->image ) }}" alt="{{ $productItem->name }}">
                    @endif

                </div>
                <div class="product-card-body">
                    <p class="product-brand">{{ $productItem->brand }}</p>
                    <h5 class="product-name">
                       <a href="">
                           {{ $productItem->name }}
                       </a>
                    </h5>
                    <div>
                        <span class="selling-price">{{ $productItem->selling_price }}</span><h6>BDT</h6>
                        <span class="original-price">{{$productItem->original_price }}</span><h6>BDT</h6>
                    </div>

                </div>
            </div>
        </div>
        @empty
        <div class="col-md-12">
            <div class="p-2">
                <h4>No Products Available {{ $category->name }}</h4>
            </div>
        </div>
        @endforelse
    </div>
</div>
