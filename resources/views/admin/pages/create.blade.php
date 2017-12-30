@component('admin.layouts.elements.body')
  @slot('title') Páginas @endslot
  @slot('description') Criação de Página @endslot

  <form action="{{ route('pages.store') }}" method="POST" class="form-horizontal">
    @include('admin.pages.form')
  </form>

  <a href="{{ route('pages.index') }}" class="btn btn-default btn-xs">Voltar</a>

@endcomponent