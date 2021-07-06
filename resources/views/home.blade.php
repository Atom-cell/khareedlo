
@extends('layout.template') 

@section('content')
        <div class="container-fluid " >
            <div class="row">
                <div class="col-12 col-sm-3 summer"  >
                    <h1 style="font-size:6vw; font-weight: bolder;     color: rgb(63, 63, 63);    font-family: 'Anton', sans-serif;">Summer Vibes</h1>
                    <h1 style="font-size:3vw;    color: rgb(63, 63, 63);">mode on</h1>
                    <button class="btn" id="shop"><a href="#feature" style="text-decoration: none;    font-family: 'Anton', sans-serif;">SHOP NOW</a></button>
                </div>

                <div class="col-12 col-sm-8">
                    <img  src="/images/banner.png" class="img-fluid" alt="" class="hero-img" />
                </div>
            </div>
        </div>

        <div class="empty"></div>


        <div class="container">
            <div class="row">
                <p><h2 id="feature" style="    font-family: 'Alata', sans-serif;">Featured Products</h2></p>
            </div>
        </div>

        <div class="container">
            <hr class="line">
        </div>
        <!-- <div class="empty"></div>

        <div class="container-fluid ">
            <h5 style="text-align: center;"><span style="color: black; margin-right: 20px;">Featured Products</span>
        </div> -->

        <div class="container">
            <hr class="line">
        </div>

        @php
            $i=0;
            $j=0;
        @endphp

        <div class="container-fluid">
            <div class="row">
                @foreach($Record as $rcd)
                    <div class="col-12 col-sm-4 ">
                        <a href="/description?id={{$rcd->id}}"><img  src="/{{$rcd->picture}}" class="img-fluid" alt="" class="hero-img" /></a>
                        <h5>{{$rcd->name}}</h5>
                        <h6><b>Rs.{{$rcd->price}}</b></h6>
                    </div>
                    @php
                      $i++;
                        if($i==3){
                          break;
                        }
                    @endphp
                @endforeach
            </div>
        </div>
        <br>

        <div class="container-fluid">
            <div class="row">
                @foreach($Record2 as $rcd2)
                    <div class="col-12 col-sm-4 ">
                        <a href="/description?id={{$rcd2->id}}"><img  src="/{{$rcd2->picture}}" class="img-fluid" alt="" class="hero-img" /></a>
                        <h5>{{$rcd2->name}}</h5>
                        <h6><b>Rs.{{$rcd2->price}}</b></h6>
                    </div>
                    @php
                      $j++;
                        if($j==3){
                          break;
                        }
                    @endphp
                @endforeach
            </div>
        </div>

        <br>
        <br>
        @endsection


        



