@section('title', 'Comic')

@extends('layouts.main')

@section('main-content')



    <section id="comic-page">


        @if (session('deleted'))
            <div class="alert alert-success border  ">
                {{ session('deleted') }}
            </div>
        @endif

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





            <div class="row justify-content-between">
                <div class="col-7 m-0 p-0">
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

                    <img class="img-fluid" src="{{ asset('../images/adv.jpg') }}" alt="apply now">
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

                    <div class="d-flex justify-content-between align-itmes-center">
                        <div class="py-4 mt-3"> <a class="btn btn-primary" href="{{ url('/comics') }}">Torna ai comics </a>
                        </div>

                        <div class="py-4 mt-3 d-flex">

                            {{-- BUTTON EDIT --}}

                            <a class="btn btn-warning mx-2" href="{{ route('comics.edit', $comic->id) }}">Edita</a>


                            {{-- BUTTON DELETE --}}
                            <form class='delete-form' action="{{ route('comics.destroy', $comic->id) }}" method="POST"
                                data-name="{{ $comic->title }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Cancella</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Reccupero tutti i parametri dal FORM
                const deleteForms = document.querySelectorAll('.delete-form');

                deleteForms.forEach(form => {
                    // azione eseguita al click della cancellazione del comic
                    form.addEventListener('submit', (event) => {

                        // Il metodo preventDefault() annulla l'evento se ?? annullabile, il che significa che 
                        // l'azione predefinita che appartiene all'evento non si verificher??.
                        // Ad esempio, pu?? essere utile quando:
                        // Facendo clic su un pulsante "Invia", si impedisce l'invio di un modulo.
                        // Cliccando su un link, si impedisce che il link segua l'URL
                        event.preventDefault();

                        // PRENDO L'attributo {{ $comic->title }}"
                        const comicTitle = form.getAttribute('data-name');

                        //Allert di conferma
                        const hasConfirmed = confirm(`Sei sicuro di volere eliminare il comic ${comicTitle}`)

                        // Se schiaccio si mi elimina il comic
                        if (hasConfirmed) form.submit();
                    });

                });
            </script>




        </section>

    </section>
@endsection

<
