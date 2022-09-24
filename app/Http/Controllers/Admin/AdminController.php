<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function cancelTicket(Ticket $ticket)
    {
        $ticket->status = 'Cancel';
        $ticket->save();

        return redirect()->back();
    }

    // get ticket

    public function get_customer()
    {
        $customers = Customer::get();

        return view('admin.customer', compact('customers'));
    }
    
    public function get_ticket(Request $request)
    {
        $query = Ticket::query();

        if ($request->status && $request->status != 'all') {
            $query->whereStatus($request->status);
        }

        $tickets = $query->get();
        $status = $request->status ?? '';

        return view('admin.ticket', compact('tickets', 'status'));
    }

    // public function get_ticket()
    // {
    //     $tickets = Ticket::get();

    //     return view('admin.ticket', compact('tickets'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $customer = Customer::where('id', $id)->first();
        $customer->delete();

        return redirect()->route('admin.customer');
    }
}
