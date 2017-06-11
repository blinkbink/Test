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
                                    <label for="ordernumber" class="col-md-6 control-label">Status </label>
                                    <div class="col-md-6">
                                    {{$edit -> information}}
                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="ordernumber" class="col-md-6 control-label">Time </label>
                                    <div class="col-md-6">
                                        {{$edit -> updated_at}}
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
