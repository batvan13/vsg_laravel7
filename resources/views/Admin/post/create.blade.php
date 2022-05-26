@extends('Admin.layouts.master')

@section('content')

    <div class="container-fluid">

    <div class="row mb-3">
        <div class="col">
            <div class="card shadow">
                <div class="card-header py-3"></div>
                <div class="card-body">
                    <form method="POST" action="{{route('posts.store')}}">
                        @csrf
                        <div class="mb-3"><label class="form-label" for="post"><strong>Shared us</strong><br></label>
                            <textarea class="form-control" name="post"  id="editor"
                                      class="@error('post') is-invalid @enderror">
                                {{ old('post') }}
                    </textarea></div>
                        @error('post')
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