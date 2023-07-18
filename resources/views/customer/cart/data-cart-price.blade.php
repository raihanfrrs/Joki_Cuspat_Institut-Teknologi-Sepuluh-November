<div class="w-full p-4 bg-white flex flex-col gap-2 h-auto  border-gray-300 rounded-lg border sm:p-6 md:p-4">
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