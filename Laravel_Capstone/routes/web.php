<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// 메인 페이지

Route::get('/', 'MainController@index');

// 사용자 가입

Route::get('auth/register', [
    'as' => 'users.create',
    'uses' => 'UsersController@create',
]);

Route::post('auth/register', [
    'as' => 'users.store',
    'uses' => 'UsersController@store',
]);


// 사용자 인증

Route::get('auth/login', [
    'as' => 'sessions.create',
    'uses' => 'SessionsController@create',
]);

Route::post('auth/login', [
    'as' => 'sessions.store',
    'uses' => 'SessionsController@store',
]);

Route::get('auth/logout', [
    'as' => 'sessions.destroy',
    'uses' => 'SessionsController@destroy',
]);


// 사용자 정보 수정

Route::get('auth/change', [
    'as' => 'informations.index',
    'uses' => 'InformationsController@index',
]);

Route::post('auth/change', [
    'as' => 'informations.update',
    'uses' => 'InformationsController@update',
]);


// 제품 페이지

Route::resource('products', 'ProductsController');


// 주문 페이지

Route::resource('orders', 'OrdersController');


// qna 페이지

Route::resource('qna', 'QuestionsController');

Route::resource('qna/answer', 'AnswersController');


Route::get('mypage', 'MyPageController@index');
Route::get('mypage/stats', 'MyPageController@toStats');
Route::get('mypage/stretchinfo', 'MyPageController@toStretchInfo');
Route::get('mypage/mychallenge/{user_id}', 'MyPageController@toMyChallenge');
Route::get('mypage/orderhis/{buy_user_id}', 'MyPageController@toOrderHistory');
Route::get('mypage/orderinfo/{order_id}', 'MyPageController@showOrderInfo');
Route::delete('mypage/order_delete/{order_id}', 'MyPageController@deleteOrder');
Route::get('mypage/update_profile', 'MyPageController@toUpdateProfile');


// 챌린지 페이지

Route::resource('challenges', 'ChallengesController');

Route::resource('join_challenges', 'JoinChallengesController');

// 통계 페이지

Route::get('stats', 'PostureHistoryController@index');

// today 통계 ajax
Route::get('stats/today', 'PostureHistoryController@todayAjax');

// week 통계 ajax
Route::get('stats/week', 'PostureHistoryController@weekAjax');

// month 통계 ajax
Route::get('stats/month', 'PostureHistoryController@monthAjax');


//허리건강 정보
Route::get('waistinfo', 'WaistInfoController@index');
