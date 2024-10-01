<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('certificates', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id')->after('id'); // Thêm cột course_id sau cột id
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); // Tạo liên kết với bảng courses
        });
    }

    public function down()
    {
        Schema::table('certificates', function (Blueprint $table) {
            $table->dropForeign(['course_id']); // Xóa khóa ngoại
            $table->dropColumn('course_id'); // Xóa cột course_id
        });
    }   
};
