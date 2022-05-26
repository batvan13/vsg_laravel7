@extends('Admin.layouts.master')

@section('content')
    <div class="container-fluid">

        @if(Session::has('message'))
            <div class="alert alert-success">   {{Session::get('message')}}
            </div>
        @endif

        <h3 class="text-dark mb-4">Profile</h3>
        <div class="row mb-3">
            <div class="col-lg-8">
                <div class="row mb-3 d-none">
                    <div class="col">
                        <div class="card textwhite bg-primary text-white shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card textwhite bg-success text-white shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold">Contact Settings</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{route('profile.update',[$profile->id])}}">
                                    {{method_field('PATCH')}}
                                    @csrf
                                    <div class="mb-3"><label class="form-label" for="brand_name"><strong>Brand name</strong><br></label>
                                        <input class="form-control" type="text" id="brand_name"
                                               placeholder="(пример)VSG Apartments"
                                               name="brand_name"
                                               value="{{ old('brand_name',$profile->brand_name) }}"></div>
                                    <div class="mb-3"><label class="form-label" for="email"><strong>Email</strong><br></label>
                                        <input class="form-control" type="text" id="email"
                                               placeholder="example@gmail.com"
                                               name="email"
                                               value="{{ old('email',$profile->email) }}"></div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="phone_1"><strong>Phone 1</strong><br></label>
                                                <input class="form-control" type="text" id="phone_1"
                                                       name="phone_1"
                                                       value="{{ old('phone_1',$profile->phone_1) }}"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="phone_2"><strong>Phone 2</strong><br></label>
                                                <input class="form-control" type="text" id="phone_2"
                                                       name="phone_2"
                                                       value="{{ old('phone_2',$profile->phone_2) }}"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3"><label class="form-label" for="facebook"><strong>Facebook</strong><br></label>
                                        <input class="form-control" type="text" id="facebook"
                                               placeholder="www.facebook_page.com"
                                               name="facebook"
                                               value="{{ old('facebook',$profile->facebook) }}"></div>

                                    <div class="mb-3"><label class="form-label" for="instagram"><strong>Instagram</strong><br></label>
                                        <input class="form-control" type="text" id="instagram"
                                               placeholder="www.instagram_page.com"
                                               name="instagram"
                                               value="{{ old('instagram',$profile->instagram) }}"></div>

                                    <div class="mb-3"><label class="form-label" for="work_time"><strong>work time</strong><br></label>
                                        <input class="form-control" type="text" id="work_time"
                                               placeholder="9:00AM - 17:00PM"
                                               name="work_time"
                                               value="{{ old('work_time',$profile->work_time) }}"></div>

                                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Settings</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection