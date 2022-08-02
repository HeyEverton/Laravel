<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $r)
    {
        $addresses = Address::all();
        return $addresses;
    }
    public function findOne(Request $r)
    {
        $address = Address::find($r->id);
        $address['user'] = $address->user;
        return $address;
    }
    public function insert(Request $r)
    {
            $data = $r->only(['address']);
            $address = Address::create($data);
            return $address;
    }
}
