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
        // Acessar a tabela 'products' e nela criar uma coluna 'min_quantity'.
        Schema::table('products', function(Blueprint $table) {
            $table->integer('min_quantity')
            ->default(1)
            ->after('quantity'); // onde vai ficar
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Faz a exclusão desta coluna
        Schema::table('products', function(Blueprint $table) {
            $table->dropColumn('min_quantity');
        });
    }
};
