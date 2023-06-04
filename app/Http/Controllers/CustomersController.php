<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Buyer;
use Brick\Math\BigInteger;
use Cassandra\Bigint;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CustomersController extends Controller
{


    public function index(Request $request) :View
    {
        $is_blocked = $request->input('is_blocked');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $name = $request->input('name');

        try {
            $query = Buyer::query();

            if ($is_blocked == '1' or $is_blocked == '0') {
                $query->where('is_blocked', $is_blocked);
            }

            if ($email) {
                $query->where('email', $email);
            }

            if ($phone) {
                $query->where('phone', $phone);
            }

            if ($name) {
                $query->where('name', $name)->orWhere('surname', $name);
            }
            $customers = $query->paginate(20);
            return view('customers', compact('customers'));
        } catch (ModelNotFoundException $e) {
            abort(404);
        }

    }

    public function by_id(int $id) {

        $query = Buyer::query()->where('id', $id);


        if ($query->doesntExist()) {
            abort(404);
        }

        $customers = $query->paginate(20);
        $addressIds = DB::table("buyer_address")->where("buyer_id", $id)->pluck('address_id')->toArray();
        $addresses = Address::query()->whereIn('id', $addressIds)->orderByDesc("add_time")->paginate();
        return view('customers_id', compact(['customers', 'addresses']));



    }
}
