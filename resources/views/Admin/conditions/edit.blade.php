@extends('Admin.layouts.master')

@section('content')

    <div class="container-fluid">

        @if(Session::has('message'))
            <div class="alert alert-success">   {{Session::get('message')}}
            </div>
        @endif

        <div class="row mb-3">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header py-3"></div>
                    <div class="card-body">
                        <form method="POST" action="{{route('conditions.update',[$con->id])}}">
                            {{method_field('PATCH')}}
                            @csrf
                            <div class="mb-3"><label class="form-label" for="about"><strong>Conditions</strong><br></label>
                                <textarea class="form-control" name="conditions"  id="editor"
                                          class="@error('about') is-invalid @enderror">
                                {{ old('conditions',$con->description) }}
                    </textarea></div>
                            @error('conditions')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Settings</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection