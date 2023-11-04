@extends('layouts.admin-auth')

@section('content')
    <div class="card">
        <div class="card-body">

            <div class="text-center mt-4">
                <div class="mb-3">
                    <a href="index.html" class="auth-logo">
                        <img src="{{asset('backend/images/logo-dark.png')}}" height="30" class="logo-dark mx-auto" alt="">
                        <img src="{{asset('backend/images/logo-light.png')}}" height="30" class="logo-light mx-auto" alt="">
                    </a>
                </div>
            </div>

            <h4 class="text-muted text-center font-size-18"><b>Reset Password</b></h4>

            <div class="p-3">
                <form class="form-horizontal mt-3" action="{{route('password.email')}}" class="user">
                    @csrf
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                    Enter Your <strong>E-mail</strong> and instructions will be sent to you!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="form-group mb-3">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}"  placeholder="Email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group pb-2 text-center row mt-3">
                        <div class="col-12">
                            <button class="btn btn-info w-100 waves-effect waves-light" type="submit" name="submit">Send Email</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="form-group mb-0 row mt-2">
                    <div class="col-sm-7 mt-3">
                        <a href="{{route('admin.login')}}" class="text-muted"><i class="mdi mdi-lock-open"></i> Already have an account !</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cardbody -->
    </div>
@endsection
            
        
        
