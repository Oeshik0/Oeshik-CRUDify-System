<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Entry</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
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

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        
        .container {
            width: 50%;
            margin: 80px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.85); 
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input, textarea, button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
   
    <div class="background"></div>

    
    @if (session('success'))
        <div style="color: green; font-weight: bold; margin-top: 20px;">
            {{ session('success') }}
        </div>
    @endif

    
    <div class="container">
        <h2>Create a New Entry</h2>
        
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" rows="4" placeholder="Enter description" required></textarea>
            </div>
            <div class="form-group">
                <label for="salary">Salary:</label>
                <input type="number" name="salary" id="salary" placeholder="Enter salary" required>
            </div>
            <button type="submit">Submit</button>
        </form>
        <a href="/">Back to Home</a> <br>
        <a href="/show">Show Entry</a>
    </div>
</body>
</html>
