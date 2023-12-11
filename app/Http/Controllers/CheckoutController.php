<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $timestamp = time();
        $currentDate = gmdate('Y-m-d H:i:s', $timestamp);

        $courseIds = $request->input('course_id');
        $count = count($courseIds);

        $user = Auth::user();
        $ownedCourses = $user->transaction()
            ->whereIn('id', function ($query) use ($courseIds) {
                $query->select('transaction_id')
                    ->from('transaction_details')
                    ->whereIn('course_id', $courseIds);
            })
            ->exists();

        if ($ownedCourses) {
            return redirect()->route('cart.index')->with('error', 'You already own one or more selected courses.');

        }


        $transaction = Transaction::create([
            'user_id' => $user->id,
            'transaction_date' => $currentDate,
        ]);

        for ($i = 0; $i < $count; $i++) {
            $transactionDetail = TransactionDetail::create([
                'course_id' => $courseIds[$i],
                'transaction_id'=> $transaction->id,
            ]);
        }

        session(['cart' => []]);
        session(['totalPrice' => 0]);
        return redirect()->route('cart.index')->with('success', 'Purchase successful!');
    }
}
