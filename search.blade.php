<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"],
        input[type="password"],
        button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .back-link {
            text-align: center;
            margin-top: 10px;
        }
        .back-link a {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="{{ route('find.post') }}" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="Enter your email">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">

            <button type="submit">Find</button>
        </form>
        <div class="back-link">
            <a href="{{ route('Home') }}">Home</a>
        </div>

</div>
</body>
</html
