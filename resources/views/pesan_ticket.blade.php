<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket - Order</title>

    <link rel="icon" href="{{ asset('assets/icon/cropped-Site-Icon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/icon/cropped-Site-Icon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/icon/cropped-Site-Icon-180x180.png') }}" />

    <link href="{{asset('assets/css/mdb.min.css')}}" rel="stylesheet">
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
                            <form method="POST" action="ticket/create" class="row g-3 needs-validation">
                                {{ csrf_field() }}
                                <div class="container">
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                            <div class="card-body p-5 text-center">

                                                <h3 class="mb-5">PESAN TIKET KONSER</h3>

                                                <div class="mb-3 row">
                                                    <label for="validationCustom01" class="col-sm-2 col-form-label">Fullname</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-outline mb-4">
                                                            <input type="text" id="validationCustom01" class="form-control form-control-lg" name="sodik1" />
                                                            <label class="form-label" for="validationCustom01">Fullname</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="validationCustom02" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-outline mb-4">
                                                            <input type="email" id="validationCustom02" class="form-control form-control-lg" name="sodik2" />
                                                            <label class="form-label" for="validationCustom02">Email</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="validationCustom03" class="col-sm-2 col-form-label">BirthDay</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-outline mb-4">
                                                            <input type="date" id="validationCustom03" class="form-control form-control-lg" name="sodik3" />
                                                            <label class="form-label" for="validationCustom03">BirthDay</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="validationCustom04" class="col-sm-2 col-form-label">Number Phone</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-outline mb-4">
                                                            <input type="number" id="validationCustom04" class="form-control form-control-lg" name="sodik4" />
                                                            <label class="form-label" for="validationCustom04">Number Phone</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="validationCustom05" class="col-sm-2 col-form-label">Address</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-outline mb-4">
                                                            <textarea id="validationCustom05" class="form-control form-control-lg" name="sodik5"></textarea>
                                                            <label class="form-label" for="validationCustom05">Address</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="validationCustom06" class="col-sm-2 col-form-label">Concert Type</label>
                                                    <div class="col-sm-10">
                                                        <select id="validationCustom06" class="form-select" name="sodik6">
                                                            <option selected disabled>Choose Concert</option>
                                                            <option value="Black Pink">BlackPink</option>
                                                            <option value="NCT Dream">NCT Dream</option>
                                                            <option value="BTS">BTS</option>
                                                            <option value="iKON">iKON</option>
                                                            <option value="ITZY">ITZY</option>
                                                            <option value="EXO-SC">EXO-SC</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label">Ticket Type</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-check" style="display: flex;">
                                                            <input class="form-check-input" type="radio" name="sodik7" id="orderVip1" value="VVIP" />
                                                            <label class="form-check-label" for="orderVip1"> VVIP </label>
                                                        </div>
                                                        <div class="form-check" style="display: flex;">
                                                            <input class="form-check-input" type="radio" name="sodik7" id="orderVip2" value="VIP A" />
                                                            <label class="form-check-label" for="orderVip2"> VIP A </label>
                                                        </div>
                                                        <div class="form-check" style="display: flex;">
                                                            <input class="form-check-input" type="radio" name="sodik7" id="orderVip3" value="VIP B" />
                                                            <label class="form-check-label" for="orderVip3"> VIP B </label>
                                                        </div>
                                                        <div class="form-check" style="display: flex;">
                                                            <input class="form-check-input" type="radio" name="sodik7" id="orderVip4" value="PINK A" />
                                                            <label class="form-check-label" for="orderVip4"> PINK A </label>
                                                        </div>
                                                        <div class="form-check" style="display: flex;">
                                                            <input class="form-check-input" type="radio" name="sodik7" id="orderVip5" value="PINK B" />
                                                            <label class="form-check-label" for="orderVip5"> PINK B </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="validationCustom08" class="col-sm-2 col-form-label">Amount Ticket</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-outline mb-4">
                                                            <input type="number" id="validationCustom08" class="form-control form-control-lg" name="sodik8" />
                                                            <label class="form-label" for="validationCustom08">Amount Ticket</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button class="btn btn-primary btn-lg" type="submit" style=" width: 100%; ">Order</button>
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
