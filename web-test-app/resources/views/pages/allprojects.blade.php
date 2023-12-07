@extends('main')
@section('main')

      @foreach ($projects as $project)
        <div div class="card m-2" style="width: 45rem;">
            <div class="card-body">

              <h5 class="card-title">{{$project->name ?? NULL}}</h5>
              <h5 class="card-title">{{$project->slug ?? NULL}}</h5>

              <a href="{{ route('project', ['project' =>$project]) }}" class="btn btn-primary mb-2">Посмотреть</a>
              <form action="{{route('project.delete', ['project'=>$project->id])}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">Удалить проект</button>
              </form>
            </div>
          </div>
      @endforeach


@endsection


