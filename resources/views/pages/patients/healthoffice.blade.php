<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">
        <h3 class="nk-block-title page-title">
            Manage Barangay Health Center
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
                    <div class="card-inner">
                        <div class="nk-block">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @include('pages.patients.healthoffices.sub.healthofficelist')
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
                        Barangay Health Center
                    </h1>
                    <p>This form is for Barangay Health Center.</p>
                    <hr class="mt-2 mb-2">
                    <form action="{{ route('healthoffice.save') }}" id="healthoffice_form" method="POST" autocomplete="off">
                        @csrf
                        @include('pages.patients.healthoffices.sub.healthoffice')
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function edit_health_office(id, brgy, muni, prov, ref, bemoc, bemoc_add, cemoc, cemoc_add, midwife, duty_station) {

            const form = document.getElementById('healthoffice_form');

            const brgy_val = document.getElementById('inp_brngy');
            const muni_val = document.getElementById('inp_municipality');
            const prov_val = document.getElementById('inp_prov');
            const ref_val = document.getElementById('inp_ref');
            const midwife_val = document.getElementById('inp_nom');
            const duty_val = document.getElementById('inp_dsa');
            const bemoc_val = document.getElementById('inp_bemoc');
            const bemoc_add_val = document.getElementById('inp_bemoc_add');
            const cemoc_val = document.getElementById('inp_cemoc');
            const cemoc_add_val = document.getElementById('inp_cemoc_add');

            brgy_val.value = brgy;
            muni_val.value = muni;
            prov_val.value = prov;
            ref_val.value = ref;
            midwife_val.value = midwife;
            duty_val.value = duty_station;
            bemoc_val.value = bemoc;
            bemoc_add_val.value = bemoc_add;
            cemoc_val.value = cemoc;
            cemoc_add_val.value = cemoc_add;


            form.action = "/prenatal/healthoffice/update/" + id
        }
    </script>

</x-app-layout>
