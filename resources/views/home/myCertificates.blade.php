<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2em;
        }
        .certificates-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .certificate-item {
            background-color: #f1f1f1;
            padding: 15px;
            border-left: 5px solid #007BFF;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .certificate-item p {
            margin: 0;
            padding: 0;
            font-size: 1em;
            flex-grow: 1;
        }
        .certificate-item .btn {
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .certificate-item .btn:hover {
            background-color: #0056b3;
        }
        .verification-status {
            font-weight: bold;
            margin-left: 20px;
            color: #555;
        }
        .verified {
            color: green; /* Màu sắc cho trạng thái đã duyệt */
        }
        .pending {
            color: orange; /* Màu sắc cho trạng thái chờ */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My certificate</h1>
        <ul class="certificates-list">
            @forelse ($uploadedCertificates as $uploadedCertificate)
                <li class="certificate-item">
                    <p>
                        <strong>Course:</strong> {{ $uploadedCertificate->certificate->course->courseName }} <br><br>
                        <strong>Certificate:</strong> {{ $uploadedCertificate->certificate->certificateName }} <br><br>
                        <strong>Certificate number:</strong> {{ $uploadedCertificate->certificateNumber }} <br><br>
                        <strong>Date of issue:</strong> {{ $uploadedCertificate->issueDate }} <br><br>
                        <strong>Expiration date:</strong> {{ $uploadedCertificate->expiryDate }} <br><br><br>
                        <span class="verification-status ">
                            <strong style="color: red;">Status: Confirmed</strong>
                        </span>
                    </p>
                    <a href="{{ asset('storage/' . $uploadedCertificate->uploadedHash) }}" class="btn" target="_blank">View certificate</a>
                </li>
            @empty
                <p>You have not uploaded any certificates yet.</p>
            @endforelse
        </ul>
    </div>
</body>
</html>
