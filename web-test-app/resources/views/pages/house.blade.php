@extends('main')
@section('main')
<div class="row mt-4">
    <h5>Название дома: "{{$house->name}}"</h5>
    <h6>Срок сдачи: {{$house->deadline}}</h6>
    <a href="{{ route('show.apartments', ['project'=>$project, 'house'=>$house]) }}" class="btn btn-primary mr-2" style="width: 20rem;">Посмотреть квартиры</a>
    <a href="{{ route('house.edit', ['project'=>$project, 'house'=>$house]) }}" class="btn btn-warning" style="width: 20rem;">Изменить параметры дома</a><br>
</div><br>
@endsection