@extends('painel.templates.template')

@section('content')

<!--Filters and actions-->
<div class="actions">
    <div class="container">
        
        @can('view_users')
        <div class="col-md-2 text-center">
				<a href="/painel/newpermission">
				<span style="font-size: 50px; color: #fff;">
  <i class="fas fa-user-check"><h1 class="subtitle">Adicionar Permissão</h1></i>
</span>
					
				</a>
</div>
@endcan
    </div>
</div><!--Actions-->

<div class="clear"></div>

<div class="container">
    <h1 class="title">
        Listagem das Permissões
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Nome</th>
            <th>Label</th>
            
            
            <th width="100px">Ações</th>
        </tr>

        @forelse( $permissions as $permission )
        <tr>
            <td>{{$permission->name}}</td>
            <td>{{$permission->label}}</td>
            
            <td>
                <a href="{{url("/painel/permission/$permission->id/edit")}}" class="edit">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="{{url("/painel/permission/$permission->id/delete")}}" class="delete">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="90">
                <p>Nenhum Resultado!</p>
            </td>
        </tr>
        @endforelse
    </table>

</div>

@endsection