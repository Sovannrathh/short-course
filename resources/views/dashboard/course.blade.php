<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Courses Dashboard</title>
</head>
<body class="bg-gray-100 p-6">
    
<div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-yellow-500 p-5 space-y-4 hidden md:block">
        <h2 class="text-xl font-bold">ចុះឈ្មោះ</h2>
        <ul class="space-y-2 border-cyan-300">
            <div>
                <button onclick="changeColor('dashboardButton')" class="w-full text-left">
                    <li id="dashboardButton" class="text-gray-800">📂 ផ្ទាំងគ្រប់គ្រង</li>
                </button>
            </div>
            <div>
                <button onclick="changeColor('courseButton')" class="w-full text-left">
                    <li id="courseButton" class="text-gray-800">📚 វគ្គសិក្សា</li>
                </button>
            </div>
            <div>
                <button onclick="changeColor('uploadvideoButton')" class="w-full text-left">
                    <li id="uploadvideoButton" class="text-gray-800">📜​ ផ្ទុកវីឌីអូ </li>
                </button>
            </div>
            <div>
                <button onclick="changeColor('paymentteacherButton')" class="w-full text-left">
                    <li id="paymentteacherButton" class="text-gray-800">📝 បង់ប្រាក់គ្រូ</li>
                </button>
            </div>
            <div>
                <button onclick="changeColor('paymentstudentButton')" class="w-full text-left">
                    <li id="paymentstudentButton" class="text-gray-800">📜 ប្រាក់សិស្សបង់</li>
                </button>
            </div>
        </ul>
    </aside>
    
    <!-- Main Content -->
    <div class="flex-1 p-6 overflow-y-auto">
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
                <a href="#">Published</a>
                <a href="#">Draft</a>
                <a href="#">Trash</a>
            </div>
            <div class="flex items-center space-x-3">
                <input type="text" placeholder="Search course" class="border rounded-lg px-4 py-2 w-64">
            </div>
        </div>

        <!-- Courses Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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
                                    <span>Update</span>
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
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            

            <!-- Repeat the Course Card for other courses -->
            <!-- ... -->

        </div>
    </div>
</div>

<script>
    function changeColor(activeId) {
        const buttons = ['dashboardButton', 'courseButton', 'uploadvideoButton', 'paymentteacherButton', 'paymentstudentButton'];
        buttons.forEach(buttonId => {
            const textElement = document.getElementById(buttonId);
            if (buttonId === activeId) {
                textElement.classList.add('text-blue-500');
            } else {
                textElement.classList.remove('text-blue-500');
            }
        });
    }
</script>
</body>
</html>