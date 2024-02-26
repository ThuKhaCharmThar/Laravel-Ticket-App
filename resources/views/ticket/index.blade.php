@extends('dashboard.index')
@section('content')
<div class="container">
  <style>
    .custom-table th, .custom-tbody td {
      text-align: center;
    }
    
    .custom-table th {
      background-color: #849180; 
      color: #fff;
    } 

    .custom-tbody tbody{
      background-color: #700f0f;
    }

    .custom-tbody tbody tr:nth-child(even) {
      background-color: #f2f2f2; /* Light gray for even rows */
    }

    .custom-tbody tbody tr:hover {
      background-color: #cce5ff; /* Light blue on hover */
    }
    }
  </style>
    <div class="row justify-content-center">
        <div class="col-12 p-5 rounded-1">
            <div class="card-body">
              @if (session('edit'))
                <div class=" alert alert-warning">
                 {{ session('edit') }}
                </div>
              @endif
              @if (session('update'))
                <div class=" alert alert-success">
                 {{ session('update') }}
                </div>
              @endif
              @if (session('delete'))
                <div class=" alert alert-danger">
                 {{ session('delete') }}
                </div>
              @endif
            </div>
            <h1 class="text-center text-bold">Your Ticket</h1>
                <table class="table table-striped shadow bg-light">
                    <thead class="custom-table">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Label</th>
                            <th scope="col">Categories</th>
                            <th scope="col" class="text-center">Action</th>
                          </tr>
                        </thead>
     
                      <!--  read data from database  --> 
                        <tbody class="custom-tbody">
                          @foreach ($tickets as $ticket )
                          <tr>
                            <th scope="row">{{ $loop->index+1 }}</th>
                            <td>{{ $ticket->title }}</td>
                            <td>{{ $ticket->description }}</td>
                            {{-- <td>{{ $ticket->image }}</td> --}}
                            {{-- <td><img style="width:50px; height:50px" src="{{ asset('storage/gallery/'.$ticket->image) }}"></td> --}}
                            <td>
                               @foreach (explode(',', $ticket->image) as $imagePath)
                               @php
                                  $fileName = basename($imagePath)
                               @endphp
                              {{-- <img src="{{ asset('storage/' . trim($imagePath)) }}" alt="Image"> --}}
                              <img style="width:50px; height:50px" src="{{ asset('storage/gallery/' . trim($fileName)) }}" alt="Image">
                          @endforeach
                          </td>
                            <td>{{ $ticket->priority->name}}</td>
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
                           
                            <td>
                              
                           
                                <!-- font awesome & bootstrip icon -->
                                <div class="d-flex justify-content-center">
                                  <a href="{{ route('ticket.show',$ticket->id) }}" class="btn btn-outline-info me-1">
                                    <i class="fas fa-info"></i>
                                </a>
                                  @if((Auth::user()->role==0))
                                    <a href="{{ route('ticket.edit',$ticket->id) }}" class="btn btn-outline-warning me-1">
                                      <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('ticket.destroy',$ticket->id) }}" class="d-inline-block">
                                        @method('delete')
                                        @csrf
                                       <button href="" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">
                                         <i class="fas fa-trash"></i>
                                       </button>
                                    </form>
                                </div>
                            </td>
                            @endif
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
