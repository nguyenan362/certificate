<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadCertificate extends Model
{
    use HasFactory;

    protected $table = 'Upload_certificates';

    protected $fillable = [
        'user_id',
        'certificate_id',
        'issueDate',
        'expiryDate',
        'certificateNumber',
        'uploadedHash',
        'verificationStatus',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }
}