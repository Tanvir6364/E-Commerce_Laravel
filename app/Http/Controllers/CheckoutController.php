<?php

namespace App\Http\Controllers;

use App\Shipping;
use Cart;
use Illuminate\Http\Request;
use App\Customer;
use Session;
use App\Order;
use App\Payment;
use App\orderDetails;


class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontEnd.checkout.checkoutContent');
    }

    public function newCustomer(Request $request)
    {
        $customer = new Customer();
        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->emailAddress = $request->emailAddress;
        $customer->password = bcrypt($request->password);
        $customer->phoneNumber = $request->phoneNumber;
        $customer->address = $request->address;
        $customer->save();
        Session::put('id', $customer->id);
        Session::put('customerName', $customer->firstName . " " . $customer->lastName);
        return redirect('/shippingInfo');
    }

    public function shippingInfo()
    {
        $customerId = Session::get('id');
        $customerById = Customer::find($customerId);
        return view('frontEnd.checkout.shippingInfo', ['customerById' => $customerById]);
    }

    public function userLogout()
    {
        Session::forget('id');
        Session::forget('customerName');
        return redirect('/');
    }

    public function newShipping(Request $request)
    {
        $shipping = new Shipping();
        $shipping->fullName = $request->fullName;
        $shipping->emailAddress = $request->emailAddress;
        $shipping->phoneNumber = $request->phoneNumber;
        $shipping->address = $request->address;
        $shipping->save();
        Session::put('shippingId', $shipping->id);
        return redirect('/paymentInfo');
    }

    public function paymentInfo()
    {
        return view('frontEnd.checkout.paymentInfo');
    }

    public function saveOrderInfo(Request $request)
    {
        $paymentType = $request->paymentType;
	    $order=new Order();
	    $order->customerId=Session::get('id');
	    $order->shippingId=Session::get('shippingId');
	    $order->totalOrder=Session::get('totalOrder');
	    $order->save();
	    Session::put('orderId',$order->id);

	    $payment=new Payment();
	    $payment->orderId=Session::get('orderId');
	    $payment->paymentType=$paymentType ;
	    $payment->save();



	    $cartProducts=Cart::content();
	    //dd($cartProducts);
	    foreach ($cartProducts as $cartProduct){
		    $orderDetails=new orderDetails();
		    $orderDetails->orderId=Session::get('orderId');
		    $orderDetails->productId=$cartProduct->id;
		    $orderDetails->productName=$cartProduct->name;
		    $orderDetails->productPrice=$cartProduct->price;
		    $orderDetails->productQuantity=$cartProduct->qty;
		    $orderDetails->save();
		    Cart::remove($cartProduct->rowId);
	    }
        if ($paymentType == 'Cash') {
            return redirect('/customerHome');
        } else if ($paymentType == 'Paypal') {
            return 'Paypal';
        } else if ($paymentType == 'BKash') {
            return 'BKash';
        }

    }


    public function userLogin(Request $request)
    {
        $email = $request->emailAddress;
        $customerByEmail = Customer::where('emailAddress', $email)->first();
        $existingPassword = $customerByEmail->password;
        if (password_verify($request->password, $existingPassword)) {
            Session::put('id', $customerByEmail->id);
            Session::put('customerName', $customerByEmail->firstName . " " . $customerByEmail->lastName);
            return redirect('/shippingInfo');
        } else {

        }
        return redirect('/showCart')->with('message', 'Email Or Password is not Valid');
    }

    //Create new Controller****Time short so done in CheckoutController
    public function customerHome(){
        return view('frontEnd.customer.customer');
    }


}
