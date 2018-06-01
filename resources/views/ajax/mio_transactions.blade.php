@foreach($transactions as $v)
    <tr>
        <td class="col-2">{{ $v->id }}</td>
        <td class="col-4">{{ $v->user_name }}</td>
        <td class="col-3">{{ $v->entrance_date }}</td>
        <td class="col-3">{{ $v->entrance_time }}</td>
    </tr>
@endforeach