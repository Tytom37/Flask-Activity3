<div id="products_list" class='flex flex-col gap-2'>
    @foreach($products as $prod)
        <div class='flex flex-col gap-2'>
            <div class='p-4 rounded overflow-hidden shadow-md bg-blue-100 mt-3'>
                <h1 class='text-2xl'>{{ $prod->name }}</h1>
                <h3 class='text-2xl'>{{ $prod->desc }}</h3>
                <p class='text-lg'>Price: {{ $prod->price }}</p>
                <p class='text-lg'>Quantity: {{ $prod->qty }}</p>
                <div class='flex justify-end gap-2'>
                    <div>
                        <button hx-get='/product/{{$prod->id}}/edit'
                            hx-target="body"
                            hx-swap="innerHTML"
                            >
                            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='size-6 text-blue-500'>
                                <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10' />
                            </svg>         
                        </button>
                    </div>

                    <button
                        hx-confirm="Are you sure you want to delete this product?" 
                        hx-delete="/api/product/{{$prod->id}}" 
                        hx-swap="delete" 
                        hx-target="this"
                        hx-on="htmx:afterRequest: window.location.reload()">
                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='size-6 text-red-500'>
                            <path stroke-linecap='round' stroke-linejoin='round' d='m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0' />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
