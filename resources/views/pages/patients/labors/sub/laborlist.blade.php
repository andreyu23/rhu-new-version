<div class="py-12 pt-4">
    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th width="10">#</th>
                <th>Date of Delivery</th>
                <th>Type of delivery</th>
                <th>Place of Delivery</th>
                <th>Birth of Delivery</th>
                <th width="120"> Date Registered </th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($labor as $index => $value)
                @csrf
                <tr>
                    <td>{{ $index + 1 }}.</td>
                    <td>{{ $value['lad_date_delivery'] }}</td>
                    <td>{{ $value['lad_type_delivery'] }}</td>
                    <td>{{ $value['lad_place_delivery'] }}</td>
                    <td>{{ $value['lad_birth_delivery'] }}</td>
                    <td>{{ date_format($value->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                        onclick="edit_labor(

                        '{{ $value['id']}}',
                        '{{ $value['lad_date_delivery']}}',
                        '{{ $value['lad_type_delivery']}}',
                        '{{ $value['lad_place_delivery']}}',
                        '{{ $value['lad_birth_delivery']}}',
                        '{{ $value['lad_birth_weight']}}',
                        '{{ $value['lad_live_birth']}}',
                        '{{ $value['lad_gender']}}',
                        '{{ $value['lad_healthy']}}',
                        '{{ $value['lad_post_partum']}}',

                        )" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                    <button onclick="remove_data('{{ $value['id'] }}', 'labor')" type="button" class="btn btn-xs btn-danger text-white">
                        <em class="icon ni ni-trash"></em>
                    </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
