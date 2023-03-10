<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>

    <link rel="icon" href="{{ asset('assets/icon/cropped-Site-Icon-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/icon/cropped-Site-Icon-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/icon/cropped-Site-Icon-180x180.png') }}" />

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
                    <div class="sodik-container sodik-container-information align-middle md-w-full" style="padding: 16px;">
                        <div class="sodik-container__inner">
                            <div class="sodik-text-element">
                                <div>
                                    <p style="line-height:1.5">
                                        <span style="font-size:72px">
                                            <span style="font-family:Rubik,Arial,Verdana,sans-serif">
                                                <span style="color:#ffffff">BLACKPINK</span>
                                            </span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="sodik-text-element">
                                <div>
                                    <p style="line-height:1.15"><span style="font-family:Rubik,Arial,Verdana,sans-serif">
                                            <span style="font-size:16px">
                                                <span style="color:#ffffff">Konser</span>
                                            </span>
                                        </span>
                                    </p>

                                    <p style="line-height:1.15">
                                        <span style="font-family:Rubik,Arial,Verdana,sans-serif">
                                            <span style="font-size:32px">
                                                <span style="color:#ffffff">Beli tiket?</span>
                                            </span>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="sodik-button-element sodik-button-element--pill align-left">
                                <a class="sodik-button-element__button aonZo" style="padding: 8px 12px;" href="{{ url('order/ticket') }}" rel="noopener noreferrer">
                                    <div>
                                        <div>Pesan Disini</div>
                                    </div>
                                </a>
                            </div>
                            <div class="sodik-divider" style="padding: 20px 0;">
                                <div class="sodik-divider__inner" style="border-top: 1px solid #DEE0E8;"></div>
                            </div>
                            <div class="sodik-social sodik-social--md sodik-social--none align-left">
                                <a href="https://www.facebook.com/00000TAS11111" class="sodik-social__link" rel="noopener noreferrer" aria-label="Facebook">
                                    <svg role="img" viewBox="0 0 48 48" class="sodik-social__icon sodik-social__icon--facebook" style="fill: #FFFFFF" xmlns="http://www.w3.org/2000/svg">
                                        <title>Facebook</title>
                                        <path d="M31,26l0.8-5.8h-5.2v-3.8c-0.2-1.5,0.9-2.9,2.4-3.1c0.2,0,0.4,0,0.6,0H32V8.4C30.6,8.2,29.2,8,27.8,8 c-4.3,0-7.1,2.8-7.1,7.8v4.4H16V26h4.8v14h5.8V26H31z"></path>
                                    </svg>
                                </a>
                                <a href="https://www.instagram.com/tamddk" class="sodik-social__link" rel="noopener noreferrer" aria-label="Instagram">
                                    <svg role="img" viewBox="0 0 48 48" class="sodik-social__icon sodik-social__icon--instagram" style="fill: #FFFFFF" xmlns="http://www.w3.org/2000/svg">
                                        <title>Instagram</title>
                                        <path d="M24,15.8c-4.5,0-8.2,3.7-8.2,8.2c0,0,0,0,0,0c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2 C32.2,19.5,28.6,15.8,24,15.8C24,15.8,24,15.8,24,15.8z M24,29.3c-2.9,0-5.3-2.4-5.3-5.3c0-2.9,2.4-5.3,5.3-5.3 c2.9,0,5.3,2.4,5.3,5.3c0,0,0,0,0,0C29.3,26.9,26.9,29.3,24,29.3z M34.5,15.5c0-1.1-0.9-1.9-1.9-1.9c-1.1,0-1.9,0.9-1.9,1.9 c0,1.1,0.8,1.9,1.9,1.9c0,0,0,0,0,0C33.6,17.4,34.5,16.5,34.5,15.5C34.5,15.5,34.5,15.5,34.5,15.5z M39.9,17.4 c0.1-2.5-0.9-4.9-2.6-6.7c-1.8-1.7-4.2-2.6-6.7-2.6C28,8,20,8,17.4,8.1c-2.5,0-4.9,0.9-6.7,2.6c-1.7,1.8-2.6,4.2-2.6,6.7 C8,20,8,28,8.1,30.6c-0.1,2.5,0.9,4.9,2.6,6.7c1.8,1.7,4.2,2.6,6.7,2.6C20,40,28,40,30.6,39.9c2.5,0.1,4.9-0.9,6.7-2.6 c1.7-1.8,2.6-4.2,2.6-6.7C40,28,40,20,39.9,17.4z M36.5,33.4c-0.5,1.4-1.6,2.5-3,3c-2.1,0.8-7.1,0.6-9.4,0.6s-7.3,0.2-9.4-0.6 c-1.4-0.5-2.5-1.7-3-3c-0.8-2.1-0.6-7.1-0.6-9.4s-0.2-7.3,0.6-9.4c0.5-1.4,1.6-2.5,3-3c2.1-0.8,7.1-0.6,9.4-0.6s7.3-0.2,9.4,0.6 c1.4,0.5,2.5,1.7,3,3c0.8,2.1,0.6,7.1,0.6,9.4S37.3,31.3,36.5,33.4z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sodik-container sodik-container-images align-middle md-w-full" style="padding: 16px;">
                        <div class="sodik-container__inner">
                            <div class="sodik-image-element">
                                <div class="sodik-image align-right" style="background-color: #ffc0cb;border-radius: 20%;height: 383px;">
                                    <img src="{{ asset('assets/images/black_pink_4.png') }}" alt="Image" style="border-radius: 8px; max-width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
