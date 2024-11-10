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
                                <h4 class="nk-block-title text-2xl fw-bold">Laboratory Results</h4>
                                <div class="nk-block-des">
                                    <p>Patient information base on the laboratory results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="nk-data data-list">
                            <div class="data-head mb-4">
                                <h6 class="overline-title">Laboratory Results</h6>
                            </div>
                            @include('pages.patients.labresults.sub.labresultlist')
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
                        Laboratory Result
                    </h1>
                    <p>This form is for laboratory result.</p>
                    <hr class="mt-2 mb-2">
                    <form action="{{ route('lab.save') }}" id="laboratory_form" method="POST" autocomplete="off">
                        @csrf
                        @include('pages.patients.labresults.sub.labresult')
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function edit_lab(id, cbc, urine, ultrasound, other) {

            const form = document.getElementById('laboratory_form');

            const cbc_val = document.getElementById('inp_cbc');
            const urine_val = document.getElementById('inp_urine');
            const utrasound_val = document.getElementById('inp_ultra');
            const other_val = document.getElementById('inp_others');

            cbc_val.value = cbc;
            urine_val.value = urine;
            utrasound_val.value = ultrasound;
            other_val.value = other;

            form.action = "/prenatal/labresult/update/" + id
        }
    </script>

</x-app-layout>
