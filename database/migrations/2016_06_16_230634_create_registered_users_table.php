<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisteredUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create( 'registered_users', function ( Blueprint $table )
    {
      $table->increments( 'id' );
      $table->string( 'fist_name' );
      $table->string( 'last_name' );
      $table->string( 'email' )
            ->unique();
      $table->boolean( 'privacy_policy' )
            ->default( false );
      $table->timestamps();
    } );
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop( 'registered_users' );
  }
}
