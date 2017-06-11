@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Order History || <a href="home">Back</a> to Dashboard</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/order">
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
                           <tr>
                               <td>Order Number</td>
                               <td>Description</td>
                               <td>Total</td>
                               <td>Information</td>
                           </tr>

                           @foreach($product as $item)
                               <tr>
                                   <td>{{$item -> id}}</td>
                                   <td>{{$item -> description}}</td>
                                   <td>{{$item -> total}}</td>
                                   @if($item -> information == "Pending")
                                        <td><a class="btn btn-default" href="propay/{{$item -> id}}">Pay</a></td>
                                   @else
                                       <td>{{$item -> information}}</td>
                                   @endif
                               </tr>
                           @endforeach
                           @foreach($prepaid as $item)
                               <tr>
                                   <td>{{$item -> id}}</td>
                                   <td>{{$item -> description}}</td>
                                   <td>{{$item -> total}}</td>
                                   @if($item -> information == "Pending")
                                       <td><a class="btn btn-default" href="prepay/{{$item -> id}}">Pay</a></td>
                                   @else
                                       <td>{{$item -> information}}</td>
                                   @endif
                               </tr>
                           @endforeach
                       </table>

                        {{$product -> links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
