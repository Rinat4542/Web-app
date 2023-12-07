
@extends('main')
@section('main')
<h3>Квартиры</h3>
<a href="{{ route('avg.apartments')}}" class="btn btn-primary mb-2" style="width: 20rem;">Посмотреть среднюю цену по квартирам</a>
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($apartments as $apartment)
      <div class="col">
        <div class="card h-100">
          <img src="{{$apartment->image ?? NULL}}" width="220" style="text-align: center"  alt="...">
          <div class="card-body">
            <h5 class="card-title">Название квартиры: "{{$apartment->name ?? NULL}}"</h5>
            <a href="{{ route('apartment', ['apartment'=>$apartment->id]) }}" class="btn btn-primary mb-2" style="width: 20rem;">Посмотреть</a>
            <form action="{{route('apartment.delete', ['apartment'=>$apartment->id])}}" method="POST">
              @csrf
              <button type="submit" class="btn btn-danger">Удалить квартиру</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
</div>
{{ $apartments->links('pagination::bootstrap-5') }}


@endsection 
