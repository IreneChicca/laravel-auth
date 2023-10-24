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
                <div class="d-flex">
                    <a href="{{ route('admin.projects.show', $project) }}" class=""><i class="fa-regular fa-eye"></i></a>

                    
                    <a href="{{ route('admin.projects.edit', $project) }}" class="mx-2"><i class="fa-solid fa-pencil"></i></a>
                   
                    {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$project->id}}" id="deleteModal">
                      <i class="fa-regular fa-trash-can"></i>
                    </a>

                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina progetto</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Sei sicuro di voler eliminare il progetto "{{$project->title}}" ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    
                   <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
                  @method('DELETE')
                  @csrf
                    <button id="del-btn"><i class="fa-regular fa-trash-can"></i></button>
                  </form>
                </div>
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