<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrdersRequest;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id = $request->id;
        $orders = \App\Order::where('buy_user', '=', $request->id)->get();

        return view('orders.index', [
            'orders' => $orders,
            'menu' => '주문 내역',
            'id'=>$id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        $product = \App\Product::where('id', '=', $request->id)->first();

        return view('orders.create', [
            'product' => $product,
            'menu' => '제품 주문',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrdersRequest $request) {
        $order = \App\Order::create([
            'buy_user' => $request->buy_user,
            'product_id' => $request->product_id,
            'order_date' => $request->order_date,
            'send_user' => $request->send_user,
            'send_address' => $request->send_address,
            'payment' => $request->payment,
        ]);

        return $order->id;
        // return view('orders.show', compact('order'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = \App\Order::where('id', '=', $id)->first();

        // return $order;
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = \App\Order::where('id','=',$id)->first();

        return view('orders.edit', [
            'order' => $order,
            'menu' => '주문 수정',
        ]);
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
        \App\Order::where('id', '=', $id)->update([
            'send_user' => $request->user,
            'send_address' => $request->address,
        ]);
        $orders = \App\Order::where('buy_user', '=', $request->user_id)->get();

        return view('orders.index', compact('orders'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        \App\Order::where('id', '=', $request->id)->delete();
        $orders = \App\Order::where('buy_user', '=', $request->user_id)->get();

        return view('orders.index', compact('orders'));
    }
}
