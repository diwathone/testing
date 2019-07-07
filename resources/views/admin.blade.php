@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <div class="col-12">
            <h1>Admin Area</h1>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Manager</h5>
                            <h6 class="card-subtitle mb-2 text-muted">10</h6>
                            <p class="card-text">Manager is blah blah</p>
                            <a href="{{ route('manager.index') }}" class="card-link btn btn-success">Create  Manager</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </div>

        </div>  
    </div>
</div>
@endsection