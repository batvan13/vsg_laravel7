@extends('Admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Conditions</h3>
        </div>
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr></tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td class="text-dark" style="font-weight: bold;">{!!$con->description!!}</td>
                        <td class="text-center">
                            <a href="{{ route('conditions.edit',$con->id)}}" class="btn btn-primary btn-sm" >Edit</a>
                        </td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection