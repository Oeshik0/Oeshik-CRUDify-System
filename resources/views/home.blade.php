<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('/images/background.jpg') no-repeat center center fixed; 
            background-size: cover; 
            font-family: Arial, sans-serif;
        }
        .content {
            text-align: center;
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
        .btn {
            text-decoration: none;
            padding: 10px 20px;
            color: white;
            background-color: #007bff; 
            border-radius: 5px;
        }
        .btn-success {
            background-color: #28a745; 
        }
        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="content" >
        <h1>Welcome To Oeshik's CRUDify System</h1>
        <div style="margin-top: 20px;">
            <a href="/" class="btn" style="margin-right: 10px;">Home</a>
            <a href="/create" class="btn btn-success">Create</a>
        </div>
    </div>
</body>
</html>
