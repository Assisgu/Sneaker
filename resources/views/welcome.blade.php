@extends('layouts.store')

@section('video')
    <video  autoplay loop muted playsinline>
        <source src="../assets/video/dino1.mp4" type="video/mp4">
    </video> 
@endsection

@section('content')
    <section class="content-bg position-relative">
        <span class="dino-ball-purple position-absolute top-0 end-0" data-aos="fade-down-left"></span>

        @foreach ($products as $product)    
            <div class="dino-container">
                <div class="dino-card">
                    <div class="dino-img">
                        <img src="{{ asset($product->image) }}" alt="">
                        <h2>{{ $product->name }}</h2>
                    </div>

                    <div class="content">
                        <div class="size">
                                <h3>Size :</h3>
                                <span>7</span>
                                <span>8</span>
                                <span>9</span>
                                <span>10</span>
                        </div>
                        <div class="color">
                             <h3> R$ :</h3>
                             <h3>{{ $product->price }}</h3>
                        </div>
                         <a href="{{route('show.product', $product->id)}}"> Visualizar</a>
                    </div>
                </div>
            </div>
        @endforeach
        <span class="dino-ball-blue position-absolute bottom-0 start-0" data-aos="fade-up-right"></span>
    </section>
@endsection

@section('marcas')
    <section class=" card-brands">
        <div class="container py-4">
            <div class="row">       

                <div class="col-md-4" data-aos="fade-right">
                    <div class="textbanner">
                        <a class="textbanner-link" href="/search/category/3" title="Jordan" aria-label="Jordan">
                            <div class="textbanner-image">
                                <img class="textbanner-image-background lazyautosizes blur-up-huge lazyloaded" src="//d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-1547996539-1647490172-c4087ea9e40ddd727c42a51cd0caf9ea1647490173-50-0.webp?2067999946" data-srcset="//d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-1547996539-1647490172-c4087ea9e40ddd727c42a51cd0caf9ea1647490173-480-0.webp?2067999946 480w, //d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-1547996539-1647490172-c4087ea9e40ddd727c42a51cd0caf9ea1647490173-640-0.webp?2067999946 640w" data-sizes="auto" data-expand="-10" alt="Jordan" sizes="403px" srcset="//d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-1547996539-1647490172-c4087ea9e40ddd727c42a51cd0caf9ea1647490173-480-0.webp?2067999946 480w, //d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-1547996539-1647490172-c4087ea9e40ddd727c42a51cd0caf9ea1647490173-640-0.webp?2067999946 640w">
                            </div>
    
                            <div class="textbanner-text">
                                <div class="h2">Jordan</div>
                                <div class="textbanner-paragraph">Confira os mais exclusivos Jordans!</div>
                            </div>
                        </a>
                    </div>
                </div>
    
                <div class="col-md-4" data-aos="fade-down">
                    <div class="textbanner">
                        <a class="textbanner-link" href="#" title="Dunk" aria-label="Dunk">
                                <div class="textbanner-image">
                                    <img class="textbanner-image-background lazyautosizes blur-up-huge lazyloaded" src="//d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-112954762-1647490198-baf8718bf7dc11dfd047ea52c81c89dd1647490199-50-0.webp?2067999946" data-srcset="//d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-112954762-1647490198-baf8718bf7dc11dfd047ea52c81c89dd1647490199-480-0.webp?2067999946 480w, //d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-112954762-1647490198-baf8718bf7dc11dfd047ea52c81c89dd1647490199-640-0.webp?2067999946 640w" data-sizes="auto" data-expand="-10" alt="Dunk" sizes="403px" srcset="//d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-112954762-1647490198-baf8718bf7dc11dfd047ea52c81c89dd1647490199-480-0.webp?2067999946 480w, //d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-112954762-1647490198-baf8718bf7dc11dfd047ea52c81c89dd1647490199-640-0.webp?2067999946 640w">
                                </div>
                            <div class="textbanner-text">
                                <div class="h2">Dunk</div>
                                <div class="textbanner-paragraph">Confira os mais exclusivos Jordans!</div>
                            </div>
                        </a>
                    </div>
                </div>
    
                <div class="col-md-4" data-aos="fade-left">
                    <div class="textbanner">
                        <a class="textbanner-link" href="#" title="Yeezy" aria-label="Yeezy">
                            <div class="textbanner-image">
                                <img class="textbanner-image-background lazyautosizes blur-up-huge lazyloaded" src="//d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-910306315-1647490215-4b26eb3a780602b84f0abd4cbeb0fa351647490216-50-0.webp?2067999946" data-srcset="//d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-910306315-1647490215-4b26eb3a780602b84f0abd4cbeb0fa351647490216-480-0.webp?2067999946 480w, //d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-910306315-1647490215-4b26eb3a780602b84f0abd4cbeb0fa351647490216-640-0.webp?2067999946 640w" data-sizes="auto" data-expand="-10" alt="Yeezy" sizes="403px" srcset="//d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-910306315-1647490215-4b26eb3a780602b84f0abd4cbeb0fa351647490216-480-0.webp?2067999946 480w, //d2r9epyceweg5n.cloudfront.net/stores/002/020/340/themes/amazonas/1-img-910306315-1647490215-4b26eb3a780602b84f0abd4cbeb0fa351647490216-640-0.webp?2067999946 640w">
                            </div>
                            <div class="textbanner-text">
                                <div class="h2">Yeezy</div>
                                    <div class="textbanner-paragraph">Confira os mais exclusivos Yeezys!</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection






{{-- @section('content')
    <section class="container">
        <div class="row">
            @foreach ($products as $product)
            <div class="mx-auto col-sm-10 col-md-6 col-lg-3">
                <img src="{{ asset($product->image) }}" class="img-fluid">
                <span class="d-block h6 text-center mt-3">{{ $product->name }}</span>
                <div class="text-center">
                    <span class="text-muted">R$ {{ $product->price }}</span>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('show.product', $product->id)}}" class="btn btn-primary btn-sm">Visualizar</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endsection --}}




