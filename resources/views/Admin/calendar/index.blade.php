@extends('Admin.layouts.master')

@section('content')
    <div class="container-fluid">

        @if(Session::has('message'))
            <div class="alert alert-success">   {{Session::get('message')}}
            </div>
        @endif

        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Reservation Availability Calendar</h3>
        </div>
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr></tr>
                    </thead>
                    <tbody>
                    @foreach($apartments as $apart)
                        <tr>
                            <td class="text-dark" style="font-weight: bold;">{{$apart->apart_name}}</td>
                            <td class="text-center">
                                <a href="{{ route('calendars.edit',$apart->id)}}" class="btn btn-primary btn-sm" >Calendar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection