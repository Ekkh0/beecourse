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

                                {{-- <a href="terms" id="showTermsLink" style="text-decoration: none;">Click Here to Read the Terms & Conditions!</a> --}}

                                <div class="form-check" id="showTermsLink">
                                    <input type="checkbox" class="form-check-input" id="agreeCheckbox">
                                    <label class="form-check-label" for="agreeCheckbox">I agree to the Terms and Conditions</label>
                                </div>

                                    <form action="{{route('checkout')}}" method="POST" id="checkoutForm">
                                        @csrf

                                            @foreach ($cart as $courseId => $item)
                                                <div class="course-form" data-course-id="{{ $courseId }}">
                                                    <input type="hidden" name="user_id[]" value="1">
                                                    <input type="hidden" name="course_id[]" value="{{$courseId}}">
                                                    <input type="hidden" name="total_price" value="{{$totalPrice}}">
                                                    {{-- {{$courseId}} --}}
                                                </div>
                                            @endforeach

                                        <button type="submit" class="btn mt-3" style="background-color: rgb(57, 57, 57); color:white;" disabled id="checkoutButton">Checkout</button>




                                    </form>


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




      <script>


        document.getElementById('agreeCheckbox').addEventListener('change', function() {

            if(this.checked){
                localStorage.setItem('termsLinkVisited', 'true');
            enableCheckoutButton();
            }else{
            document.getElementById('checkoutButton').style.backgroundColor ='gray'
            document.getElementById('checkoutButton').disabled = true;
        }

        });

        function enableCheckoutButton() {
          localStorage.removeItem('termsLinkVisited');

          document.getElementById('checkoutButton').style = '';
          document.getElementById('checkoutButton').disabled = false;
        }
      </script>






@endsection
