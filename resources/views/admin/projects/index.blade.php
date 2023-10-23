@extends('layouts.app')

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('content')

<div class="container mt-5">

    <a href="{{ route('admin.projects.create')}}" class="btn btn-dark">Aggiungi Progetto</a>

</div>

<div class="container border rounded my-5">

 <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data</th>
                <th scope="col">Linguaggio</th>
                <th scope="col">Commit</th>
                <th scope="col">Bonus</th>
                <th scope="col">Modifica</th>
              </tr>
            </thead>

    @forelse ($projects as $project)
        
    
       
            <tbody>
              <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->date}}</td>
                <td>{{$project->main_lang}}</td>
                <td>{{$project->commit}}</td>
                <td>{{$project->bonus}}</td>
                <td>

                    <a href="{{ route('admin.projects.show', $project) }}" class="me-2"><i class="fa-regular fa-eye"></i></a>

                    
                    <a href="{{ route('admin.projects.edit', $project) }}" class="me-2"><i class="fa-solid fa-pencil"></i></a>
                    <i class="fa-regular fa-trash-can"></i>
                </td>
              </tr>

    @empty

        <p>Non ci sono progetti al momento..</p>

    @endforelse

             </tbody>
          </table>

    
   </div>
</div>
@endsection