@if(session('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Success !</strong>{{ session('success') }}
		<button class="close" type="button" data-dismiss="alert" aria-label="Clos">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
@endif