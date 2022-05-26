@extends('Admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Brand Profile</h3>
        </div>
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr></tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td class="text-dark" style="font-weight: bold;">{!!$profile->brand_name!!}</td>
                        <td class="text-center">
                            <a href="{{ route('profile.edit',$profile->id)}}" class="btn btn-primary btn-sm" >Edit</a>
                        </td>

                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection