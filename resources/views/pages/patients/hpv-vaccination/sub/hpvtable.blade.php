<div class="py-12 pt-4">
    <table class="datatable-init nowrap table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>1st Dose</th>
                <th>2nd Dose</th>
                <th>3rd Dose</th>
                <th>Deworming Date</th>
                <th>Birthplan</th>
                <th width="120">Date Registered</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $index => $data)
                <tr style="cursor: pointer">
                    <td>{{ $index + 1 }}.</td>
                    <td>{{ $data->hpv_dose_1 }}</td>
                    <td>{{ $data->hpv_dose_2 }}</td>
                    <td>{{ $data->hpv_dose_3 }}</td>
                    <td>{{ $data->hpv_deworming_date }}</td>
                    <td>{{ $data->hpv_birthplan }}</td>
                    <td>{{ date_format($data->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                        onclick="edit_hpv(

                        '{{ $data['id']}}',
                        '{{ $data['hpv_dose_1']}}',
                        '{{ $data['hpv_dose_2']}}',
                        '{{ $data['hpv_dose_3']}}',
                        '{{ $data['hpv_deworming_date']}}',
                        '{{ $data['hpv_lmp']}}',
                        '{{ $data['hpv_edc']}}',
                        '{{ $data['hpv_birthplan']}}',

                        )" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                    <button onclick="remove_data('{{ $data['id'] }}', 'hpv')" type="button" class="btn btn-xs btn-danger text-white">
                        <em class="icon ni ni-trash"></em>
                    </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
