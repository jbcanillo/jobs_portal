<?php
if(!isset($applicant)){
    $method = "Add Applicant";
    $button = "Submit";
}else{
    $firstname = $applicant->firstname;
    $middlename = $applicant->middlename;
    $lastname = $applicant->lastname;
    $nickname = $applicant->nickname;
    $contact = $applicant->contact_number;
    $resume_file = $applicant->resume_file;
    $resume_public = $applicant->resume_public;
    $user_id = $applicant->user_id;
    $status = $applicant->status;
    $created_at = $applicant->created_at;
    $updated_at = $applicant->updated_at;
    $method = "Edit Applicant";
    $button = "Update";
}

$desired_jobs = '<div class="row item-row-desired-jobs command-row-desired-jobs card-body">
                        <div class="col-md-4 col-sm-2 col-xs-12">
                            <label>Title</label>
                            <input type="text" id="desired_jobs_title[]" name="desired_jobs_title[]" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-5 col-xs-12">
                            <label>Type</label>
                            <select id="desired_jobs_type[]" name="desired_jobs_type[]" class="form-control">
                                <option value=""></option>
                                <option value="full-time">Full-time</option>
                                <option value="part-time">Part-time</option>
                                <option value="temporary">Temporary</option>
                                <option value="newly graduated">Newly Graduated</option>
                                <option value="internship">Internship</option>
                                <option value="contractual">Contractual</option>
                                <option value="commission">Commission</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Salary</label>
                            <select id="desired_jobs_salary[]" name="desired_jobs_salary[]" class="form-control">
                                <option value=""></option>
                                <option value="hourly">Hourly</option>
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                                <option value="yearly">Yearly</option>
                            </select>    
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Relocation</label>
                            <select id="desired_jobs_relocation[]" name="desired_jobs_relocation[]" class="form-control">
                                <option value=""></option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="desired_jobs_status[]" name="desired_jobs_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-desired-jobs btn btn-danger btn-sm">x</a>-->
                    </div>';

$work_experience = '<div class="row item-row-work-experience command-row-work-experience card-body">
                        <div class="col-md-4 col-sm-2 col-xs-12">
                            <label>Job Title</label>
                            <input type="text" id="work_experience_job_title[]" name="work_experience_job_title[]" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <label>Company</label>
                            <input type="text" id="work_experience_company[]" name="work_experience_company[]" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Country</label>
                            <input type="text" id="work_experience_country[]" name="work_experience_country[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>City</label>
                            <input type="text" id="work_experience_city[]" name="work_experience_city[]" class="form-control">   
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Started</label>
                            <input type="date" id="work_experience_start[]" name="work_experience_start[]" class="form-control">   
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Ended</label>
                            <input type="date" id="work_experience_end[]" name="work_experience_end[]" class="form-control">   
                        </div>
                        <div class="col-md-4 col-sm-2 col-xs-12">
                            <label>Description</label>
                            <input type="text" id="work_experience_description[]" name="work_experience_description[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="work_experience_status[]" name="work_experience_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-work-experience btn btn-danger btn-sm">x</a>-->
                    </div>';
$education_background = '<div class="row item-row-education-background command-row-education-background card-body">
                        <div class="col-md-4 col-sm-2 col-xs-12">
                            <label>Degree</label>
                            <input type="text" id="education_background_degree[]" name="education_background_degree[]" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <label>School</label>
                            <input type="text" id="education_background_school[]" name="education_background_school[]" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-2 col-xs-12">
                            <label>Field of Study</label>
                            <input type="text" id="education_background_field_of_study[]" name="education_background_field_of_study[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Country</label>
                            <input type="text" id="education_background_country[]" name="education_background_country[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>City</label>
                            <input type="text" id="education_background_city[]" name="education_background_city[]" class="form-control">   
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Started</label>
                            <input type="date" id="education_background_start[]" name="education_background_start[]" class="form-control">   
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Ended</label>
                            <input type="date" id="education_background_end[]" name="education_background_end[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="education_background_status[]" name="education_background_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-education-background btn btn-danger btn-sm">x</a>-->
                    </div>';
