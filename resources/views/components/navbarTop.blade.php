<nav class="top-0 z-50 fixed w-full pb-4 pt-5  bg-cuspat-blue border-gray-200">
   <div class=" w-full flex items-center justify-between">
     <div class="flex justify-between items-center w-full">
       <div class="flex items-center justify-between lg:gap-7">
         <a href="" class="flex items-center">
          <img src="{{ asset('asset/logo-cuspat/logo-putih-cuspat.png') }}" class="h-10 w-11 ml-[30px]  mt-4" alt="Flowbite Logo" />
         </a>
       </div>

      {{-- menu navbar --}}
      <div class="hidden mt-4 md:absolute md:ml-32 sm:flex min-[768px]:gap-5 min-[930px]:gap-10 gap-7 lg:gap-10 xl:gap-16  text-sm font-semibold text-white font-Lato">
        <a href="#beranda" class=" hover:text-gray-300 lg:text-lg">Beranda</a>
        <a href="#produk" class=" hover:text-gray-300 lg:text-lg">Produk</a>
        <a href="#tentangKami" class=" hover:text-gray-300 lg:text-lg">Tentang Kami</a>
        <a href="#kontakKami" class=" hover:text-gray-300 lg:text-lg">Kontak Kami</a>
       </div>
       {{-- tutup menu navbar --}}

       <!-- Modal toggle -->
       <div class="flex mt-4 items-center gap-5 mr-[30px]">
        <button type="button" class="lg:hidden" data-modal-target="defaultModal" data-modal-toggle="defaultModal" >
          <iconify-icon class="text-white mr-[30px] md:mr-0 mt-2" icon="mingcute:search-line" width="24" height="24"></iconify-icon>
       </button>
         
      <!-- Main modal -->
      <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto mt-20 max-h-full">
         <div class="relative w-full max-w-2xl max-h-full">
             <!-- Modal content -->
             <div class="relative bg-white rounded-lg shadow">
                 <!-- Modal header -->
                 <div class="flex items-start justify-start p-2 rounded-t ">
                     {{-- form search mobile dan tablet --}}
                       <form class="w-[90%]">   
                          <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                           <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                              <button type="submit"><iconify-icon class="text-cuspat-blue mr-[30px]" icon="mingcute:search-line" width="24" height="24"></iconify-icon></button>
                            </div>
                           <input type="search" id="default-search" class="block w-full font-Lato p-2 pl-14 text-sm text-gray-900 rounded-lg bg-gray-50 focus:ring-cuspat-blue focus:border-cuspat-blue " placeholder="Cari Produkmu Disini" required>
                          </div>
                        </form> 
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="defaultModal">
                        <iconify-icon icon="material-symbols:close" width="24" height="24"></iconify-icon>
                         <span class="sr-only">Close modal</span>
                        </button>
                  </div>
              </div>
           </div>
        </div>

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
        {{-- <button type="button" class="relative inline-flex items-center p-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
            <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
            <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
          </svg>
          <span class="sr-only">Notifications</span>
       
        </button> --}}
           <div class="hidden mt-[5px] md:inline-flex items-center gap-[20px] relative">
            <a 
              @guest
                href="#" data-modal-target="masuk" data-modal-toggle="masuk"
              @endguest

              @auth
                href="/keranjang"
              @endauth
            >
              <iconify-icon class="text-white" icon="fa6-solid:basket-shopping" width="24" height="24">
                
              </iconify-icon>
              <div class="absolute inline-flex items-center justify-center py-[2px] px-[3px] text-[8px] font-bold left-4 -top-2.5 text-white bg-red-500  rounded-full  dark:border-gray-900">20</div>
            </a>
            <div class=" w-[1px] h-8 bg-white"></div>
           </div>
              @guest
          <div class="hidden md:flex gap-2 font-Lato text-sm">
          {{-- masuk dan daftar --}}           
          <!-- Modal toggle -->
            <button data-modal-target="masuk" data-modal-toggle="masuk" class="text-white py-[5px] px-[15px] xl:text-base border border-white rounded-3xl" type="button">
              Masuk
            </button>

            <!-- Main modal -->
            <div id="masuk" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-xs md:max-w-md max-h-full">
                    <!-- Modal content --> 
                    <div class="relative z-50 bg-white rounded-lg shadow">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="masuk">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-8">
                          <img src="{{ asset('asset/logo-cuspat/logo-kuning-cuspat.png') }}" class=" mx-auto w-24 h-24" alt="logo cuspat">
                            <h3 class="mb-1 text-cuspat-blue text-2xl text-center  font-semibold font-spartan">Selamat Datang Kembali Di Cuspat</h3>
                            <h3 class="mb-4 text-sm text-center font-Lato font-medium text-gray-400">Masuk untuk Buat Pola yang kamu inginkan</h3>
                            <form class="space-y-6 mt-5 mx-5" action="/login" method="POST">
                              @csrf                 
                              <div>
                             <label for="username" class="block mb-2 text-sm font-bold font-Lato text-cuspat-blue">Nama Pengguna</label>              
                                  <input type="text" name="username" id="username" class="@error('username') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg placeholder:text-gray-400 focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5 " placeholder="Masukkan Nama Pengguna" required value="{{ old('username') }}">
                                    @error('username')
                                      <p class="mt-2 text-red-500 text-pink-600 text-sm">
                                        {{ $message }}
                                      </p>
                                    @enderror
                                </div>
                                      <div class="relative" x-data="{ show: true }">
                                        <label for="password" class="block mb-2 text-sm font-bold font-Lato text-cuspat-blue">Kata Sandi</label>
                                        <iconify-icon icon="mdi:hide" @click="show = !show"
                                        :class="{'hidden': !show, 'block':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                        <iconify-icon icon="mdi:eye" @click="show = !show"
                                        :class="{'block': !show, 'hidden':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                          {{-- name diisi sesuai atribut dari table user --}}
                                        <input type="password" :type="show ? 'password' : 'text'" name="password" id="password" placeholder="Masukkan Kata Sandi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5" required>
                                      </div>
                                            <div class="flex w-full mt-2 flex-row-reverse ">
                                              <a href="#" class="text-sm mx-5 font-Lato text-red-600 underline">Lupa Kata Sandi?</a>
                                            </div>
                <button type="submit" class=" w-[90%] mx-5 mt-8 font-Lato font-bold text-white bg-blue-950 hover:bg-cuspat-blue focus:ring-4 focus:outline-none focus:ring-blue-400  rounded-lg text-sm px-5 py-3 text-center">Masuk</button>
                </form>
                <div class="text-sm w-full flex justify-center mt-10 font-base text-gray-500">
                    Belum Punya Akun?<button type="button" class="text-cuspat-blue underline ml-1" data-modal-target="daftar" data-modal-toggle="daftar" data-modal-hide="masuk">Daftar Disini</button>
                </div>
            </div>
        </div>
    </div>
