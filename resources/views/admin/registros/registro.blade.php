<tr>
    <td>{{ $registro->user_id }}</td>
    <td>{{ Carbon\Carbon::parse($registro->register_time)->format('d/m/Y H:i') }}</td>
    <td>{{ $registro->type }}</td>
    <td>Solicitado</td>
    <td class="text-center">
        <a title="Autorizar" class="btn btn-info" href="{{ url('admin/registers/edit/' . $registro->id) }}" ><i class="fa fa-check fa-fw"></i></a>
    </td>
</tr>