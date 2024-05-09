<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>
    @include('includeA.link')  
</head>
<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="register">   
            <div class="container">
                <div class="register-content">
                    <div class="register-form">
                        <h2 class="form-title">Register</h2>
                        <form action="{{route('register_user')}}" method="POST" class="register-form" id="register-form">
                            @csrf
  
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Full Name" required/>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="student_id"><i class="zmdi zmdi-assignment-account"></i></label>
                                <input type="text" name="student_id" id="student_id" placeholder="Student ID" required/>
                                @if ($errors->has('student_id'))
                                <span class="text-danger">{{ $errors->first('student_id') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required/>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="register" id="register" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="register-image">
                        <figure><img src="{{asset('images/register-image.jpg')}}" ></figure>
                        <a href="#" class="register-image-link">I am already a member</a>
                    </div>
                </div>
            </div>
        </section>
        
        @include('includeA.footer')
    </div>
</body>
</html>
