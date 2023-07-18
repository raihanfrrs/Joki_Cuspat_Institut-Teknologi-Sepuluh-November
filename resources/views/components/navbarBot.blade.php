@include('components/navbarBot/modal-login-register-small')

<div class="fixed bottom-0 left-0 z-50 w-full h-20 bg-white shadow-navbot md:hidden">
    <div class="flex h-full justify-between max-w-sm mx-auto font-medium">
      {{-- button home/dashboard --}}
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
          <iconify-icon class=" text-gray-500 group-hover:text-cuspat-blue" icon="fluent:home-48-filled" width="24" height="24"></iconify-icon>
            <span class="text-sm font-Lato font-semibold text-gray-500 group-hover:text-cuspat-blue">Beranda</span>
          </button>

        <a class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group"
        @guest
        data-modal-target="masuk1" data-modal-toggle="masuk1" 
        @endguest
        
        @auth
            href="/login"
        @endauth
        >
          <iconify-icon class=" text-gray-500 group-hover:text-cuspat-blue" icon="fluent-mdl2:product-variant" width="24" height="24"></iconify-icon>
            <span class="text-sm font-Lato text-gray-500 font-semibold group-hover:text-cuspat-blue ">Produk</span>
        </a>

        <a class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group" 
        @guest
        data-modal-target="masuk1" data-modal-toggle="masuk1" 
        @endguest

        @auth
            href="/keranjang"
        @endauth
       >
          <iconify-icon class=" text-gray-500 group-hover:text-cuspat-blue" icon="fa6-solid:basket-shopping" width="24" height="24"></iconify-icon>
            <span class="text-sm font-Lato text-gray-500 font-semibold group-hover:text-cuspat-blue ">Keranjang</span>
        </a>

        <a class="inline-flex cursor-pointer flex-col items-center justify-center px-5 hover:bg-gray-50 group" 
        @guest
        data-modal-target="masuk1" data-modal-toggle="masuk1"
        @endguest
        @auth
           href=""
        @endauth
         >
          <iconify-icon class=" text-gray-500 group-hover:text-cuspat-blue" icon="bi:person-fill" width="24" height="24"></iconify-icon>
            <span class="text-sm font-Lato text-gray-500 font-semibold group-hover:text-cuspat-blue">Akun</span>
        </a>
      </div>
 </div>
 