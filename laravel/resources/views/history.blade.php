@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Order History || <a href="{{ route('home') }}">Back</a></div>

                    <div class="panel-body">

                        <table class="table">
                            <tr>
                                <td>Order No.</td>
                                <td>Description</td>
                                <td>Total</td>
                                <td>Information</td>
                            </tr>

                            @foreach($data as $value)
                            <tr>
                                <td>{{ $value->idorder}}</td>
                                <td>{{ $value->description}}</td>
                                <td>{{ $value->total}}</td>
                                @if($value->information == "pending")
                                    <td><a href="{{ route('update_history') }}?idhist={{ $value->total}}">Cancell</a> || <a href="{{ route('payment') }}">Pay</a></td>
                                @endif
                                @if($value->information == "Success")
                                    <td><font color = '#32cd32'>{{ $value->information}}</font></td>
                                @endif
                                @if($value->information == "Cancelled")
                                    <td><font color = 'red'>{{ $value->information}}</font></td>
                                @endif
                                @if($value->information == "Failed by Time")
                                    <td><font color = 'red'>{{ $value->information}}</font></td>
                                @endif
                            </tr>
                            @endforeach

                        </table>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
