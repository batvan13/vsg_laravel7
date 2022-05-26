@extends('Admin.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Objects</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{route('apartments.create')}}"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Add Object</a>
        </div>
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr></tr>
                    </thead>
                    <tbody>
                    @foreach($apartments as $apartment)
                    <tr>
                        <td class="text-dark" style="font-weight: bold;">{{$apartment->apart_name}}</td>
                        <td class="text-center">
                            <a href="{{ route('apartments.edit',$apartment->id)}}" class="btn btn-primary btn-sm" >Edit</a>
                        </td>
                        <td class="text-center">
                            <form action="{{ route('apartments.destroy', $apartment->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm " type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection