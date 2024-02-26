{{-- @extends('layouts.app') --}}
@extends('dashboard.index')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
               <div class="card mt-5 shadow">
                <div class="card-body m-3">
                    <div class="">
                        <h1 class="text-bold">User</h1>
                        <form method="POST" action="{{ route('user.update',$user->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" value="{{ old('name',$user->name) }}">
                                @error('name')
                                    <div class="text-danget">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" value="{{ old('email',$user->email) }}">
                                @error('email')
                                    <div class="text-danget">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Password</label>
                                <input type="text" name="password" class="form-control @error('password')is-invalid @enderror" value="{{ old('password',$user->password) }}">
                                @error('password')
                                    <div class="text-danget">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <label  class="form-label">Role<small class="text-danger">*</small></label>
                                <select class="form-control" name="role">
                                    <option value="0">
                                       Admin
                                    </option>
                                    <option value="1">
                                       Agent
                                    </option>
                                    <option value="2">
                                        User
                                    </option>
                                </select>
                                @error('role')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <a href="{{ route('user.index') }}" class="btn btn-outline-dark">Back</a>
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