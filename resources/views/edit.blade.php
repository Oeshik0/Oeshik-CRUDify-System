<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Background image with blur */
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/images/background.jpg') no-repeat center center fixed; /* Replace with your image path */
            background-size: cover;
            filter: blur(8px);
            z-index: -1;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center">

    <!-- Blurred Background -->
    <div class="background"></div>

    <!-- Main Container -->
    <div class="container mx-auto px-4 py-8">
        <!-- Page Title -->
        <h1 class="text-4xl font-bold text-center mb-8 text-white bg-indigo-600 py-4 px-6 rounded-lg shadow-lg">
            Editing Data
        </h1>

        <!-- Edit Form -->
        <div class="overflow-x-auto bg-white shadow-2xl rounded-lg p-6">
            <form action="{{ route('akash.update', $akash->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Indicates this is a PUT request for updating -->

                <div class="form-group mb-4">
                    <label for="name" class="text-gray-700 font-semibold">Name:</label>
                    <input type="text" name="name" id="name" value="{{ $akash->name }}" placeholder="Enter name" required class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="form-group mb-4">
                    <label for="description" class="text-gray-700 font-semibold">Description:</label>
                    <textarea name="description" id="description" rows="4" placeholder="Enter description" required class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ $akash->description }}</textarea>
                </div>

                <div class="form-group mb-4">
                    <label for="salary" class="text-gray-700 font-semibold">Salary:</label>
                    <input type="number" name="salary" id="salary" value="{{ $akash->salary }}" placeholder="Enter salary" required class="w-full p-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="text-center">
                    <button type="submit" class="w-full bg-green-500 text-white py-3 px-6 rounded-lg hover:bg-green-400 transition-all duration-200">
                        Submit
                    </button>
                </div>
            </form>
        </div>

        <!-- Navigation Links -->
        <div class="text-center mt-6">
            <a href="/" class="text-blue-500 font-semibold hover:text-blue-700 hover:underline text-lg">
                Back to Home
            </a>
            <br>
            <a href="/show" class="text-blue-500 font-semibold hover:text-blue-700 hover:underline text-lg">
                Show Entry
            </a>
        </div>
    </div>

</body>
</html>