$skills = '<div class="row item-row-skills command-row-skills card-body">
                        <div class="col-md-6 col-sm-2 col-xs-12">
                            <label>Skill</label>
                            <input type="text" id="skill[]" name="skill[]" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <label>Years of Experience</label>
                            <input type="number" id="skills_years[]" name="skills_years[]" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="skills_status[]" name="skills_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-skills btn btn-danger btn-sm">x</a>-->
                    </div>';
$certifications = '<div class="row item-row-certifications command-row-certifications card-body">
                        <div class="col-md-6 col-sm-2 col-xs-12">
                            <label>Title</label>
                            <input type="text" id="certifications_title[]" name="certifications_title[]" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Start</label>
                            <input type="date" id="certifications_start[]" name="certifications_start[]" class="form-control">   
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>End</label>
                            <input type="date" id="certifications_end[]" name="certifications_end[]" class="form-control">   
                        </div>
                        <div class="col-md-10 col-sm-2 col-xs-12">
                            <label>Description</label>
                            <input type="text" id="certifications_description[]" name="certifications_description[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="certifications_status[]" name="certifications_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-certifications btn btn-danger btn-sm">x</a>-->
                    </div>';
$social_media = '<div class="row item-row-social-media command-row-social-media card-body">
                        <div class="col-md-4 col-sm-2 col-xs-12">
                            <label>Social Media</label>
                            <select id="social_media[]" name="social_media[]" class="form-control">
                                <option value=""></option>
                                <option value="facebook">Facebook</option>
                                <option value="instagram">Instagram</option>
                                <option value="google plus">Google Plus</option>
                                <option value="twitter">Twitter</option>
                                <option value="linkedin">LinkedIn</option>
                            </select>   
                        </div>
                        <div class="col-md-6 col-sm-2 col-xs-12">
                            <label>Link</label>
                            <input type="text" id="social_media_link[]" name="social_media_link[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="social_media_status[]" name="social_media_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-certifications btn btn-danger btn-sm">x</a>-->
                    </div>';
$military_service = '<div class="row item-row-military-service command-row-military-service card-body">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Country</label>
                            <input type="text" id="military_service_country[]" name="military_service_country[]" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Branch</label>
                            <input type="text" id="military_service_branch[]" name="military_service_branch[]" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Rank</label>
                            <input type="text" id="military_service_rank[]" name="military_service_rank[]" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Started</label>
                            <input type="date" id="military_service_start[]" name="military_service_start[]" class="form-control">   
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Ended</label>
                            <input type="date" id="military_service_end[]" name="military_service_end[]" class="form-control">   
                        </div>
                        <div class="col-md-10 col-sm-2 col-xs-12">
                            <label>Description</label>
                            <input type="text" id="military_service_description[]" name="military_service_description[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="military_service_status[]" name="military_service_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-military-service btn btn-danger btn-sm">x</a>-->
                    </div>';
$awards = '<div class="row item-row-awards command-row-awards card-body">
                        <div class="col-md-9 col-sm-2 col-xs-12">
                            <label>Title</label>
                            <input type="text" id="awards_title[]" name="awards_title[]" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Awarded</label>
                            <input type="date" id="awards_date_awarded[]" name="awards_date_awarded[]" class="form-control">   
                        </div>
                        <div class="col-md-10 col-sm-2 col-xs-12">
                            <label>Description</label>
                            <input type="text" id="awards_description[]" name="awards_description[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="awards_status[]" name="awards_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-awards btn btn-danger btn-sm">x</a>-->
                    </div>';
$organizations = '<div class="row item-row-organizations command-row-organizations card-body">
                        <div class="col-md-6 col-sm-2 col-xs-12">
                            <label>Title</label>
                            <input type="text" id="organizations_title[]" name="organizations_title[]" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Started</label>
                            <input type="date" id="organizations_date_awarded[]" name="organizationsdate_awarded[]" class="form-control">   
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Ended</label>
                            <input type="date" id="organizations_date_awarded[]" name="organizations_date_awarded[]" class="form-control">   
                        </div>
                        <div class="col-md-10 col-sm-2 col-xs-12">
                            <label>Description</label>
                            <input type="text" id="organizations_description[]" name="organizations_description[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="organizations_status[]" name="organizations_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-organizations btn btn-danger btn-sm">x</a>-->
                    </div>';
