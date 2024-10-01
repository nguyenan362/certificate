<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate for {{ $course->courseName }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 2em;
            font-weight: bold;
        }
        .certificate-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            list-style: none;
            padding: 0;
        }
        .certificate-item {
            background-color: #ffffff;
            padding: 15px 20px;
            border-radius: 8px;
            border-left: 5px solid #007BFF;
            color: #333;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }
        .certificate-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .certificate-item a {
            text-decoration: none;
            color: #007BFF;
            font-size: 1.2em;
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }
        .certificate-item p {
            font-size: 0.95em;
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Certificate for the course: {{ $course->courseName }}</h1>
        <ul class="certificate-list">
            @foreach ($certificates as $certificate)
                <li class="certificate-item">
                    <a href="{{ route('home.showUploadForm', ['course_id' => $course->id, 'certificate_id' => $certificate->id]) }}">
                        {{ $certificate->certificateName }}
                    </a>
                    <p>{{ $certificate->description }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
