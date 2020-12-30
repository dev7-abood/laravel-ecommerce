<nav class="breadcrumb-section theme1 pt-110 pb-110" style="background-image: url({{asset($productCat->image)}});background-size: cover">
    <div class="container">
        <div class="row p-5" style="background-color: rgba(10,0,0,0.4);border-radius: 5px">
            <div class="col-12 d-flex justify-content-center">

                <div class="text-center mb-4">
                    <h2 class="title text-capitalize w-100 py-2 px-4" style="color: #ecf0f1">
                        {{$productCat->name}}
                    </h2>
                </div>
            </div>

            <div class="col-12">
                <ol
                    class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center"
                >
                    <li class="breadcrumb-item"><a style="color: #ecf0f1 !important;" href="/">Home</a></li>
                    <li class="breadcrumb-item text-white font-weight-bold" aria-current="page">
                        {{$productCat->title}}
                    </li>
                </ol>
            </div>
        </div>
    </div>
</nav>
