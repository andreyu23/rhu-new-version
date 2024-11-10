{{-- <x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">
        <h3 class="nk-block-title page-title">
            Patient Information /
            <strong class="text-primary small">Cristy Sabanal</strong>
        </h3>
    </x-slot>
    <x-slot name="subHeader">
        {{ __('A patient is any recipient of health care services that are performed by healthcare professionals. ') }}
    </x-slot>
    <x-slot name="btn"></x-slot>

    <div class="nk-block">
        <div class="card">
            <div class="card-aside-wrap">
                <div class="card-content">
                    @include('pages.patients._tabs')
                    <div class="card-inner">
                        <div class="nk-block">
                            <div class="nk-block">
                                <h6 class="title overline-title text-dark text-base">
                                    Dental Check-ups Details
                                </h6>
                                <p>You can update the dental check-ups information here.</p>
                            </div>
                            <div class="nk-divider divider md"></div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('dental.save') }}" method="POST" autocomplete="off">
                                @csrf
                                @include('pages.patients.dentals.sub.dental')
                            </form>
                            @include('pages.patients.dentals.sub.dentalList')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>


{{-- <x-app-layout>
<form action="{{ route('info.save') }}" method="POST">
    @csrf
    @include('pages.information.sub.form')
</form>
<hr>
@include('pages.information.sub.infotable')
</x-app-layout> --}}

<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">
        <h3 class="nk-block-title page-title">
            Patient Information /
            <strong class="text-primary small">Cristy Sabanal</strong>
        </h3>
    </x-slot>
    <x-slot name="subHeader">
        {{ __('A patient is any recipient of health care services that are performed by healthcare professionals. ') }}
    </x-slot>
    <x-slot name="btn">
        <div class="toggle-wrap nk-block-tools-toggle">
            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                    class="icon ni ni-more-v"></em></a>
            <div class="toggle-expand-content" data-content="pageMenu">
                <ul class="nk-block-tools g-3">
                    <li class="nk-block-tools-opt">
                        <button class="btn btn-success btn-round" data-bs-toggle="modal" data-bs-target="#registration">
                            <em class="icon ni ni-plus-circle"></em>&ensp;
                            Register New
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </x-slot>

    <div class="nk-block">
        <div class="card">
            @include('pages.patients._tabs')
            <div class="card-aside-wrap">
                <div class="card-inner card-inner-lg">
                    <div class="nk-block-head nk-block-head-lg pb-3">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title text-2xl fw-bold">Dental Check-ups </h4>
                                <div class="nk-block-des">
                                    <p>Patient information base on the Dental Check-ups .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="nk-data data-list">
                            <div class="data-head">
                                <h6 class="overline-title">Dental Check-ups  Records</h6>
                            </div>
                            @include('pages.patients.dentals.sub.dentalList')
                        </div>
                    </div>
                </div>
                <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg toggle-screen-lg"
                    data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="card-inner-group" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                @include('pages.patients._sidemenu')
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 100px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="registration">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal">
                    <em class="icon ni ni-cross-sm"></em>
                </a>
                <div class="modal-body">
                    <h1 class="nk-block-title page-title text-2xl">
                       Dental Check-ups
                    </h1>
                    <p>This form is for Dental Check-ups .</p>
                    <hr class="mt-2 mb-2">
                    <form action="{{ route('dental.save') }}" id="dental_form" method="POST" autocomplete="off">
                        @csrf
                        @include('pages.patients.dentals.sub.dental')
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function edit_dental(id, check, caries, others, malnourish, other_illness, action_taken, refer_to, sup_name, feeding_day, wt, remarks) {

            const form = document.getElementById('dental_form');

            const caries_val = document.getElementById('inp_caries');
            const others_val = document.getElementById('inp_others');
            const check_val = document.getElementById('inp_check');
            const malnourish_val = document.getElementById('inp_mm');
            const other_illness_val = document.getElementById('inp_others_prob');
            const action_taken_val = document.getElementById('inp_at');
            const refer_to_val = document.getElementById('inp_ref_to');
            const sup_name_val = document.getElementById('inp_nosf');
            const feeding_day_val = document.getElementById('inp_dof');
            const wt_val = document.getElementById('inp_wt');
            const remarks_val = document.getElementById('inp_remarks');

            caries_val.value = check;
            others_val.value = caries;
            check_val.value = others;
            malnourish_val.value = malnourish;
            other_illness_val.value = other_illness;
            action_taken_val.value = action_taken;
            refer_to_val.value = refer_to;
            sup_name_val.value = sup_name;
            feeding_day_val.value = feeding_day;
            wt_val.value = wt;
            remarks_val.value = remarks;


            form.action = "/prenatal/dental/update/" + id
        }
    </script>

</x-app-layout>




