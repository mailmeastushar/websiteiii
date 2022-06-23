<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Redirect;
class RazorpayController extends Controller
{
    public function payform()
    {
        $meta['title'] = 'Pay Now:  Move to Canada';
        $meta['description'] = 'Triple I Business gives you the direct payment option to pay online for Canada visas. Make convenient payments online.';
    	return view('front.payment',compact('meta'));
    }
    public function create(Request $data)
    { 
        $name = $data->name;
        $email = $data->email;
        $mobile = $data->mobile;
        $amount = $data->amount;
        $agname = $data->agname;
        return view('front.payWithRazorpay',compact('name','email','mobile','amount','agname'));
    }

    public function payment(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 

            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::flash('error',$e->getMessage());
                return redirect()->back();
            }
        }
        
        \Session::flash('success', 'Payment successful');
        return redirect()->back();
    }
}
