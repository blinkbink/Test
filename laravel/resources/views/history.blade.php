@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Order History || <a href="{{ route('home') }}">Back</a></div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('order') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="col-md-5 control-label"></label>
                                <div class="col-md-6">
                                    <input type="text" name="search" placeholder="Search Order" class="form-control">
                                    <input type="hidden" name="id" placeholder="Search Order" value="{{ Auth::user()->id }}" class="form-control">
                                    <input type="submit" style="visibility: hidden" />
                                </div>
                            </div>
                        </form>

                        <table class="table">
                            <tr>Prepaid Balance History
                                <td>Order No.</td>
                                <td>Description</td>
                                <td>Total</td>
                                <td>Information</td>
                            </tr>

                            @foreach($prepaid as $value)
                                <tr>
                                    <td>{{ $value->idorder}}</td>
                                    <td>{{ $value->description}}</td>
                                    <td>{{ $value->total}}</td>
                                    @if($value->information == "pending")
                                        <td><a href="{{ route('cpre')}}?id={{ $value->idorder }}"><button type="submit" class="btn btn-primary">Cancell</button></a> || <a href="{{ route('payment') }}"><button type="submit" class="btn btn-primary">Pay</button></a></td>
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

                        <hr>
                        <table class="table">
                            <tr>Product History
                                <td>Order No.</td>
                                <td>Description</td>
                                <td>Total</td>
                                <td>Information</td>
                            </tr>

                            @foreach($product as $value1)
                                <tr>
                                    <td>{{ $value1->idproduct}}</td>
                                    <td>{{ $value1->description}}</td>
                                    <td>{{ $value1->total}}</td>
                                    @if($value1->information == "pending")
                                        <td><a href="{{ route('cprod')}}?id={{ $value1->idproduct }}"><button type="submit" class="btn btn-primary">Cancell</button></a> || <a href="{{ route('payment2') }}"><button type="submit" class="btn btn-primary">Pay</button></a></td>
                                    @endif
                                    @if($value1->information == "Success")
                                        <td><font color = '#32cd32'>{{ $value1->information}}</font></td>
                                    @endif
                                    @if($value1->information == "Cancelled")
                                        <td><font color = 'red'>{{ $value1->information}}</font></td>
                                    @endif
                                    @if($value1->information == "Failed by Time")
                                        <td><font color = 'red'>{{ $value1->information}}</font></td>
                                    @endif
                                    @if($value1->information != "Failed by Time" && $value1->information != "Cancelled" && $value1->information != "Success" && $value1->information != "pending")
                                        <td><font color = '#32cd32'>{{ $value1->information}}</font></td>
                                    @endif

                                </tr>
                            @endforeach

                        </table>
                        {{$prepaid->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