$patents = '<div class="row item-row-patents command-row-patents card-body">
                        <div class="col-md-9 col-sm-2 col-xs-12">
                            <label>Title</label>
                            <input type="text" id="patents_title[]" name="patents_title[]" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Patent No.</label>
                            <input type="text" id="patent_number[]" name="patent_number[]" class="form-control">
                        </div>
                        <div class="col-md-9 col-sm-2 col-xs-12">
                            <label>URL</label>
                            <input type="text" id="patents_url[]" name="patents_url[]" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Published</label>
                            <input type="date" id="patents_date_published[]" name="patents_date_published[]" class="form-control">   
                        </div>
                        <div class="col-md-10 col-sm-2 col-xs-12">
                            <label>Description</label>
                            <input type="text" id="patents_description[]" name="patents_description[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="patents_status[]" name="patents_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-patents btn btn-danger btn-sm">x</a>-->
                    </div>';
$publications = '<div class="row item-row-publications command-row-publications card-body">
                        <div class="col-md-12 col-sm-2 col-xs-12">
                            <label>Title</label>
                            <input type="text" id="publications_title[]" name="publications_title[]" class="form-control">
                        </div>
                        <div class="col-md-9 col-sm-2 col-xs-12">
                            <label>URL</label>
                            <input type="text" id="publications_url[]" name="publications_url[]" class="form-control">
                        </div>
                        <div class="col-md-3 col-sm-2 col-xs-12">
                            <label>Date Published</label>
                            <input type="date" id="publications_date_published[]" name="publications_date_published[]" class="form-control">   
                        </div>
                        <div class="col-md-10 col-sm-2 col-xs-12">
                            <label>Description</label>
                            <input type="text" id="publications_description[]" name="publications_description[]" class="form-control">   
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="publications_status[]" name="publications_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-publications btn btn-danger btn-sm">x</a>-->
                    </div>';
$language_spoken = '<div class="row item-row-language-spoken command-row-language-spoken card-body">
                        <div class="col-md-6 col-sm-2 col-xs-12">
                            <label>Language</label>
                            <input type="text" id="language_spoken[]" name="language_spoken[]" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-2 col-xs-12">
                            <label>Fluency (Rate 1-10)</label>
                            <input type="number" id="language_spoken_fluency[]" name="language_spoken_fluency[]" min="1" max="10" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="language_spoken_status[]" name="language_spoken_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-language-spoken btn btn-danger btn-sm">x</a>-->
                    </div>';
$government_documents = '<div class="row item-row-government-documents command-row-government-documents card-body">
                        <div class="col-md-5 col-sm-2 col-xs-12">
                            <label>Document Type</label>
                            <input type="text" id="government_documents_type[]" name="government_documents_type[]" class="form-control">
                        </div>
                        <div class="col-md-5 col-sm-2 col-xs-12">
                            <label>Document File</label>
                            <input type="file" id="government_documents_file[]" name="government_documents_file[]"accept=".jpeg,.jpg,application/pdf,application/msword" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="government_documents_status[]" name="government_documents_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-government-documents btn btn-danger btn-sm">x</a>-->
                    </div>';
$upload_video = '<div class="row item-row-upload-video command-row-upload-video card-body">
                        <div class="col-md-10 col-sm-2 col-xs-12">
                            <label>Video File</label>
                            <input type="file" id="upload_video_file[]" name="upload_video_file[]" accept=".avi,.mp4,.mov,.wmv,.flv" class="form-control">
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label>Status</label>
                            <select id="upload_video_file_status[]" name="upload_video_file_status[]" class="form-control">
                                <option value=""></option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <!--<a class="btn-remove-row-upload-video btn btn-danger btn-sm">x</a>-->
                    </div>';

