<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $totalPrice = session('totalPrice', 0);
        $courses = Course::all();

        return view('cart', compact('cart', 'totalPrice','courses'));
    }

    public function addToCart($courseId)
{
    $course = Course::find($courseId);

    $cart = session('cart', []);

    if (!isset($cart[$courseId])) {
        $cart[$courseId] = [
            'name' => $course->name,
            'price' => $course->price,
        ];

        $totalPrice = array_sum(array_column($cart, 'price'));
        session(['cart' => $cart, 'totalPrice' => $totalPrice]);

    }

    return redirect()->back();
}


    public function resetCart()
    {
        session(['cart' => []]);
        session(['totalPrice' => 0]);

        return redirect()->route('cart.index')->with('success', 'Cart has been reset.');
    }

    public function delete($courseId)
{
    $cart = session('cart', []);

    if (isset($cart[$courseId])) {
        unset($cart[$courseId]);

        $totalPrice = array_sum(array_column($cart, 'price'));
        session(['cart' => $cart, 'totalPrice' => $totalPrice]);
    }

    return redirect()->route('cart.index');
}
}
