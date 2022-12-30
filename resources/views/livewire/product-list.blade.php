<div>
<div class='products-filter'>
    <!--filter-->
    <div class='filter'>
        <span class='filterText'>Filter</span>
        <input
        class="form-control filter-input"
        placeholder="Search.."
        wire:model.prevent="search"
        />
    </div>
    <!--sort-->
    <div class='sort'>
        <span class='sortText'>Sorted by</span>
        <select class='select' wire:model.prevent="sort">
            <option disabled>Sort By</option>
            <option value="inStock">Available Products</option>
            <option value="price">Price</option>
            <option value="title">Alphabetical Order</option>
        </select>
    </div>
</div>
<!--listing-->
<div className='products-container row-md-8'>

@foreach ($products->toArray() as $product)
   {{-- @livewire('product-card', [
    'product' => $product,
   ])
 --}}
   <div class='product-wrapper'>
    <a href="/product/{{$product['id']}}" > 
        <img src={{$product['image']}} class='product-image'/>
    </a>
    <div class="product-info">
        <div class='product-title'>
            {{$product['title']}}
        </div>
        <small class={{$product['inStock'] === 1 ? 'in-stock' : 'out-of-stock'}}>
            {{$product['inStock'] === 1 ? "In Stock" : "Out Of Stock"}}
        </small>
        <div class='product-price'>
            {{$product['price']}} TND
        </div>
        @if ($product['inStock'])
        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class='add-to-cart-form'>
            @csrf
            <input type="hidden" value="{{ $product['id'] }}" name="id">
            <input type="hidden" value="{{ $product['title'] }}" name="title">
            <input type="hidden" value="{{ $product['price'] }}" name="price">
            <input type="hidden" value="{{ $product['image'] }}" name="image">
            <input type="hidden" value="{{ $product['inStock'] }}" name="inStock">
            <input type="hidden" value="1" name="quantity" id="quantity">
            <button class="px-4 py-2 bg-blue rounded">Add To Cart</button>
        </form>
        @endif
    </div>
    </div>
@endforeach
</div>
</div>
