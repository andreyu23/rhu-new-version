<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
        style="height: auto; overflow: hidden;">
        <div class="simplebar-content" style="padding: 0px;">
            <div class="card-inner">
                <div class="user-card">
                    <div class="user-avatar bg-primary">
                        <span>AB</span>
                    </div>
                    <div class="user-info">
                        <span class="lead-text">Abu Bin Ishtiyak</span>
                        <span class="sub-text">info@softnio.com</span>
                    </div>
                    <div class="user-action">
                        <div class="dropdown">
                            <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown" href="#"><em
                                    class="icon ni ni-more-v"></em></a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <ul class="link-list-opt no-bdr">
                                    <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change
                                                Photo</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update
                                                Profile</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                //$id = 2;
            @endphp
            <div class="card-inner p-0">
                <ul class="link-list-menu">
                    <li>
                        <a href="/prenatal/other/laboratory/{{ $id }}">
                            <em class="icon ni ni-activity-alt"></em>
                            <span>Laboratory Results</span>
                        </a>
                    </li>
                    <li>
                        <a href="/prenatal/other/health/{{ $id }}">
                            <em class="icon ni ni-capsule"></em>
                            <span>Health Problems</span>
                        </a>
                    </li>
                    <li>
                        <a href="/prenatal/other/risk/{{ $id }}">
                            <em class="icon ni ni-cards"></em>
                            <span>Risk Identified</span>
                        </a>
                    </li>
                    <li>
                        <a href="/prenatal/other/tetanus-toxoid/{{ $id }}">
                            <em class="icon ni ni-user-check"></em>
                            <span>Tetanus Toxoid</span>
                        </a>
                    </li>
                    <li>
                        <a href="/prenatal/other/vaccination/{{ $id }}">
                            <em class="icon ni ni-user-check"></em>
                            <span>Vaccinations History</span>
                        </a>
                    </li>

                    <li>
                        <a href="/prenatal/other/covid/{{ $id }}">
                            <em class="icon ni ni-covid"></em>
                            <span>Covid Vaccinations</span>
                        </a>
                    </li>
                    <li>
                        <a href="/prenatal/other/obstet-history/{{ $id }}">
                            <em class="icon ni ni-users"></em>
                            <span>Obstet History</span>
                        </a>
                    </li>
                    <li>
                        <a href="/prenatal/other/dental-checkup/{{ $id }}">
                            <em class="icon ni ni-plus-medi"></em>
                            <span>Dental Check-ups</span>
                        </a>
                    </li>
                    <li>
                        <a href="/prenatal/other/family-planning/{{ $id }}">
                            <em class="icon ni ni-plus-medi"></em>
                            <span>Family Planning</span>
                        </a>
                    </li>
                    <li>
                        <a href="/prenatal/other/labor-delivery/{{ $id }}">
                            <em class="icon ni ni-plus-medi"></em>
                            <span>Labor and Delivery</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
