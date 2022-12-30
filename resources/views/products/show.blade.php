<x-layout>
    <div class='productWrapper'>
        <div class='productInfo'>
            <img src={{$product['image']}} class='productImage'/>
            <div class='productInfoWrapper'>
                <h1 class='productTitle'>{{$product['title']}}</h1>
                <span class='productPrice'>{{$product['price']}} TND</span>
                <p class='productDescription'>{{$product['description']}}</p>
                @auth
                @if ($product['inStock'])
                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class='display:flex;justify-content:center'>
                    @csrf
                    <input type="hidden" value="{{ $product['id'] }}" name="id">
                    <input type="hidden" value="{{ $product['title'] }}" name="title">
                    <input type="hidden" value="{{ $product['price'] }}" name="price">
                    <input type="hidden" value="{{ $product['image'] }}" name="image">
                    <input type="hidden" value="{{ $product['inStock'] }}" name="inStock">
                    <input type="hidden" value="1" name="quantity">
                    <button class="px-4 py-2 bg-blue rounded">Add To Cart</button>
                </form>
                @endif
                 @endauth
            </div>
        </div>
    </div>
</x-layout>
