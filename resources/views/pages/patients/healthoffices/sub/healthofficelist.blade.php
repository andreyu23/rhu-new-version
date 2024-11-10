<div class="">

    <table class="datatable-init nowrap table table-hover">
        <thead>
            <tr>
                <th width="10">#</th>
                <th>Barangay / Catchment</th>
                <th>Municipality</th>
                <th>Province</th>
                <th>Referral Unit</th>
                <th>Name of Midwife</th>
                <th>Duty Station and Address</th>
                <th width="100" class="text-start"> Date Registered </th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($health as $index => $value)
                @csrf
                <tr>
                    <td>{{ $index + 1 }}.</td>
                    <td>{{ $value['ho_barangay'] }}</td>
                    <td>{{ $value['ho_municipality'] }}</td>
                    <td>{{ $value['ho_province'] }}</td>
                    <td>{{ $value['ho_ref_unit'] }}</td>
                    <td>{{ $value['ho_mw_name'] }}</td>
                    <td>{{ $value['ho_duty_station'] }}</td>
                    <td>{{ date_format($value->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                        onclick="edit_health_office(

                        '{{ $value['id']}}',
                        '{{ $value['ho_barangay']}}',
                        '{{ $value['ho_municipality']}}',
                        '{{ $value['ho_province']}}',
                        '{{ $value['ho_ref_unit']}}',
                        '{{ $value['ho_mw_name']}}',
                        '{{ $value['ho_duty_station']}}',
                        '{{ $value['ho_bemoc']}}',
                        '{{ $value['ho_bemoc_add']}}',
                        '{{ $value['ho_cemoc']}}',
                        '{{ $value['ho_cemoc_add']}}',

                        )" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                    <button onclick="remove_data('{{ $value['id'] }}', 'health_office')" type="button" class="btn btn-xs btn-danger text-white">
                        <em class="icon ni ni-trash"></em>
                    </button>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
