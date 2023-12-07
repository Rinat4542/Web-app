@extends('main')
@section('main')
<div class="row mt-4">
    <h5>Название дома: "{{$apartment->name ?? NULL}}"</h5>
    <h5>Площадь: {{$apartment->square ?? NULL}}</h5>
    <h5>Кол-во комнат: {{$apartment->layout ?? NULL}}</h5>
    <h5>Цена: {{$apartment->price ?? NULL}}</h5>
    <h5>ID дома: {{$apartment->house_id ?? NULL}}</h5>
    <a href="{{ route('apartment.edit', ['apartment'=>$apartment->id]) }}" class="btn btn-warning" style="width: 20rem;">Изменить параметры квартиры</a><br>
</div><br>
@endsection