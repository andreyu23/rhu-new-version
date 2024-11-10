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
                                <h4 class="nk-block-title text-2xl fw-bold"> Health Problems</h4>
                                <div class="nk-block-des">
                                    <p>Patient information base on the  Health Problems.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="nk-data data-list">
                            <div class="data-head">
                                <h6 class="overline-title"> Health Problems Records</h6>
                            </div>
                            @include('pages.patients.health.sub.healthtable')
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
                        Health Problems
                    </h1>
                    <p>This form is for Health Problems.</p>
                    <hr class="mt-2 mb-2">
                    <form action="{{ route('health.save') }}" id="health_form" method="POST" autocomplete="off">
                        @csrf
                        @include('pages.patients.health.sub.form')
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function edit_health(id, hyper, tb, diabetes, bronchial, goiter, hepatitis, smoking, alcohol, drugs, abuse, partner, others) {

            const form = document.getElementById('health_form');

            const hyper_val = document.getElementById('inp_hypertension');
            const tb_val = document.getElementById('inp_tuberculosis');
            const diabetes_val = document.getElementById('inp_diabetes');
            const bronchial_val = document.getElementById('inp_bronchial');
            const goiter_val = document.getElementById('inp_goiter');
            const hepatitis_val = document.getElementById('inp_hepatitis');
            const smoking_val = document.getElementById('inp_smoking');
            const alcohol_val = document.getElementById('inp_alcohol');
            const drugs_val = document.getElementById('inp_drugs');
            const abuse_val = document.getElementById('inp_abuse');
            const partner_val = document.getElementById('inp_mp');
            const other_val = document.getElementById('inp_others');

            hyper_val.value = hyper;
            tb_val.value = tb;
            diabetes_val.value = diabetes;
            bronchial_val.value = bronchial;
            goiter_val.value = goiter;
            hepatitis_val.value = hepatitis;
            smoking_val.value = smoking;
            alcohol_val.value = alcohol;
            drugs_val.value = drugs;
            abuse_val.value = abuse;
            partner_val.value = partner;
            other_val.value = others;

            form.action = "/prenatal/health/update/" + id
        }
    </script>

</x-app-layout>
