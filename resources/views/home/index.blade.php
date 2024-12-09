<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Poppins';
            box-sizing: border-box;
        }
        nav {
            background-color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            color: #fff;
        }
        nav .my-logos span {
            color: red;
        }
        .nav-list{
            display: flex;
            list-style: none;
        }
        .nav-list li a {
            color: #fff;
            font-size: 16px;
            margin-left: 20px;
            text-decoration: none;
        }
        .nav-list li a:hover {
            color: red;
        }
    </style>
</head>
<body>
    <nav>
        <h2 class="my-logos">Ran<span>dz</span></h2>
        <div>
            <ul class="nav-list">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/projects">Projects</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>