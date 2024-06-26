<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Activity 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>

    <style>
        #sidebar {
            background-color: #1a202c;
            color: white;
            min-height: 100vh;
            padding: 20px;
        }
        #sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        #sidebar a:hover {
            background-color: #2d3748;
        }
        @media (max-width: 768px) {
            #sidebar {
                position: fixed;
                width: 100%;
                height: auto;
                z-index: 1;
            }
            #content {
                margin-top: 200px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark">
                <div id="brand" class="text-xl mb-4">
                    My Awesome App
                </div>
                <nav id="main-nav">
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/products">Products</a>
                    <a href="/contact">Contact Us</a>
                </nav>
            </div>
            <main id="content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="flex flex-col" >
                    @yield('content')
                </div>
                <footer class="text-center text-gray-500 py-3 mt-auto">
                    Copyright &copy; 2024. All rights reserved.
                </footer>
            </main>
        </div>
    </div>
</body>
</html>
 