<nav class="top-0 z-50 fixed w-full pb-4 pt-5  bg-cuspat-blue border-gray-200">
   <div class=" w-full flex items-center justify-between">
     <div class="flex justify-between items-center w-full">
       <div class="flex items-center justify-between lg:gap-7">
         <a href="/" class="flex items-center">
          <img src="{{ asset('asset/logo-cuspat/logo-putih-cuspat.png') }}" class="h-10 w-11 ml-[30px]  mt-4" alt="Flowbite Logo" />
         </a>
       </div>

      <div class="hidden mt-4 md:absolute md:ml-32 sm:flex min-[768px]:gap-5 min-[930px]:gap-10 gap-7 lg:gap-10 xl:gap-16  text-sm font-semibold text-white font-Lato">
          <a href="#beranda" class=" hover:text-gray-300 lg:text-lg">Beranda</a>
          <a href="#produk" class=" hover:text-gray-300 lg:text-lg">Produk</a>
          <a href="#tentangKami" class=" hover:text-gray-300 lg:text-lg">Tentang Kami</a>
          <a href="#kontakKami" class=" hover:text-gray-300 lg:text-lg">Kontak Kami</a>
       </div>

       <div class="flex mt-4 items-center gap-5 mr-[30px]">
        <button type="button" class="lg:hidden" data-modal-target="defaultModal" data-modal-toggle="defaultModal" >
          <iconify-icon class="text-white mr-[30px] md:mr-0 mt-2" icon="mingcute:search-line" width="24" height="24"></iconify-icon>
       </button>
         
       @include("components/navbarTop/search-produk")

        {{-- form input search laptop dan desktop--}}
        <form class="hidden lg:flex">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block lg:w-52 min-[1214px]:w-72 p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-cuspat-green focus:border-cuspat-orange" placeholder="Cari Produkmu Disini" required>
            </div>
        </form>
           <div class="hidden mt-[5px] md:inline-flex items-center gap-[20px] relative">
               <a 
                   @guest
                      data-modal-target="masuk" data-modal-toggle="masuk"
                   @endguest

                   @auth
                      href="/keranjang"
                   @endauth
                 >
                  <iconify-icon class="text-white ml-2" icon="fa6-solid:basket-shopping" width="24" height="24"> </iconify-icon>
                   <span id="data-cart-count"></span>
                </a>
           </div>
            @guest
             <div class="hidden md:flex gap-2 font-Lato text-sm">
  
            <button data-modal-target="masuk" data-modal-toggle="masuk" class="text-white py-[5px] px-[15px] xl:text-base border border-white rounded-3xl" type="button">
              Masuk
            </button>

            @include('components/navbarTop/modal-login-register-large')
 
            <button data-modal-target="daftar" data-modal-toggle="daftar" class="text-cuspat-blue py-[5px] px-[15px] bg-white rounded-3xl" type="button">
              Daftar
            </button>

        </div>
@endguest

@auth
    @include('components/navbarTop/notifikasi')
@endauth
@auth
@include('components/navbarTop/profildropdown')
@endauth
    </div>
  </div>
</nav>
   
   
