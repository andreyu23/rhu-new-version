<div class="py-12 pt-4">
    <table class="datatable-init nowrap table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>TT1</th>
                <th>TT2</th>
                <th>TT3</th>
                <th>TT4</th>
                <th>TT5</th>
                <th>FIM</th>
                <th width="120" >Date Registered</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $index => $data)
                <tr style="cursor: pointer">
                    <td>{{ $index + 1 }}.</td>
                    <td>{{ $data->tt_tt1 }} </td>
                    <td>{{ $data->tt_tt2 }} </td>
                    <td>{{ $data->tt_tt3 }} </td>
                    <td>{{ $data->tt_tt4 }} </td>
                    <td>{{ $data->tt_tt5 }} </td>
                    <td>{{ $data->tt_fim }} </td>
                    <td>{{ date_format($data->created_at, 'D, M. d, Y h:i A') }}</td>
                    <td>
                        <button
                        onclick="edit_tetanus(

                        '{{ $data['id']}}',
                        '{{ $data['tt_tt1']}}',
                        '{{ $data['tt_tt2']}}',
                        '{{ $data['tt_tt3']}}',
                        '{{ $data['tt_tt4']}}',
                        '{{ $data['tt_tt5']}}',
                        '{{ $data['tt_fim']}}',

                        )" data-bs-toggle="modal" data-bs-target="#registration" class="btn btn-xs btn-warning">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                    <button onclick="remove_data('{{ $data['id'] }}', 'tetanus')" type="button" class="btn btn-xs btn-danger text-white">
                        <em class="icon ni ni-trash"></em>
                    </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

