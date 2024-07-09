<div class="p-4 rounded-border border-gray-400 shadow mb-2 fade-me-out" id="product{{ $prod->id }}">
    @include('templates._confirm-delete-product', ['prod'=>$prod])
    <div class="text-2xl">{{ $prod->name }}</div>
    <div class="italic text-gray-500 py-2">{{ $prod->desc }}</div>
    <div class="text-4xl text-blue-700 font-bold">{{ $prod->price }}</div>
    <div class="flex justify-between">
        <div class="text-2xl text-gray-700 font-bold flex">{{ $prod->qty }}</div>
        <button class="py-2 px-4 bg-red-300 border border-red-400 text-red-600 rounded"
            onclick="document.getElementById('deleteProduct{{ $prod->id }}').classList.remove('hidden')">Delete</button>
    </div>
</div>
