@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Buy Product || <a href="home">Back</a> To Dashboard</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="proreview">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Product</label>
                                <div class="col-md-6">
                                    <textarea name="product" class="form-control" required autofocus></textarea>
                                    @if ($errors->has('product'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Shipping Address</label>
                                <div class="col-md-6">
                                    <textarea name="address" class="form-control" required></textarea>
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Price</label>
                                <div class="col-md-6">
                                    <input type="text" name="price" class="form-control" required>
                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
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
