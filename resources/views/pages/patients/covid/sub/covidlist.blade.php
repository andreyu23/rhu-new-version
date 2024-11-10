<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th width="10">#</th>
                <th>Covid Vaccine</th>
                <th>Vaccine Dose</th>
                <th>Booster Dose</th>
                <th>Additional Booster</th>
                <th width="120"> Date Registered </th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($covid as $index => $value)
                @csrf
                <tr>
                    <td>{{ $index + 1}}.</td>
                    <td>{{ $value['covid_vaccine'] }}</td>
                    <td>{{ $value['covid_dose'] }}</td>
                    <td>{{ $value['covid_booster'] }}</td>
                    <td>{{ $value['covid_add_booster'] }}</td>
                    <td>{{ date_format($value->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                            onclick="edit_covid('{{ $value['id'] }}','{{ $value['covid_vaccine'] }}', '{{ $value['covid_dose'] }}', '{{ $value['covid_booster'] }}','{{ $value['covid_add_booster'] }}')" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                            <em class="icon ni ni-edit"> </em>
                        </button>
                        <button onclick="remove_data('{{ $value['id'] }}', 'covid')" type="button" class="btn btn-xs btn-danger text-white">
                            <em class="icon ni ni-trash"></em>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
