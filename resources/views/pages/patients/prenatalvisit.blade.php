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
            <div class="card-aside-wrap">
                <div class="card-content">
                    @include('pages.patients._tabs')
                    <div class="card-inner">
                        <div class="nk-block">
                            <div class="nk-block">
                                <h6 class="title overline-title text-dark text-base">
                                    Prenatal Details
                                </h6>
                                <p>You can update the prenatal information here.</p>
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
                            @include('pages.patients.prenatalvisit.sub.prenataltable')
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
                        Prenatal Visits
                    </h1>
                    <p>This form is for Consultation.</p>
                    <hr class="mt-2 mb-2">
                    <form action="{{ route('prenatal.save') }}" id="prenatalvisit_form" method="POST" autocomplete="off">
                        @csrf
                        @include('pages.patients.prenatalvisit.sub.prenatalform')
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function edit_previsit(id, trimester, dov, aim, aog, bp, weight, presentation, fhb, fh, fever, edema, vb, pal, ltr, sgat, fsfa, cc ) {

            const form = document.getElementById('prenatalvisit_form');

            const trimester_val = document.getElementById('inp_trimester');
            const dov_val = document.getElementById('inp_dov');
            const aim_val = document.getElementById('inp_aim');
            const aog_val = document.getElementById('inp_aog');
            const bp_val = document.getElementById('inp_bp');
            const weight_val = document.getElementById('inp_weight');
            const presentation_val = document.getElementById('inp_presentation');
            const fhb_val = document.getElementById('inp_fhb');
            const fh_val = document.getElementById('inp_fh');
            const fever_val = document.getElementById('inp_fever');
            const edema_val = document.getElementById('inp_edema');
            const vb_val = document.getElementById('inp_vb');
            const pal_val = document.getElementById('inp_pal');
            const ltr_val = document.getElementById('inp_ltr');
            const sgat_val = document.getElementById('inp_sgat');
            const fsfa_val = document.getElementById('inp_fsfa');
            const cc_val = document.getElementById('inp_cc');

            trimester_val.value = trimester;
            dov_val.value = dov;
            aim_val.value = aim;
            aog_val.value = aog;
            bp_val.value = bp;
            weight_val.value = weight;
            presentation_val.value = presentation;
            fhb_val.value = fhb;
            fh_val.value = fh;
            fever_val.value = fever;
            edema_val.value = edema;
            vb_val.value = vb;
            pal_val.value = pal;
            ltr_val.value = ltr;
            sgat_val.value = sgat;
            fsfa_val.value = fsfa;
            cc_val.value = cc;

            form.action = "/prenatal/prenatalvisit/update/" + id
        }
    </script>

</x-app-layout>
