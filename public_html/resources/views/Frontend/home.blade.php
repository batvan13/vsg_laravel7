@extends('Frontend.layouts.master')

@section('content')
    <div style="background: #cccccc;border-radius: 5px;border-top-left-radius: 5px;margin: 5px;padding: 5px;opacity: 0.80;">
        <h1 style="text-align: center;font-style: italic;">Welcome<br></h1>
        <h2 style="text-align: center;font-style: italic;">Перфектната почивка, като У Дома в уюта на VSG Apartments!<br></h2>
    </div>
    @foreach($apartments as $apart )
    <div class="container" style="margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-8">
                <div class="float-end" style="background: #cccccc;margin: 5px;padding: 5px;border-radius: 5px;">

                    <img class="img-fluid" src="{{asset('/images/').'/'.$apart->latestImage->image}}" style="width: 600px;height: 600px">

                    <h3 class="text-center"><a href="{{url('/apartment/'.$apart->slug)}}" style="text-decoration: none;">виж повече...</a></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div style="background: #cccccc;border-radius: 5px;border-top-left-radius: 5px;margin: 5px;padding: 5px;opacity: 0.80;">
                    <h2 class="text-center">{{$apart->apart_name}}</h2>
                    {!! $apart->desc_short !!}
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container" style="margin-bottom: 30px;">
        <div class="row">
            <div class="col-md-6 offset-md-5">
                {{ $apartments->links() }}
            </div>
        </div>
    </div>

@endsection
