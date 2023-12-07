@extends('main')
@section('main')
    <div class="row mt-4">
    <h5>Редактирование параметров квартиры: {{$apartment->name}}</h5>

        <form action="{{ route('apartment.update', ['apartment' =>$apartment->id]) }}" method="post">
            @csrf
            <div class="mb-3" >
                <label for="name" class="form-label">Название квартиры</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="name">
                @error('name')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                
            </div>
            <div class="mb-3">
                <label for="square" class="form-label">Площадь</label>
                <input type="text" name="square" value="{{old('square')}}" class="form-control @error('square') is-invalid @enderror" id="square">
                @error('square')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="layout" class="form-label">Кол-во комнат</label>
                <input name="layout" type="text" value="{{old('layout')}}" class="form-control @error('layout') is-invalid @enderror" id="layout">
                @error('layout')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Цена</label>
                <input name="price" type="text" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror" id="price">
                @error('price')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="house_id" class="form-label">ID дома</label>
                <input name="house_id" type="text" value="{{old('house_id')}}" class="form-control @error('house_id') is-invalid @enderror" id="house_id">
                @error('house_id')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-warning">Внести изменения</button>
        </form>
@endsection