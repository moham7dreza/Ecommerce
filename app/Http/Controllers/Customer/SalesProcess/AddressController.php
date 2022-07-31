<?php

namespace App\Http\Controllers\Customer\SalesProcess;

use App\Models\Address;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Models\Market\CartItem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Customer\SalesProcess\StoreAddressRequest;

class AddressController extends Controller
{
    public function addressAndDelivery()
    {
        //check profile
        $user = Auth::user();
        $provinces = Province::all();
        $cartItems = CartItem::where('user_id', $user->id)->get();

        if(empty(CartItem::where('user_id', $user->id)->count()))
        {
            return redirect()->route('customer.sales-process.cart');
        }

        return view('customer.sales-process.address-and-delivery', compact('cartItems', 'provinces'));
    }


    public function getCities(Province $province)
    {
       $cities = $province->cities;
       if($cities != null)
       {
        return response()->json(['status' => true, 'cities' => $cities]);
       }
       else{
        return response()->json(['status' => false, 'cities' => null]);
       }
    }

    public function addAddress(StoreAddressRequest $request)
    {
        $inputs = $request->all();
        $inputs['user_id'] = auth()->user()->id;
        $inputs['postal_code'] = convertArabicToEnglish($request->postal_code);
        $inputs['postal_code'] = convertPersianToEnglish($inputs['postal_code']);
        $address = Address::create($inputs);
        return redirect()->back();
    }
}
