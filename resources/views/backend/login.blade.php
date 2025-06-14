<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login - Xtrusion</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/x.jpeg') }}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/authentication/form-1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css') }}">
    <style>
        @media screen and (max-width:401px) {
            .form-form .form-container {
                padding: 1.3rem;
            }
        }

        body {
            background: url('../backend/images/blur.png');
            background-repeat: no-repeat;
            background-size: cover;

        }

        .form-form .form-form-wrap form .field-wrapper input:focus {
            border: none;
        }

        .form-form .form-form-wrap form .field-wrapper input {
            border-radius: 10.954px;
            background: #FFF;
            box-shadow: 8.03325px 11.68473px 15.33621px 1.46059px rgba(0, 0, 0, 0.13);
            padding: 10px 35px;
        }

        .form-form .form-form-wrap form .field-wrapper svg {
            position: absolute;
            top: 21px;
            left: 5px;
            color: #4361ee;
            fill: rgba(27, 85, 226, 0.239216);
        }

        .form-form .form-form-wrap form .field-wrapper a.forgot-pass-link {

            letter-spacing: 1px;
        }
    </style>

</head>

<body class="form">
    <div class="form-container justify-content-center">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <div class="row text-center">
                            <div class="col col-12">
                                <a href="/">
                                    <img src="{{ asset('frontend/images/logo.jpg') }}" width="50%"
                                        class="rounded" alt="logo">
                                </a>
                            </div>
                            <div class="col col-12 py-3">
                                <h1 class=""><span class="brand-name">Login</span></h1>

                            </div>
                        </div>
                        <!-- <p class="signup-link">New Here? <a href="auth_register.html">Create an account</a></p> -->
                        <form class="text-left" method="POST" action="{{ route('cms.login.submit') }}">
                            @csrf
                            <div class="form">
                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16"
                                        style="fill: #6c86f8">
                                        <path
                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>

                                    <input id="email" name="email" type="email" class="form-control"
                                        placeholder="Username" minlength="8" maxlength="30" required>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="text-danger mt-2" role="alert" font-weight-bolder>{{ $errors->first('email') }}</div>
                                @endif

                                <div id="password-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16"
                                        style="fill: #6c86f8">
                                        <path
                                            d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                    </svg>
                                    <input id="password" name="password" type="password" class="form-control"
                                        placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <div class="text-danger mt-2" role="alert" font-weight-bolder>{{ $errors->first('password') }}
                                        </div>
                                    @endif
                                    @if ($errors->has('credentials'))
                                        <div class="text-danger mt-2" role="alert" font-weight-bolder>
                                            {{ $errors->first('credentials') }}
                                        </div>
                                    @endif
                                    @if (session('status'))
                                        <div class="text-success font-weight-bolder">
                                            <li> {{ session('status') }} </li>
                                        </div>
                                    @endif
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Show Password</p>
                                        <label class="switch s-primary">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper text-center">
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>

                                </div>

                                <!-- <div class="field-wrapper text-center keep-logged-in">
                                    <div class="n-chk new-checkbox checkbox-outline-primary">
                                        <label class="new-control new-checkbox checkbox-outline-primary">
                                            <input type="checkbox" class="new-control-input">
                                            <span class="new-control-indicator"></span>Keep me logged in
                                        </label>
                                    </div>
                                </div> -->

                                <div class="field-wrapper mt-4">
                                    <a href="{{ route('cms.forgotPassword.index') }}" class="forgot-pass-link">Forgot
                                        Password?</a>
                                </div>

                            </div>
                        </form>
                        <div class="terms-conditions footer-wrapper justify-content-center px-0">
                            <div class="footer-section f-section-1">
                                <p>
                                    &copy;
                                    {{ date('Y') }} All Rights Reserved.
                                    <a href="http://acetrot.com" target="_blank">
                                        Acetrot <img src="{{ url('/assets/img/acetrot.png') }}" width="24"
                                            alt="">
                                    </a>

                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="backend/bootstrap/js/popper.min.js"></script>
    <script src="backend/bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/authentication/form-1.js"></script>

</body>

</html>
