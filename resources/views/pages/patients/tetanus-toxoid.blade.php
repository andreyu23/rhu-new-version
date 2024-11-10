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
                                <h4 class="nk-block-title text-2xl fw-bold"> Tetanus Toxoid</h4>
                                <div class="nk-block-des">
                                    <p>Patient information base on the  Tetanus Toxoid.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="nk-data data-list">
                            <div class="data-head">
                                <h6 class="overline-title"> Tetanus Toxoid Records</h6>
                            </div>
                            @include('pages.patients.tetanus-toxoid.sub.tetoxtable')
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
                        Tetanus Toxoid
                    </h1>
                    <p>This form is for Tetanus Toxoid.</p>
                    <hr class="mt-2 mb-2">
                    <form action="{{ route('tetanus-toxoid.save') }}" id="tetanus_form" method="POST" autocomplete="off">
                        @csrf
                        @include('pages.patients.tetanus-toxoid.sub.form')
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function edit_tetanus(id, tt1, tt2, tt3, tt4, tt5, fim) {

            const form = document.getElementById('tetanus_form');

            const tt1_val = document.getElementById('tt_tt1');
            const tt2_val = document.getElementById('tt_tt2');
            const tt3_val = document.getElementById('tt_tt3');
            const tt4_val = document.getElementById('tt_tt4');
            const tt5_val = document.getElementById('tt_tt5');
            const fim_val = document.getElementById('tt_fim');

            tt1_val.value = tt1;
            tt2_val.value = tt2;
            tt3_val.value = tt3;
            tt4_val.value = tt4;
            tt5_val.value = tt5;
            fim_val.value = fim;


            form.action = "/prenatal/tetanus-toxoid/update/" + id
        }
    </script>

</x-app-layout>
