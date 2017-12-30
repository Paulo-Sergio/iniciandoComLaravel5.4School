@component('admin.layouts.elements.body')
@slot('title') Páginas @endslot
@slot('description') Administração de Páginas @endslot
<table class="table table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Titulo</th>
			<th class="text-right">Ações</th>
		</tr>
	</thead>

	<tbody>
		@foreach($pages as $page)
		<tr>
			<td>{{$page->id}}</td>
			<td>{{$page->title}}</td>
			<td class="text-right">#</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endcomponent