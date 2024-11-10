<div class="">
    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th>#</th>
                <th>CBC / HGB</th>
                <th>Urinalysis</th>
                <th>Ultrasound</th>
                <th>Others</th>
                <th width="120" class="text-start"> Date Registered </th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($info as $value)
                @csrf
                <tr>
                    <td>{{ $value['id'] }}</td>
                    <td>{{ $value['lab_cbc'] }}</td>
                    <td>{{ $value['lab_urine'] }}</td>
                    <td>{{ $value['lab_ultrasound'] }}</td>
                    <td>{{ $value['lab_others'] }}</td>
                    <td>{{ date_format($value->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                            onclick="edit_lab('{{ $value['id'] }}','{{ $value['lab_cbc'] }}', '{{ $value['lab_urine'] }}', '{{ $value['lab_ultrasound'] }}','{{ $value['lab_others'] }}')" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                            <em class="icon ni ni-edit"> </em>
                        </button>
                        <button onclick="remove_data('{{ $value['id'] }}', 'laboratory')" type="button" class="btn btn-xs btn-danger text-white">
                            <em class="icon ni ni-trash"></em>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
