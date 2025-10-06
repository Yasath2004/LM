@extends('layouts.default')

@section('content')
    <h1>Create Customer</h1> 
    <div class="row">
    
    <div class="mt-4 col-6" >
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif

<div class="card">
  <div class="card-body">
            <form action="/customers/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" >
            </div>
            <div class="mb-3">
                <label for="nic" class="form-label">NIC</label>
                <input type="text" class="form-control" id="nic" name="nic" >
            </div>
                        {{-- <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
</div>

    </div>
    </div>
@endsection