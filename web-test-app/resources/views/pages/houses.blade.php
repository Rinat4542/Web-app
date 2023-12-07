@extends('main')
@section('main')
<div class="row mt-4">
    <h3>Дома</h3>
    @foreach ($project->houses as $house)
        <div div class="card m-2">
            <div class="card-body">
              <h5 class="card-title">Название дома: "{{$house->name ?? NULL}}"</h5>
              <h5 class="card-title">Срок сдачи: "{{$house->deadline ?? NULL}}"</h5>
              <h5 class="card-title">ID проекта: {{$house->project_id ?? NULL}}</h5>
              <a href="{{ route('house', [$project->id, $house->id]) }}" class="btn btn-primary mb-2" style="width: 20rem;">Посмотреть</a>
              <form action="{{route('house.delete', ['house'=>$house->id, 'project'=>$project->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Удалить дом</button>
              </form>
            </div>
          </div>
      @endforeach


</div>
@endsection