<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Dashboard</title>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-yellow-400 p-5 space-y-4 hidden md:block">
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
        <div class="flex-1 flex flex-col">
            <!-- Top Nav -->
            <nav class="bg-black text-white p-4 flex justify-between items-center">
                <button class="md:hidden text-white text-2xl">☰</button> <!-- Mobile Menu Button -->
                <input type="text" placeholder="Search" class="px-4 py-2 rounded-md text-black w-full md:w-auto" />
                <div class="flex items-center space-x-4">
                    <span>🔔</span>
                    <span>⚙️</span>
                    <img src="https://via.placeholder.com/40" class="w-10 h-10 rounded-full" />
                </div>
            </nav>
                        
            <!-- Dashboard Content -->
            <div class="p-6 space-y-6">
                <!-- Stats & Upcoming -->
                <div class="grid grid-cols-3 gap-4">
                    <div class="bg-white p-4 shadow rounded-lg">
                        <h3 class="text-lg font-bold">សមិទ្ធផល</h3>
                        <canvas id="performanceChart" class="h-32"></canvas>
                    </div>
                    <div class="bg-white p-4 shadow rounded-lg col-span-2">
                        <h3 class="text-lg font-bold">ថ្នាក់ដែលបានចុះឈ្មោះ</h3>
                        <ul>
                            <li class="py-2">📖 Cloud Computing Essentials - 5:30pm</li>
                            <li class="py-2">📱 Mobile App Development Trends - 2:30pm ✅</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Courses -->
                <div>
                    <h3 class="text-lg font-bold">ថ្នាក់ដែលបានចុះឈ្មោះថ្មីៗ</h3>
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Data Analysis</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Figma UI Design</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Ethical Hacking & Security</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Data Analysis</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Figma UI Design</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Ethical Hacking & Security</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Data Analysis</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Learn Figma UI Design</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                        <div class="bg-white p-4 shadow rounded-lg">
                            <h4 class="font-bold">Ethical Hacking & Security</h4>
                            <p>⏳ 2:30hr - 📚 14 Lessons - ✅ Assignment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('performanceChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Performance Score',
                    data: [5, 6, 7.5, 8, 10, 5, 6.5],
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    barThickness: 30,
                    maxBarThickness: 40
                }]
            },
            options: {
                responsive: false,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,  
                        max: 10  
                    },
                    x: {
                        barPercentage: 1,
                        categoryPercentage: 1
                    }
                }
            }
        });

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