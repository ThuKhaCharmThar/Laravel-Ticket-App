@extends('dashboard.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow">
                    <div class="card-body m-3">
                        <div class="">
                            <h1 class="bg-gradient text-center text-bold">User</h1>
                            @if (session('success'))
                                <div class=" alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <label class="form-label">Name<small class="text-danger">*</small></label>
                                    <input type="text" name="name"
                                        class="form-control @error('name')is-invalid @enderror" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label class="form-label">Email<small class="text-danger">*</small></label>
                                    <input type="email" name="email"
                                        class="form-control @error('email')is-invalid @enderror" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label class="form-label">Password<small class="text-danger">*</small></label>
                                    <input type="text" name="password"
                                        class="form-control @error('name')is-invalid @enderror" value="{{ old('password') }}">
                                    @error('password')
                                        <div class="text-danger">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="mb-3 mt-3">
                                    <label class="form-label">Role<small class="text-danger">*</small></label>
                                    <input type="role" name="role"
                                        class="form-control @error('name')is-invalid @enderror" value="{{ old('role') }}">
                                    @error('role')
                                        <div class="text-danger">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
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
                                            {{-- @if($user->id == old('role')) selected @endif> --}}
                                            User
                                        </option>
                                    </select>
                                    @error('role')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <a href="{{ route('user.index') }}" class="btn btn-outline-dark">Back</a>
                                    <button class="btn btn-outline-primary">Submit</button>
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
