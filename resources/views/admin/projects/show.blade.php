@extends('layouts.app')

@section('content')

<div class="container">

    <a href="{{ route('admin.projects.index')}}" class="btn mt-5 btn-outline-dark">Torna alla lista</a>
    
    <div class="text-center my-5 border rounded w-50 m-auto p-4">
    <h1>{{$project->title}}</h1>

    <div class="row my-5">

        <p><strong>ID: </strong>{{$project->id}}</p>
        <p><strong>Data: </strong>{{$project->date}}</p>
        <p><strong>Linguaggio: </strong>{{$project->main_lang}}</p>
        <p><strong>Numero di commit: </strong>{{$project->commit}}</p>
        <p><strong>Bonus: </strong>{{$project->bonus}}</p>
        
    </div>


    </div>
</div>


@endsection