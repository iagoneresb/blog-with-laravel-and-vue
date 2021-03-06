<modal-component name="create" title="Adicionar">
    <form-component id="createForm" css="" action="{{route('artigos.index')}}" method="post" enctype="" token="{{ csrf_token() }}">

        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Título" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="title">Descrição</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descrição" value="{{ old('description') }}">
        </div>
        <div class="form-group">
            <label for="content">Conteúdo</label>
            <textarea class="form-control" id="content" name="content">{{ old('content') }}</textarea>
        </div>

    </form-component>

    <span slot="buttons">
        <button form="createForm" class="btn btn-info">Adicionar</button>
    </span>
</modal-component>