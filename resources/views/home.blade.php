@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create your <b>Secret</b> ans <b>Token</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="app">
                        <div class="mb-3">
                            <passport-clients></passport-clients>
                        </div>
                        <div class="mb-3">
                            <passport-authorized-clients></passport-authorized-clients>
                        </div>
                        
                        <passport-personal-access-tokens></passport-personal-access-tokens>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
