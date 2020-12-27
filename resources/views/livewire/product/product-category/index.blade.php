<div class="container">


    <div class="row text-center">

        @foreach($productCategory as $cat)
        <div class="col-lg-6 col-md-6 my-3" style="position: relative">
            <a href="{{route('main.products.show', ['slug' => $cat->slug])}}">

                <img src="{{$cat->image}}" class="image-cat"
                     style="background-size: cover !important;height: 20vw; width:70vw;border-radius: 4px" alt="">
                <div class="font-weight-bold"
                     style="font-family:'Poppins', sans-serif;border-radius: 7px;background-color: rgba(52,51,51,0.6);padding: 10px;color: #fffcfc;font-size: 20px;position: absolute; top: 50%;left: 50%;transform: translate(-50%,-50%)">
                    <div class=" text-decoration-underline" style="color: #ffffff">{{$cat->name}}</div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center my-4">
        {{$productCategory->links()}}
    </div>
</div>


@section('style')
    <style>
        @media screen and (max-width: 600px) {
            .image-cat {
                height: 40vw !important;
                width: 90vw !important;
            }
        }
    </style>
@endsection
