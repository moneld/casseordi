@extends('layouts.frontend')

@section('title','Panier')

@section('content')

    <!-- Shoping Cart -->
<div class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Product</th>
                                <th class="column-2"></th>
                                <th class="column-3">Price</th>
                                <th class="column-4">Quantity</th>
                                <th class="column-5">Total</th>
                            </tr>

                            @foreach($cartItems as $cartItem)
                                <tr class="table_row">
                                    <td class="column-1">
                                        <form action="{{route('panier.destroy',$cartItem->rowId)}}" method="post" >
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-danger"><span class="lnr lnr-trash"></span></button>
                                        </form>

                                    </td>
                                    <td class="column-2">{{$cartItem->name}}</td>
                                    <td class="column-3">{{$cartItem->price}} FCFA</td>
                                    <td class="column-4">
                                        <form action="{{route('panier.update',$cartItem->rowId)}}" method="post" >
                                            @csrf
                                            {{method_field('PUT')}}
                                            <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-minus"></i>
                                                </div>

                                                <input class="mtext-104 cl3 txt-center num-product" type="number" name="qty" value="{{$cartItem->qty}}">

                                                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                    <i class="fs-16 zmdi zmdi-plus"></i>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-success" style="width: 100%;"><span class="lnr lnr-checkmark-circle"></span></button>
                                        </form>
                                    </td>
                                    <td class="column-5">{{$cartItem->price}} FCFA</td>
                                </tr>
                            @endforeach

                        </table>
                    </div>


                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Récapitulatif
                    </h4>

                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
								<span class="stext-110 cl2">
									Total HT:
								</span>
                        </div>

                        <div class="size-209">
								<span class="mtext-110 cl2">
									{{Cart::subtotal()}} FCFA
								</span>
                        </div>
                    </div>


                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
								<span class="stext-110 cl2">
									TVA:
								</span>
                        </div>

                        <div class="size-209">
								<span class="mtext-110 cl2">
									{{Cart::tax()}} FCFA
								</span>
                        </div>
                    </div>


                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
                        </div>

                        <div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									{{Cart::total()}} FCFA
								</span>
                        </div>
                    </div>

                    <a href="#" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Payer maintenant
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection


