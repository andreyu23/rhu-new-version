<x-slot name="header">{{ __('Labor and Delivery') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit labor and delivery form here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dod"> Date of Delivery <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the date of delivery here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_dod" id="inp_dod" placeholder="Enter date of delivery here..." required>
        </div>
    </div>
</div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_tod"> Type of Delivery <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the type of delivery here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_tod" id="inp_tod" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Normal Delivery"> Normal Delivery </option>
                    <option value="Cesarean Section"> Cesarean Section </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_pod"> Place of Delivery <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the place of delivery here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_pod" id="inp_pod" placeholder="Enter place of delivery here..." required>
            </div>
        </div>
    </div>


<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_bod"> Birth of Delivery <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the birth of delivery here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_bod" id="inp_bod" placeholder="Enter birth of delivery here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_bbw"> Baby Birth Weight <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the baby birth weight here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_bbw" id="inp_bbw" placeholder="Enter baby birth weight here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_lb"> Live Birth <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify if the baby is alive here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_lb" id="inp_lb" class="form-select js-select2" data-placeholder="Select Answer" required>
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
            <label class="form-label" for="inp_gender"> Gender <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the gender here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_gender" id="inp_gender" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="Male"> Male </option>
                <option value="Female"> Female </option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hb"> Healthy Baby <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify if the baby is healthy here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_hb" id="inp_hb" class="form-select js-select2" data-placeholder="Select Answer" required>
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
            <label class="form-label" for="inp_pph"> Post-partum Hemorrhage 500CC+ <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify if the baby is healthy here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_pph" id="inp_pph" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="Yes"> Yes </option>
                <option value="No"> No </option>
            </select>
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

