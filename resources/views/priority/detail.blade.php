@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body shadow">
              <div class="mb-3">
                
            </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                      </tr>
                    </thead>

                  <!--  read data from database  --> 

                    <tbody>
                      <tr>
                        <th scope="row">{{ $priority->id }}</th>
                        <td>{{ $priority->name }}</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="mb-1 mt-3">
                    <a href="{{ route('priority.index') }}" class="btn btn-outline-dark">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection