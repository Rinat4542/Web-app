@extends('main')
@section('main')
<div class="row mt-4">
    <h3>Редактирование проекта: "{{$project->name}}"</h3>
    <form action="{{ route('project.update', ['project' =>$project->id]) }}" method="post">
        @csrf
        <div class="mb-3" >
            <label for="name" class="form-label">Название</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="name">
            @error('name')
            <div id="validationServer03Feedback" class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            
        </div>
        <div class="mb-3" >
            <label for="slug" class="form-label">Slug</label>
            <input type="text" name="slug" value="{{old('slug')}}" class="form-control @error('slug') is-invalid @enderror" id="slug">
            @error('slug')
            <div id="validationServer03Feedback" class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            
        </div>
        <button type="submit" class="btn btn-warning">Внести изменения</button>
    </form>
</div>
@endsection
