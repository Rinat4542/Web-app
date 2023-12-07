@extends('main')
@section('main')
    <div class="row mt-4">
    <h5>Редактирование параметров дома</h5>

        <form action="{{ route('house.update', ['house'=>$house, 'project'=>$project]) }}" method="post">
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
            <div class="mb-3">
                <label for="deadline" class="form-label">Срок сдачи</label>
                <input type="date" name="deadline" value="{{old('deadline')}}" class="form-control @error('deadline') is-invalid @enderror" id="deadline">
                @error('deadline')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="project_id" class="form-label">ID проекта</label>
                <input name="project_id" value="{{old('project_id')}}" class="form-control @error('project_id') is-invalid @enderror" id="project_id">
                @error('project_id')
                <div id="validationServer03Feedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-warning">Внести изменения</button>
        </form>
@endsection