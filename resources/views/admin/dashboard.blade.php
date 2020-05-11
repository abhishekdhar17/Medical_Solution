@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    	<div>WELCOME </div>
                    <h1>
                    	<strong>{{Auth::user() -> name}}</strong>
                    </h1>
                    
                    <h3>
                    	<div>You are logged in as Admin... </div>
                    </h3>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection