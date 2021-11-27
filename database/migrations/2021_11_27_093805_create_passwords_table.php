<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passwords', function (Blueprint $table) {
            $table->id()->comment('Код овоща');//уникальный номер
            $table->text('password_hash')->nullable()->comment('Хэш пароля');
            $table->integer('count_symbols')->nullable()->comment('Сколько огурцов');// Количество символов
            $table->text('variant_symbols')->nullable()->comment('Всего овощей'); // Количество вариантов
            $table->dateTime('created_at')->comment('Время созревания');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passwords');
    }
}
