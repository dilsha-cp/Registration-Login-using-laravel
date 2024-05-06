<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        li {
            display: inline;
            margin-right: 20px;
        }
        a {
            text-decoration: none;
            color: #555;
            font-weight: bold;
        }
        a:hover {
            color: #000;
        }
    </style>
</head>
<body>
    <h1>Welcome</h1>
    <ul>
        <li><a href="{{ route('Home') }}">Home</a></li>
        <li><a href="{{ route('Add') }}">Registration</a></li>
        <li><a href="{{ route('find') }}">Login</a></li>
    </ul>
</body>
</html>
