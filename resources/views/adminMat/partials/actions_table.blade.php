<div class="div_table_action">
    @can('update usuarios')
        <a class="link_action link_table" href="{{ route('usuarios.edit', $usuario->id) }}" data-toggle="popover" data-trigger="hover" data-placement="top" data-container="body" data-content="Editar">
            <i class="icon ui-1_edit-75"></i>
            <span hidden> Editar </span>
        </a>
    @endcan

    @can('delete usuarios')
        <a class="link_action link_table destroyDocumento" href="#" data-toggle="modal" data-placement="top" data-target="#modalExcluir" data-uri="{{ route('usuarios.destroy', $usuario->id) }}">
            <i class="icon ui-1_trash"></i>
            <span hidden> Excluir </span>
        </a>
    @endcan

    @can('update usuarios')
        <a class="link_action link_table" href="{{ route('usuarios.acesso', $usuario->id) }}">
            <i class="icon ui-1_lock-circle"></i>
            <span hidden> Acesso </span>
        </a>
    @endcan

    <a class="link_action link_table" href="mailto:{{ $usuario->email }}" data-toggle="popover" data-trigger="hover" data-placement="top" data-container="body" data-content="Enviar E-mail" target="_blank" rel="noopener">
        <i class="icon ui-1_email-85"></i>
        <span hidden> E-mail </span>
    </a>
</div>
