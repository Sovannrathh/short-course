<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-200 flex flex-col min-h-screen">
    @include('layouts.navbar')


    <!-- Main content area -->
    <main class="flex-grow">
        <!-- Your main content goes here -->
        <div class="w-full h-[400px] bg-amber-400 mx-auto place-content-center my-0">
            @yield('contentMain')
            </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        @include('layouts.footer')
    </footer>

    <script>
        document.getElementById("profileButton").addEventListener("click", function() {
            document.getElementById("profileMenu").classList.toggle("hidden");
        });

        document.getElementById("mobileMenuButton").addEventListener("click", function() {
            document.getElementById("mobileMenu").classList.toggle("hidden");
        });
    </script>
</body>

</html>
