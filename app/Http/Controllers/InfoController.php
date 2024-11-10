<?php

namespace App\Http\Controllers;
use App\Models\InfoModel;
use Illuminate\Http\Request;

use App\Models\HealthModel;
use App\Models\RisksModel;
use App\Models\HistoryModel;
use App\Models\VaccinationModel;
use App\Models\TetanusToxoidModel;

use App\Models\PrenatalModel;
use App\Models\LabResultModel;
use App\Models\CovidModel;
use App\Models\DentalModel;
use App\Models\FamilyModel;
use App\Models\HealthOfficeModel;
use App\Models\LaborModel;

class InfoController extends Controller
{
    public static function index(){
        $info = InfoModel::get();
        return view('pages.information.index')->with(['info' => $info]);
    }

    public static function registration(){
        $info = InfoModel::get();
        return view('pages.information.registration')->with(['info' => $info]);
    }

    public static function details(){
        $info = InfoModel::get();
        return view('pages.patients.details')->with(['info' => $info]);
    }
    public static function health($id){
        $info = HealthModel::get();
        return view('pages.patients.health')->with(['info' => $info, 'id' => $id]);
    }
    public static function risk($id){
        $info = RisksModel::get();
        return view('pages.patients.risk')->with(['info' => $info, 'id' => $id]);
    }
    public static function history($id){
        $info = HistoryModel::get();
        return view('pages.patients.history')->with(['info' => $info, 'id' => $id]);
    }
    public static function vaccination($id){
        $info = VaccinationModel::get();
        return view('pages.patients.vaccination')->with(['info' => $info, 'id' => $id]);
    }
    public static function tetanus_toxoid($id){
        $info = TetanusToxoidModel::get();
        return view('pages.patients.tetanus-toxoid')->with(['info' => $info, 'id' => $id]);
    }
    public static function store(Request $request){
        // Validate the request
        $request->validate([
            'inp_name' => 'required|string|max:255',
            'inp_address' => 'required|string|max:255',
            'inp_civil_status' => 'required|string|max:255',
            'inp_religion' => 'required|string|max:255',
            'inp_philhealth' => 'required|string|max:255',
            'inp_philhealth_num' => 'required|string|max:255',
            'inp_age' => 'required|string|max:255',
            'inp_bloodtype' => 'required|string|max:255',
            'inp_birthdate' => 'required|string|max:255',
            'inp_weight' => 'required|string|max:255',
            'inp_contact_num' => 'required|string|max:255',
            'inp_gavida' => 'required|string|max:255',
            'inp_term' => 'required|string|max:255',
            'inp_preterm' => 'required|string|max:255',
            'inp_abortion' => 'required|string|max:255',
            'inp_live' => 'required|string|max:255',
        ]);

        InfoModel::create([
            'info_name' => $request->inp_name,
            'info_address' => $request->inp_address,
            'info_civil_status' => $request->inp_civil_status,
            'info_religion' => $request->inp_religion,
            'info_philhealth' => $request->inp_philhealth,
            'info_philhealth_num' => $request->inp_philhealth_num,
            'info_age' => $request->inp_age,
            'info_bloodtype' => $request->inp_bloodtype,
            'info_birthdate' => $request->inp_birthdate,
            'info_weight' => $request->inp_weight,
            'info_contact_num' => $request->inp_contact_num,
            'info_gavida' => $request->inp_gavida,
            'info_term' => $request->inp_term,
            'info_preterm' => $request->inp_preterm,
            'info_abortion' => $request->inp_abortion,
            'info_live' => $request->inp_live,

        ]);

        // Redirect back with success message
        return redirect()->back()->with( 'success', 'Information added successfully!');
    }
    public static function health_store(Request $request){
        // Validate the request
        $request->validate([

            'inp_hypertension' => 'required|string|max:255',
            'inp_tuberculosis' => 'required|string|max:255',
            'inp_diabetes' => 'required|string|max:255',
            'inp_bronchial' => 'required|string|max:255',
            'inp_goiter' => 'required|string|max:255',
            'inp_hepatitis' => 'required|string|max:255',
            'inp_smoking' => 'required|string|max:255',
            'inp_alcohol' => 'required|string|max:255',
            'inp_drugs' => 'required|string|max:255',
            'inp_abuse' => 'required|string|max:255',
            'inp_mp' => 'required|string|max:255',
            'inp_others' => 'required|string|max:255',
        ]);

        HealthModel::create([

            'h_hypertension' => $request->inp_hypertension,
            'h_tuberculosis' => $request->inp_tuberculosis,
            'h_diabetes' => $request->inp_diabetes,
            'h_bronchial' => $request->inp_bronchial,
            'h_goiter' => $request->inp_goiter,
            'h_hepatitis' => $request->inp_hepatitis,
            'h_smoking' => $request->inp_smoking,
            'h_alcohol' => $request->inp_alcohol,
            'h_drugs' => $request->inp_drugs,
            'h_abuse' => $request->inp_abuse,
            'h_multiple_partners' => $request->inp_mp,
            'h_others' => $request->inp_others,

        ]);

        // Redirect back with success message
        return redirect()->back()->with( 'success', 'Information added successfully!');
    }

