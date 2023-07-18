@extends('layouts.master-customer')

@section('title', $title = "| home")

@section('setup')
    {{-- SECTION UNTUK DEKLARASI STYLE / SCRIPTS CUSTOM --}}
@endsection

@section('content')

{{-- flasher --}}
@include('components/flasher')

{{-- navbar --}}
@include('components/navbarTop')

{{-- content dashboard user --}}

{{-- carousel --}}

<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-44  mx-auto mt-28 w-[85%] sm:w-[88%] md:w-[82%] overflow-hidden sm:h-64 md:mt-32 lg:mt-36 lg:h-96 rounded-lg ">
         <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset("asset/promo/promo-cuspat1.jpg") }}" class="absolute  rounded-xl  block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700  ease-in-out" data-carousel-item>
                <img src="{{ asset("asset/promo/promo-cuspat-2.jpg") }}" class="absolute rounded-xl block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>    
    </div>
</div>

{{-- tutup carousel --}}

<div class="w-[85%] sm:w-[88%] md:w-[82%] items-center justify-between flex h-auto mt-8 mx-auto">
 <div class="block gap-2">
    <p class="text-2xl sm:text-3xl md:text-4xl font-spartan text-cuspat-blue lg:text-6xl font-bold">Cuspat</p>
    <p class="font-Lato font-medium text-[10px] md:text-base text-black">Customize Your Own Pattern Style</p>
 </div>
 <a 
    @guest
        data-modal-target="masuk" data-modal-toggle="masuk"
    @endguest
    @guest
    data-modal-target="masuk1" data-modal-toggle="masuk1"
    @endguest
    @auth
        href="/buat-pola"
    @endauth
     class="text-xs sm:text-sm px-8 hover:bg-blue-950 focus:ring-blue-400 focus:border-blue-400 py-2 lg:px-16 lg:py-3 lg:rounded-full lg:text-xl font-Lato font-bold rounded-2xl bg-cuspat-blue text-white">Buat Pola</a>
</div>

<div id="produk" class="w-[85%] sm:w-[88%] md:w-[82%] mx-auto">
    <p class=" text-cuspat-blue font-bold font-spartan text-xl sm:text-2xl md:text-3xl lg:text-4xl">Produk Kami</p>
</div>

{{-- produk kami --}}

<swiper-container class="mySwiper w-[85%] sm:w-[88%] md:w-[82%] mx-auto" init="false" pagination="true" pagination-clickable="true">
      
        <swiper-slide class="swiper-slide">
            <a 
            @guest
            data-modal-target="masuk" data-modal-toggle="masuk"
            @endguest

            @auth
             href="" 
            @endauth
            >
                <img src="{{ asset("asset/produk/mockup-scarf-no-bg.png") }}" alt="">
                <div class="swiper-tittle">
                   <span>Scarf</span>
                <button>
                   <iconify-icon icon="wpf:like"></iconify-icon>
                </button>  
                </div>
                <div class="swiper-detail">
                    <p>Premium Voal</p>
                    <span>Rp. 140.000</span>
                </div> 
            </a>
       </swiper-slide>
  </swiper-container>
{{-- tutup produk kami --}}
 

{{-- konsep kami --}}
<div id="tentangKami" class="w-[85%] sm:w-[88%] mx-auto  md:w-[82%]">
    <p class=" text-cuspat-blue font-bold font-spartan text-xl sm:text-2xl md:text-3xl lg:text-4xl">Konsep Kami</p>
</div>

<div class="mx-auto md:justify-between lg:h-80 sm:flex-row-reverse lg:flex-row mt-6 sm:mt-0 w-[85%] sm:w-[88%] md:w-[82%] flex flex-col gap-8">
    <img class="w-[200px] lg:self-end mx-auto h-[200px] sm:w-[220px] sm:h-[220px] md:w-[270px] md:h-[270px] lg:h-[350px] lg:w-[350px] lg:absolute lg:right-36" src="{{ asset("asset/img-dashboard/orang.jpg") }}" alt="">
    <p class="w-full md:max-w-md font-Lato text-xs sm:text-sm md:text-lg sm:mt-8 font-medium ">Bisnis Kreatif berbasis website yang menyediakan 
        aneka produk apparel fashion anak muda. Cuspat 
        menawarkan produk tas, tote bag, dan scarf dengan
        menerapkan self design pattern experience melalui 
        fitur <span class="font-bold">“Buat Pola” </span></p>
</div>
{{-- tutup konsep kami --}}

<div class="w-[85%] sm:w-[88%] md:w-[82%] mx-auto mt-8">
    <p class=" text-cuspat-blue font-bold font-spartan text-xl sm:text-2xl md:text-3xl lg:text-4xl">Pelayanan Kami</p>
</div>

{{-- card pelayanan kami --}}
<div class="flex md:flex-row flex-col mt-8 gap-8 items-center mb-12 mx-auto w-[85%] sm:w-[88%] md:w-[82%]">
    {{-- 1 --}}
<div class="max-w-sm p-8 bg-white rounded-lg shadow-custom">
    <iconify-icon icon="mdi:design" class="mb-6 text-cuspat-blue bg-slate-100 rounded-full p-4" width="24" height="24"></iconify-icon>
    <h5 class="mb-2 font-bold font-Lato text-xl text-cuspat-blue">Self Design Pattern Experince</h5>
     <p class="font-medium font-Lato text-[16px]">Desain Pattern sendiri dengan mudah
        bersama kami</p>
</div>
    {{-- 2 --}}
    <div class="max-w-sm p-8 bg-white rounded-lg shadow-custom">
        <iconify-icon icon="icon-park-solid:protect" class="mb-6 text-cuspat-blue bg-slate-100 rounded-full p-4" width="24" height="24"></iconify-icon>
        <h5 class="mb-2 font-bold font-Lato text-xl text-cuspat-blue">High Quality Control</h5>
         <p class="font-medium font-Lato text-[16px]">Kami selalu menjaga kualitas produk
            tetap baik hingga ke tangan konsumen</p>
    </div> 
    {{-- 3 --}}  
    <div class="max-w-sm p-8 bg-white rounded-lg shadow-custom">
        <iconify-icon icon="fa6-solid:medal" class="mb-6 text-cuspat-blue bg-slate-100 rounded-full p-4" width="24" height="24"></iconify-icon>
        <h5 class="mb-2 font-bold font-Lato text-xl text-cuspat-blue">Exclusive & Premium Product</h5>
         <p class="font-medium font-Lato text-[16px]">seluruh produk kami eksklusif dengan 
            menggunakan bahan premium</p>
    </div>          
</div>
    
@include('components/footer')           
@include('components/navbarBot')

@endsection