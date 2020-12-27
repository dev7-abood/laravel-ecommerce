<nav class="breadcrumb-section theme1 pt-110 pb-110" style="background-image: url({{asset($productCat->image)}})">
    {{--    bg-lighten2--}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title pb-4 text-dark text-capitalize">
                        {{$productCat->name}}
                    </h2>
                </div>
            </div>
            <div class="col-12">
                <ol
                    class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
                >
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{$productCat->title}}
                    </li>
                </ol>
            </div>
        </div>
    </div>
</nav>
