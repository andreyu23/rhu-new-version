<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">
        <h3 class="nk-block-title page-title">
            Dashboard
        </h3>
    </x-slot>
    <x-slot name="subHeader">
        {{ __('Performed by healthcare professionals.') }}
    </x-slot>
    <x-slot name="btn"></x-slot>

    <div class="nk-block">
        <div class="col-md-12">
            <div class="card">
                <div class="card-inner alert-pro alert-success">
                    <h1 class="text-2xl text-dark">👋🏻😁 Welcome <b>{{ Auth::user()->name }} !</b></h1>
                </div>
            </div>
        </div>

        <div class="row g-gs mt-1">
            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-inner" style="min-height: 620px">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <h3 class="nk-block-title text-2xl">
                                Barangay Health Centers
                            </h3>
                            <p>health care services that are performed by healthcare professionals</p>
                            <hr class="mt-3 mb-3">
                            <table class="datatable-init nowrap table table-hover">
                                <thead>
                                    <tr>
                                        <th width="10">#</th>
                                        <th>Barangay / Catchment</th>
                                        <th>Municipality</th>
                                        <th>Province</th>
                                        <th>Referral Unit</th>
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
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Total Barangay Health Center</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group">
                                        <div class="amount">🧑🏻‍⚕️ 11</div>
                                        <div class="nk-ecwg6-ck">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card">
                        <div class="nk-ecwg nk-ecwg6">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Total Patient Record</h6>
                                    </div>
                                </div>
                                <div class="data">
                                    <div class="data-group">
                                        <div class="amount">🤰🏻 3,764</div>
                                        <div class="nk-ecwg6-ck">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <div class="card card-full overflow-hidden">
                        <div class="nk-ecwg nk-ecwg7 h-100">
                            <div class="card-inner flex-grow-1">
                                <div class="card-title-group mb-4">
                                    <div class="card-title">
                                        <h6 class="title">Top <b>3</b> Data Analytics (Pregnant Per Barangay)</h6>
                                    </div>
                                </div>
                                <div class="nk-ecwg7-ck">
                                    <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                                </div>
                                <ul class="nk-ecwg7-legends">
                                    <li>
                                        <div class="title">
                                            <span class="dot dot-lg sq" data-bg="#1EE0AC"></span>
                                            <span>Dayawan (<b>2,098</b>)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <span class="dot dot-lg sq" data-bg="#09C2DE"></span>
                                            <span>Balacanas (<b>560</b>)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <span class="dot dot-lg sq" data-bg="#F4BD0E"></span>
                                            <span>Tambobong (<b>1,106</b>)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- .card-inner -->
                        </div>
                    </div>
                </div>
                @php
                    $completed = '2098';
                    $progress = '560';
                    $pending = '1106';
                @endphp
                @include('pages.dashboard.chart')

            </div>
        </div>

        <div class="row g-grid mt-4">
            <div class="col-md-12">
                <div class="card pt-3">
                    <div class="card-body">
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
