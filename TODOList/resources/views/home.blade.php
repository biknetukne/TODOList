@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">Add new TODO</div>
                    <div class="col-lg-12">
                        <div class="form-group has-success">
                            <label class="form-control-label" for="inputSuccess1">What you need to do?</label>
                            <input type="text" value="" class="form-control is-valid" id="todo"
                                   data-cip-id="inputValid"><br>
                            <button class="btn btn-success btn-block">Add todo`s</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
