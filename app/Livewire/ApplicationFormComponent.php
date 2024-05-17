<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Application;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class ApplicationFormComponent extends Component
{
    use WithFileUploads;
    public $first_name;
    public $last_name;
    public $email;
    public $dob;
    public $phone_number;
    public $whatsapp_number;
    public $region;
    // public $district;
    // public $village;
    public $guardian_name;
    public $guardian_number;
    public $about_us;
    public $living_situation;
    public $about_family;
    public $deserve;
    public $challenges;
    public $level_of_education;
    public $combination;
    public $points;
    public $experience;
    public $passion_of_tech;
    public $prepared;
    public $motivated;
    public $plan_to_contribute;
    public $question1;
    public $question2;
    public $question3;
    public $question4;
    public $additional_information;
    public $recommend_friend;
    public $recommendation_letter;
    public $certificate;
    // public $fees_obligation;
    public $applying_by;

    public function updated($fields){
        $this->validateOnly($fields,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'dob' => 'required',
            'phone_number' => 'required',
            'whatsapp_number' => 'required',
            'region' => 'required',
            // 'district' => 'required',
            // 'village' => 'required',
            'guardian_name' => 'required',
            'guardian_number' => 'required',
            'about_us' => 'required',
            'living_situation' => 'required',
            // 'about_family' => 'required',
            'deserve' => 'required',
            'level_of_education' => 'required',
            'combination' => 'required',
            'points' => 'required',
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'question4' => 'required',
            'recommend_friend' => 'required',
            'certificate' => 'required',
            'plan_to_contribute' => 'required',
            'motivated' => 'required',
            'prepared' => 'required',
            'passion_of_tech' => 'required',
            'experience' => 'required',
            'challenges' => 'required',
            // 'fees_obligation' => 'required',
            'applying_by' => 'required',
        ]);
    }

    public function sendApplication(){
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'dob' => 'required',
            'phone_number' => 'required',
            'whatsapp_number' => 'required',
            'region' => 'required',
            // 'district' => 'required',
            // 'village' => 'required',
            'guardian_name' => 'required',
            'guardian_number' => 'required',
            'about_us' => 'required',
            'living_situation' => 'required',
            // 'about_family' => 'required',
            'deserve' => 'required',
            'level_of_education' => 'required',
            'combination' => 'required',
            'points' => 'required',
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'question4' => 'required',
            'recommend_friend' => 'required',
            'certificate' => 'required',
            'plan_to_contribute' => 'required',
            'motivated' => 'required',
            'prepared' => 'required',
            'passion_of_tech' => 'required',
            'experience' => 'required',
            'challenges' => 'required',
            // 'fees_obligation' => 'required',
            'applying_by' => 'required',
        ]);

        $application = new Application();
        $application->first_name = $this->first_name;
        $application->last_name = $this->last_name;
        $application->email = $this->email;
        $application->dob = $this->dob;
        $application->phone_number = $this->phone_number;
        $application->whatsapp_number = $this->whatsapp_number;
        $application->region = $this->region;
        $application->guardian_name = $this->guardian_name;
        $application->guardian_number = $this->guardian_number;
        $application->about_us = $this->about_us;
        $application->living_situation = $this->living_situation;
        $application->about_family = $this->about_family;
        $application->deserve = $this->deserve;
        $application->level_of_education = $this->level_of_education;
        $application->combination = $this->combination;
        $application->points = $this->points;
        $application->question1 = $this->question1;
        $application->question2 = $this->question2;
        $application->question3 = $this->question3;
        $application->question4 = $this->question4;
        $application->recommend_friend = $this->recommend_friend;
        // $application->certificate = $this->certificate;
        $application->guardian_name = $this->guardian_name;
        $application->guardian_number = $this->guardian_number;
        $application->additional_information = $this->additional_information;
        $application->plan_to_contribute = $this->plan_to_contribute;
        $application->motivated = $this->motivated;
        $application->prepared = $this->prepared;
        $application->passion_of_tech = $this->passion_of_tech;
        $application->experience = $this->experience;
        $application->challenges = $this->challenges;
        // $application->fees_obligation = $this->fees_obligation;
        $application->applying_by = $this->applying_by;
        $certificateFile = Carbon::now()->timestamp. '.' . $this->certificate->extension();
        $this->certificate->storeAs('certificates', $certificateFile);
        $application->certificate = $certificateFile;

        $recommendation_letterFile = Carbon::now()->timestamp. '.' . $this->recommendation_letter->extension();
        $this->recommendation_letter->storeAs('recommendation_letters', $recommendation_letterFile);
        $application->recommendation_letter = $recommendation_letterFile;
        // dd($application);
        $application->save();
        session()->flash('message','Your Application has been submitted successfully! We will get back to you shortly.');
        return redirect()->route('application-form');

        // $this->sendOrderConfirmationMail($contact);
    }
    public function render()
    {
        return view('livewire.application-form-component');
    }
}
