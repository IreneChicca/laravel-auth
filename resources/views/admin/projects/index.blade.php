@extends('layouts.app')

@section('content')
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
              </tr>

    @empty

        <p>Non ci sono progetti al momento..</p>

    @endforelse

             </tbody>
          </table>

    
   </div>
</div>
@endsection