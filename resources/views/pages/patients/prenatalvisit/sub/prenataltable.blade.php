<div class="">
    <div class="row">
        <table class="datatable-init table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Trimester</th>
                    <th>Date of Visit</th>
                    <th>Age in Months</th>
                    <th>AOG</th>
                    <th>Blood Pressure</th>
                    <th>Weight</th>
                    <th width="100" class="text-center"> Action </th>
            </thead>
            <tbody>
                @foreach ($info as $index => $value)
                    @csrf
                    <tr>
                        <td>{{ $value['id'] }}</td>
                        <td>{{ $value['prenatal_trimester'] }}</td>
                        <td>{{ $value['prenatal_date_of_visit'] }}</td>
                        <td>{{ $value['prenatal_age_in_months'] }}</td>
                        <td>{{ $value['prenatal_AOG'] }}</td>
                        <td>{{ $value['prenatal_blood_pressure'] }}</td>
                        <td>{{ $value['prenatal_weight'] }}</td>
                        <td>
                            <button
                        onclick="edit_previsit(

                        '{{ $value['id']}}',
                        '{{ $value['prenatal_trimester']}}',
                        '{{ $value['prenatal_date_of_visit']}}',
                        '{{ $value['prenatal_age_in_months']}}',
                        '{{ $value['prenatal_AOG']}}',
                        '{{ $value['prenatal_blood_pressure']}}',
                        '{{ $value['prenatal_weight']}}',
                        '{{ $value['prenatal_presentation']}}',
                        '{{ $value['prenatal_FHB']}}',
                        '{{ $value['prenatal_fundal_height']}}',
                        '{{ $value['prenatal_fever']}}',
                        '{{ $value['prenatal_edema']}}',
                        '{{ $value['prenatal_vaginal_bleeding']}}',
                        '{{ $value['prenatal_pallor']}}',
                        '{{ $value['prenatal_lab_test_res']}}',
                        '{{ $value['prenatal_service_given']}}',
                        '{{ $value['prenatal_sulfate_folic']}}',
                        '{{ $value['prenatal_calcium_carbon']}}',

                        )" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                    <button onclick="remove_data('{{ $value['id'] }}', 'prenatal')" type="button" class="btn btn-xs btn-danger text-white">
                        <em class="icon ni ni-trash"></em>
                    </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
