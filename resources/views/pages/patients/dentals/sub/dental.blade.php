<x-slot name="header">{{ __('Dental Check-ups') }} </x-slot>
<x-slot name="subHeader">{{ __('You can fill up dental form here.') }} </x-slot>



<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_check"> Dental Check-up (Y/N) <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the answer here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_check" id="inp_check" class="form-select js-select2" data-placeholder="Select Answer" required>
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
            <label class="form-label" for="inp_caries"> Dental Caries (Y/N) <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the answer here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_caries" id="inp_caries" class="form-select js-select2" data-placeholder="Select Answer" required>
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
            <label class="form-label" for="inp_others"> Others (Please, specify) <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the other results here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_others" id="inp_others" placeholder="Enter other results here..." required>
        </div>
    </div>
</div>


<div class="row mt-4">
    <div class="col-xxl-3 col-md-6">
        <div class="form-group">
            <label class="form-label inline-block"> <b> PROBLEMS IDENTIFIED AND ACTION TAKEN </b></label>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_mm"> Malnourished Mother (Y/N) <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the answer here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_mm" id="inp_mm" class="form-select js-select2" data-placeholder="Select Answer" required>
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
            <label class="form-label" for="inp_others_prob"> Other illness / problems <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the other problems here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_others_prob" id="inp_others_prob" placeholder="Enter other problems here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_at"> Action Taken <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the action taken here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_at" id="inp_at" placeholder="Enter action taken here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_ref_to"> Reffered to <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the referred person here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_ref_to" id="inp_ref_to" placeholder="Enter referred here..." required>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-xxl-3 col-md-6">
        <div class="form-group">
            <label class="form-label inline-block"> <b> Supplementary feeding for Pregnant Woman </b></label>
        </div>
    </div>
</div>


<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_nosf"> Name of Supplementary Food Given <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the name of food here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_nosf" id="inp_nosf" placeholder="Enter name of food here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dof"> Day of Feeding <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the day of feeding here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_dof" id="inp_dof" class="form-select js-select2" data-placeholder="Select Days of Feeding" required>
                <option value="Select Days" selected disabled> Select Days </option>
                <option value="1st Day of Feeding"> 1st Day of Feeding </option>
                <option value="After 30 days"> After 30 days </option>
                <option value="After 60 days"> After 60 days </option>
                <option value="After 90 days"> After 90 days </option>
                <option value="After 120 days"> After 120 days </option>
                <option value="Outcome"> Outcome </option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_wt"> WT <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the wt here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_wt" id="inp_wt" placeholder="Enter wt here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_remarks"> Remarks <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the wt here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_remarks" id="inp_remarks" placeholder="Enter remarks here..." required>
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

