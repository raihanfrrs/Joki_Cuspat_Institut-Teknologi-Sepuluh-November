@extends('layouts.master-customer')

@section('title', $title = "| keranjang")

@section('setup')
    {{-- SECTION UNTUK DEKLARASI STYLE / SCRIPTS CUSTOM --}}
@endsection

@section('content')

{{-- flasher --}}
@include('components/flasher')

{{-- navbartop --}}
@include('components/navbarTop')

{{-- content --}}

<div class="lg:flex">
    <div class="w-full lg:w-[70%]" id="data-cart-list">
    </div>

    <div class="lg:mt-32 z-10 lg:w-[30%] lg:mx-5 bottom-20 lg:relative lg:bottom-0  w-full lg:block" id="data-cart-price"> 
             
    </div>
</div>


{{-- close content --}}

{{-- navbarbot --}}
@include('components/footer')
@include('components/navbarBot')

@endsection