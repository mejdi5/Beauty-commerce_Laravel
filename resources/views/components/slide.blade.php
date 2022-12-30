<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="row">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner ">
                        @foreach($latestProducts as $product)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <div class="slider-image text-center">
                                    <img src="{{$product['image']}}" class="d-inline-block border text-center rounded" alt="">
                                </div>
                                <div class='slide-info'>
                                    <h1 class='slide-title'>{{$product['title']}}</h1>
                                    <p class='slide-description'>{{$product['description']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:black;border-radius:50%"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"  style="background-color:black;border-radius:50%"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

