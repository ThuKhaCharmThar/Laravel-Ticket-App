@extends('dashboard.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 shadow">
                    <div class="card-body m-3">
                        <div class="">
                            <h1 class="bg-gradient text-center text-bold">Ticket</h1>
                            @if (session('success'))
                                <div class=" alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <label class="form-label">Title<small class="text-danger">*</small></label>
                                    <input type="text" name="title"
                                        class="form-control @error('title')is-invalid @enderror"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <div class="text-danger">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label class="form-label">Description<small class="text-danger">*</small></label>
                                    <textarea name="description" class="form-control @error('description')is-invalid @enderror"
                                        value="{{ old('description') }}"></textarea>
                                    @error('description')
                                        <div class="text-danger">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label class="form-label">Choose Image<small class="text-danger">*</small></label>
                                    <input type="file" class="form-control" name="images[]" accept="image/*" multiple>
                                    @error('images')
                                        <div class="text-danger">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label class="form-label">Priority<small class="text-danger">*</small></label>
                                    <select class="form-control" name="priority_id">
                                        @foreach ($priorities as $priority)
                                            <option value="{{ $priority->id }}"
                                                @if ($priority->id == old('priority_id')) selected @endif>
                                                {{ $priority->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('priority_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="label_id" class="form-label">Labels:</label>
                                    @foreach ($labels as $label)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="label_{{ $label->id }}"
                                                name="label_id[]" value="{{ $label->id }}"
                                                {{ in_array($label->id, (array) old('label_id', [])) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="label_{{ $label->id }}">
                                                {{ $label->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @error('label_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Categories:</label>
                                    @foreach ($categories as $category)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                id="category_{{ $category->id }}" name="category_id[]"
                                                value="{{ $category->id }}"
                                                {{ in_array($category->id, (array) old('category_id', [])) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="category_{{ $category->id }}">
                                                {{ $category->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                    @error('category_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <a href="{{ route('ticket.index') }}" class="btn btn-outline-dark">Back</a>
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
