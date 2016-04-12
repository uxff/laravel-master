<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{

public function up() {


Schema::create('articles', function(Blueprint $table)  
{
    $table->increments('id');
    $table->string('title');
    $table->string('slug')->nullable();
    $table->text('body')->nullable();
    $table->string('image')->nullable();
    $table->integer('user_id');
    $table->timestamps();
});
Schema::create('pages', function(Blueprint $table)  
{
    $table->increments('id');
    $table->string('title');
    $table->string('slug')->nullable();
    $table->text('body')->nullable();
    $table->integer('user_id');
    $table->timestamps();
});
}
public function down() {
	Schema::drop('articles');
	Schema::drop('pages');
}
}