</div> 


{{-- daftar --}}
 
            <button data-modal-target="daftar" data-modal-toggle="daftar" class="text-cuspat-blue py-[5px] px-[15px] bg-white rounded-3xl" type="button">
              Daftar
            </button>
            
            <!-- Main modal -->
            <div id="daftar" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative z-50 bg-white rounded-lg shadow">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center " data-modal-hide="daftar">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-7 px-10 w-full flex flex-col rounded-xl">
                          <img src="{{ asset("asset/logo-cuspat/logo-kuning-cuspat.png") }}" class="mx-auto w-24 h-24" alt="logo cuspat">
                            <h3 class="mb-1 text-cuspat-blue text-2xl text-center  font-semibold font-spartan">Selamat Datang  Di Cuspat</h3>
                            <h3 class="mb-4 text-sm text-center font-Lato font-medium text-gray-400">Daftar untuk membuat akun pertamamu & Buat Pola 
                              yang kamu inginkan</h3>
                            <form class="space-y-6 mt-5  w-full" action="/register" method="POST">
                              @csrf
                                <div class="flex items-center ">
                                    <label for="username" class="block w-1/2 mb-2 text-sm font-bold font-Lato text-cuspat-blue">Nama Pengguna</label>
                                      {{-- name diisi sesuai atribut dari table user --}}
                                    <input type="text" name="username" id="username" class="@error('username') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg placeholder:text-gray-400 focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5 "placeholder="Masukkan Nama Pengguna" required value="{{ old('username') }}">
                                    @error('username')
                                      <p class="mt-2 text-red-500 text-pink-600 text-sm">
                                        {{ $message }}
                                      </p>
                                    @enderror
                                </div>
                                <div class="flex items-center ">
                                  <label for="email" class="block w-1/2 mb-2 text-sm font-bold font-Lato text-cuspat-blue">Email</label>
                                    {{-- name diisi sesuai atribut dari table user --}}
                                  <input type="email" name="email" id="email" class="@error('email') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg placeholder:text-gray-400 focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5 "placeholder="Masukkan Email" required value="{{ old('email') }}">
                                  @error('email')
                                    <p class="mt-2 text-red-500 text-pink-600 text-sm">
                                      {{ $message }}
                                    </p>
                                  @enderror
                              </div>
                              <div class="flex items-center">
                                <label for="phone" class="block w-1/2 mb-2 text-sm font-bold font-Lato text-cuspat-blue">Nomor Whatsapp</label>
                                  {{-- name diisi sesuai atribut dari table user --}}
                                <input type="text" name="phone" id="phone" class="@error('phone') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg placeholder:text-gray-400 focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5 "placeholder="Masukkan Nomor Whatsapp" required value="{{ old('phone') }}">
                                @error('phone')
                                  <p class="mt-2 text-red-500 text-pink-600 text-sm">
                                    {{ $message }}
                                  </p>
                                @enderror
                            </div>
                                <div class="relative flex items-center" x-data="{ show: true }">
                                    <label for="password" class="block w-1/2  mb-2 text-sm font-bold font-Lato text-cuspat-blue">Kata Sandi</label>
                                    <iconify-icon icon="mdi:hide" @click="show = !show"
                                    :class="{'hidden': !show, 'block':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                    <iconify-icon icon="mdi:eye" @click="show = !show"
                                    :class="{'block': !show, 'hidden':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                      {{-- name diisi sesuai atribut dari table user --}}
                                    <input type="password" :type="show ? 'password' : 'text'" name="password" id="registerPassword" placeholder="Masukkan Kata Sandi" class="@error('password') border-red-500 @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5" required>
                                </div>
                                @error('password')
                                  <p class="mt-2 text-red-500 text-pink-600 text-sm">
                                    {{ $message }}
                                  </p>
                                @enderror
                                <div class="relative flex items-center" x-data="{ show: true }">
                                  <label for="confirmPassword" class="block w-1/2  mb-2 text-sm font-bold font-Lato text-cuspat-blue">Konfirmasi Kata Sandi</label>
                                  <iconify-icon icon="mdi:hide" @click="show = !show"
                                  :class="{'hidden': !show, 'block':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                  <iconify-icon icon="mdi:eye" @click="show = !show"
                                  :class="{'block': !show, 'hidden':show }" class="absolute cursor-pointer right-4 bottom-2 text-cuspat-blue" widht="24" height="24"></iconify-icon>
                                  <input type="password" :type="show ? 'password' : 'text'" name="confirmPassword" id="confirmPassword" placeholder="Masukkan Konfirmasi Kata Sandi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cuspat-blue focus:border-cuspat-blue block w-full p-2.5" required>
                              </div>
                              <p id="passwordError" class="mt-2 text-red-500 text-pink-600 text-sm hidden">
                                Kata Sandi dan Konfirmasi Kata Sandi Tidak Cocok.
                              </p>
                            <button id="submitButton" type="submit" class="w-full mt-8 font-Lato font-bold text-white bg-blue-950 hover:bg-cuspat-blue focus:ring-4 focus:outline-none focus:ring-blue-400 rounded-lg text-sm px-5 py-3 text-center">Masuk</button>
                            </form>
                            <div class="text-sm w-full flex justify-center mt-8 font-base text-gray-500">
                                Sudah Punya Akun?<button type="button" class="text-cuspat-blue underline ml-1" data-modal-target="masuk" data-modal-toggle="masuk" data-modal-hide="daftar">Masuk</button>
                            </div>
                     </div>
                 </div>
              </div> 
            </div>
        </div>
@endguest

@auth
@include('components/profildropdown')
@endauth
    </div>
  </div>
</nav>
   
   
