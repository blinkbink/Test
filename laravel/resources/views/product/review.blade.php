@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Prepaid Review || <a href="home">Back</a> to Dashboard</div>

                    <div class="panel-body">

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label"></label>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="ordernumber" class="col-md-6 control-label">Order Number </label>
                                    <div class="col-md-6">
                                        {{$ordernumber}}
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="ordernumber" class="col-md-6 control-label">Phone Number </label>
                                    <div class="col-md-6">
                                        {{$product}}
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="ordernumber" class="col-md-6 control-label">Nominal </label>
                                    <div class="col-md-6">
                                        {{$price}}
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="ordernumber" class="col-md-6 control-label">Total </label>
                                    <div class="col-md-6">
                                        {{$total}}
                                    </div>
                                </div>
                                <br>
                                <a class="btn btn-default" href="payment">Pay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
