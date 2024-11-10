<x-slot name="header">{{ __('Covid-19 Vaccination') }} </x-slot>
<x-slot name="subHeader">{{ __('You can fill up covid-19 vaccination form here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_vaccine"> Covid Vaccine <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the vaccine here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_vaccine" id="inp_vaccine" placeholder="Enter vaccine here..." required>
        </div>
    </div>
</div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_dose"> Vaccine Dose <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the dose here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_dose" id="inp_dose" class="form-select js-select2" data-placeholder="Select Dose" required>
                    <option value="Select Dose" selected disabled> Select Dose </option>
                    <option value="1st Dose"> 1st Dose </option>
                    <option value="2nd Dose"> 2nd Dose </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_boost"> Booster Dose <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the booster dose here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_boost" id="inp_boost" class="form-select js-select2" data-placeholder="Select Booster" required>
                    <option value="Select Booster" selected disabled> Select Booster </option>
                    <option value="None"> None </option>
                    <option value="1st Booster"> 1st Booster </option>
                    <option value="2nd Booster"> 2nd Booster </option>
                </select>
            </div>
        </div>
    </div>


<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_add_boost"> Additional Booster <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the additional booster here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_add_boost" id="inp_add_boost" placeholder="Enter additional booster here..." required>
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

