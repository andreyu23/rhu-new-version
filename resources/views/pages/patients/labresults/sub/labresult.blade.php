<x-slot name="header">{{ __('Laboratory Results') }} </x-slot>
<x-slot name="subHeader">{{ __('You can fill up laboratory results form here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_cbc"> CBC / HGB <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the CBC or HGB here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_cbc" id="inp_cbc"
                placeholder="Enter CBC or HGB here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_urine"> Urinalysis <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the urinalysis here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_urine" id="inp_urine"
                placeholder="Enter urinalysis result here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_ultra"> Ultrasound <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the ultrasound here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_ultra" id="inp_ultra"
                placeholder="Enter ultrasound result here..." required>
        </div>
    </div>
</div>


<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_others"> Others (Please, specify) </label>
            <span class="form-note"> Specify the other results here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_others" id="inp_others"
                placeholder="Enter other results here..." value="-">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <hr class="mt-3 mb-3">
    </div>
</div>

<div class="col-lg-5">
</div>
<div class="col-lg-7 justify-end" style="float: right">
    <hr>
    <div class="form-group justify-end">
        <button type="reset" class="btn btn-light bg-white mx-3">
            <em class="icon ni ni-repeat"></em>&ensp;
            Reset
        </button>
        <button type="submit" class="btn btn-success">
            <em class="icon ni ni-save"></em>&ensp;
            Save Record
        </button>
    </div>
</div>
