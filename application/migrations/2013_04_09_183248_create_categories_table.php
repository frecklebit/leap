<?php

class Create_Categories_Table {    

	public function up()
    {
		Schema::create('categories', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->string('color');
			$table->integer('enabled');
	});

    }    

	public function down()
    {
		Schema::drop('categories');

    }

}