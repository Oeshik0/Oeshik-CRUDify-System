<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/images/background.jpg') no-repeat center center fixed; 
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
            Data Table
        </h1>

        <!-- Data Table -->
        <div class="overflow-x-auto bg-white shadow-2xl rounded-lg p-6">
            <table class="w-full table-auto border-collapse">
                <!-- Table Header -->
                <thead class="bg-indigo-600 text-white text-sm uppercase font-bold">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Description</th>
                        <th class="py-3 px-6 text-left">Salary</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody class="text-gray-700 text-sm">
                    @foreach ($akash as $asur)
                        <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-300">
                            <td class="py-3 px-6 text-left">{{ $asur->id }}</td>
                            <td class="py-3 px-6 text-left">{{ $asur->name }}</td>
                            <td class="py-3 px-6 text-left">{{ $asur->description }}</td>
                            <td class="py-3 px-6 text-left">{{ $asur->salary }}</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center gap-4">
                                    <!-- Edit Button -->
                                    <a href="{{ route('akash.edit', $asur->id) }}" 
                                       class="bg-yellow-500 text-white py-2 px-4 rounded-lg hover:bg-yellow-400 transition-all duration-200 transform hover:scale-105">
                                        Edit
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('akash.delete', $asur->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-400 transition-all duration-200 transform hover:scale-105">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        
        <div class="text-center mt-6">
            <a href="/" class="text-blue-600 font-semibold hover:text-blue-800 text-lg hover:underline">
                Back to Home
            </a>
        </div>
    </div>

</body>
</html>
