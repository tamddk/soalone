<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket - Register</title>

    <link rel="icon" href="{{ asset('assets/icon/cropped-Site-Icon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/icon/cropped-Site-Icon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/icon/cropped-Site-Icon-180x180.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

</head>

<body>
    <!--

         SODIK PROJECT

* More Information
* Instagram : @tamddk
* Whatsapp : wa.me/62895325657488
-->
    <div class="sodik-document">
        <div class="sodik-content-region sodik-content-region--body">
            <div class="sodik-container-row">
                <div class="sodik-container-row__inner md-flex-col">
                    <div class="sodik-container align-top md-w-full" style="padding: 20px 16px; width: 100%;">
                        <a href="{{url('/')}}" class="sodik-container__inner" style="background-color: #fff;border-radius: 50px;">
                            <div class="sodik-image-element" style="margin: 20px;">
                                <div class="sodik-image align-left-nowrap">
                                    <img src="{{ asset('assets/icon/trasindodata.png') }}" alt="Image" style="align-self: flex-start;height: 74px;padding: 0;">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sodik-container-row">
                <div class="sodik-container-row__inner md-flex-col">
                    <div class="sodik-container-login align-middle md-w-full" style="padding: 16px;">
                        <section>
                            <form method="post" action="{{url('user/register/doregis')}}" class="row g-3 needs-validation" novalidate>
                                {{ csrf_field() }}
                                <div class="container">
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                            <div class="card-body p-5 text-center">

                                                <h3 class="mb-5">Register Anggota</h3>

                                                <div class="mb-3 row">
                                                    <label for="validationCustom01" class="col-sm-2 col-form-label">Fullname</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-outline mb-4">
                                                            <input type="text" id="validationCustom01" class="form-control form-control-lg" name="username" required />
                                                            <label class="form-label" for="validationCustom01">Fullname</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="validationCustom02" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-outline mb-4">
                                                            <input type="email" id="validationCustom02" class="form-control form-control-lg" name="email" required />
                                                            <label class="form-label" for="validationCustom02">Email</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="validationCustom03" class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-outline mb-4">
                                                            <input type="password" id="validationCustom03" class="form-control form-control-lg" name="password" required />
                                                            <label class="form-label" for="validationCustom03">Password</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button class="btn btn-primary btn-lg" type="submit" style=" width: 100%; ">Register</button>
                                                <div style="margin: 10px 0;">Atau</div>
                                                <a href="{{url('user/register')}}" style=" width: 100%;">Login</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/js/mdb.min.js')}}"></script>

</body>

</html>
