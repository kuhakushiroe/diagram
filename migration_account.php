<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama akun (misalnya Kas, Piutang, Hutang)
            $table->string('code')->unique(); // Kode akun untuk identifikasi
            $table->enum('type', ['asset', 'liability', 'equity', 'revenue', 'expense']); // Jenis akun
            $table->decimal('balance', 15, 2)->default(0); // Saldo akun
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
