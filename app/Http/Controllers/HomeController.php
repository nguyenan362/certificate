<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Certificate;
use App\Models\UploadCertificate;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Hiển thị danh sách các khóa học
    public function index()
    {
        $courses = Course::all();
        return view('home.index', compact('courses'));
    }

    // Hiển thị các chứng chỉ của khóa học
    public function showCourse($id)
    {
        $course = Course::findOrFail($id);
        $certificates = $course->certificates;
        return view('home.showCourse', compact('course', 'certificates'));
    }

    // Hiển thị form upload chứng chỉ
    public function showUploadForm($course_id, $certificate_id)
    {
        $certificate = Certificate::findOrFail($certificate_id);
        return view('home.uploadCertificate', compact('certificate'));
    }

    public function uploadCertificate(Request $request, $certificateId)
    {
        // Tìm chứng chỉ dựa trên ID
        $certificate = Certificate::find($certificateId);

        // Nếu không tìm thấy chứng chỉ, trả về lỗi
        if (!$certificate) {
            return back()->withErrors(['message' => 'Certificate does not exist.']);
        }

        $hashedUploadedHash = md5($request->uploadedHash);

        if ($hashedUploadedHash !== $certificate->certificateHash) {
            return back()->withErrors(['message' => 'The certificate is not valid.']);
        }

        // Nếu mã khớp, tiếp tục lưu dữ liệu vào database
        UploadCertificate::create([
            'user_id' => auth()->id(), 
            'certificate_id' => $certificateId,
            'issueDate' => $request->issueDate,
            'expiryDate' => $request->expiryDate,
            'certificateNumber' => $request->certificateNumber,
            'uploadedHash' => $hashedUploadedHash,
            'verificationStatus' => 'Confirmed',
        ]);

        return back()->with('success', 'Certificate upload successful!');
    }

    public function myCertificates()
    {
        $userId = Auth::id();
        $uploadedCertificates = UploadCertificate::where('user_id', $userId)
            ->with(['certificate.course'])
            ->get();

        return view('home.myCertificates', compact('uploadedCertificates'));
    }
}
