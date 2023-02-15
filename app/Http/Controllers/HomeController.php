<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*

         SODIK PROJECT

* More Information
* Instagram : @tamddk
* Whatsapp : wa.me/62895325657488
*/

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return redirect('/user/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/user/login');
    }

    public function orderList()
    {
        if (Auth::check()) {
            $order = DB::table('order')->get();
            return view('pesan_list', ['order' => $order]);
        } else {
            return redirect('/user/login');
        }
    }

    public function orderUpdate($id)
    {
        if (Auth::check()) {
            $order = DB::table('order')->where('id_order', $id)->get();
            return view('pesan_update', ['order' => $order]);
        } else {
            return redirect('/user/login');
        }
    }

    public function orderUpdateProccess(Request $request)
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
            return redirect('/user/dashboard/order');
        } else {
            if (Auth::check()) {
                DB::table('order')->where('id_order', $request->sodik0)->update([
                    'name_order' => $request->sodik1,
                    'email_order' => $request->sodik2,
                    'birth_order' => $request->sodik3,
                    'hp_order' => $request->sodik4,
                    'address_order' => $request->sodik5,
                    'type_artist_order' => $request->sodik6,
                    'type_ticket_order' => $request->sodik7,
                    'count_ticket_order' => $request->sodik8
                ]);

                return redirect('/user/dashboard/order');
            } else {
                return redirect('/user/login');
            }
        }
    }

    public function orderDelete($id)
    {

        if (Auth::check()) {
            DB::table('order')->where('id_order', $id)->delete();
            return redirect('/user/dashboard/order');
        } else {
            return redirect('/user/login');
        }
    }

    public function checkingList()
    {
        if (Auth::check()) {
            return view('pesan_checking');
        } else {
            return redirect('/user/login');
        }
    }

    public function checkingOrder(Request $request)
    {
        if (Auth::check()) {
            $order = DB::table('order')->where('id_ticket', $request->sodik1)->get();

            $ticketOrder = DB::table('order')->where('id_ticket', $request->sodik1)->first();
            $ticketExp = DB::table('order_expired')->where('order_expired', $request->sodik1)->first();
            if ($ticketExp) {
                if ($ticketExp->active_expired == 0 || $ticketExp->active_expired == 1) {
                    DB::table('order_expired')->where('order_expired', $request->sodik1)->update([
                        'order_expired' => $request->sodik1,
                        'active_expired' => 2
                    ]);
                    return view('pesan_checking_data', ['order' => $order]);
                } else {
                    return view('pesan_checking_expired', ['order' => $order]);
                }
            } else {
                if ($ticketOrder) {
                    DB::table('order_expired')->insert([
                        'order_expired' => $request->sodik1,
                        'active_expired' => 1
                    ]);
                    return view('pesan_checking_data', ['order' => $order]);
                } else {
                    return view('pesan_checking_expired');
                }
            }
        } else {
            return redirect('/user/login');
        }
    }

    public function reportOrderList()
    {
        $report = DB::table('order')
            ->join('order_expired', 'order.id_ticket', '=', 'order_expired.order_expired')
            ->select('order_expired.*', 'order.id_ticket', 'order.name_order', 'order.email_order', 'order.hp_order', 'order.type_artist_order', 'order.type_ticket_order', 'order.count_ticket_order')
            ->get();

        return view('report_order', ['report' => $report]);
    }
}
