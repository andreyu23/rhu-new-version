<div class="py-12 pt-4">
    <table class="datatable-init nowrap table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Year of Delivery</th>
                <th>Type of Delivery</th>
                <th>Place of Delivery</th>
                <th>Birth Attendant</th>
                <th width="120">Date Registered</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $index => $data)
                <tr style="cursor: pointer">
                    <td>{{ $index + 1 }}.</td>
                    <td>{{ $data->obs_year_of_delivery }} </td>
                    <td>{{ $data->obs_type_of_delivery }} </td>
                    <td>{{ $data->obs_place_of_delivery }} </td>
                    <td>{{ $data->obs_outcome_of_pregnancy }} </td>
                    <td>{{ date_format($data->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                        onclick="edit_history(

                        '{{ $data['id']}}',
                        '{{ $data['obs_year_of_delivery']}}',
                        '{{ $data['obs_type_of_delivery']}}',
                        '{{ $data['obs_place_of_delivery']}}',
                        '{{ $data['obs_birth_attendant']}}',
                        '{{ $data['obs_complications']}}',
                        '{{ $data['obs_outcome_of_pregnancy']}}',

                        )" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                    <button onclick="remove_data('{{ $data['id'] }}', 'history')" type="button" class="btn btn-xs btn-danger text-white">
                        <em class="icon ni ni-trash"></em>
                    </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
