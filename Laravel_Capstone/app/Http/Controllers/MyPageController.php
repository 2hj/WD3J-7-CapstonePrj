<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function index(){
      return view('mypages.mypage');
    }

    public function toProfile(){
      return view('mypages.profile');
    }

    public function toMyChallenge(Request $request){
      $uid = $request->id;
      $join = \App\JoinChallenge::where('user_id', '=', $uid)->first();
      // $user_id = $join->user_id;
      $user = \App\User::where('id','=', $uid)->first();

      return view('mypages.challenge_history' ,[
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
