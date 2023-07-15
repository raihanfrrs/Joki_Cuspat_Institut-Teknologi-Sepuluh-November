<div class="fixed bottom-0 left-0 z-50 w-full h-20 bg-white shadow-navbot md:hidden">
    <div class="flex h-full justify-between max-w-sm mx-auto font-medium">
      {{-- button home/dashboard --}}
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
          <iconify-icon class=" text-gray-500 group-hover:text-cuspat-blue" icon="fluent:home-48-filled" width="24" height="24"></iconify-icon>
            <span class="text-sm font-Lato font-semibold text-gray-500 group-hover:text-cuspat-blue">Beranda</span>
          </button>
       {{-- close button home/dashboard --}}
       {{-- button produk --}}
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
          <iconify-icon class=" text-gray-500 group-hover:text-cuspat-blue" icon="fluent-mdl2:product-variant" width="24" height="24"></iconify-icon>
            <span class="text-sm font-Lato text-gray-500 font-semibold group-hover:text-cuspat-blue ">Produk</span>
        </button>
       {{-- close button produk --}}
       {{-- button keranjang --}}
        <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
          <iconify-icon class=" text-gray-500 group-hover:text-cuspat-blue" icon="fa6-solid:basket-shopping" width="24" height="24"></iconify-icon>
            <span class="text-sm font-Lato text-gray-500 font-semibold group-hover:text-cuspat-blue ">Keranjang</span>
        </button>
       {{-- close button keranjang --}}
        {{-- button akun --}}
        <!-- Modal toggle login -->
        <button type="button" data-modal-target="masuk1" data-modal-toggle="masuk1" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
          <iconify-icon class=" text-gray-500 group-hover:text-cuspat-blue" icon="bi:person-fill" width="24" height="24"></iconify-icon>
            <span class="text-sm font-Lato text-gray-500 font-semibold group-hover:text-cuspat-blue">Akun</span>
        </button>
         {{-- close button akun --}}

          <!-- Main modal login -->
          <div id="masuk1" tabindex="-1" aria-hidden="true" class="fixed top-2 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md md:max-w-md max-h-full">
                <!-- Modal content login --> 
                <div class="relative z-50 bg-white rounded-lg shadow">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="masuk1">
                        <svg class="w-4 h-4 text-cuspat-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-8">
                      <img src="{{ asset("asset/logo-cuspat/logo-kuning-cuspat.png") }}" class=" mx-auto w-20 h-20" alt="logo cuspat">
                        <form class="space-y-6 mt-5" action="#">
                            <div>
                                <label for="nama" class="block mb-2 text-sm font-bold font-Lato text-cuspat-blue">Nama Pengguna</label>
                                {{-- name diisi sesuai atribut dari table user --}}
                                <input type="text" name="#" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg placeholder:text-gray-400 focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5 "placeholder="Masukkan Nama Pengguna" required>
                            </div>
                            <div class="relative" x-data="{ show: true }">
                              <label for="password" class="block mb-2 text-sm font-bold font-Lato text-cuspat-blue">Kata Sandi</label>
                              <iconify-icon icon="mdi:hide" @click="show = !show"
                              :class="{'hidden': !show, 'block':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                              <iconify-icon icon="mdi:eye" @click="show = !show"
                              :class="{'block': !show, 'hidden':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                {{-- name diisi sesuai atribut dari table user --}}
                              <input type="password" :type="show ? 'password' : 'text'" name="password" id="password" placeholder="Masukkan Kata Sandi" class="bg-gray-50 border placeholder:text-gray-400 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5" required>
                          </div>
                        </form>
                        <div class="flex w-full mt-2 flex-row-reverse ">
                          <a href="#" class="text-sm mx-5 font-Lato text-red-600 underline">Lupa Kata Sandi?</a>
                        </div>
                        <button type="submit" class=" w-full mt-8 font-Lato font-bold text-white bg-blue-950 hover:bg-cuspat-blue focus:ring-4 focus:outline-none focus:ring-blue-400  rounded-lg text-sm px-5 py-3 text-center">Masuk</button>
                        <div class="text-sm w-full flex justify-center mt-10 font-base text-gray-500">
                            Belum Punya Akun?<button type="button" class="text-cuspat-blue underline ml-1" data-modal-target="daftar1" data-modal-toggle="daftar1" data-modal-hide="masuk1">Daftar Disini</button>
                        </div>
                    </div>
                </div>
            </div>
          </div> 

              {{-- main modal daftar --}}
              <div id="daftar1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-xl max-h-full">
                    <!-- Modal content daftar -->
                    <div class="relative z-50 bg-white rounded-lg shadow">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="daftar1">
                            <svg class="w-4 h-4 text-cuspat-blue" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-7 px-10 w-full flex flex-col rounded-xl">
                          <img src="{{ asset("asset/logo-cuspat/logo-kuning-cuspat.png") }}" class="mx-auto w-20 h-20" alt="logo cuspat">
                            <form class="space-y-6 mt-5  w-full" action="#">
                                <div class="flex flex-col ">
                                    <label for="nama_user" class="block w-1/2 mb-2 text-sm font-bold font-Lato text-cuspat-blue">Nama Pengguna</label>
                                      {{-- name diisi sesuai atribut dari table user --}}
                                    <input type="text" name="#" id="nama_user" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg placeholder:text-gray-400 focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5 "placeholder="Masukkan Nama Pengguna" required>
                                </div>
                               
                              <div class="flex flex-col">
                                <label for="no_whatsapp" class="block w-1/2 mb-2 text-sm font-bold font-Lato text-cuspat-blue">Nomor Whatsapp</label>
                                  {{-- name diisi sesuai atribut dari table user --}}
                                <input type="text" name="#" id="no_whatsapp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg placeholder:text-gray-400 focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5 "placeholder="Masukkan Nomor Whatsapp" required>
                            </div>
                                <div class="relative flex flex-col" x-data="{ show: true }">
                                    <label for="password" class="block w-1/2  mb-2 text-sm font-bold font-Lato text-cuspat-blue">Kata Sandi</label>
                                    <iconify-icon icon="mdi:hide" @click="show = !show"
                                    :class="{'hidden': !show, 'block':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                    <iconify-icon icon="mdi:eye" @click="show = !show"
                                    :class="{'block': !show, 'hidden':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                      {{-- name diisi sesuai atribut dari table user --}}
                                    <input type="password" :type="show ? 'password' : 'text'" name="password" id="password" placeholder="Masukkan Kata Sandi" class="bg-gray-50 border placeholder:text-gray-400 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5" required>
                                </div>
                                <div class="relative flex flex-col" x-data="{ show: true }">
                                  <label for="password" class="block w-full  mb-2 text-sm font-bold font-Lato text-cuspat-blue">Konfirmasi Kata Sandi</label>
                                  <iconify-icon icon="mdi:hide" @click="show = !show"
                                  :class="{'hidden': !show, 'block':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                  <iconify-icon icon="mdi:eye" @click="show = !show"
                                  :class="{'block': !show, 'hidden':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                  <input type="password" :type="show ? 'password' : 'text'" name="password" id="password" placeholder="Masukkan Konfirmasi Kata Sandi" class="bg-gray-50 border placeholder:text-gray-400 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5" required>
                              </div>
                            </form>
                            <button type="submit" class=" w-full mt-8 font-Lato font-bold text-white bg-blue-950 hover:bg-cuspat-blue focus:ring-4 focus:outline-none focus:ring-blue-400  rounded-lg text-sm px-5 py-3 text-center">Masuk</button>
                            <div class="text-sm w-full flex justify-center mt-8 font-base text-gray-500">
                                Sudah Punya Akun?<button type="button" class="text-cuspat-blue underline ml-1" data-modal-target="masuk1" data-modal-toggle="masuk1" data-modal-hide="daftar1">Masuk</button>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
      </div>
 </div>
 