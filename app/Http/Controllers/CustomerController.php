<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.customer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:customers',
            'phone' => 'required',
            'country' => 'required',
            'state' => 'required',
            'family_member' => 'required'
        ]);

        $sessionId = uniqid();

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->session_id = $sessionId;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->country = $request->country;
        $customer->state = $request->state;
        $customer->family_member = $request->family_member;
        $customer->save();

        $customer_id = Customer::where('session_id', $sessionId)->first();

        $order = new Order();
        $order->customer_id = $customer_id->id;
        if ($customer_id->family_member == 1 || $customer_id->family_member == 2) {
            $total = $customer_id->family_member * 35;
        } elseif ($customer_id->family_member == 3) {
            $total = $customer_id->family_member * 30;
        } else {
            $total = $customer_id->family_member * 25;
        }
        $order->total_price = $total;
        $order->save();



        return redirect()->route('fatima.payment', $sessionId);
    }

    public function registration_payment($session_id)
    {

        $customer = Customer::where('session_id', $session_id)->first();


        return view('frontend.next-registration', compact('customer'));
    }

    public function order_update(Request $request)
    {
        $order = Order::where('id', $request->order_id)->first();

        if ($request->cupon == 'SW001') {
            $order->total_price = max($order->total_price - 100, 0);
        } elseif ($request->cupon == 'SW002') {
            $order->total_price = max($order->total_price - 150, 0);
        }
        $order->update();
        return redirect()->back();
    }

    public function order_ticket(Request $request)
    {
        $ticket = new Ticket();
        $ticket->customer_id = $request->customer_id;
        $ticket->ticket_price = $request->ticket_price;
        $ticket->payment_mode = $request->payment_mode;
        $ticket->payment_id = $request->payment_id;
        $ticket->ticket_no = 'STYLEZ-WORLD-' . random_int(100, 999);
        $ticket->save();


        return response()->json(['status' => 'Ticket create successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
