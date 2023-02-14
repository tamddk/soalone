<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print - Ticket</title>
    <style>
        .cardWrap {
            width: 27em;
            margin: 3em auto;
            color: #fff;
            font-family: sans-serif;
        }

        .card {
            background: linear-gradient(to bottom, #e84c3d 0%, #e84c3d 26%, #ecedef 26%, #ecedef 100%);
            height: 16em;
            float: left;
            position: relative;
            padding: 1em;
            margin-top: 100px;
        }

        .cardLeft {
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
            width: 16em;
        }

        .cardLeft h1 {
            margin-top: 10px;
            font-size: 25px;
        }

        .cardRight {
            width: 6.5em;
            border-left: 0.18em dashed #fff;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
        }

        .cardRight:before,
        .cardRight:after {
            content: "";
            position: absolute;
            display: block;
            width: 0.9em;
            height: 0.9em;
            background: #fff;
            border-radius: 50%;
            left: -0.5em;
        }

        .cardRight:before {
            top: -0.4em;
        }

        .cardRight:after {
            bottom: -0.4em;
        }

        h1 {
            font-size: 1.1em;
            margin-top: 0;
        }

        h1 span {
            font-weight: normal;
        }

        .title,
        .name,
        .seat,
        .time {
            text-transform: uppercase;
            font-weight: normal;
            word-break: break-word;
        }

        .name h2,
        .seat h2,
        .time h2 {
            font-size: 0.9em;
            color: #525252;
            margin: 0;
        }

        .title h2 {
            font-size: 1.3em;
            color: #525252;
            margin: 0;
        }

        .title span,
        .name span,
        .seat span,
        .time span {
            font-size: 0.7em;
            color: #a2aeae;
        }

        .title {
            margin: 2em 0 0 0;
        }

        .name,
        .seat,
        .time {
            margin: 0.7em 0 0 0;
        }

        .eye {
            position: relative;
            width: 2em;
            height: 1.5em;
            background: #fff;
            margin: 0 auto;
            margin-top: 10px;
            border-radius: 1em/0.6em;
            z-index: 1;
        }

        .eye:before,
        .eye:after {
            content: "";
            display: block;
            position: absolute;
            border-radius: 50%;
        }

        .eye:before {
            width: 1em;
            height: 1em;
            background: #e84c3d;
            z-index: 2;
            left: 8px;
            top: 4px;
        }

        .eye:after {
            width: 0.5em;
            height: 0.5em;
            background: #fff;
            z-index: 3;
            left: 12px;
            top: 8px;
        }

        .number {
            margin-top: 100px;
            text-align: center;
            text-transform: uppercase;
        }

        .number h3 {
            color: #e84c3d;
            margin: 0.9em 0 0 0;
            font-size: 1.93em;
        }

        .number span {
            display: block;
            color: #a2aeae;
        }

        .sodik-ticket-information {
            display: block;
            color: #000;
            font-size: 13px;
            text-align: center;
            width: 100%;
        }

        .sodik-vvip {
            background: linear-gradient(to bottom, #ffe000 0%, #ffe000 26%, #ecedef 26%, #ecedef 100%);
        }

        .sodik-vvip .eye:before {
            background: #ffe000;
        }

        .sodik-vvip .number h3 {
            color: #ffe000;
        }

        .sodik-vip {
            background: linear-gradient(to bottom, #e84c3d 0%, #e84c3d 26%, #ecedef 26%, #ecedef 100%);
        }

        .sodik-vip .eye:before {
            background: #e84c3d;
        }

        .sodik-vip .number h3 {
            color: #e84c3d;
        }

        .sodik-pink {
            background: linear-gradient(to bottom, #e83d8c 0%, #e83d8c 26%, #ecedef 26%, #ecedef 100%);
        }

        .sodik-pink .eye:before {
            background: #e83d8c;
        }

        .sodik-pink .number h3 {
            color: #e83d8c;
        }
    </style>

</head>

<body>
    <!--

         SODIK PROJECT

* More Information
* Instagram : @tamddk
* Whatsapp : wa.me/62895325657488
-->
    @foreach($order as $orders)

    <div class="cardWrap">
        <div class="card cardLeft {{$orders->type_ticket_order == 'VVIP' ? 'sodik-vvip' : ''}}{{$orders->type_ticket_order == 'VIP A' || $orders->type_ticket_order == 'VIP B' ? 'sodik-vip' : ''}}{{$orders->type_ticket_order == 'PINK A' || $orders->type_ticket_order == 'PINK B' ? 'sodik-pink' : ''}}">
            <h1>Concert <span>tickets</span></h1>
            <div class="title">
                <h2>{{ $orders->type_artist_order }}</h2>
                <span>musik</span>
            </div>
            <div class="name">
                <h2>{{ $orders->name_order }}</h2>
                <span>name</span>
            </div>
            <div class="seat">
                <h2>{{ $orders->count_ticket_order }}</h2>
                <span>Amount</span>
            </div>
            <div class="time">
                <h2>{{ $orders->id_ticket }}</h2>
                <span>Keys</span>
            </div>

        </div>
        <div class="card cardRight {{$orders->type_ticket_order == 'VVIP' ? 'sodik-vvip' : ''}}{{$orders->type_ticket_order == 'VIP A' || $orders->type_ticket_order == 'VIP B' ? 'sodik-vip' : ''}}{{$orders->type_ticket_order == 'PINK A' || $orders->type_ticket_order == 'PINK B' ? 'sodik-pink' : ''}}">
            <div class="eye"></div>
            <div class="number">
                <h3>{{ $orders->type_ticket_order }}</h3>
                <span>Ticket</span>
            </div>
        </div>
        <span class="sodik-ticket-information">expected screenshots for proof of registration.</span>
    </div>
    @endforeach
</body>

</html>
