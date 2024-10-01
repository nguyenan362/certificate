<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate for Course</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #e9ecef; 
        }
        .container {
            margin-top: 50px;
            max-width: 800px;
            background-color: #ffffff; 
            border-radius: 10px; 
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px; 
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff; 
        }
        .table th {
            background-color: #007bff; 
            color: #ffffff; 
        }
        .table td {
            background-color: #d1ecf1; 
            color: #212529; 
        }
        .table td:hover {
            background-color: #c4e3f3; 
        }
        .btn {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Certificate for Course: {{ $course->courseName }}</h1>
    <a href="{{ route('admin.certificate.index') }}" class="btn btn-secondary">Back</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Certificate Name</th>
                <th>Describe</th>
                <th>Term (days)</th>
                <th>Creation date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($course->certificates as $certificate)
                <tr>
                    <td>{{ $certificate->certificateName }}</td>
                    <td>{{ $certificate->description }}</td>
                    <td>{{ $certificate->validityPeriod }}</td>
                    <td>{{ $certificate->created_at->format('d/m/Y') }}</td> <!-- Định dạng ngày -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
