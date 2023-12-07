@extends('main')
@section('main')
<div class="row mt-4">
    <h5>Название проекта: "{{$project->name}}"</h5>
    <h6>Дата создания: {{$project->created_at}}</h6>
    <a href="{{ route('show.houses', ['project' =>$project->id]) }}" class="btn btn-primary mr-2" style="width: 20rem;">Посмотреть дома</a>
    <a href="{{ route('project.edit', ['project' => $project->id]) }}" class="btn btn-warning" style="width: 20rem;">Изменить проект</a><br>
</div><br>



@endsection

