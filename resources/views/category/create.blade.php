@extends('dashboard.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow">
                    <div class="card-body m-3">
                        <div class="">
                            <h1 class="bg-gradient text-center text-bold">
                                Priority</h1>
                            @if (session('success'))
                                <div class=" alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form method="POST"
                                action="{{ route('category.store') }}">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <label class="form-label">Name<small class="text-danger">*</small></label>
                                    <input type="name" name="name"
                                        class="form-control @error('name')is-invalid @enderror" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <a href="{{ route('category.index') }}"
                                        class="btn btn-outline-dark">Back</a>
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
