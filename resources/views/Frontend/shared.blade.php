@extends('Frontend.layouts.master')

@section('content')
    <section class="team-boxed" style="opacity: 0.70;">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: var(--bs-white);">Какво казват нашите гости</h2>
                <p class="text-center" style="color: #ffffff;">&nbsp; &nbsp;Ние се гордеем с това, че обслужваме нашите гости с най-доброто изживяване.&nbsp;Прочетете какво казват.<br></p>
            </div>
            <div class="row people">
                @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        {!!$post->post!!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection