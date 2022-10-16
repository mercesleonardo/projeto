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
        Schema::create('products', function (Blueprint $table) {
            //Id do registro, autoincrement e primary-key
            $table->id();

            // Nome do produto (name) - string
            $table->string('name');

            //Observações do produto - text - null - (Obs)
            $table->text('obs')->nullable();

            // Código do produto - string - não pode repetir (code)
            $table->string('code')->unique();

            // Quantidade do produto - int - por default quantidade = 0
            $table->integer('quantity')->default(0);

            // Adicionar a quantidade minima
            

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
        Schema::dropIfExists('products');
    }
};
