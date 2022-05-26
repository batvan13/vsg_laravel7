@extends('Frontend.layouts.master')

@section('content')
    <div class="container" style="margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-8 offset-lg-2">
                <div class="float-end" style="background: #cccccc;margin: 5px;padding: 5px;border-radius: 5px;opacity: 0.90;">
                    <h1 style="text-align: center;">Общи условия</h1>
                    {!! $con->description !!}
                </div>
            </div>
        </div>
    </div>
@endsection