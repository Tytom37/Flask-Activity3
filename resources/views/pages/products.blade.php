@extends('templates.base')

@section('content')
    <div class="flex justify-between bg-gray-100 p-2 items-center">
        <div>
            <h1 class="text-4xl content-center">Products</h1>
        </div>
        <div class="flex items-center">
            <div>
                <button type="button" class="btn bg-green-200 text-green-900 hover:bg-green-400 mx-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add
                </button>
                
                @include('templates._add-product-modal')
            </div>
            <div>
                <form hx-get="/api/products"
                      hx-trigger="submit"
                      hx-target="#products_list"
                      hx-reset="true">
                    <input type="text" name="filter" class="p-2 border border-gray-300 rounded mt-3">
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editProductModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editProductLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="editProductContent">
                
            </div>
        </div>
    </div>

    <div id="products_list" class="p-5 bg-gray-100" hx-get="/api/products" hx-trigger="load delay:500ms" hx-swap="innerHTML">

    </div>
@endsection

<script>
    document.addEventListener('htmx:afterRequest', function(event) {
        if (event.detail.xhr.responseURL.includes('/api/products') && event.detail.xhr.method === 'POST') {
            var response = JSON.parse(event.detail.xhr.responseText);
            var message = response.message;
            document.getElementById('addProductMessage').innerHTML = '<div class="bg-green-500 text-white text-center p-2 rounded ml-4 items-center w-25"><h3>' + message + '</h3></div>';
        }
    });
</script>
