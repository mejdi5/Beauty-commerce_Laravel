<div class='categories-container row-md-2'>
    @foreach ($categories as $category)
    <div class='item-container'>
        <div class='item-wrapper'></div>
        <div class='item-info'>
            <h1 class='item-title'>{{$category['name']}}</h1>
            <a href="/products/{{$category['slug']}}">
              <button class='item-button'>See</button>
            </a>
        </div>
    </div>
    @endforeach
</div>
