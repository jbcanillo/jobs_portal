<?php
if(isset($request)){
    $applicant = "";
    $job_title = $request[0]->job_title;
    $company = $request[0]->company;
    $location = $request[0]->location;
    $years_of_experience = $request[0]->years_of_experience;
    $education_level = $request[0]->education_level;
    $age = $request[0]->age;
    $gender = $request[0]->gender;
    $type = $request[0]->type;
    $minimum_salary = $request[0]->minimum_salary;
    $maximum_salary = $request[0]->maximum_salary;
    $language = $request[0]->language;
    $license = $request[0]->license;
    $number_of_applicants = $request[0]->number_of_applicants;
    $description = $request[0]->description;
    $status = $request[0]->status;
    $created_at = $request[0]->created_at;
    $updated_at = $request[0]->updated_at;
    $status = $request[0]->status;
}
?>
@extends('layout/employer_container')
@section('content')
    <div class="card">
        <div class="card-header card-header-tabs card-header-info ">
        <h4 class="card-title"><i class="material-icons">update</i> View Job Request</h4>
        </div>
        <div class="card-body">
              <div class="row">
                <div class='col-md-12 col-lg-6'>
                  <label for="Title">Job Title:</label>
                  <input type="text" class="form-control" name="job_title" value="{{ $job_title }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Company">Company/Employer:</label>
                    <input type="text" class="form-control" name="company" value="{{ $company }}" readonly>
                </div>
                <div class='col-md-12 col-lg-12'>  
                    <label for="Description">Description:</label>
                    <textarea class="form-control" name="description" rows="20" readonly>{{ $description }}</textarea>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Location">Location:</label>
                    <input type="text" class="form-control" name="location" value="{{ $location }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Years">Years of Work Experience:</label>
                    <input type="number" class="form-control" name="years_of_experience" value="{{ $years_of_experience }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Education">Education Level:</label>
                    <input type="text" class="form-control" name="education_level" value="{{ $education_level }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Age">Minimum Age:</label>
                    <input type="number" class="form-control" name="age" value="{{ $age }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Gender">Gender:</label>
                    <input type="text" class="form-control" name="gender" value="{{ $gender }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Language">Language:</label>
                    <input type="text" class="form-control" name="language" value="{{ $language }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="License">License(s):</label>
                    <input type="text" class="form-control" name="license" value="{{ $license }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="number_applicants">Required no. of applicants to hire:</label>
                    <input type="number" class="form-control" name="number_of_applicants" value="{{ $number_of_applicants }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Minimum">Minimum Salary:</label>
                    <input type="number" class="form-control" name="minimum_salary" value="{{ $minimum_salary }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Maximum">Maximum Salary:</label>
                    <input type="number" class="form-control" name="maximum_salary" value="{{ $maximum_salary }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Type">Type:</label>
                    <input type="text" class="form-control" name="type" value="{{ $type }}" readonly>
                </div>
                <div class='col-md-12 col-lg-6'>  
                    <label for="Status">Status:</label>
                    <input type="text" class="form-control" name="status" value="{{ $status }}" readonly>
                </div>
              </div>
              <hr>
              <div class="panel-body">
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-info">
                            <h5 class="card-title"><i class="material-icons">assignment_ind</i> Applicants</h5>
                        </div>
                        <div class="card-body">
                            <div class='col-md-12 col-lg-12'>
                                <div class='panel-body'>
                                    <div style="overflow-x:auto;">
                                        <table class='mdl-data-table mdl-shadow--4dp table-hovered mdl-data-table-default-non-numeric responsive" cellspacing="0"' style="width:100%">
                                            <td><b>#</b></td>
                                            <td><b>Applicant</b></td>
                                            <td><b>Remarks</b></td>
                                            <td><b>Status</b></td>
                                            <td><b>View Info</b></td>
                                            <?php
                                                if(count($request_assignments)<>0){
                                                    $ctr=1;
                                                    foreach($request_assignments as $row){

                                                        $birthdate = new DateTime($row->birthdate);
                                                        $now = new DateTime();
                                                        $interval = $now->diff($birthdate);
                                                        $applicant_age = $interval->y;

                                                        echo "<tr>";
                                                            echo "<td>".$ctr."</td>";
                                                            echo "<td>".$row->lastname.", ".$row->firstname." ".$row->middlename." ( ".$row->gender.", ".$applicant_age." years old".", ". $row->years_of_experience . " year(s) of experience )</td>";
                                                            echo "<td>".$row->remarks."</td>";
                                                            echo "<td>".$row->status."</td>";
                                                            echo "<td><a class='btn btn-warning btn-sm' onclick='viewRecord(\"/applicants/show/\",".$row->applicant_id.");' href='#' style='color:white;'><i class='material-icons'>visibility</i></a></td>";
                                                        echo "</tr>";
                                                        $ctr++;
                                                    }
                                                }else{
                                                    echo "<tr><td colspan='5'><center>No applicants.</center></td></tr>";
                                                }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
        </div>
    </div>
@endsection