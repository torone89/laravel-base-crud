@section('title', 'Comic')

@extends('layouts.main')

@section('main-content')



    <section id="comic-page">

        {{-- BARRA SFONDO BLU --}}
        <div class="blue-bg"></div>


        {{-- thumb --}}
        <div class="thumb">
            <div class="medium-container">
                {{-- img --}}
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">

                {{-- label --}}
                <div id="comic-book" class="label">comic book</div>
                <div id="view-gallery" class="label">view galley</div>
            </div>
        </div>
        {{-- title and description --}}

        <div class="medium-container">





            <div class="row">
                <div class="col-8 m-0 p-0">
                    {{-- current series title --}}
                    <h1 class="ml-0">{{ $comic['title'] }}</h1>
                    <div class="price-and-info">
                        {{-- price --}}
                        <span class="price ">
                            <span>U.S. Price: </span> {{ $comic['price'] }}
                        </span>
                        <span id="available">
                            available
                        </span>
                        <span id="check">
                            Check Availability

                        </span>

                    </div>


                    {{-- description --}}
                    <div class="description mr-1">
                        <p>
                            {{ $comic['description'] }}
                        </p>
                    </div>
                </div>

                {{-- advertisement --}}
                <div class="col-4 pb-5 d-flex flex-column flex-end">
                    <div class="advert">
                        advertisement
                    </div>

                    <img class="img-fluid pl-5" src="{{ asset('../images/adv.jpg') }}" alt="apply now">
                </div>
            </div>
        </div>



        <section id="bg-gray">

            <div class="container">
                <div class="col-5">
                    <div class="row border-bottom">
                        <h3 class="my-3">Specs</h3>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-5  m-0">
                            <nav class="text-bottom"> Series:</nav>
                        </div>
                        <div class="col-7 d-flex align-items-center">
                            <nav class="text-bottom-blue text-uppercase ">{{ $comic['series'] }}</nav>
                        </div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-5  m-0">
                            <nav class="text-bottom"> U.S. Price:</nav>
                        </div>
                        <div class="col-7">
                            {{ $comic['price'] }}
                        </div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-5  m-0">
                            <nav class="text-bottom"> Sale Date:</nav>
                        </div>
                        <div class="col-7">
                            {{ $comic['sale_date'] }}

                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid border-top mt-5">
                <div class="container">
                    <section id='shop-comic'>
                        <ul class="row text-secondary fw-bold m-0 p-0">
                            <li class="col-3 p-3 d-flex justify-content-between border text-uppercase">
                                <span>digital comics</span>

                                {{-- <img src="{{ asset('../images/cta-icons.png') }}" alt=""> --}}

                            </li>
                            <li class="col-3 p-3 d-flex justify-content-between border text-uppercase">
                                <span>shop dc</span>

                                {{-- <img src="{{ asset('../images/cta-icons.png') }}" alt=""> --}}

                            </li>
                            <li class="col-3 p-3 d-flex justify-content-between border text-uppercase">
                                <span>comic shop locator</span>

                                {{-- <img src="{{ asset('../images/cta-icons.png') }}" alt=""> --}}

                            </li>
                            <li class="col-3 p-3 d-flex justify-content-between border text-uppercase">
                                <span>subscription</span>

                                {{-- <img src="{{ asset('../images/cta-icons.png') }}" alt=""> --}}

                            </li>
                        </ul>
                    </section>
                </div>
            </div>

        </section>

    </section>
@endsection
