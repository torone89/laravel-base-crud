@extends('layouts.main')

@section('main-content')
@endsection


@section('shop')
    <section class="shop">
        <div class="container">
            <ul>
                <li>
                    <a href="">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="logo">
                    </a>
                    <span class="text-white">DIGITAL COMICS</span>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    </a>
                    <span class="text-white">DC MERCHANDISE</span>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    </a>
                    <span class="text-white">SUBSCRIPTION</span>
                </li>
                <li>
                    <a href="">
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    </a>
                    <span class="text-white">COMIC SHOP</span>
                <li>
                <li>
                    <a href="">
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                    </a>
                    <span class="text-white">DC POWER VISA</span>
                </li>

            </ul>
        @endsection

</section>
