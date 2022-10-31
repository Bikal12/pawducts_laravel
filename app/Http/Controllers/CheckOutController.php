<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Checkoutitem;

class CheckOutController extends Controller
{
    function checkOut(Request $req)
    {
        $checkoutitem = new Checkoutitem;
        $checkoutitem->first_name = $req->input('first_name');
        $checkoutitem->last_name = $req->input('last_name');
        $checkoutitem->address = $req->input('address');
        $checkoutitem->phone_no = $req->input('phone_no');
        $checkoutitem->email = $req->input('email');
        $checkoutitem->save();
        return $checkoutitem;
    }
}
