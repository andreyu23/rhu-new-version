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
                                <h4 class="nk-block-title text-2xl fw-bold">Vaccination History </h4>
                                <div class="nk-block-des">
                                    <p>Patient information base on the Vaccination History .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="nk-data data-list">
                            <div class="data-head">
                                <h6 class="overline-title">Vaccination History  Records</h6>
                            </div>
                            @include('pages.patients.hpv-vaccination.sub.hpvtable')
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
                            <div class="simplebar-placeholder" style="width: auto; height: 850px;"></div>
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
                       Vaccination History
                    </h1>
                    <p>This form is for Vaccination History .</p>
                    <hr class="mt-2 mb-2">
                    <form action="{{ route('vaccination.save') }}" id="hpv_form" method="POST" autocomplete="off">
                        @csrf
                        @include('pages.patients.hpv-vaccination.sub.form')
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function edit_hpv(id, dose_1, dose_2, dose_3, deworming, lmp, edc, birthplan) {

            const form = document.getElementById('hpv_form');

            const dose_1_val = document.getElementById('inp_hpv_dose_1');
            const dose_2_val = document.getElementById('inp_hpv_dose_2');
            const dose_3_val = document.getElementById('inp_hpv_dose_3');
            const deworming_date_val = document.getElementById('inp_hpv_deworming_date');
            const lmp_val = document.getElementById('inp_hpv_lmp');
            const edc_val = document.getElementById('inp_hpv_edc');
            const birthplan_val = document.getElementById('inp_hpv_birthplan');

            dose_1_val.value = dose_1;
            dose_2_val.value = dose_2;
            dose_3_val.value = dose_3;
            deworming_date_val.value = deworming;
            lmp_val.value = lmp;
            edc_val.value = edc;
            birthplan_val.value = birthplan;


            form.action = "/prenatal/vaccination/update/" + id
        }
    </script>

</x-app-layout>

