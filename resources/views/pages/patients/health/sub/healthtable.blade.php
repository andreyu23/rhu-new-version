<div class="py-12 pt-4">
    <table class="datatable-init nowrap table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>Hypertension</th>
                <th>Tuberculosis</th>
                <th>Diabetes</th>
                <th>Bronchial</th>
                <th>Goiter</th>
                <th width="120" class="text-start">Date Registered</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $index => $data)
                <tr style="cursor: pointer">
                    <td>{{ $index + 1 }}.</td>
                    <td>{{ $data->h_hypertension }} </td>
                    <td>{{ $data->h_tuberculosis }} </td>
                    <td>{{ $data->h_diabetes }} </td>
                    <td>{{ $data->h_bronchial }} </td>
                    <td>{{ $data->h_goiter }} </td>
                    <td>{{ date_format($data->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                        onclick="edit_health(

                        '{{ $data['id']}}',
                        '{{ $data['h_hypertension']}}',
                        '{{ $data['h_tuberculosis']}}',
                        '{{ $data['h_diabetes']}}',
                        '{{ $data['h_bronchial']}}',
                        '{{ $data['h_goiter']}}',
                        '{{ $data['h_hepatitis']}}',
                        '{{ $data['h_smoking']}}',
                        '{{ $data['h_alcohol']}}',
                        '{{ $data['h_drugs']}}',
                        '{{ $data['h_abuse']}}',
                        '{{ $data['h_multiple_partners']}}',
                        '{{ $data['h_others']}}',

                        )" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                    <button onclick="remove_data('{{ $data['id'] }}', 'health')" type="button" class="btn btn-xs btn-danger text-white">
                        <em class="icon ni ni-trash"></em>
                    </button>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
