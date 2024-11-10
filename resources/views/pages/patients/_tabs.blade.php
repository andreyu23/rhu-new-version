@php
    $id = 2;
@endphp
<ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
    <li class="nav-item">
        <a class="nav-link" href="/prenatal/details">
            <em class="icon ni ni-user-circle"></em>
            <span>Patient Information</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/prenatal/visit/{{ $id }}">
            <em class="icon ni ni-calendar"></em>
            <span>Prenatal Visits</span>
        </a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" href="/prenatal/laboratory/{{ $id }}">
            <em class="icon ni ni-activity-alt"></em>
            <span>Laboratory Results</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/prenatal/health/{{ $id }}">
            <em class="icon ni ni-capsule"></em>
            <span>Health Problems</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/prenatal/risk">
            <em class="icon ni ni-caution"></em>
            <span>Risk Identified</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/prenatal/tetanus-toxoid">
            <em class="icon ni ni-pen"></em>
            <span>Tetanus Toxoid</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/prenatal/vaccination">
            <em class="icon ni ni-covid"></em>
            <span>Vaccinations History</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/prenatal/history">
            <em class="icon ni ni-covid"></em>
            <span>Obstet History</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link " href="/covid">
            <em class="icon ni ni-covid"></em>
            <span>Vaccinations History</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/dental">
            <em class="icon ni ni-alert-circle"></em>
            <span>Dental Check-ups</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/family">
            <em class="icon ni ni-user-list"></em>
            <span>Family Planning</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/healthoffice">
            <em class="icon ni ni-building"></em>
            <span>Health Office</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/laborx">
            <em class="icon ni ni-alert"></em>
            <span>Labor and Delivery</span>
        </a>
    </li> --}}

    <li class="nav-item">
        <a class="nav-link" href="/prenatal/other/{{ $id }}">
            <em class="icon ni ni-external-alt"></em>
            <span>Others</span>
        </a>
    </li>
</ul>