    public static function health_update(Request $request, $id){
        // Validate the request
        $request->validate([

            'inp_hypertension' => 'required|string|max:255',
            'inp_tuberculosis' => 'required|string|max:255',
            'inp_diabetes' => 'required|string|max:255',
            'inp_bronchial' => 'required|string|max:255',
            'inp_goiter' => 'required|string|max:255',
            'inp_hepatitis' => 'required|string|max:255',
            'inp_smoking' => 'required|string|max:255',
            'inp_alcohol' => 'required|string|max:255',
            'inp_drugs' => 'required|string|max:255',
            'inp_abuse' => 'required|string|max:255',
            'inp_mp' => 'required|string|max:255',
            'inp_others' => 'required|string|max:255',
        ]);

        HealthModel::where('id', $id)->update([

            'h_hypertension' => $request->inp_hypertension,
            'h_tuberculosis' => $request->inp_tuberculosis,
            'h_diabetes' => $request->inp_diabetes,
            'h_bronchial' => $request->inp_bronchial,
            'h_goiter' => $request->inp_goiter,
            'h_hepatitis' => $request->inp_hepatitis,
            'h_smoking' => $request->inp_smoking,
            'h_alcohol' => $request->inp_alcohol,
            'h_drugs' => $request->inp_drugs,
            'h_abuse' => $request->inp_abuse,
            'h_multiple_partners' => $request->inp_mp,
            'h_others' => $request->inp_others,

        ]);

        // Redirect back with success message
        return redirect()->back()->with( 'success', 'Information updated successfully!');
    }
    public static function risk_store(Request $request)
    {
        // Validate the request
        $request->validate([

            'r_age' => 'required|string|max:255',
            'r_multiparity' => 'required|string|max:255',
            'r_previous_cs' => 'required|string|max:255',
            'r_consecutive_miscarriages' => 'required|string|max:255',
            'r_stillbirth' => 'required|string|max:255',
            'r_malnourished' => 'required|string|max:255',
            'r_co_morbidity' => 'required|string|max:255',
            'r_postpartum_hemorrhage' => 'required|string|max:255',
            'r_menarchy' => 'required|string|max:255',
            'r_menstrual_flow_duration' => 'required|string|max:255',
            'r_pads_per_day' => 'required|string|max:255',
        ]);

        RisksModel::create([

            'r_age' => $request->r_age,
            'r_multiparity' => $request->r_multiparity,
            'r_previous_cs' => $request->r_previous_cs,
            'r_consecutive_miscarriages' => $request->r_consecutive_miscarriages,
            'r_stillbirth' => $request->r_stillbirth,
            'r_malnourished' => $request->r_malnourished,
            'r_co_morbidity' => $request->r_co_morbidity,
            'r_postpartum_hemorrhage' => $request->r_postpartum_hemorrhage,
            'r_menarchy' => $request->r_menarchy,
            'r_menstrual_flow_duration' => $request->r_menstrual_flow_duration,
            'r_pads_per_day' => $request->r_pads_per_day,
        ]);

        return redirect()->back()->with( 'success', 'Information added successfully!');
    }


