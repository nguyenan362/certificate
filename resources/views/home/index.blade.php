<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All courses</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        header {
            background-color: #007BFF;
            padding: 20px;
            color: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5em;
            font-weight: bold;
        }
        .login ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 15px;
        }
        .login ul li {
            display: inline;
        }
        .login ul li a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .login ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .btn-view-certificates {
            padding: 8px 15px;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
    
        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
            font-size: 2.2em;
            font-weight: 700;
        }
        .course-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .course-item {
            background-color: #ffffff;
            border: 1px solid #dddddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .course-item a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .course-item p {
            color: #555;
            font-size: 0.95em;
            line-height: 1.6;
        }
        .course-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        .footer {
            background-color: #f0f2f5;
            padding: 20px;
            text-align: center;
            color: #555;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="logo">Course Management</div>
        <div class="login">
            <ul>
                @if(Auth::check())
                    <li><a href="">Hello, {{ Auth::user()->name }}</a></li>
                    <li><a href="{{ route('home.myCertificates') }}" class="btn-view-certificates">My certificate</a></li>
                    <li><a href="{{ route('logout') }}">LOGOUT</a></li>
                @else
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                    <li><a href="{{ route('register') }}">REGISTER</a></li>
                @endif
            </ul>
        </div>
    </header>
    <div class="container">
        <h1>All courses</h1>
        <ul class="course-list">
            @foreach ($courses as $course)
                <li class="course-item">
                    <a href="{{ route('home.showCourse', $course->id) }}">
                        {{ $course->courseName }}
                    </a>
                    <p>{{ $course->description }}</p>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="footer">
        &copy; 2024 Course Management. All rights reserved.
    </div>
</body>
</html>
