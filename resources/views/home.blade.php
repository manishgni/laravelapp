@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboards') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="btn">
                                <a class="btn btn-info" href='{{ url("/api")}}'>Generate key</a>
                            </div>

                    {{ __('You are logged ins!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection