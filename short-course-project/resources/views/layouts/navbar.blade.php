<!-- Navbar -->
<nav class="bg-gray-800">
    <div class="mx-auto max-w-8xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <img class="h-8 w-auto"
                        src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="#"
                            class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">វគ្គសិក្សា</a>

                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button id="loginBtn" type="button"
                    class="  bg-gray-500 text-white py-2 rounded-md hover:bg-gray-600">
                    <div>ចូលគណនី</div>
                </button>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button id="signupBtn" type="button"
                    class="  bg-gray-500 text-white py-2 rounded-md hover:bg-gray-600">
                    <div>ចុះឈ្មោះ</div>
                </button>
            </div>
        </div>
    </div>

    <!-- Login Modal (Hidden by default) -->
    <div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96 relative">
            <h2 class="text-2xl font-semibold text-center mb-4">ចូលគណនី</h2>

            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">អុីមែល</label>
                    <input type="email" id="email"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter your email">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700">លេខសម្ងាត់</label>
                    <input type="password" id="password"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter your password">
                </div>

                <div class="flex justify-between items-center">
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-700">Login</button>
                </div>
            </form>

            <button id="closeModal" class="absolute top-5 right-6 text-gray-500 hover:text-gray-700">
                &times;
            </button>
        </div>
    </div>

    <!-- Sign Up Modal (Hidden by default) -->
    <div id="signupModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96 relative">
            <h2 class="text-2xl font-semibold text-center mb-4">ចុះឈ្មោះ</h2>

            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">ឈ្មោះ</label>
                    <input type="text" id="name"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter your name">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700">អុីមែល</label>
                    <input type="email" id="email"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter your email">
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-gray-700">លេខសម្ងាត់</label>
                    <input type="password" id="password"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Enter your password">
                </div>

                <div class="flex justify-between items-center">
                    <button type="submit"
                        class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-700">ចុះឈ្មោះ</button>
                </div>
            </form>

            <button id="closeSignupModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl">
                &times;
            </button>
        </div>
    </div>

    <script>
        // JavaScript to handle modal visibility
        const loginBtn = document.getElementById('loginBtn');
        const loginModal = document.getElementById('loginModal');
        const closeModal = document.getElementById('closeModal');

        const signupBtn = document.getElementById('signupBtn');
        const signupModal = document.getElementById('signupModal');
        const closeSignupModal = document.getElementById('closeSignupModal');


        // Show modal when login button is clicked
        loginBtn.addEventListener('click', function() {
            loginModal.classList.remove('hidden');
        });

        // Hide modal when close button is clicked
        closeModal.addEventListener('click', function() {
            loginModal.classList.add('hidden');
        });

        // Show Sign Up Modal 
        signupBtn.addEventListener('click', function() {
            signupModal.classList.remove('hidden');
        });

        // Close Sign Up Modal 
        closeSignupModal.addEventListener('click', function() {
            signupModal.classList.add('hidden');
        });

        // Hide modal if clicked outside the modal content
        window.addEventListener('click', function(e) {
            if (e.target === loginModal) {
                loginModal.classList.add('hidden');
            }
            if (e.target === signupModal) {
                signupModal.classList.add('hidden');
            }
        });
    </script>

    <!-- Mobile menu -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">វគ្គសិក្សា</a>
        </div>
    </div>
</nav>
