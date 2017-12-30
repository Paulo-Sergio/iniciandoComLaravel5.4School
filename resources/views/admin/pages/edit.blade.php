@component('admin.layouts.elements.body')
  @slot('title') Páginas @endslot
  @slot('description') Edição de Página @endslot

  <form action="{{ route('pages.update', $page->id) }}" method="POST" class="form-horizontal">
    {!! method_field('PUT') !!}
    @include('admin.pages.form')
  </form>

  <a href="{{ route('pages.index') }}" class="btn btn-default btn-xs">Voltar</a>

@endcomponent