    public static function risk_update(Request $request, $id)
    {
        // Validate the request
        $request->validate([

            'r_age' => 'required|string|max:255',
            'r_multiparity' => 'required|string|max:255',
            'r_previous_cs' => 'required|string|max:255',
            'r_consecutive_miscarriages' => 'required|string|max:255',
            'r_stillbirth' => 'required|string|max:255',
            'r_malnourished' => 'required|string|max:255',
            'r_co_morbidity' => 'required|string|max:255',
            'r_postpartum_hemorrhage' => 'required|string|max:255',
            'r_menarchy' => 'required|string|max:255',
            'r_menstrual_flow_duration' => 'required|string|max:255',
            'r_pads_per_day' => 'required|string|max:255',
        ]);

        RisksModel::where('id', $id)->update([

            'r_age' => $request->r_age,
            'r_multiparity' => $request->r_multiparity,
            'r_previous_cs' => $request->r_previous_cs,
            'r_consecutive_miscarriages' => $request->r_consecutive_miscarriages,
            'r_stillbirth' => $request->r_stillbirth,
            'r_malnourished' => $request->r_malnourished,
            'r_co_morbidity' => $request->r_co_morbidity,
            'r_postpartum_hemorrhage' => $request->r_postpartum_hemorrhage,
            'r_menarchy' => $request->r_menarchy,
            'r_menstrual_flow_duration' => $request->r_menstrual_flow_duration,
            'r_pads_per_day' => $request->r_pads_per_day,
        ]);

        return redirect()->back()->with( 'success', 'Information updated successfully!');
    }
    public static function history_store(Request $request){
        // Validate the request
    $request->validate([
        'inp_yod' => 'required|string|max:255',
        'inp_tod' => 'required|string|max:255',
        'inp_pod' => 'required|string|max:255',
        'inp_ba' => 'required|string|max:255',
        'inp_comp' => 'nullable|string|max:255',
        'inp_oop' => 'nullable|string|max:255',
        ]);

        HistoryModel::create([
            'obs_year_of_delivery'=> $request->inp_yod,
            'obs_type_of_delivery'=> $request->inp_tod,
            'obs_place_of_delivery'=> $request->inp_pod,
            'obs_birth_attendant'=> $request->inp_ba,
            'obs_complications'=> $request->inp_comp,
            'obs_outcome_of_pregnancy'=> $request->inp_oop,
        ]);

        // Redirect back with success message
        return redirect()->back()->with( 'success', 'Record added successfully!');
    }

    public static function history_update(Request $request, $id){
        // Validate the request
    $request->validate([
        'inp_yod' => 'required|string|max:255',
        'inp_tod' => 'required|string|max:255',
        'inp_pod' => 'required|string|max:255',
        'inp_ba' => 'required|string|max:255',
        'inp_comp' => 'nullable|string|max:255',
        'inp_oop' => 'nullable|string|max:255',
        ]);

        HistoryModel::where('id', $id)->update([
            'obs_year_of_delivery'=> $request->inp_yod,
            'obs_type_of_delivery'=> $request->inp_tod,
            'obs_place_of_delivery'=> $request->inp_pod,
            'obs_birth_attendant'=> $request->inp_ba,
            'obs_complications'=> $request->inp_comp,
            'obs_outcome_of_pregnancy'=> $request->inp_oop,
        ]);

        // Redirect back with success message
        return redirect()->back()->with( 'success', 'Record added successfully!');
    }
    public static function vaccination_store(Request $request)
    {
        // Validation
        $request->validate([
            'inp_hpv_dose_1' => 'required|date',
            'inp_hpv_dose_2' => 'required|date',
            'inp_hpv_dose_3' => 'required|date',
            'inp_hpv_deworming_date' => 'required|date',
            'inp_hpv_lmp' => 'required|string|max:255',
            'inp_hpv_edc' => 'required|string|max:255',
            'inp_hpv_birthplan' => 'required|string|max:255',
        ]);

        // Store data
        VaccinationModel::create([
            'hpv_dose_1' => $request->inp_hpv_dose_1,
            'hpv_dose_2' => $request->inp_hpv_dose_2,
            'hpv_dose_3' => $request->inp_hpv_dose_3,
            'hpv_deworming_date' => $request->inp_hpv_deworming_date,
            'hpv_lmp' => $request->inp_hpv_lmp,
            'hpv_edc' => $request->inp_hpv_edc,
            'hpv_birthplan' => $request->inp_hpv_birthplan,
        ]);

        return redirect()->back()->with('success', 'HPV Vaccination record added successfully!');
    }

