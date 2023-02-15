<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
/*

         SODIK PROJECT

* More Information
* Instagram : @tamddk
* Whatsapp : wa.me/62895325657488
*/

class OrderController extends Controller
{

    public function index()
    {
        return view('pesan_ticket');
    }

    public function createTicket(Request $request)
    {
        if (
            $request->sodik1 == null &&
            $request->sodik2 == null &&
            $request->sodik3 == null &&
            $request->sodik4 == null &&
            $request->sodik5 == null &&
            $request->sodik6 == null &&
            $request->sodik7 == null &&
            $request->sodik8 == null
        ) {
            return redirect("/order/ticket");
        } else {
            $hashed = Str::random(25);

            DB::table('order')->insert([
                'id_ticket' => $hashed,
                'name_order' => $request->sodik1,
                'email_order' => $request->sodik2,
                'birth_order' => $request->sodik3,
                'hp_order' => $request->sodik4,
                'address_order' => $request->sodik5,
                'type_artist_order' => $request->sodik6,
                'type_ticket_order' => $request->sodik7,
                'count_ticket_order' => $request->sodik8
            ]);

            DB::table('order_expired')->insert([
                'order_expired' => $hashed,
                'active_expired' => 1
            ]);

            return redirect("/order/ticket/print/$hashed");
        }
    }

    public function printTicket($id)
    {
        $order = DB::table('order')->where('id_ticket', $id)->get();
        return view('print_ticket', ['order' => $order]);
    }
}
