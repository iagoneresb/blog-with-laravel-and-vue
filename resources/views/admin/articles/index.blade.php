@extends('layouts.app')

@section('content')
    <page-component size="12">

        @if($errors->all())
            @foreach($errors->all() as $key => $value)
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Atenção!</strong> {{ $value }}.
                </div>
            @endforeach
        @endif

        <panel-component title="Artigos" >

            <breadcrumb-component v-bind:breadcrumb="{{ $breadcrumb }}"></breadcrumb-component>

            <tb-hover-component
                    v-bind:titles="['#','Título', 'Descrição', 'Conteúdo', 'Autor', 'Criado', 'Atualizado']"
                    v-bind:items="{{ json_encode($articles) }}"
                    url_create="#criar" url_detail="/admin/artigos/" url_edit="/admin/artigos/" url_delete="/admin/artigos/" token="{{ csrf_token() }}"
                    modal="true"
            >
            </tb-hover-component>
            <div align="center">
                {{ $articles }}
            </div>

        </panel-component>
    </page-component>

    @include('admin.articles.modal.create')
    @include('admin.articles.modal.update')
    @include('admin.articles.modal.show')
@endsection