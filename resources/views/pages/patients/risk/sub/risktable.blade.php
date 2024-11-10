<div class="py-12 pt-4">
    <table class="datatable-init nowrap table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Age</th>
                <th>Multiparity</th>
                <th>Previous C/S</th>
                <th>Consecutive Miscarriages</th>
                <th>Stillbirth</th>
                <th width="120">Date Registered</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $index => $data)
                <tr style="cursor: pointer">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->r_age }} </td>
                    <td>{{ $data->r_multiparity }} </td>
                    <td>{{ $data->r_previous_cs }} </td>
                    <td>{{ $data->r_consecutive_miscarriages }} </td>
                    <td>{{ $data->r_stillbirth }} </td>
                    <td>{{ date_format($data->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                        onclick="edit_risk(

                        '{{ $data['id']}}',
                        '{{ $data['r_age']}}',
                        '{{ $data['r_multiparity']}}',
                        '{{ $data['r_previous_cs']}}',
                        '{{ $data['r_consecutive_miscarriages']}}',
                        '{{ $data['r_stillbirth']}}',
                        '{{ $data['r_malnourished']}}',
                        '{{ $data['r_co_morbidity']}}',
                        '{{ $data['r_postpartum_hemorrhage']}}',
                        '{{ $data['r_menarchy']}}',
                        '{{ $data['r_menstrual_flow_duration']}}',
                        '{{ $data['r_pads_per_day']}}',

                        )" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                    <button onclick="remove_data('{{ $data['id'] }}', 'risk')" type="button" class="btn btn-xs btn-danger text-white">
                        <em class="icon ni ni-trash"></em>
                    </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
