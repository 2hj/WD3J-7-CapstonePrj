<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function index(){
      $history = \App\PostureHistory::get();

      return view('mypages2.profile', ['data'=>$history]);
    }

    public function toStats(){
      $history = \App\PostureHistory::get();
      return view('mypages2.stats.stats', ['data'=>$history]);
    }

    public function toStretchInfo(){
      return view('mypages2.stretch_info.stretch_info');
    }

    public function toMyChallenge(Request $request){
      $uid = $request->id;
      $join = \App\JoinChallenge::where('user_id', '=', $uid)->first();
      // $user_id = $join->user_id;
      $user = \App\User::where('id','=', $uid)->first();

      return view('mypages2.my_challenge.my_challenge' ,[
        'join'=>$join,
        'user' => $user,
      ]);
    }

    public function toOrderHistory(Request $request){
      $id = $request->id;
      $order = null;
      $orders = \App\Order::where('buy_user', '=', $id)->get();

      if(count($orders) > 0){
        $order = $orders[0];
        return view('mypages.order_history', [
          'orders'=>$orders,
          'order'=>$order,
          'id'=>$id,
        ]);
      } else {
        return view('mypages.order_history', [
          'orders'=>$orders,
          'order'=>$order,
          'id'=>$id,
        ]);
      }
    }

    public function showOrderInfo(Request $request){
      $id = $request->id;
      $order = \App\Order::find($id);

        // return $order;
      return view('mypages.order_info', ['order'=>$order]);
    }

    public function deleteOrder(Request $request){
      \App\Order::where('id', '=', $request->id)->delete();
      $orders = \App\Order::where('buy_user', '=', $request->user_id)->get();
      $order = null;

      if(count($orders) > 0){
        $order = $orders[0];
        return view('mypages.order_history', [
          'orders'=>$orders,
          'order'=>$order,
        ]);
      } else {
        return view('mypages.order_history', [
          'orders'=>$orders,
          'order'=>$order,
        ]);
      }
    }

    public function toUpdateProfile(){
      return view('mypages.update_profile');
    }
}
