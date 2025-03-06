<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course Modal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .modal {
            display: none;
        }
        .modal.active {
            display: flex; /* Use flex to center the modal */
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Modal -->
    <div id="modal" class="modal fixed inset-0 bg-gray-900 bg-opacity-50 items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-md w-96 mx-auto">
            <h2 class="text-lg font-semibold mb-4">Create Course</h2>
            <form id="courseForm">
                <label class="block mb-2">
                    <span class="text-gray-700">Title</span>
                    <input type="text" class="block w-full mt-1 p-2 border border-gray-300 rounded" placeholder="Title" required>
                </label>

                <label class="block mb-2">
                    <span class="text-gray-700">Description:</span>
                    <textarea rows="4" class="block w-full mt-1 p-2 border border-gray-300 rounded" placeholder="Description..." required></textarea>
                </label>

                <label class="block mb-2">
                    <span class="text-gray-700">Price</span>
                    <input type="number" class="block w-full mt-1 p-2 border border-gray-300 rounded" placeholder="0" required>
                </label>

                <label class="inline-flex items-center mb-4">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600" />
                    <span class="ml-2 text-gray-700">This is a free course</span>
                </label>

                <button type="button" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700" onclick="showNextForm()">Next</button>
            </form>

            <!-- Second Form for Video Upload (Hidden Initially) -->
            <div id="secondForm" class="hidden mt-4">
                <h2 class="text-lg font-semibold mb-4">Upload Video (Max Size: 250MB)</h2>
                <form>
                    <label class="block mb-2">
                        <span class="text-gray-700">Upload Video</span>
                        <input type="file" class="block w-full mt-1 p-2 border border-gray-300 rounded" accept="video/*" />
                    </label>

                    <label class="block mb-4">
                        <span class="text-gray-700">Public URL</span>
                        <input type="text" class="block w-full mt-1 p-2 border border-gray-300 rounded" placeholder="Public URL"/>
                    </label>

                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700">Upload</button>
                </form>

                <div class="mt-4 text-center">
                    <span class="text-gray-500">OR</span>
                    <div class="mt-2">
                        <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Import from Google Drive</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showNextForm() {
            document.getElementById('courseForm').classList.add('hidden');
            document.getElementById('secondForm').classList.remove('hidden');
        }

        // Activate the modal on page load
        document.getElementById('modal').classList.add('active');
    </script>

</body>
</html>