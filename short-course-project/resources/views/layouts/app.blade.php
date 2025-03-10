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
            <div class="container p-5 grid grid-cols-2 gap-5 md:flex-row ">
                <div class="grid grid-rows-2 justify-center">
                    <div class="w-[300px] sticky">
                        <blockquote class="text-center text-6xl font-semibold text-gray-900 italic px-4">
                            ទទួលបាន​
                            <span
                                class="relative inline-block before:absolute before:-inset-1 before:block before:-skew-y-3 before:bg-amber-500 m-3">
                                <span class="relative text-gray-50">ចំណេះ</span>
                            </span>
                            <span>ដឹងថ្មី</span>
                        </blockquote>
                    </div>
    
                    <div class="m-3">
                        <h1>សិក្សាតាម​ប្រព័ន្ធអនឡាញជាមួយពួកយេីងវគ្គសិក្សាខាងអាយធី​ដូចជាខាង​វិទ្យាសាស្ត្រកំុព្យូទ័រ​
                        </h1>
                        <h1>ផ្នែក design ផ្នែក Networking </h1>
                    </div>
                </div>
                <div class="bg-cyan-50 w-[350px] h-[300px] place-content-center">3</div>
            </div>
            {{-- Sponsorship line --}}
            <div class="containe w-full h-[200px]">
                <div class="container  flex flex-col-2 p-4 justify-start">
                    <div class="container w-[200px] h-[125px]">
                        <p>ដៃគូសហការ</p>
                        <div class="size-20 flex-none bg-slate-900"></div>
    
                    </div>
                    <div class="size-14"></div>
                    <div class="">
                        <p>សាស្ត្រាចារ្យ</p>
                        <div class="size-20 flex-none bg-slate-900">
    
                        </div>
                    </div>
                </div>
        
                </div>
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
