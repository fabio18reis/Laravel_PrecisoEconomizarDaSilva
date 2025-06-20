<?php

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
       Schema::create ('gastos', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('descricao');
        $table->decimal('valor', 10,2);
        $table->date('data');
        $table->string('categoria');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
