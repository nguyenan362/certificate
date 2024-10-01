<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Đặt tên bảng cho đúng, không cần viết hoa chữ cái đầu tiên nếu bạn không thay đổi tên bảng mặc định
    protected $table = 'courses'; 

    protected $fillable = [
        'courseName',
        'description',
        'duration',
    ];

    // Khóa học có nhiều chứng chỉ
    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'course_id', 'id');
    }
}
