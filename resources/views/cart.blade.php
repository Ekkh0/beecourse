@extends('layout.contentlayout')
@section('titletitle')Cart @endsection

@section('contentcontent')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Your Cart</h2>
                        <div class="mb-4">
                            @if (count($cart) > 0)
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $courseId => $item)
                                            <tr>
                                                <td>{{ $item['name'] }}</td>
                                                <td>${{ $item['price'] }}</td>
                                                <td class="text-right">
                                                    <a href="{{ route('cart.delete', ['courseId' => $courseId]) }}" class="btn" style="background-color:#dc3545;color: black;">
                                                        <iconify-icon icon="uil:times" style="font-size: 14px;"></iconify-icon>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr class="table-info">
                                            <td>Total Price:</td>
                                            <td>${{ $totalPrice }}</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-flex flex-column align-items-end">
                                    <a href="{{ route('cart.reset') }}" class="btn " style="background-color: #dc3545; border-color: #dc3545; color:black">Remove All</a>
                                
                                    <a href="#" class="btn mt-3" disabled>Checkout</a>
                                </div>
                                
                            @else
                                <p>Your cart is empty.</p>
                            @endif
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
