<x-layout>
    <h1 class='category_name'>{{$category->name}}</h1>
    @livewire('product-list', [
        'category' => $category
    ]);
</x-layout>


