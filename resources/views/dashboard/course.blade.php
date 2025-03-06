<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Courses Dashboard</title>
</head>
<body class="bg-gray-100 p-6">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Courses</h1>
        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-700">
            + New Course
        </button>
    </div>

    <!-- Filters & Search -->
    <div class="flex justify-between items-center mb-6">
        <div class="space-x-4 text-gray-600 font-medium">
            <a href="#" class="text-blue-600 border-b-2 border-blue-600 pb-1">All</a>
            <a href="#">Mine</a>
            <a href="#">Pending approval</a>
            <a href="#">Published</a>
            <a href="#">Draft</a>
            <a href="#">Trash</a>
        </div>
        <div class="flex items-center space-x-3">
            <input type="text" placeholder="Search course" class="border rounded-lg px-4 py-2 w-64">
            <button class="text-blue-600">Show filters</button>
        </div>
    </div>

    <!-- Courses Grid -->
    <div class="grid grid-cols-3 gap-6">
        
        <!-- Course Card -->
        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 text-xs rounded">Free</span>
            <span class="absolute top-2 right-2 bg-blue-600 text-white px-2 py-1 text-xs rounded">Published</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Introduction to Visual Design</h2>
            <p class="text-gray-500 text-sm">Ramesh Verma | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>


            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>
            </td>
            </tr>
        </tbody>

    </table>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-gray-700 text-white px-2 py-1 text-xs rounded">$126</span>
            <span class="absolute top-2 right-2 bg-gray-500 text-white px-2 py-1 text-xs rounded">Draft</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Creative Writing: Unleashing Your Imagination</h2>
            <p class="text-gray-500 text-sm">Olivia Green | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>


            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>
            </td>
            </tr>
        </tbody>

    </table>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-yellow-500 text-white px-2 py-1 text-xs rounded">Open</span>
            <span class="absolute top-2 right-2 bg-orange-500 text-white px-2 py-1 text-xs rounded">Pending approval</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Beginner's Guide to Graphic Design</h2>
            <p class="text-gray-500 text-sm">Ramesh Verma | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>


            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>
            </td>
            </tr>
        </tbody>

    </table>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 text-xs rounded">Free</span>
            <span class="absolute top-2 right-2 bg-blue-600 text-white px-2 py-1 text-xs rounded">Published</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Introduction to Visual Design</h2>
            <p class="text-gray-500 text-sm">Ramesh Verma | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>


            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>
            </td>
            </tr>
        </tbody>

    </table>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-gray-700 text-white px-2 py-1 text-xs rounded">$126</span>
            <span class="absolute top-2 right-2 bg-gray-500 text-white px-2 py-1 text-xs rounded">Draft</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Creative Writing: Unleashing Your Imagination</h2>
            <p class="text-gray-500 text-sm">Olivia Green | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>


            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>
            </td>
            </tr>
        </tbody>

    </table>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-yellow-500 text-white px-2 py-1 text-xs rounded">Open</span>
            <span class="absolute top-2 right-2 bg-orange-500 text-white px-2 py-1 text-xs rounded">Pending approval</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Beginner's Guide to Graphic Design</h2>
            <p class="text-gray-500 text-sm">Ramesh Verma | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>


            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>
            </td>
            </tr>
        </tbody>

    </table>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 text-xs rounded">Free</span>
            <span class="absolute top-2 right-2 bg-blue-600 text-white px-2 py-1 text-xs rounded">Published</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Introduction to Visual Design</h2>
            <p class="text-gray-500 text-sm">Ramesh Verma | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>


            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>
            </td>
            </tr>
        </tbody>

    </table>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-gray-700 text-white px-2 py-1 text-xs rounded">$126</span>
            <span class="absolute top-2 right-2 bg-gray-500 text-white px-2 py-1 text-xs rounded">Draft</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Creative Writing: Unleashing Your Imagination</h2>
            <p class="text-gray-500 text-sm">Olivia Green | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>

            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>

            </td>
            </tr>
        </tbody>

    </table>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-yellow-500 text-white px-2 py-1 text-xs rounded">Open</span>
            <span class="absolute top-2 right-2 bg-orange-500 text-white px-2 py-1 text-xs rounded">Pending approval</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Beginner's Guide to Graphic Design</h2>
            <p class="text-gray-500 text-sm">Ramesh Verma | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>


            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>

            </td>
            </tr>
        </tbody>

    </table>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 text-xs rounded">Free</span>
            <span class="absolute top-2 right-2 bg-blue-600 text-white px-2 py-1 text-xs rounded">Published</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Introduction to Visual Design</h2>
            <p class="text-gray-500 text-sm">Ramesh Verma | 12 Jan 2023</p>

            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>


            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>

            </td>
            </tr>
        </tbody>

    </table>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-gray-700 text-white px-2 py-1 text-xs rounded">$126</span>
            <span class="absolute top-2 right-2 bg-gray-500 text-white px-2 py-1 text-xs rounded">Draft</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Creative Writing: Unleashing Your Imagination</h2>
            <p class="text-gray-500 text-sm">Olivia Green | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
                <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>

            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>

            </td>
            </tr>
        </tbody>
            </table>
        </div>

        <div class="bg-white p-4 rounded-lg shadow-md relative">
            <span class="absolute top-2 left-2 bg-yellow-500 text-white px-2 py-1 text-xs rounded">Open</span>
            <span class="absolute top-2 right-2 bg-orange-500 text-white px-2 py-1 text-xs rounded">Pending approval</span>
            <img src="https://via.placeholder.com/300" alt="Course" class="rounded-lg mb-4">
            <h2 class="text-lg font-semibold">Beginner's Guide to Graphic Design</h2>
            <p class="text-gray-500 text-sm">Ramesh Verma | 12 Jan 2023</p>
            <table class="table-fixed w-full border border-gray-300 rounded-lg">
    
        <tbody class="text-gray-700 text-sm font-light">
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 flex items-center space-x-10 bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- View -->
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 4H9m6-8H9m3 12a9 9 0 100-18 9 9 0 000 18z" />
                        </svg>
                        <span>View</span>
                    </div>

            <!-- Edit -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.5 2.5a2.121 2.121 0 113 3L13 14l-4 1 1-4 8.5-8.5z" />
                </svg>
                <span>Edit</span>
            </div>

            <!-- Delete -->
            <div class="flex items-center space-x-2 cursor-pointer hover:text-red-600">
            <svg class="w-5 h-5 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            <span class="text-gray-700">Delete</span>
            </div>

            <!-- More -->
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01" />
                </svg>
                <span>More</span>
            </div>

            </td>
            </tr>
        </tbody>

    </table>
</div>

</div>

</body>
</html>
