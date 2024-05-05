@extends('layouts.app')
@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/lms_logo.png') }}"  style="height : 70px;margin-left: -12px;"/>
                    </div>
                    <h2 class="text-center mb-4">User Registration</h2>
                    <form method="POST" action="{{route('admin::registration')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="first_name">First Name</label>
                                    <input id="first_name" type="text" class="form-control " name="first_name" value="" autofocus="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="last_name">Last Name</label>
                                    <input id="last_name" type="text" class="form-control " name="last_name" value="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <input id="email" type="email" class="form-control " name="email" value="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input id="phone" type="text" class="form-control " name="phone" value="" required>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="location">District</label>
                                    <select id="dist_id" class="form-control" name="dist_id" >
                                        <option value="">Select District</option>
                                        @foreach(Districts() as $district)
                                        <option value="{{ $district->id}}">{{ $district->title_en}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="address">Address</label>
                                    <input id="address" type="text" class="form-control " name="address" value="" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="reg_type">Gender</label>
                                    <div class="dropdown bootstrap-select form-control">
                                        <select id="gender" class="form-control" name="gender" >
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <!--<option value="others">Others</option>-->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="reg_type">Registration Type</label>
                                    <div class="dropdown bootstrap-select form-control">
                                        <select id="reg_type" class="form-control" name="reg_type" required>
                                            <option value="">Select Registration Type</option>
                                            <option value="1">Student</option>
                                            <option value="2">Teacher</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="level">Level</label>
                                    <div class="dropdown bootstrap-select form-control">
                                        <select id="level" class="form-control" name="level">
                                            <option value="">Select Level</option>
                                            <option value="1">Primary</option>
                                            <option value="2">Secondary</option>
                                            <!--<option value="3">Graduate</option>-->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="institution">Institution</label>
                                    <input id="institution" type="text" class="form-control " name="institution" value="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="institution_reg_num">Institution Registration Number</label>
                                    <input id="institution_reg_num" type="text" class="form-control " name="institution_reg_no" value="" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="photo">Photo</label>
                                    <input id="photo" type="file" class="form-control-file " name="photo" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="nid">NID/Birth Certificate</label>
                                    <input id="nid" type="text" class="form-control " name="nid" value="" >
                                </div>
                            </div>
                            <!--<div class="col-md-6">-->
                            <!--    <div class="form-group mb-3">-->
                            <!--        <label class="form-label" for="password">Password</label>-->
                            <!--        <input id="password" type="password" class="form-control " name="password" value="" required>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="password">Password</label>
                                    <input id="password" type="password" class="form-control " name="password" value="" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="password">Confirm Password</label>
                                    <input id="password" type="password" class="form-control " name="password" value="" required>
                                </div>
                            </div>
                        </div>
                        <!--<div class="col-md-6">-->
                        <!--        <div class="form-group mb-3">-->
                        <!--            <label class="form-label" for="password">Password</label>-->
                        <!--            <input id="password" type="password" class="form-control " name="password" value="" required>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--<div class="col-md-6">-->
                        <!--    <div class="form-group mb-3">-->
                        <!--        <label class="form-label" for="password">Confirm Password</label>-->
                        <!--        <input id="password" type="password" class="form-control " name="password" value="" required>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
                    </div>
                   
                    <div class="">
                        <div class="copyright text-center mt-3">
                            <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">epatthoboi</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
