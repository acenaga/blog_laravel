@extends('admin.template.main')

@section('title','Lista de Categorias')

@section('content')
	<a href="{{ route('admin.categories.create') }}" class="btn btn-info">Registra una nueva categoria</a><hr>

	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td><a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('Esta seguro que desea borrar este Categoria?')" class="btn btn-danger"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span></a> <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $categories->render() !!}
@endsection