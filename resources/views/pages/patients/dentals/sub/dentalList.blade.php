<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th width="10">#</th>
                <th>Dental Check-up</th>
                <th>Dental Caries</th>
                <th>Others</th>
                <th width="120"> Date Registerd </th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($dental as $index => $value)
                @csrf
                <tr>
                    <td>{{ $index + 1 }}.</td>
                    <td>{{ $value['dental_check'] }}</td>
                    <td>{{ $value['dental_caries'] }}</td>
                    <td>{{ $value['dental_others'] }}</td>
                    <td>{{ date_format($value->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                            onclick=
                            "edit_dental(
                            '{{ $value['id'] }}',
                            '{{ $value['dental_check'] }}',
                            '{{ $value['dental_caries'] }}',
                            '{{ $value['dental_others'] }}',
                            '{{ $value['dental_malnourish'] }}',
                            '{{ $value['dental_other_problem'] }}',
                            '{{ $value['dental_action'] }}',
                            '{{ $value['dental_refer'] }}',
                            '{{ $value['dental_food'] }}',
                            '{{ $value['dental_days'] }}',
                            '{{ $value['dental_wt'] }}',
                            '{{ $value['dental_remarks'] }}'
                            )"
                            data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                            <em class="icon ni ni-edit"> </em>
                        </button>
                        <button onclick="remove_data('{{ $value['id'] }}', 'dental')" type="button" class="btn btn-xs btn-danger text-white">
                            <em class="icon ni ni-trash"></em>
                        </button>
                    </td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
