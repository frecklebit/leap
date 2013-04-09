<?php

$title       = Orchestra\Site::get('title');
$description = Orchestra\Site::get('description'); ?>

<div class="page-header">
	@if (Orchestra\Site::get('header::add-button'))
	<div class="pull-right">
		<a href="{{ URL::current() }}/view" class="btn btn-primary">
			{{ __('orchestra::label.add') }}
		</a>
	</div>
	@endif
	
	<h2>{{ $title ?: 'Something Awesome' }}
		@if ( ! empty($description))
		<small>{{ $description ?: '' }}</small>
		@endif
	</h2>
</div>