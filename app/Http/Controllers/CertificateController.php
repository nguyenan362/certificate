<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CertificateController extends Controller
{
    public function index()
    {
        // Load certificates linked with each course
        $courses = Course::with('certificates')->get();

        return view('admin.certificate', compact('courses'));
    }

    public function store(Request $request, $courseId)
    {
        $request->validate([
            'certificateName' => 'required|string|max:255',
            'description' => 'nullable|string',
            'validityPeriod' => 'required|integer',
            'certificateHash' => 'required|string|max:255', 
        ]);

        // Sử dụng MD5 để hash mã trước khi lưu
        $hashedCertificateHash = md5($request->certificateHash);

        Certificate::create([
            'certificateName' => $request->certificateName,
            'description' => $request->description,
            'validityPeriod' => $request->validityPeriod,
            'course_id' => $courseId, 
            'certificateHash' => $hashedCertificateHash, 
        ]);

        return redirect()->route('admin.certificate.index')->with('success', 'Certificate has been successfully added!');
    }

    // New function to show certificates of a specific course
    public function showCourseCertificates($courseId)
    {
        $course = Course::with('certificates')->findOrFail($courseId);

        return view('admin.course_certificates', compact('course'));
    }
}
