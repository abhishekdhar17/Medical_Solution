@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product Registration') }}</div>

                <div class="card-body">
                    
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genegicname" class="col-md-4 col-form-label text-md-right">{{ __('Generic Name') }}</label>

                            <div class="col-md-6">
                                <input id="genericname" type="text" class="form-control{{ $errors->has('genericname') ? ' is-invalid' : '' }}" name="genericname" value="{{ old('genericname') }}" required autofocus>

                                @if ($errors->has('genericname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genericname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity in box') }}</label>

                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" value="{{ old('quantity') }}" required autofocus>

                                @if ($errors->has('quantity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
