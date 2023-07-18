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