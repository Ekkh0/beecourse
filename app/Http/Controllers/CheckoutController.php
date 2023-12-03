<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{
    public function checkout(Request $request){

        // $request->validate([
        //     'user_id'=>'required',
        //     'course_id' =>'required',
        // ]);

        // $this->middleware('auth');


        $timestamp = time();
        $currentDate = gmdate('Y-m-d H:i:s', $timestamp);
        // dd($timestamp);


        // $checkout = Transaction::create([
        //     'user_id' => $request->user_id,
        //     'transaction_date' => $currentDate,
        //     'course_id'=> $request->course_id
        // ]);


        // $userIds = $request->input('user_id');
        $courseIds = $request->input('course_id');

        // Assuming that the count of user_ids and course_ids is the same

        // dd($request->input('total_price'));

        $count = count($courseIds);

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id,
            'transaction_date' => $currentDate,
        ]);

        for ($i = 0; $i < $count; $i++) {

            $transactionDetail = TransactionDetail::create([
                'course_id' => $courseIds[$i],
                'transaction_id'=> $transaction->id,
            ]);

            $transaction->save();

            $transactionDetail->save();

        }


        // $checkout->save();


        session(['cart' => []]);
        session(['totalPrice' => 0]);
        return redirect()->route('cart.index')->with('success', 'Cart has been reset.');


    }




}
