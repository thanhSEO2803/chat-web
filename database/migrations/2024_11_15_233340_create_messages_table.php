<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột 'id' kiểu BIGINT AUTO_INCREMENT
            $table->string('message_text'); // Tạo cột kiểu chuỗi
            $table->string('file_url')->nullable(); // Tạo cột kiểu chuỗi, có thể null
            $table->integer('ghim_mess')->default(0); // Sửa 'int' thành 'integer'
            $table->unsignedBigInteger('user_id'); // Thay 'id' bằng 'user_id'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('room_id'); // Thay 'idRoom' bằng 'room_id'
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps(); // Tạo cột 'created_at' và 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
