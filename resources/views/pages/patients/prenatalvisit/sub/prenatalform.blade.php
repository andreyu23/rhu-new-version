<x-slot name="header">{{ __('Prenatal Visits') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit a prenatal form here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_trimester"> Trimester <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the trimester here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_trimester" id="inp_trimester" placeholder="Enter trimester here..." required>
        </div>
    </div>
</div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_dov"> Date of Visit <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the date here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="date" class="form-control" name="inp_dov" id="inp_dov" placeholder="Enter date here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_aim"> Age in Months <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the date here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_aim" id="inp_aim" placeholder="Enter age in months here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_aog"> AOG <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the AOG here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_aog" id="inp_aog" placeholder="Enter AOG here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_bp"> Blood Pressure <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the blood pressure here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_bp" id="inp_bp" placeholder="Enter blood pressure here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_weight"> Weight <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the weight here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_weight" id="inp_weight" placeholder="Enter weight here..." required>
            </div>
        </div>
    </div>


    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_presentation"> Presentation <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the presentationhere. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_presentation" id="inp_presentation" placeholder="Enter presentation here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_fhb"> FHB <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the FHB here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_fhb" id="inp_fhb" placeholder="Enter FHB here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_fh"> Fundal Height <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the fundal height here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_fh" id="inp_fh" placeholder="Enter fundal height here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_fever"> Fever (Y/N) <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the fever here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_fever" id="inp_fever" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Yes"> Yes </option>
                    <option value="No"> No </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_edema"> Edema <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the date here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_edema" id="inp_edema" placeholder="Enter edema here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_vb"> Vaginal Bleeding (Y/N)<b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the date here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_vb" id="inp_vb" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Yes"> Yes </option>
                    <option value="No"> No </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_pal"> Pallor (Y/N) <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the date here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_pal" id="inp_pal" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Yes"> Yes </option>
                    <option value="No"> No </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ltr"> Laboratory Test Results <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the date here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_ltr" id="inp_ltr" placeholder="Enter laboratory test results here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_sgat"> Service Given / Action Taken <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the given service or action taken here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_sgat" id="inp_sgat" placeholder="Enter service given or action taken here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_fsfa"> Ferrous Sulfate / Folic Acid <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the ferrous sulfate or folic acid here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_fsfa" id="inp_fsfa" placeholder="Enter ferrous sulfate or folic acid here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_cc"> Calcium Carbonate <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the calcium carbonate here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_cc" id="inp_cc" placeholder="Enter calcium carbonate here..." required>
            </div>
        </div>
    </div>


    <div class="col-lg-5">
    </div>
    <div class="col-lg-7 justify-end" style="float: right">
        <hr>
        <div class="form-group mt-2 mb-2 justify-end">
            <button type="reset" class="btn btn-danger bg-dark mx-3">
                <em class="icon ni ni-repeat"></em>
                 Reset
            </button>
            <button  type="submit" class="btn btn-primary">
                <em class="icon ni ni-save"></em>
                 Submit Form
            </button>
        </div>
    </div>