$desired_jobs_append = trim(preg_replace('/\s+/',' ', $desired_jobs));
$work_experience_append = trim(preg_replace('/\s+/',' ', $work_experience));
$education_background_append = trim(preg_replace('/\s+/',' ', $education_background));
$skills_append = trim(preg_replace('/\s+/',' ', $skills));
$certifications_append = trim(preg_replace('/\s+/',' ', $certifications));
$social_media_append = trim(preg_replace('/\s+/',' ', $social_media));
$military_service_append = trim(preg_replace('/\s+/',' ', $military_service));
$awards_append = trim(preg_replace('/\s+/',' ', $awards));
$organizations_append = trim(preg_replace('/\s+/',' ', $organizations));
$patents_append = trim(preg_replace('/\s+/',' ', $patents));
$publications_append = trim(preg_replace('/\s+/',' ', $publications));
$language_spoken_append = trim(preg_replace('/\s+/',' ', $language_spoken));
$government_documents_append = trim(preg_replace('/\s+/',' ', $government_documents));
$upload_video_append = trim(preg_replace('/\s+/',' ', $upload_video));

?>
@extends('layout/admin_container')
@section('content')
    <div class="card">
        <div class="card-header card-header-tabs card-header-info  ">
        <h4 class="card-title"><i class="material-icons">assignment_ind</i> {{ $method }}</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </div>
            @endif
            <?php if(!isset($applicant)){ ?>
                <form method="post" action="{{ action('ApplicantsController@store') }}" enctype="multipart/form-data">
            <?php }else{ ?>
                <form method="post" action="{{ action('ApplicantsController@update',$applicant->id) }}" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
            <?php } ?>
                {{ csrf_field() }}
              <div class="row">
                <div class='col-md-12 col-lg-6'>
                  <label for="Firstname">Firstname:</label>
                  <input type="text" class="form-control" name="firstname" value="{{ (isset($applicant))? $firstname : old('firstname') }}">
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Middlename">Middlename:</label>
                    <input type="text" class="form-control" name="middlename" value="{{ (isset($applicant))? $middlename : old('middlename') }}">
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Lastname">Lastname:</label>
                    <input type="text" class="form-control" name="lastname" value="{{ (isset($applicant))? $lastname : old('lastname') }}">
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Nickname">Nickname:</label>
                    <input type="text" class="form-control" name="nickname" value="{{ (isset($applicant))? $nickname : old('nickname') }}">
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Contact">Contact Number/s:</label>
                    <input type="text" class="form-control" name="contact" value="{{ (isset($applicant))? $contact : old('contact') }}">
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Resume">Resume (Limit to 10mb file-types *.jpeg, *.doc, *.pdf):</label>
                    <input type="file" class="form-control" id="resume_file" name="resume_file" accept=".jpeg,.jpg,application/pdf,application/msword">
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Resume_Public">Resume viewable in public?</label>
                    <select class="form-control" name="resume_public">
                        <option value="" selected></option>
                        <?php if(!isset($applicant)){ ?>
                            <option value="1" {{ (old('resume_public') == 1) ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ (old('resume_public') == 0) ? 'selected' : '' }}>No</option>
                        <?php }else{ ?>
                            <option value="1" {{ ($resume_public == 1) ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ ($resume_public == 0) ? 'selected' : '' }}>No</option>
                        <?php }?>
                    </select>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Username">Link to Username:</label>
                    <select class="form-control" name="user_id">
                        <option value="" selected></option>
                        @foreach ($users as $user)
                            @if(!isset($applicant))
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @else
                                <option value="{{ $user->id }}" {{ ($user_id == $user->id) ? 'selected' : '' }}>{{ $user->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Status">Status:</label>
                    <select class="form-control" name="status">
                      <option value="" selected></option>
                      <?php if(!isset($applicant)){ ?>
                        <option value="Active" {{ (old('status') == 'Active') ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ (old('status') == 'Inactive') ? 'selected' : '' }}>Inactive</option>
                      <?php }else{ ?>
                        <option value="Active" {{ ($status == 'Active') ? 'selected' : '' }}>Active</option>
                        <option value="Inactive" {{ ($status == 'Inactive') ? 'selected' : '' }}>Inactive</option>
                      <?php }?>
                    </select>
                </div>
              </div>
              <br><hr>
              <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header card-header-tabs card-header-info">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title"><b>1</b></span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#desired_job" data-toggle="tab">
                                            <i class="material-icons">find_in_page</i> Desired Jobs
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#work_experience" data-toggle="tab">
                                            <i class="material-icons">stars</i> Work Experience
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#education_background" data-toggle="tab">
                                            <i class="material-icons">extension</i> Education Background
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="desired_job">            
                                        <a id="btn_add_row_desired_jobs" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_desired_jobs" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-desired-jobs'>
                                            <?php echo $desired_jobs;?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="work_experience">
                                        <a id="btn_add_row_work_experience" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_work_experience" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-work-experience'>
                                            <?php echo $work_experience;?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="education_background">
                                        <a id="btn_add_row_education_background" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_education_background" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-education-background'>
                                            <?php echo $education_background;?>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>
            
            
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header card-header-tabs card-header-info">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title"><b>2</b></span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#skills" data-toggle="tab">
                                            <i class="material-icons">accessibility_new</i> Skills
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#certifications" data-toggle="tab">
                                            <i class="material-icons">description</i> Certifications/Licenses
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#social_media" data-toggle="tab">
                                            <i class="material-icons">face</i> Social Media Links
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#military_service" data-toggle="tab">
                                            <i class="material-icons">label_important</i> Military Service
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="skills">
                                        <a id="btn_add_row_skills" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_skills" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-skills'>
                                            <?php echo $skills;?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="certifications">
                                        <a id="btn_add_row_certifications" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_certifications" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-certifications'>
                                            <?php echo $certifications;?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="social_media">
                                        <a id="btn_add_row_social_media" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_social_media" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-social-media'>
                                            <?php echo $social_media;?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="military_service">
                                        <a id="btn_add_row_military_service" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_military_service" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-military-service'>
                                            <?php echo $military_service;?>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>
            
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header card-header-tabs card-header-info">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title"><b>3</b></span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#awards" data-toggle="tab">
                                            <i class="material-icons">card_membership</i> Awards
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#organizations" data-toggle="tab">
                                            <i class="material-icons">supervisor_account</i> Group/Organizations
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#patents" data-toggle="tab">
                                            <i class="material-icons">verified_user</i> Patents
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#publications" data-toggle="tab">
                                            <i class="material-icons">chrome_reader_mode</i> Publications
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="awards">
                                        <a id="btn_add_row_awards" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_awards" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-awards'>
                                            <?php echo $awards;?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="organizations">
                                        <a id="btn_add_row_organizations" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_organizations" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-organizations'>
                                            <?php echo $organizations;?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="patents">
                                        <a id="btn_add_row_patents" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_patents" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-patents'>
                                            <?php echo $patents;?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="publications">
                                        <a id="btn_add_row_publications" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_publications" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-publications'>
                                            <?php echo $publications;?>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div> 
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header card-header-tabs card-header-info">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title"><b>4</b></span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#language_spoken" data-toggle="tab">
                                            <i class="material-icons">translate</i> Language Spoken
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#government_documents" data-toggle="tab">
                                            <i class="material-icons">bookmarks</i> Government Documents
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#upload_video" data-toggle="tab">
                                            <i class="material-icons">camera</i> Self-Introduction Video
                                            <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="language_spoken">
                                        <a id="btn_add_row_language_spoken" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_language_spoken" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-language-spoken'>
                                            <?php echo $language_spoken;?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="government_documents">
                                        <a id="btn_add_row_government_documents" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_government_documents" class="btn btn-danger btn-sm" href="#">-</a>
                                        <div class='panel-body item-row-container-government-documents'>
                                            <?php echo $government_documents;?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="upload_video">
                                        <!--<a id="btn_add_row_upload_video" class="btn btn-success btn-sm" href="#">+</a>								
                                        <a id="btn_remove_row_upload_video" class="btn btn-danger btn-sm" href="#">-</a>-->
                                        <div class='panel-body item-row-container-upload-video'>
                                            <?php echo $upload_video;?>
                                        </div>
                                    </div>
                                </div> 
                            </div>  
                        </div>
                    </div> 
                </div>    

              <div class="row">
                <div class="form-group col-md-8 col-lg-12">
                  <span class="pull-right">
                      <a href="{{url('applicants')}}" class="btn btn-md btn-danger">Cancel</a>
                  </span>
                  <span class="pull-right">
                    <button type="submit" class="btn btn-md btn-success">{{ $button }}</button>
                  </span>
                </div>
              </div>
          </form>
        </div>
    </div>
    <script text='text/javascript'>
        $('#btn_remove_row_desired_jobs').click(function(){
            $('.item-row-desired-jobs:last').remove();
        });
        $(document).on('click','.btn-remove-row-desired-jobs', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_desired_jobs').click(function(){
            $('.item-row-container-desired-jobs').append('<?php echo $desired_jobs_append; ?>');
        });

        $('#btn_remove_row_work_experience').click(function(){
            $('.item-row-work-experience:last').remove();
        });
        $(document).on('click','.btn-remove-row-work-experience', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_work_experience').click(function(){
            $('.item-row-container-work-experience').append('<?php echo $work_experience_append; ?>');
        });

        $('#btn_remove_row_education_background').click(function(){
            $('.item-row-education-background:last').remove();
        });
        $(document).on('click','.btn-remove-row-education-background', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_education_background').click(function(){
            $('.item-row-container-education-background').append('<?php echo $education_background_append; ?>');
        });

        $('#btn_remove_row_skills').click(function(){
            $('.item-row-skills:last').remove();
        });
        $(document).on('click','.btn-remove-row-skills', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_skills').click(function(){
            $('.item-row-container-skills').append('<?php echo $skills_append; ?>');
        });

        $('#btn_remove_row_certifications').click(function(){
            $('.item-row-certifications:last').remove();
        });
        $(document).on('click','.btn-remove-row-certifications', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_certifications').click(function(){
            $('.item-row-container-certifications').append('<?php echo $certifications_append; ?>');
        });

        $('#btn_remove_row_social_media').click(function(){
            $('.item-row-social-media:last').remove();
        });
        $(document).on('click','.btn-remove-row-social-media', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_social_media').click(function(){
            $('.item-row-container-social-media').append('<?php echo $social_media_append; ?>');
        });

        $('#btn_remove_row_military_service').click(function(){
            $('.item-row-military-service:last').remove();
        });
        $(document).on('click','.btn-remove-row-military-service', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_military_service').click(function(){
            $('.item-row-container-military-service').append('<?php echo $military_service_append; ?>');
        });

        $('#btn_remove_row_awards').click(function(){
            $('.item-row-awards:last').remove();
        });
        $(document).on('click','.btn-remove-row-awards', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_awards').click(function(){
            $('.item-row-container-awards').append('<?php echo $awards_append; ?>');
        });

        $('#btn_remove_row_organizations').click(function(){
            $('.item-row-organizations:last').remove();
        });
        $(document).on('click','.btn-remove-row-organizations', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_organizations').click(function(){
            $('.item-row-container-organizations').append('<?php echo $organizations_append; ?>');
        });

        $('#btn_remove_row_patents').click(function(){
            $('.item-row-patents:last').remove();
        });
        $(document).on('click','.btn-remove-row-patents', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_patents').click(function(){
            $('.item-row-container-patents').append('<?php echo $patents_append; ?>');
        });

        $('#btn_remove_row_publications').click(function(){
            $('.item-row-publications:last').remove();
        });
        $(document).on('click','.btn-remove-row-publications', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_publications').click(function(){
            $('.item-row-container-publications').append('<?php echo $publications_append; ?>');
        });

        $('#btn_remove_row_language_spoken').click(function(){
            $('.item-row-language-spoken:last').remove();
        });
        $(document).on('click','.btn-remove-row-language-spoken', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_language_spoken').click(function(){
            $('.item-row-container-language-spoken').append('<?php echo $language_spoken_append; ?>');
        });

        $('#btn_remove_row_government_documents').click(function(){
            $('.item-row-government-documents:last').remove();
        });
        $(document).on('click','.btn-remove-row-government-documents', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_government_documents').click(function(){
            $('.item-row-container-government-documents').append('<?php echo $government_documents_append; ?>');
        });

        $('#btn_remove_row_upload_video').click(function(){
            $('.item-row-upload-video:last').remove();
        });
        $(document).on('click','.btn-remove-row-upload-video', function() {
            $(this).parent().remove();
        });
        $('#btn_add_row_upload_video').click(function(){
            $('.item-row-container-upload-video').append('<?php echo $upload_video_append; ?>');
        });
    </script>
@endsection