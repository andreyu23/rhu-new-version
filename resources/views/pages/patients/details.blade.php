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
                                    Patient Details
                                </h6>
                                <p>You can update the patient information here.</p>
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
                            <form action="{{ route('info.save') }}" method="POST" autocomplete="off">
                                @csrf
                                @include('pages.patients.sub.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
