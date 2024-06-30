@extends('templates.base')

@section('content')
    <div class="mt-4 w-full flex justify-center " id="EditPage">
        <div class="w-[100vh] bg-white rounded shadow-md p-3 mt-10">
            <h1 class="text-3xl ">Edit</h1>
            <form class="mt-6" 
                hx-put="/api/products/{{$product->id}}"
                hx-trigger="submit"
                hx-target="body"
                hx-swap="innerHTML"
                method="POST">
                @csrf
                    <div class="mb-2">
                        <label for="name" class="text-xl">Name:</label>
                        <input type="text" name="name" id="name" class="w-full p-2 rounded bg-gray-300 text-black" value="{{$product->name}}">
                    </div>
                    <div class="mb-2">
                        <label for="desc" class="text-xl">Description:</label>
                        <textarea name="desc" id="desc" cols="30" rows="3" class="w-full p-2 rounded bg-gray-300 text-black">{{$product->desc}}</textarea>
                    </div>
                    <div class="mb-2">
                        <label for="price" class="text-xl">Price:</label>
                        <input type="number" name="price" id="price" class="w-full p-2 rounded bg-gray-300 text-black" value="{{$product->price}}">
                    </div>
                    <div class="mb-2">
                        <label for="qty" class="text-xl">Quantity:</label>
                        <input type="number" name="qty" id="qty" class="w-full p-2 rounded bg-gray-300 text-black" value="{{$product->qty}}">
                    </div>

                <footer class="flex items-center">
                    <div class="flex-1">
                        <button class="bg-blue-600 text-white p-2  rounded hover:bg-blue-500 transition ease-linear duration-150s" type="submit">Edit Product</button>
                    </div>
                    <div>
                        <a href="/products" class="bg-green-600 rounded text-white px-3 py-2.5">Back</a>
                    </div>
                </footer>
            </form>
        </div>
    </div>
@endsection