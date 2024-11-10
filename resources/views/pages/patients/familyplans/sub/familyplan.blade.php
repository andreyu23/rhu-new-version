<x-slot name="header">{{ __('Family Plan') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit family plan form here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_date"> Date <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the date here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_date" id="inp_date" placeholder="Enter date here..." required>
        </div>
    </div>
</div>


<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_moc"> Method of Choice <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the method of choice here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_moc" id="inp_moc" placeholder="Enter method of choice here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_remarks"> Remarks <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the remarks here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_remarks" id="inp_remarks" placeholder="Enter remarks here..." required>
        </div>
    </div>
</div>


<div class="row mt-4">
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
</div>
