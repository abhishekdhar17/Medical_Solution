@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome <strong>{{Auth::user() -> name}}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div>Request for Registration has been submitted successfully. </div>
                    <div>You will get your access after approval... </div>
                    <div>.</div>
                    <div>Thank you</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
