<?php

use App\Enum\UserAdminRoleEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_admin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id');
            $table->enum('role',array_column(UserAdminRoleEnum::cases(),'value'))->default(UserAdminRoleEnum::USER->value);
            $table->string('name');
            $table->string('email');
            $table->string('mobile_number',10);
            $table->string('password');
            $table->string('profile_photo')->nullable();
            $table->boolean('is_deleted')->default(0);
            $table->boolean('is_blocked')->default(0);
            $table->boolean('ask_password_change')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_admin');
    }

};
