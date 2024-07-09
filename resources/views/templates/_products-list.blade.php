@foreach($products->get() as $prod)
    @include('templates._list-of-products',['prod'=>$prod])
@endforeach

<div id="name_error" hx-swap-oob="true" >
</div> 

<div id="desc_error" hx-swap-oob="true" >
</div>
 
<div id="price_error" hx-swap-oob="true" >
</div> 

<div id="qty_error" hx-swap-oob="true" >
</div> 

<div id="addProductMessage" hx-swap-oob="true">
    <div class="bg-green-500 text-white text-center p-2 rounded ml-4 items-center w-25">
        <h3>Product Added</h3>
    </div>
</div>