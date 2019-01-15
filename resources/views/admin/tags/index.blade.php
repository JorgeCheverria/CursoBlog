@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-9">
			<div class="card">
				<div class="card-header">
					Lista de etiquetas
					<a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary float-right">Crear</a>
				</div>
				<div class="card-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">ID</th>
								<th>Nommbre</th>
								<th colspan="3">&nbsp</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tags as $tag)
							<tr>
								<td>{{ $tag->id }}</td>
								<td>{{ $tag->name }}</td>
								<td width="10px">
									<a href="{{ route('tags.show',$tag->id) }}" class="btn btn-secondary">Ver</a>
								</td>
								<td width="10px">
									<a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-secondary">Editar</a>
								</td>
								<td width="10px">
									{!! Form::open(['route' => ['tags.destroy',$tag->id],'method'=>'DELETE']) !!}
										<button class="btn btn-danger">
											Eliminar
										</button>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $tags->render() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
