{{-- @extends('layouts.app') --}}
@extends('dashboard.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" >
                <div class="card-body shadow bg-light">
                    <div class="mb-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Priority</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Categories</th>
                                </tr>
                            </thead>
                            <!--  read data from database  -->
                            <tbody class="custom-tbody">
                                <tr>
                                    <th scope="row">{{ $ticket->id }}</th>
                                    <td>{{ $ticket->title }}</td>
                                    <td>{{ $ticket->description }}</td>
                                    <td>
                                        @foreach (explode(',', $ticket->image) as $imagePath)
                                            @php
                                                $fileName = basename($imagePath);
                                            @endphp
                                            {{-- <img src="{{ asset('storage/' . trim($imagePath)) }}" alt="Image"> --}}
                                            <img style="width:50px; height:50px"
                                                src="{{ asset('storage/gallery/' . trim($fileName)) }}" alt="Image">
                                        @endforeach
                                    </td>
                                    <td>{{ $ticket->priority->name }}</td>
                                    <td>
                                        @foreach ($ticket->labels as $label)
                                        {{ $label->name}}
                                        @endforeach
                                      </td>
                                      <td>
                                        @foreach ($ticket->categories as $category)
                                        {{ $category->name}}
                                        @endforeach
                                      </td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <div class="mb-1 mt-3">
                            <a href="{{ route('ticket.index') }}" class="btn btn-outline-dark">Back</a>
                        </div> --}}
                    </div>
                </div>
            <div class="mb-3">
            <h4 class="mt-5">Comments</h4>
            <ul class="list-group">
                <!-- Display existing comments -->
                @foreach ($ticket->comments as $comment)
                    <li class="list-group-item text-between d-flex justify-content-between">
                        <span>
                            {{ $comment->text}}<br>
                            <span class=" text-warning" style="font-size: 15px">
                            Comment by
                           {{-- {{ Auth::user()->name }} --}}
                           {{ $comment->user->name }}
                           @if ($comment->user->role==0 ) <span class=" text-danger ">(Admin)</span> @elseif ($comment->user->role==1) <span class=" text-danger ">(Agent)</span> @else <span class=" text-danger ">(User)</span> @endif
                           {{-- ({{ Auth::user()->role }}) --}}
                            </span>
                        </span>
                        @if ((Auth::user()->role==0 ||Auth::user()->role==1 || Auth::user()->id==$comment->user->id))
                        <span>
                            <a href="{{ route('comment.edit',$comment->id) }}" class="btn me-1">
                                <i class="fas fa-edit text-warning"></i>
                            </a>
                           <form method="POST" action="{{ route('comment.destroy',$comment->id) }}" class="d-inline-block">
                            @method('delete')
                            @csrf
                           <button href="" class="btn" onclick="return confirm('Are you sure?')">
                             <i class="fas fa-trash text-danger"></i>
                           </button>
                        </form>
                        </span>
                        @endif
                    </li>


                @endforeach
            </ul>
        </div>
        <!-- Add Comment Form -->
        @if (session('sesComment'))
        <form action="{{ route('comment.update', session('sesComment')) }}" method="POST">
            @csrf
            @method('Put')
            <div class="mb-3">
                <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                <label for="comment" class="form-label">Add Comment</label>
                <textarea class="form-control" name="text" rows="3">{{ session('sesComment.text') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        @else
        <form action="{{ route('comment.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                <label for="comment" class="form-label">Add Comment</label>
                <textarea class="form-control" name="text" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        @endif
        <!-- End of Comment Section -->
        <div class="mb-1 mt-3">
            <a href="{{ route('ticket.index') }}" class="btn btn-outline-dark">Back</a>
        </div>
            </div>
        </div>



    @endsection
