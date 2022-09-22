@extends('layouts.main')
@section('title', 'Crea Nuovo Comic')

@section('main-content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="container-card">
            <!-- BUTTON CURRENT SERIES -->


            <h1 class='my-4'> Aggiungi un nuovo Comic </h1>
            <div class="row">
                <div class="col-4 p-2">
                    <input type="text" class="form-control" placeholder="Title" name="title">
                </div>
                <div class="col-4 p-2">
                    <input type="text" class="form-control" placeholder="Type" name="type">
                </div>
                <div class="col-4 p-2">
                    <input type="text" class="form-control" placeholder="Thumb" name="thumb">
                </div>
                <div class="col-4 p-2">
                    <input type="text" class="form-control" placeholder="Price" name="price">
                </div>
                <div class="col-4 p-2">
                    <input type="text" class="form-control" placeholder="Series" name="series">
                </div>
                <div class="col-4 p-2 ">
                    <input type="text" class="form-control" placeholder="Sale Date" name="sale_date">
                </div>
                <div class="col-12 p-2">
                    <textarea rows='5' class="form-control" placeholder="Description" name="description"></textarea>
                </div>

                <div class="d-flex justify-content-between align-itmes-center">
                    <div class="py-4 mt-3"> <a class="btn btn-primary" href="{{ url('/comics') }}">Torna ai comics </a>
                    </div>

                    <div class="py-4 mt-3">
                        <button type="submit" class="btn btn-success">Salva</button>


                        <button type="reset" class="btn btn-secondary" value="reset">Cancella</button>
                    </div>
                </div>
            </div>

        </div>

        </div>

    </form>
@endsection
