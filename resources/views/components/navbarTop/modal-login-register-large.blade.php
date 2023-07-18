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

{{-- register --}}
 
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