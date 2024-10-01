<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload certificate</title>
    <style>
        /* CSS như trước đó */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 1.8em;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="date"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        .form-group input:focus {
            border-color: #007BFF;
            outline: none;
        }
        .form-group button {
            padding: 12px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload certificate for {{ $certificate->certificateName }}</h1>
        <form action="{{ route('home.uploadCertificate', $certificate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="issueDate">Date of issue</label>
                <input type="date" id="issueDate" name="issueDate" required>
            </div>
            <div class="form-group">
                <label for="expiryDate">Expiration date</label>
                <input type="date" id="expiryDate" name="expiryDate" required>
            </div>
            <div class="form-group">
                <label for="certificateNumber">Certificate number</label>
                <input type="text" id="certificateNumber" name="certificateNumber" required>
            </div>
            <div class="form-group">
                <label for="uploadedHash">Uploaded Hash</label> <!-- Thêm trường nhập liệu mới -->
                <input type="text" id="uploadedHash" name="uploadedHash" required>
            </div>
            <div class="form-group">
                <label for="file">Upload certificate file (PDF, JPG, JPEG, PNG)</label>
                <input type="file" id="file" name="file" required>
            </div>
            <div class="form-group">
                <button type="submit">Upload</button>
            </div>
        </form>
        @if ($errors->any())
            <div style="color: red;">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
            </div>
        @endif

        @if (session('success'))
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif

    </div>
</body>
</html>
