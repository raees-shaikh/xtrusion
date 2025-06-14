<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Forgot-Password</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/x.jpeg') }}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="backend/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
    <style>
        @media screen and (max-width:401px) {
            .custom-reset {
                font-size: 2.2rem;
            }

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
            min-height: 45px;


        }

        .form-form .form-form-wrap form .field-wrapper svg {
            position: absolute;
            top: 20px;
            left: 6px;
            color: #4361ee;
            fill: rgba(27, 85, 226, 0.239216);
        }

        .ltr-space {
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
                                <h1 class=""><span class="brand-name custom-reset">Reset Password</span></h1>

                            </div>
                        </div>
                        <p class="signup-link text-center mb-3">Enter Your Email Address To Receive A Link To Reset Password!
                        </p>
                        <form class="text-left" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form">
                                <div id="email-field" class="field-wrapper input">
                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                    </svg> --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16"
                                        style="fill: #6c86f8">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z">
                                        </path>
                                    </svg>
                                    <span><i class="bi bi-envelope-fill"></i></span>
                                    <input id="email" class="pb-1" name="email" type="email" value=""
                                        placeholder="Email" minlength="8" maxlength="30" required>
                                    @if ($errors->has('email'))
                                        <div class="text-danger mt-2" role="alert" font-weight-bolder>
                                            {{ $errors->first('email') }}</div>
                                    @endif
                                    @if (session('status'))
                                        <div class="text-success font-weight-bolder">
                                            <li> {{ session('status') }} </li>
                                        </div>
                                    @endif
                                </div>
                                <div class="d-sm-flex justify-content-center">
                                    <div class="field-wrapper text-center">
                                        <button type="submit" class="btn btn-primary ltr-space"
                                            value="">Submit</button>
                                    </div>
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
