<button id="dropdownTopButton" data-dropdown-toggle="dropdownTop" data-dropdown-placement="top" class="mr-3 mb-3 md:mb-0 text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown top <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
  </svg></button>

<!-- Dropdown menu -->
<div id="dropdownTop" class="z-10 hidden relative bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
      </li>
    </ul>
</div>
<div class="w-full p-4 bg-white lg:flex flex-col gap-2 h-auto  border-gray-300 lg:rounded-lg border sm:p-6 md:p-4">
    <div class="flex w-full justify-between items-center"> 
        <span class="text-xs font-Lato text-gray-400">Subtotal</span>
        <span class="text-lg font-lato font-medium text-cuspat-blue">@rupiah($price->subtotal)</span>
    </div>
    <div class="flex w-full justify-between items-center">
        <span class="text-xs font-Lato text-gray-400">Diskon</span>
        <span class="text-lg font-lato font-medium text-cuspat-blue">@rupiah($price->discount)</span>
    </div>
    <hr class="h-px my-3 border-0 bg-slate-300 ">
    <div class="flex w-full justify-between">
        <span class="font-lato text-lg font-semibold text-cuspat-blue">Total</span>
        <span class="text-lg font-lato font-medium">@rupiah($price->subtotal - $price->discount)</span>
    </div>
    <button type="button" class="bg-cuspat-blue mt-2 text-white rounded-lg px-2 py-2 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 ">Beli</button>
</div>