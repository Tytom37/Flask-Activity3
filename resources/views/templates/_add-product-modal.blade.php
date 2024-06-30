<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Product</h1>
            </div>
            <form
                hx-post="/api/products"
                hx-trigger="submit"
                hx-target="#products_list"
                hx-swap="innerHTML"
                hx-on::after-request="this.reset(); document.getElementById('closeButton').style.display = 'block';"
            >
            @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" >
                        <div id = "name_error" hx-swap-oob="true"> </div>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea class="form-control" id="desc" name="desc" ></textarea>
                        <div id = "desc_error" hx-swap-oob="true"> </div>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" >
                        <div id = "price_error" hx-swap-oob="true"> </div>
                    </div>
                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="qty" name="qty" >
                        <div id = "qty_error" hx-swap-oob="true"> </div>
                    </div>
                </div>
                <div id="addProductMessage" hx-swap-oob="true">
                </div>
                <div class="modal-footer border-0 justify-start">
                    <button type="submit" class="btn btn-primary" >Save</button>
                    <button type="button" class="btn btn-secondary hidden" id="closeButton" data-bs-dismiss="modal" >Close</button>
                </div>
            </form>
        </div>
    </div>
    <script> 
        document.getElementById('staticBackdrop').addEventListener('hidden.bs.modal', function() {
            document.getElementById('addProductMessage').innerHTML = '';
            document.getElementById('closeButton').style.display = 'none';
        });
    </script>
</div>