@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if(!Auth::user())
                        {{ redirect ('login')}}
                    @else
                    <h5>Welcome {{ Auth::user()->name }}</h5>
                    {{ date("G:i")}}
                    <br>
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
