@extends('master.clientmasterpage')
@section('main')
    <main>
    <style>

         .au-input, .au-input--full {
            width: 100%;
            line-height: 43px;
            border: 1px solid #e5e5e5;
            font-size: 14px;
            color: #666;
            padding: 0 17px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
        .form-control {
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
        }
        .rounded-circle{
            border-radius: 0 !important;
        }
</style>
        <div class="text-center mt-4">'

            <h1 class="h2">Welcome to recover password</h1>
            <p class="lead">
                Fully declare information to recover password
            </p>

        </div>

        <div class="card">
            <div class="card-body">
                <div class="m-sm-4">
                    <div class="text-center">
                        <img src="{{asset('/storage/images/logo/'.'Forgot password.gif')}}" alt="" height="400" width="400" class="img-fluid rounded-circle">
                    </div>
                    @include('partial.error')
                    <form
                        action="{{route('Cus.resetpas')}}"
                        method="post">
                        @csrf
                        <div class="form-group">
                            <label label for="cusname" class="form-label" >Full Name </label>
                            <input class="au-input au-input--full" type="text" class="form-control form-control-lg"
                                   placeholder="Please enter your name" id = "cusname" name="cusname" value="{{old('cusname')}}">
                        </div>
                        <div class="form-group">
                            <label label for="contact" class="form-label" >Contact </label>
                            <input class="au-input au-input--full" type="number" id="contact" class="form-control form-control-lg" name="contact" placeholder="Please enter your phone number" value="{{old('contact')}}"
                            >
                        </div>
                        <div class="form-group">
                            <label label for="email" class="form-label" >Email </label>
                            <input class="au-input au-input--full" type="text" id="email" class="form-control form-control-lg" name="email" placeholder="Please enter your email address" value="{{old('email')}}"
                            >
                        </div class="form-group">
                            <label label for="newpassword" class="form-label" >New Password </label>
                            <input class="au-input au-input--full" type="password" id="newpassword" class="form-control form-control-lg" name="newpassword" placeholder="Please enter your home password"
                            >
                        </div>
                        <div class="form-group">
                            <label label for="confirmpassword" class="form-label" >Confirm Password  </label>
                            <input class="au-input au-input--full" type="text" id="confirmpassword" class="form-control form-control-lg" name="confirmpassword" placeholder="Please enter your onfirm password" value="{{old('newpass') ?? null}}"
                            >
                        </div>
                        <div class="text-center mt-3 ">
                            <button class="btn btn-block btn-secondary m-b-20"  type="submit">Fomat password</button>
                            <button class="btn btn-block btn-secondary m-b-20"  type="reset">Reset</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </main>
@endsection
@section('script')
@endsection
