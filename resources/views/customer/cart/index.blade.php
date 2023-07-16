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
    <div class="w-full lg:w-[70%]">
        <div class="mt-32 w-[85%] lg:w-[90%] mx-auto flex flex-col gap-4 font-Lato">
           <div class="w-full flex justify-between">
              <p class="font-bold text-3xl">Keranjang</p>
              <div class="lg:flex items-center hidden">
                <a href="" class="flex items-center">
                    <iconify-icon icon="iconamoon:trash-fill" width="24" height="24"></iconify-icon>
                    <label class="ml-2 text-xs font-medium text-gray-900 cursor-pointer">Hapus Semua</label>
                </a>
            </div>
           </div> 
            <div class="flex w-full justify-between items-center">
                    <div class="flex items-center w-full justify-between">
                        <div class="flex lg:hidden">
                            <input id="checkbock-pilih-semua" type="checkbox" value="" class="w-5 h-5 text-cuspat-blue border-black rounded">
                            <label for="checkbock-pilih-semua" class="ml-2 text-sm font-medium text-gray-900">Pilih Semua</label>
                        </div>
                        <div class="hidden lg:flex">
                            <input id="checkbock-pilih-semua" type="checkbox" value="" class="w-5 h-5 text-cuspat-blue border-black rounded">
                            <label for="checkbock-pilih-semua" class="ml-2 text-sm font-medium text-gray-400">Produk</label>
                        </div>
                        <div class="lg:flex hidden gap-[8.4rem]">
                            <span class="text-gray-400">Jumlah Barang</span>
                            <span class="text-gray-400">Harga</span>
                        </div>
                        <a href="">
                            <div class="flex items-center lg:hidden">
                                <iconify-icon icon="iconamoon:trash-fill" width="24" height="24"></iconify-icon>
                                <label class="ml-2 text-sm font-medium text-gray-900 cursor-pointer">Hapus Semua</label> 
                        </div>
                        </a>      
                    </div>     
            </div>
        </div>
        
        
        <div>
            <hr class="h-px my-5 mx-9 border-0 bg-slate-300 ">
            <div class="w-[85%] lg:w-[90%] mx-auto flex flex-col gap-2">
                <div class="flex items-center w-full justify-between">
                    <div class="flex gap-4 items-center justify-center">
                        <input type="checkbox" value="" class="w-5 h-5 text-cuspat-blue border-black rounded">
                        <img src="{{ asset("asset/produk/mockup-scarf-no-bg.png") }}" class=" w-20 h-20 lg:w-32 lg:h-32 rounded-lg bg-gray-200" alt="">
                        <div class="flex flex-col justify-between h-20 lg:h-24 relative">
                            <span class="font-spartan text-xl font-bold lg:text-2xl">Scarf</span>
                            <div class="flex flex-col gap-2">
                                <span class="font-lato text-xs text-gray-400 absolute top-7">Variasi Patern</span>   
                                <span class="font-lato text-base  font-semibold lg:hidden">Rp. 140.000</span>
                                <a href="">
                                    <div class="border justify-between py-1 px-2 rounded-lg border-cuspat-pastel items-center w-32 hidden lg:flex">
                                        <p>File Desain</p>
                                        <iconify-icon icon="solar:download-line-duotone" width="24" height="24"></iconify-icon>
                                   </div>  
                                </a>                       
                            </div>
                        </div>

                    </div>
              
                    <div class="lg:flex hidden gap-20 items-center">
                        <div class="hidden lg:flex flex-row  border-cuspat-pastel border h-10 rounded-lg w-24 md:w-28">
                            <button class="text-gray-600 hover:text-white hover:bg-gray-500 h-full w-20 rounded-l cursor-pointer outline-none">
                               <span class="m-auto text-2xl font-thin">−</span>
                            </button>
                               <input type="number" class="outline-none focus:outline-none border-none text-center w-7  font-semibold text-md  md:text-basecursor-default flex items-center text-gray-900" name="" value="1"></input>
                            <button  class=" text-gray-600 hover:text-white hover:bg-gray-500 h-full w-20 rounded-r cursor-pointer">
                               <span class="m-auto text-2xl font-thin">+</span>
                            </button>
                        </div>
                        <div class="">
                            <span class="text-lg font-lato font-medium text-cuspat-blue">Rp. 140.000</span>
                        </div>
                    </div>
                
                    <form action="" class="lg:hidden block">
                        <button type="submit">
                            <iconify-icon icon="iconamoon:trash-fill" width="24" height="24"></iconify-icon>
                        </button>
                    </form>

                </div>
                 <div class=" flex w-full justify-between items-center mt-3">
                    <a href="">
                        <div class="flex border justify-between py-2 px-2 rounded-lg border-cuspat-pastel items-center w-32 lg:hidden">
                            <p>File Desain</p>
                            <iconify-icon icon="solar:download-line-duotone" width="24" height="24"></iconify-icon>
                         </div>
                    </a>                  
                        <div class="flex flex-row lg:hidden border-cuspat-pastel border h-10 rounded-lg w-24 md:w-28">
                              <button class="text-gray-600 hover:text-white hover:bg-gray-500  h-full w-20 rounded-l cursor-pointer outline-none">
                                 <span class="m-auto text-2xl font-thin">−</span>
                              </button>
                                 <input type="number" class="outline-none focus:outline-none border-none text-center w-7  font-semibold text-md  md:text-basecursor-default flex items-center text-gray-900" name="" value="1"></input>
                              <button  class=" text-gray-600 hover:text-white hover:bg-gray-500 h-full w-20 rounded-r cursor-pointer">
                                 <span class="m-auto text-2xl font-thin">+</span>
                              </button>
                       </div>
                 </div>
             </div>
         </div>
        <div class="mb-32"></div>
    </div>

    <div class="mt-32 w-[30%] mx-5 hidden lg:block">       
        <div class="w-full p-4 bg-white flex flex-col gap-2 h-auto  border-gray-300 rounded-lg border sm:p-6 md:p-4">
            <div class="flex w-full justify-between items-center">
                <span class="text-xs font-Lato text-gray-400">Subtotal</span>
                <span class="text-lg font-lato font-medium text-cuspat-blue">Rp. 140.000</span>
            </div>
            <div class="flex w-full justify-between items-center">
                <span class="text-xs font-Lato text-gray-400">Diskon</span>
                <span class="text-lg font-lato font-medium text-cuspat-blue">Rp. 0</span>
            </div>
            <hr class="h-px my-3 border-0 bg-slate-300 ">
            <div class="flex w-full justify-between">
                <span class="font-lato text-lg font-semibold text-cuspat-blue">Total</span>
                <span class="text-lg font-lato font-medium">Rp. 140.000</span>
            </div>
            <button type="button" class="bg-cuspat-blue mt-2 text-white rounded-lg px-2 py-2 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 ">beli</button>
        </div>
    </div>
</div>


{{-- close content --}}

{{-- navbarbot --}}
@include('components/navbarBot')

@endsection