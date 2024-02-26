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
        <div class="col-md-8 p-5 rounded-1">
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
            <h1 class="text-center text-bold"> User</h1>
                <table class="table table-striped shadow">
                    <thead class="custom-table">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Email</th>
                            <th scope="col" class="text-center">Action</th>
                          </tr>
                        </thead>
    
                      <!--  read data from database  --> 
    
                        <tbody class="custom-tbody">
                          @foreach ($users as $user )
                          <tr>
                            <th scope="row">{{ $loop->index+1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>@if ($user->role==0 ) Admin @elseif ($user->role==1) Agent @else User @endif</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <!-- font awesome & bootstrip icon -->
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-outline-warning me-1">
                                      <i class="fas fa-edit"></i>
                                    </a>
                                    
                                    <form method="POST" action="{{ route('user.destroy',$user->id) }}" class="d-inline-block ">
                                        @method('delete')
                                        @csrf
                                       <button href="" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">
                                         <i class="fas fa-trash"></i>
                                       </button>
                                    </form>
                                </div>
                            </td>
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
