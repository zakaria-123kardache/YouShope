<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('payment_id')->nullable()->after('user_id');
            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    public function down()
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->dropForeign(['payment_id']); 
            $table->dropColumn('payment_id');
        });
    }
};