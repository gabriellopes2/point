<tr>
    <td>{{ $registro->user_id }}</td>
    <td>{{ Carbon\Carbon::parse($registro->register_time)->format('d/m/Y H:i') }}</td>
    <td>{{ $registro->type }}</td>
    <td>{{ $registro->status }}</td>
</tr>