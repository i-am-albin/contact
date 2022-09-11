@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Comments</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                            @foreach($data as $value)
                            <tr>
                              <th scope="row">{{ $loop->iteration }}</th>
                              <td>{{ $value->name }}</td>
                              <td>{{ $value->email }}</td>
                              <td>{{ $value->comments }}</td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
