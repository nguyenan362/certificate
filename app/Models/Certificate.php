<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    // Đặt tên bảng cho đúng, không cần viết hoa chữ cái đầu tiên nếu bạn không thay đổi tên bảng mặc định
    protected $table = 'certificates';

    protected $fillable = [
        'certificateName',
        'description',
        'validityPeriod',
        'certificateHash',
        'course_id',
    ];

    // Mỗi chứng chỉ thuộc về một khóa học
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
