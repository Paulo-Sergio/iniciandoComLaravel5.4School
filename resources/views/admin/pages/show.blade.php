@component('admin.layouts.elements.body')
  @slot('title') Páginas @endslot
  @slot('description') Exibição de Página @endslot

  <h4>{{ $page->title }}</h4>

  <p>
    <small>
      Criando em {{ $page->created_at->format('d/m/Y H:i:s') }} 
      | Atualizado em {{ $page->updated_at->format('d/m/Y H:i:s') }}
    </small>
  </p>

  {!! $page->body !!}

  <a href="{{ route('pages.index') }}" class="btn btn-default btn-xs">Voltar</a>
  <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-default btn-xs">Editar</a>
  <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="form-horizontal" style="display:inline-block">
    {!! csrf_field() !!}
    {!! method_field('DELETE') !!}
    <input class="btn btn-danger btn-xs" type="submit" value="Remover" />
  </form>

@endcomponent