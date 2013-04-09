@layout(locate('orchestra::layout.main'))

@section('content')

<div class="row-fluid">
	@forelse ($panes as $id => $pane) 
		<div{{ HTML::attributes($pane->attributes) }}>
		@if ( ! empty($pane->html))
			{{ $pane->html }}
		@else
			<table{{ HTML::attributes(array('class' => "table table-bordered")) }}>
				<thead>
					<tr>
						<th>{{ $pane->title }}</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{ $pane->content }}</td>
					</tr>
				</tbody>
			</table>
		@endif
		</div>
	@empty
	<div class="hero-unit">
		<h2>Welcome to your new Orchestra site!</h2>
		<p>
			If you need help getting started, check out our documentation on First Steps with Orchestra. 
			If you’d rather dive right in, here are a few things most people do first when they set up a new Orchestra site. 
			<!-- If you need help, use the Help tabs in the upper right corner to get information on how to use your current 
			screen and where to go for more assistance.-->
		</p>
	</div>

	@endforelse
</div>

@endsection