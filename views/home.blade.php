@extends('layouts.app')

@section('content')
<div class="container">
   
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        

        <div class="row">
            <div class="col s12 m6 offset-m3">
              <div class="card white">
                <div class="card-content">
                  <span class="card-title">Dashboard</span>
                  <p>You are logged in!</p>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection
