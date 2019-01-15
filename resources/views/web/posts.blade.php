@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<dir class="col-md-9">
			<h1>Publicaciones</h1>
			@foreach($posts as $post)
				<div class="card">
					<div class="card-header">
						{{ $post->name }}
						
					</div>
					<div class="card-body">
						@if($post->file )
							<img src="{{ $post->file }}" class="img-fluid">
						@endif
						{{ $post->excerpt }}
						<a href="{{ route('post',$post->slug) }}"  class="pull-right">Leer más</a>
					</div>
				</div>
				<br>
			@endforeach
			{{ $posts->render() }}
		</dir>
	</div>
</div>
@endsection
