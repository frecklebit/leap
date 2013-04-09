<?php

class Create_Events_Table {    

	public function up()
    {
		Schema::create('events', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->string('url');
			$table->integer('category');
			$table->integer('day');
			$table->integer('month');
			$table->integer('year');
			$table->integer('approved');
			$table->timestamp('start_date');
			$table->timestamp('end_date');
			$table->string('recur_type');
			$table->integer('recur_val');
			$table->integer('recur_end_type');
			$table->integer('recur_count');
			$table->date('recur_until');
	});

    }    

	public function down()
    {
		Schema::drop('events');

    }

}