@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <h1 text-bold>Priority</h1>
                        <form method="POST" action="{{ route('priority.update',$priority->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Name</label>
                                <input type="name" name="name" class="form-control @error('name')is-invalid @enderror" value="{{ old('name',$priority->name) }}">
                                @error('name')
                                    <div class="text-danget">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <a href="{{ route('priority.index') }}" class="btn btn-outline-dark">Back</a>
                                <button class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection