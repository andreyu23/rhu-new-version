<div class="py-12 pt-4">
    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th width="10">#</th>
                <th>Date</th>
                <th>Method of Choice</th>
                <th>Remarks</th>
                <th width="120"> Date Registed </th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($family as $index => $value)
                @csrf
                <tr>
                    <td>{{ $index + 1 }}.</td>
                    <td>{{ $value['family_date'] }}</td>
                    <td>{{ $value['family_method'] }}</td>
                    <td>{{ $value['family_remarks'] }}</td>
                    <td>{{ date_format($value->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                            onclick="edit_famplan(

                            '{{ $value['id'] }}',
                            '{{ $value['family_date'] }}',
                            '{{ $value['family_method'] }}',
                            '{{ $value['famiy_remarks'] }}'

                            )" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                            <em class="icon ni ni-edit"> </em>
                        </button>
                        <button onclick="remove_data('{{ $value['id'] }}', 'family')" type="button" class="btn btn-xs btn-danger text-white">
                            <em class="icon ni ni-trash"></em>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
