@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Prepaid Balance || <a href="{{ route('home') }}">Back</a> To Dashboard</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('prepaid-balance-success') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Mobile Phone Number</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Value</label>

                                <div class="col-md-6">
                                   <select name="value" class="form-control" name="phone" value="{{ old('value') }}" required>
                                       <option value="">Select</option>
                                       <option value="10000">Rp. 10000</option>
                                        <option value="50000">Rp. 50000</option>
                                        <option value="100000">Rp. 100000</option>
                                    </select>
                                    @if ($errors->has('value'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('value') }}</strong>
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
