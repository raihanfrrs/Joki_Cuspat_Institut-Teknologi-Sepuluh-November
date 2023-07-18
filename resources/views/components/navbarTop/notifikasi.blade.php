
<button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="inline-flex items-center text-sm font-medium ml-2 text-center text-gray-500 hover:text-gray-900 focus:outline-none " type="button"> 
    <iconify-icon class="text-white" icon="ri:notification-4-fill" width="24" height="24"></iconify-icon>
    <div class="relative flex">
      <div class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3 "></div>
    </div>
    </button>
    <!-- Dropdown menu -->
    <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white  rounded-lg shadow-custom " aria-labelledby="dropdownNotificationButton">
      <div class="block px-4 py-2 my-3 font-medium  text-gray-900 font-fredoka rounded-t-lg text-2xl  ">
         Notifikasi
      </div>
      <div class="flex w-[85%] text-gray-400 justify-between p-2 mx-auto font-Lato text-xs bg-slate-50 rounded-lg">
        <a href="">Semua</a>
        <a href="">Transaksi</a>
        <a href="">Promo</a>
        <a href="">Info</a>
     </div>
     <div class="block px-4 my-3 font-medium text-gray-900 font-fredoka rounded-t-lg text-2xl  ">
        Terbaru
     </div>
     {{-- notif terbaru --}}
     @for ( $i=0 ; $i<3 ; $i++)
     <div class="flex gap-4  items-center my-3 w-[90%] mx-auto">
        <iconify-icon class="text-cuspat-blue mb-4" icon="iconamoon:discount-fill" width="24" height="24"></iconify-icon>
        <div class="flex  justify-between w-full items-center">
            <div class="block font-Lato">
                <p class="text-gray-400 text-xs">promo</p>
                <p class=" text-cuspat-blue font-fredoka font-medium">Scarf Diskon s.d 40%!</p>
             </div>
                <p class="text-gray-400 text-xs">2 jam</p>
         </div>
     </div>
     @endfor
     <div class="block px-4 my-3 font-medium text-gray-900 font-fredoka rounded-t-lg text-2xl  ">
        Seminggu
     </div>
     <div class="flex gap-4  items-center my-3 w-[90%] mx-auto">
        <iconify-icon class="text-cuspat-blue mb-4" icon="solar:bag-4-line-duotone" width="24" height="24"></iconify-icon>
        <div class="flex  justify-between w-full items-center">
            <div class="block font-Lato">
                <p class="text-gray-400 text-xs">Belanja</p>
                <p class=" text-cuspat-blue font-fredoka font-medium">Paketmu sedang dikirim</p>
             </div>
                <p class="text-gray-400 text-xs">6 Hari</p>
         </div>
     </div>
     <div class="flex gap-4  items-center my-3 w-[90%] mx-auto">
        <iconify-icon class="text-cuspat-blue mb-4" icon="solar:bag-4-line-duotone" width="24" height="24"></iconify-icon>
        <div class="flex  justify-between w-full items-center">
            <div class="block font-Lato">
                <p class="text-gray-400 text-xs">Belanja</p>
                <p class=" text-cuspat-blue font-fredoka font-medium">Pesananmu sedang diproses</p>
             </div>
                <p class="text-gray-400 text-xs">5 Hari</p>
         </div>
     </div>

     {{-- close notif terbaru --}}
      <a href="#" class="block py-2 text-xs font-medium text-center text-cuspat-blue rounded-b-lg bg-gray-50 hover:bg-gray-100   ">
        <div class="inline-flex rounded-lg mb-3  p-2 px-4 items-center border border-cuspat-pastel">
            Lihat Lebih Banyak
        </div>
      </a>
    </div>
    