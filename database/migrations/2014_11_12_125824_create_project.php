<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProject extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project', function($table)
                {
                    $table->increments('id');
                    $table->string('name',50);
                    $table->integer('customer_id')->unsigned();
                    $table->string('small_desc',300);
                    $table->longText('desc');
                    $table->text('url');
                    $table->string('pic1',250);
                    $table->string('pic2',250)->nullable();
                    $table->string('pic3',250)->nullable();
                    $table->timestamps();
                });
                
                DB::table('project')->insert(array(
                    array('name' => 'Glamour','customer_id' => 1, 'small_desc'=>'small DESC for Glamour . ', 'desc'=>'this is looooong text for glamour project it contaits all detail about project','pic1'=>'keyboard-bg.jpg','pic2'=>'files/test/glamour.jpg','pic3'=>'files/test/keyboard-bg.jpg'),
                    array('name' => 'Glamour2','customer_id' => 1,'small_desc'=>'small DESC for Glamour2 . ','desc'=>'this is looooong text for glamour22 project it contaits all detail about project','pic1'=>'keyboard-bg.jpg','pic2'=>'files/test/glamour.jpg','pic3'=>'files/test/keyboard-bg.jpg'),
                    array('name' => 'Glamour3','customer_id' => 1,'small_desc'=>'small DESC for Glamour3 . ','desc'=>'this is looooong text for glamour 333project it contaits all detail about project','pic1'=>'keyboard-bg.jpg','pic2'=>'files/test/glamour.jpg','pic3'=>'files/test/keyboard-bg.jpg'),
                    array('name' => 'Glamour4','customer_id' => 1,'small_desc'=>'small DESC for Glamour4 . ','desc'=>'this is looooong text for glamour 333project it contaits all detail about project','pic1'=>'keyboard-bg.jpg','pic2'=>'files/test/glamour.jpg','pic3'=>'files/test/keyboard-bg.jpg'),
                    array('name' => 'Glamour5','customer_id' => 1,'small_desc'=>'small DESC for Glamour5 . ','desc'=>'this is looooong text for glamour 333project it contaits all detail about project','pic1'=>'keyboard-bg.jpg','pic2'=>'files/test/glamour.jpg','pic3'=>'files/test/keyboard-bg.jpg'),
                    array('name' => 'Glamour6','customer_id' => 1,'small_desc'=>'small DESC for Glamour6 . ','desc'=>'this is looooong text for glamour 333project it contaits all detail about project','pic1'=>'keyboard-bg.jpg','pic2'=>'files/test/glamour.jpg','pic3'=>'files/test/keyboard-bg.jpg'),
                    array('name' => 'Glamour7','customer_id' => 1,'small_desc'=>'small DESC for Glamour7 . ','desc'=>'this is looooong text for glamour 333project it contaits all detail about project','pic1'=> 'keyboard-bg.jpg','pic2'=>'files/test/glamour.jpg','pic3'=>'files/test/keyboard-bg.jpg')
                ));

                
                
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('project');
	}

}
