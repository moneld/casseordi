@extends('layouts.frontend')

@section('title','La boutique')

@section('content')

    <div style="margin-bottom: 10%; !important;"></div>
    <!-- Product -->
    <div class="bg0 m-t-23 p-b-140" >
        <div class="container">


            <div class="row isotope-grid" >
                @foreach($produits as $produit)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item ">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="{{asset('images/produits-images/'.$produit->image_produit)}}" alt="{{$produit->nom}}">

                                <a href="{{route('detail-produit',$produit->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
                                    Détail
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{$produit->nom}}
                                    </a>

                                    <span class="stext-105 cl3">
									{{$produit->prix}}
								</span>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach

            </div>



            <!-- Load more -->
            <div class="flex-c-m flex-w w-full p-t-45">
                {{ $produits->links() }}
            </div>
        </div>
    </div>

@endsection