    public static function vaccination_update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'inp_hpv_dose_1' => 'required|date',
            'inp_hpv_dose_2' => 'required|date',
            'inp_hpv_dose_3' => 'required|date',
            'inp_hpv_deworming_date' => 'required|date',
            'inp_hpv_lmp' => 'required|string|max:255',
            'inp_hpv_edc' => 'required|string|max:255',
            'inp_hpv_birthplan' => 'required|string|max:255',
        ]);

        // Store data
        VaccinationModel::where('id', $id)->update([
            'hpv_dose_1' => $request->inp_hpv_dose_1,
            'hpv_dose_2' => $request->inp_hpv_dose_2,
            'hpv_dose_3' => $request->inp_hpv_dose_3,
            'hpv_deworming_date' => $request->inp_hpv_deworming_date,
            'hpv_lmp' => $request->inp_hpv_lmp,
            'hpv_edc' => $request->inp_hpv_edc,
            'hpv_birthplan' => $request->inp_hpv_birthplan,
        ]);

        return redirect()->back()->with('success', 'HPV Vaccination record added successfully!');
    }
    public static function tetanus_toxoid_store(Request $request)
    {
        // Validate the request
        $request->validate([
            'tt_tt1' => 'required|string|max:255',
            'tt_tt2' => 'required|string|max:255',
            'tt_tt3' => 'required|string|max:255',
            'tt_tt4' => 'required|string|max:255',
            'tt_tt5' => 'required|string|max:255',
            'tt_fim' => 'required|string|max:255',
        ]);

        // Create a new Tetanus Toxoid record
        TetanusToxoidModel::create([
            'tt_tt1' => $request->tt_tt1,
            'tt_tt2' => $request->tt_tt2,
            'tt_tt3' => $request->tt_tt3,
            'tt_tt4' => $request->tt_tt4,
            'tt_tt5' => $request->tt_tt5,
            'tt_fim' => $request->tt_fim,
        ]);

        return redirect()->back()->with('success', 'Tetanus Toxoid record added successfully!');
    }

    public static function tetanus_toxoid_update(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'tt_tt1' => 'required|string|max:255',
            'tt_tt2' => 'required|string|max:255',
            'tt_tt3' => 'required|string|max:255',
            'tt_tt4' => 'required|string|max:255',
            'tt_tt5' => 'required|string|max:255',
            'tt_fim' => 'required|string|max:255',
        ]);

        // Create a new Tetanus Toxoid record
        TetanusToxoidModel::where('id', $id)->update([
            'tt_tt1' => $request->tt_tt1,
            'tt_tt2' => $request->tt_tt2,
            'tt_tt3' => $request->tt_tt3,
            'tt_tt4' => $request->tt_tt4,
            'tt_tt5' => $request->tt_tt5,
            'tt_fim' => $request->tt_fim,
        ]);

        return redirect()->back()->with('success', 'Tetanus Toxoid record updated successfully!');
    }

    public static function prenatalindex()
    {
        $info = PrenatalModel::get();
        return view('pages.patients.prenatalvisit')->with(['info' => $info]);
    }

    public static function prenatalstore(Request $request)
    {
        $request->validate([
            'inp_trimester' => 'required|string|max:255',
            'inp_dov' => 'required|date|max:55',
            'inp_aim' => 'required|string|max:255',
            'inp_bp' => 'required|string|max:255',
            'inp_weight' => 'required|string|max:55',
            'inp_presentation' => 'required|string|max:255',
            'inp_fhb' => 'required|string|max:255',
            'inp_fh' => 'required|string|max:255',
            'inp_fever' => 'required|string|max:255',
            'inp_edema' => 'required|string|max:255',
            'inp_vb' => 'required|string|max:255',
            'inp_pal' => 'required|string|max:255',
            'inp_ltr' => 'required|string|max:255',
            'inp_sgat' => 'required|string|max:255',
            'inp_fsfa' => 'required|string|max:255',
            'inp_cc' => 'required|string|max:255',


        ]);

        PrenatalModel::create([
            'prenatal_trimester' => $request->inp_trimester,
            'prenatal_date_of_visit' => $request->inp_dov,
            'prenatal_age_in_months' => $request->inp_aim,
            'prenatal_AOG' => $request->inp_aog,
            'prenatal_blood_pressure' => $request->inp_bp,
            'prenatal_weight' => $request->inp_weight,
            'prenatal_presentation' => $request->inp_presentation,
            'prenatal_FHB' => $request->inp_fhb,
            'prenatal_fundal_height' => $request->inp_fh,
            'prenatal_fever' => $request->inp_fever,
            'prenatal_edema' => $request->inp_edema,
            'prenatal_vaginal_bleeding' => $request->inp_vb,
            'prenatal_pallor' => $request->inp_pal,
            'prenatal_lab_test_res' => $request->inp_ltr,
            'prenatal_service_given' => $request->inp_sgat,
            'prenatal_sulfate_folic' => $request->inp_fsfa,
            'prenatal_calcium_carbon' => $request->inp_cc,

        ]);

        return redirect()->back()->with('success', 'Pre-natal Visits submitted successfully!');
    }

    public static function prenatalupdate(Request $request, $id)
    {
        $request->validate([
            'inp_trimester' => 'required|string|max:255',
            'inp_dov' => 'required|date|max:55',
            'inp_aim' => 'required|string|max:255',
            'inp_aog' => 'required|string|max:255',
            'inp_bp' => 'required|string|max:255',
            'inp_weight' => 'required|string|max:55',
            'inp_presentation' => 'required|string|max:255',
            'inp_fhb' => 'required|string|max:255',
            'inp_fh' => 'required|string|max:255',
            'inp_fever' => 'required|string|max:255',
            'inp_edema' => 'required|string|max:255',
            'inp_vb' => 'required|string|max:255',
            'inp_pal' => 'required|string|max:255',
            'inp_ltr' => 'required|string|max:255',
            'inp_sgat' => 'required|string|max:255',
            'inp_fsfa' => 'required|string|max:255',
            'inp_cc' => 'required|string|max:255',


        ]);

        PrenatalModel::where('id', $id)->update([
            'prenatal_trimester' => $request->inp_trimester,
            'prenatal_date_of_visit' => $request->inp_dov,
            'prenatal_age_in_months' => $request->inp_aim,
            'prenatal_AOG' => $request->inp_aog,
            'prenatal_blood_pressure' => $request->inp_bp,
            'prenatal_weight' => $request->inp_weight,
            'prenatal_presentation' => $request->inp_presentation,
            'prenatal_FHB' => $request->inp_fhb,
            'prenatal_fundal_height' => $request->inp_fh,
            'prenatal_fever' => $request->inp_fever,
            'prenatal_edema' => $request->inp_edema,
            'prenatal_vaginal_bleeding' => $request->inp_vb,
            'prenatal_pallor' => $request->inp_pal,
            'prenatal_lab_test_res' => $request->inp_ltr,
            'prenatal_service_given' => $request->inp_sgat,
            'prenatal_sulfate_folic' => $request->inp_fsfa,
            'prenatal_calcium_carbon' => $request->inp_cc,

        ]);

        return redirect()->back()->with('success', 'Pre-natal Visits updated successfully!');
    }


    public static function labindex($id)
    {
        $info= LabResultModel::get();
        return view('pages.patients.labresult')->with(['info' => $info, 'id' => $id]);
    }

    public static function labstore(Request $request)
    {
        $request->validate([
            'inp_cbc' => 'required|string|max:255',
            'inp_urine' => 'required|string|max:255',
            'inp_ultra' => 'required|string|max:255',
            'inp_others' => 'required|string|max:255',

        ]);

        LabResultModel::create([
            'lab_cbc' => $request->inp_cbc,
            'lab_urine' => $request->inp_urine,
            'lab_ultrasound' => $request->inp_ultra,
            'lab_others' => $request->inp_others,



        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }

    public static function labupdate(Request $request, $id)
    {
        $request->validate([
            'inp_cbc' => 'required|string|max:255',
            'inp_urine' => 'required|string|max:255',
            'inp_ultra' => 'required|string|max:255',
            'inp_others' => 'required|string|max:255',
        ]);

        LabResultModel::where('id', $id)->update([
            'lab_cbc' => $request->inp_cbc,
            'lab_urine' => $request->inp_urine,
            'lab_ultrasound' => $request->inp_ultra,
            'lab_others' => $request->inp_others,
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }


    public static function covidindex($id)
    {
        $covid = CovidModel::get();
        return view('pages.patients.covid')->with(['covid' => $covid, 'id' => $id ]);
    }

    public static function covidstore(Request $request)
    {
        $request->validate([
            'inp_vaccine' => 'required|string|max:255',
            'inp_dose' => 'required|string|max:255',
            'inp_boost' => 'required|string|max:255',
            'inp_add_boost' => 'required|string|max:255',

        ]);

        CovidModel::create([
            'covid_vaccine' => $request->inp_vaccine,
            'covid_dose' => $request->inp_dose,
            'covid_booster' => $request->inp_boost,
            'covid_add_booster' => $request->inp_add_boost,



        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }
    public static function covidupdate(Request $request, $id)
    {
        $request->validate([
            'inp_vaccine' => 'required|string|max:255',
            'inp_dose' => 'required|string|max:255',
            'inp_boost' => 'required|string|max:255',
            'inp_add_boost' => 'required|string|max:255',

        ]);

        CovidModel::where('id', $id)->update([
            'covid_vaccine' => $request->inp_vaccine,
            'covid_dose' => $request->inp_dose,
            'covid_booster' => $request->inp_boost,
            'covid_add_booster' => $request->inp_add_boost,



        ]);

        return redirect()->back()->with('success', 'Form updated successfully!');

    }
    public static function dentalindex($id)
    {
        $dental = DentalModel::get();
        return view('pages.patients.dental')->with(['dental' => $dental, 'id' => $id]);
    }

    public static function dentalstore(Request $request)
    {
        $request->validate([
            'inp_check' => 'required|string|max:255',
            'inp_caries' => 'required|string|max:255',
            'inp_others' => 'required|string|max:255',
            'inp_mm' => 'required|string|max:255',
            'inp_others_prob' => 'required|string|max:255',
            'inp_at' => 'required|string|max:255',
            'inp_ref_to' => 'required|string|max:255',
            'inp_nosf' => 'required|string|max:255',
            'inp_dof' => 'required|string|max:255',
            'inp_wt' => 'required|string|max:255',
            'inp_remarks' => 'required|string|max:255',


        ]);

        DentalModel::create([
            'dental_check' => $request->inp_check,
            'dental_caries'=> $request->inp_caries,
            'dental_others'=> $request->inp_others,
            'dental_malnourish'=> $request->inp_mm,
            'dental_other_problem'=> $request->inp_others_prob,
            'dental_action'=> $request->inp_at,
            'dental_refer'=> $request->inp_ref_to,
            'dental_food'=> $request->inp_nosf,
            'dental_days'=> $request->inp_dof,
            'dental_wt'=> $request->inp_wt,
            'dental_remarks'=> $request->inp_remarks,


        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }

    public static function dentalupdate(Request $request, $id)
    {
        $request->validate([
            'inp_check' => 'required|string|max:255',
            'inp_caries' => 'required|string|max:255',
            'inp_others' => 'required|string|max:255',
            'inp_mm' => 'required|string|max:255',
            'inp_others_prob' => 'required|string|max:255',
            'inp_at' => 'required|string|max:255',
            'inp_ref_to' => 'required|string|max:255',
            'inp_nosf' => 'required|string|max:255',
            'inp_dof' => 'required|string|max:255',
            'inp_wt' => 'required|string|max:255',
            'inp_remarks' => 'required|string|max:255',


        ]);

        DentalModel::where('id', $id)->update([
            'dental_check' => $request->inp_check,
            'dental_caries'=> $request->inp_caries,
            'dental_others'=> $request->inp_others,
            'dental_malnourish'=> $request->inp_mm,
            'dental_other_problem'=> $request->inp_others_prob,
            'dental_action'=> $request->inp_at,
            'dental_refer'=> $request->inp_ref_to,
            'dental_food'=> $request->inp_nosf,
            'dental_days'=> $request->inp_dof,
            'dental_wt'=> $request->inp_wt,
            'dental_remarks'=> $request->inp_remarks,


        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }
    public static function famindex($id)
    {
        $family = FamilyModel::get();
        return view('pages.patients.familyplanning')->with(['family' => $family, 'id' => $id]);
    }

    public static function famstore(Request $request)
    {
        $request->validate([
            'inp_date' => 'required|date|max:255',
            'inp_moc' => 'required|string|max:255',
            'inp_remarks' => 'required|string|max:255',

        ]);

        FamilyModel::create([
            'family_date' => $request->inp_date,
            'family_method' => $request->inp_moc,
            'family_remarks' => $request->inp_remarks,



        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }
    public static function famupdate(Request $request, $id)
    {
        $request->validate([
            'inp_date' => 'required|date|max:255',
            'inp_moc' => 'required|string|max:255',
            'inp_remarks' => 'required|string|max:255',

        ]);

        FamilyModel::where('id', $id)->update([
            'family_date' => $request->inp_date,
            'family_method' => $request->inp_moc,
            'family_remarks' => $request->inp_remarks,



        ]);

        return redirect()->back()->with('success', 'Form updated successfully!');

    }


    public static function healthoffice_index()
    {
        $health = HealthOfficeModel::get();
        return view('pages.patients.healthoffice')->with(['health' => $health]);
    }

    public static function healthoffice_store(Request $request)
    {
        $request->validate([
            'inp_brngy' => 'required|string|max:255',
            'inp_municipality' => 'required|string|max:255',
            'inp_prov' => 'required|string|max:255',
            'inp_ref' => 'required|string|max:255',
            'inp_nom' => 'required|string|max:255',
            'inp_dsa' => 'required|string|max:255',
            'inp_bemoc' => 'required|string|max:255',
            'inp_bemoc_add' => 'required|string|max:255',
            'inp_cemoc' => 'required|string|max:255',
            'inp_cemoc_add' => 'required|string|max:255',

        ]);

        HealthOfficeModel::create([
            'ho_barangay' => $request->inp_brngy,
            'ho_municipality' => $request->inp_municipality,
            'ho_province' => $request->inp_prov,
            'ho_ref_unit' => $request->inp_ref,
            'ho_mw_name' => $request->inp_nom,
            'ho_duty_station' => $request->inp_dsa,
            'ho_bemoc' => $request->inp_bemoc,
            'ho_bemoc_add' => $request->inp_bemoc_add,
            'ho_cemoc' => $request->inp_cemoc,
            'ho_cemoc_add' => $request->inp_cemoc_add,


        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }

    public static function healthoffice_update(Request $request, $id)
    {
        $request->validate([
            'inp_brngy' => 'required|string|max:255',
            'inp_municipality' => 'required|string|max:255',
            'inp_prov' => 'required|string|max:255',
            'inp_ref' => 'required|string|max:255',
            'inp_nom' => 'required|string|max:255',
            'inp_dsa' => 'required|string|max:255',
            'inp_bemoc' => 'required|string|max:255',
            'inp_bemoc_add' => 'required|string|max:255',
            'inp_cemoc' => 'required|string|max:255',
            'inp_cemoc_add' => 'required|string|max:255',

        ]);

        HealthOfficeModel::where('id', $id)->update([
            'ho_barangay' => $request->inp_brngy,
            'ho_municipality' => $request->inp_municipality,
            'ho_province' => $request->inp_prov,
            'ho_ref_unit' => $request->inp_ref,
            'ho_mw_name' => $request->inp_nom,
            'ho_duty_station' => $request->inp_dsa,
            'ho_bemoc' => $request->inp_bemoc,
            'ho_bemoc_add' => $request->inp_bemoc_add,
            'ho_cemoc' => $request->inp_cemoc,
            'ho_cemoc_add' => $request->inp_cemoc_add,


        ]);

        return redirect()->back()->with('success', 'Form updated successfully!');

    }

    public static function laborindex($id)
    {
        $labor = LaborModel::get();
        return view('pages.patients.labor')->with(['labor' => $labor, 'id' => $id]);
    }

    public static function laborstore(Request $request)
    {
        $request->validate([
            'inp_dod' => 'required|date|max:255',
            'inp_tod' => 'required|string|max:255',
            'inp_pod' => 'required|string|max:255',
            'inp_bod' => 'required|string|max:255',
            'inp_bbw' => 'required|string|max:255',
            'inp_lb' => 'required|string|max:255',
            'inp_gender' => 'required|string|max:255',
            'inp_hb' => 'required|string|max:255',
            'inp_pph' => 'required|string|max:255',

        ]);

        LaborModel::create([
            'lad_date_delivery' =>$request->inp_dod,
            'lad_type_delivery' =>$request->inp_tod,
            'lad_place_delivery' =>$request->inp_pod,
            'lad_birth_delivery' =>$request->inp_bod,
            'lad_birth_weight' =>$request->inp_bbw,
            'lad_live_birth' =>$request->inp_lb,
            'lad_gender' =>$request->inp_gender,
            'lad_healthy'=>$request->inp_hb,
            'lad_post_partum' =>$request->inp_pph,


        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }

    public static function laborupdate(Request $request, $id)
    {
        $request->validate([
            'inp_dod' => 'required|date|max:255',
            'inp_tod' => 'required|string|max:255',
            'inp_pod' => 'required|string|max:255',
            'inp_bod' => 'required|string|max:255',
            'inp_bbw' => 'required|string|max:255',
            'inp_lb' => 'required|string|max:255',
            'inp_gender' => 'required|string|max:255',
            'inp_hb' => 'required|string|max:255',
            'inp_pph' => 'required|string|max:255',

        ]);

        LaborModel::where('id', $id)->update([
            'lad_date_delivery' =>$request->inp_dod,
            'lad_type_delivery' =>$request->inp_tod,
            'lad_place_delivery' =>$request->inp_pod,
            'lad_birth_delivery' =>$request->inp_bod,
            'lad_birth_weight' =>$request->inp_bbw,
            'lad_live_birth' =>$request->inp_lb,
            'lad_gender' =>$request->inp_gender,
            'lad_healthy'=>$request->inp_hb,
            'lad_post_partum' =>$request->inp_pph,


        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');

    }

}
