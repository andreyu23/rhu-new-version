<div class="py-12 pt-1">

    <table class="datatable-init table table-hover">
        <thead>
            <tr>
                <th width="20">#</th>
                <th>PHIC No.</th>
                <th>Name</th>
                <th>Address</th>
                <th>Civil Status</th>
                <th>Religion</th>
                <th>Age</th>
                <th width="220">Date Registered</th>
                <th width="100" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $data)
                <tr style="cursor: pointer" onclick="go_to('/prenatal/details')">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->info_philhealth_num }} </td>
                    <td>{{ $data->info_name }} </td>
                    <td>{{ $data->info_address }} </td>
                    <td>{{ $data->info_civil_status }} </td>
                    <td>{{ $data->info_religion }} </td>
                    <td>{{ $data->info_age }} </td>
                    <td>{{ date_format($data->created_at, 'D, M. d, Y h:i A') }} </td>
                    <td>
                        <button class="btn btn-xs btn-warning">
                            <em class="icon ni ni-edit"> </em>
                        </button>
                        <button type="submit" class="btn btn-xs btn-danger text-white">
                            <em class="icon ni ni-trash"></em>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
