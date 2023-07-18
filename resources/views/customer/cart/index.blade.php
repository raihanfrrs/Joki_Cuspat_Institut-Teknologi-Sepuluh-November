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

    <div class="mt-32 w-[30%] mx-5 hidden lg:block" id="data-cart-price">       
    </div>
</div>


{{-- close content --}}

{{-- navbarbot --}}
@include('components/navbarBot')

@endsection