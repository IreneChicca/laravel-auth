@extends('layouts.app')

@section('content')

<div class="container mt-5 text-center">

    <a href="{{ route('admin.projects.index')}}" class="btn btn-dark">Torna alla Lista</a>

        <div class="my-5">

        <h1>Aggiungi un nuovo progetto</h1>
        
        <form action="{{ route('admin.projects.store')}}" method="POST">
            @csrf
        <div class="row justify-content-center my-5">

            <div class="col-6">
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title" class="form-control" >
            </div>

        </div>

        <div class="row justify-content-center my-5">

            <div class="col-4">
                <label for="title">Data</label>
                <input type="text" id="title" name="title" class="form-control" >
               
            </div>
            <div class="col-4">
                <label for="title">Linguaggio</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleziona il linguaggio principale..</option>
                    <option value="1">Html</option>
                    <option value="2">Js</option>
                    <option value="3">Vite</option>
                    <option value="3">Php</option>
                  </select>
               
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-2">
                <label for="title">Numero di commit</label>
                <input type="text" id="title" name="title" class="form-control" >
            </div>
            <div class="col-2">
                <label for="title">Bonus</label>
                <input type="text" id="title" name="title" class="form-control" >
            </div>
        </div>
        </form>
</div>

    

</div>


@endsection