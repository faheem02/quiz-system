<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->foreignId('user_id')->after('id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->after('user_id')->constrained()->onDelete('cascade');
            $table->string('payment_id')->nullable()->after('course_id');
            $table->string('payer_id')->nullable()->after('payment_id');
            $table->decimal('amount', 8, 2)->after('payer_id');
            $table->string('currency')->default('USD')->after('amount');
            $table->string('status')->default('pending')->after('currency');
        });
    }

    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn([
                'user_id',
                'course_id', 
                'payment_id',
                'payer_id',
                'amount',
                'currency',
                'status'
            ]);
        });
    }
};