<div class="panel-body">
    <br><br>
    <div class="card card-profile" style="background-color: white;">
        <div class="card-avatar">
            <?php if(isset($applicant->picture)){ ?>
                <center><img src="{{ URL::asset('storage'.substr( $applicant->picture,6)) }}" width="200px" height="200px"></center>
            <?php }else{ ?>
                <center><img src="{{ asset('img/no_pic.png') }}" width='200px' height='200px'></center><br><hr>
            <?php } ?>
        </div>
        <div class="card-body">
            <?php
                if($applicant->nickname!=""){
                    $nickname = ' "'.$applicant->nickname.'"';
                }else{
                    $nickname = '';
                }
            ?>
            <h3>{{ $nickname }}</h3>
            <h4 class="card-title">{{ $applicant->lastname .", ". $applicant->firstname ." ". $applicant->middlename }}</h4>
            <?php
                $birthdate = new DateTime($applicant->birthdate);
                $now = new DateTime();
                $interval = $now->diff($birthdate);
                $applicant_age = $interval->y;
                echo $applicant->gender . " - " . $applicant_age . " years old<br>";
                echo "Birth Date: ".$applicant->birthdate."<br>";
                echo "Contact No.(s): ".$applicant->contact_number."<br>";
                echo "Highest Educational Attainment: ".$applicant->highest_educational_attainment."<br>";
                echo "Work Experience: ".$applicant->years_of_experience." year(s)<br>";
            ?>
            @if($applicant->resume_public || Auth::user()->role=="Administrator")
                @if(isset($applicant->resume_filepath))
                    <a href="{{ URL::asset('storage'.substr($applicant->resume_filepath,6)) }}" class="btn btn-success btn-round"  download="{{ strtolower($applicant->lastname ."_". $applicant->firstname ."_". $applicant->middlename."_"."resume") }}">Download Resume</a>
                @endif
            @endif
        </div>
    </div>
    @if($applicant->resume_public || Auth::user()->role=="Administrator")
    <div class="card">
        <div class="card-header card-header-tabs card-header-info">
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active show" href="#desired_jobs" data-toggle="tab">
                        <i class="material-icons">find_in_page</i> Desired Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work_experience" data-toggle="tab">
                        <i class="material-icons">stars</i> Work Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education_background" data-toggle="tab">
                        <i class="material-icons">extension</i> Education Background</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills" data-toggle="tab">
                        <i class="material-icons">accessibility_new</i> Skills</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active show" id="desired_jobs">
                    <div style="overflow-x:auto;">
                        <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                            <th>#</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Salary</th>
                            <th>Relocation?</th>
                            <?php
                                if(count($desired_jobs_details)<>0){
                                    $ctr=1;
                                    foreach($desired_jobs_details as $row){
                                        echo "<tr>
                                                <td>".$ctr."</td>
                                                <td>".$row->title."</td>
                                                <td>".$row->type."</td>
                                                <td>".$row->salary."</td>
                                                <td>".$row->relocation."</td>
                                            </tr>";
                                        $ctr++;
                                    }
                                }else{
                                    echo "<tr><td colspan='5'><center>No data available.</center></td></tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="work_experience">
                    <div style="overflow-x:auto;">
                        <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                            <th>#</th>
                            <th>Job Title</th>
                            <th>Company</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Date Started</th>
                            <th>Date Ended</th>
                            <th>Description</th>
                            <?php
                                if(count($work_experience_details)<>0){
                                    $ctr=1;
                                    foreach($work_experience_details as $row){
                                        echo "<tr>
                                                <td>".$ctr."</td>
                                                <td>".$row->job_title."</td>
                                                <td>".$row->company."</td>
                                                <td>".$row->country."</td>
                                                <td>".$row->city."</td>
                                                <td>".$row->start."</td>
                                                <td>".$row->end."</td>
                                                <td>".$row->description."</td>
                                            </tr>";
                                        $ctr++;
                                    }
                                }else{
                                    echo "<tr><td colspan='8'><center>No data available.</center></td></tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="education_background">
                    <div style="overflow-x:auto;">
                        <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                            <th>#</th>
                            <th>Degree/Level</th>
                            <th>School/University</th>
                            <th>Field Of Study/Specialization</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Date Started</th>
                            <th>Date Ended</th>
                            <?php
                                if(count($education_background_details)<>0){
                                    $ctr=1;
                                    foreach($education_background_details as $row){
                                        echo "<tr>
                                                <td>".$ctr."</td>
                                                <td>".$row->degree."</td>
                                                <td>".$row->school."</td>
                                                <td>".$row->field_of_study."</td>
                                                <td>".$row->country."</td>
                                                <td>".$row->city."</td>
                                                <td>".$row->start."</td>
                                                <td>".$row->end."</td>
                                            </tr>";
                                        $ctr++;
                                    }
                                }else{
                                    echo "<tr><td colspan='8'><center>No data available.</center></td></tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="tab-pane" id="skills">
                    <div style="overflow-x:auto;">
                        <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                            <th>#</th>
                            <th>Skill</th>
                            <th>Years of Experience</th>
                            <?php
                                if(count($skills_details)<>0){
                                    $ctr=1;
                                    foreach($skills_details as $row){
                                        echo "<tr>
                                                <td>".$ctr."</td>
                                                <td>".$row->skill."</td>
                                                <td>".$row->years."</td>
                                            </tr>";
                                        $ctr++;
                                    }
                                }else{
                                    echo "<tr><td colspan='3'><center>No data available.</center></td></tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header card-header-tabs card-header-info">
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#certifications" data-toggle="tab">
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
                <div class="tab-pane active" id="certifications">
                    <div class='panel-body'>
                        <div style="overflow-x:auto;">
                            <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                                <th>#</th>
                                <th>Title</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Description</th>
                                <?php
                                    if(count($certifications_details)<>0){
                                        $ctr=1;
                                        foreach($certifications_details as $row){
                                            echo "<tr>
                                                    <td>".$ctr."</td>
                                                    <td>".$row->title."</td>
                                                    <td>".$row->start."</td>
                                                    <td>".$row->end."</td>
                                                    <td>".$row->description."</td>
                                                </tr>";
                                            $ctr++;
                                        }
                                    }else{
                                        echo "<tr><td colspan='5'><center>No data available.</center></td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="social_media">
                    <div class='panel-body'>
                        <div style="overflow-x:auto;">
                            <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                                <th>#</th>
                                <th>Social Media</th>
                                <th>Link</th>
                                <?php 
                                    if(count($social_media_details)<>0){
                                        $ctr=1;
                                        foreach($social_media_details as $row){
                                            echo "<tr>
                                                    <td>".$ctr."</td>
                                                    <td>".$row->media."</td>
                                                    <td>".$row->link."</a></td>
                                                </tr>";
                                            $ctr++;
                                        }
                                    }else{
                                        echo "<tr><td colspan='3'><center>No data available.</center></td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="military_service">
                    <div class='panel-body'>
                        <div style="overflow-x:auto;">
                            <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                                <th>#</th>
                                <th>Country</th>
                                <th>Branch</th>
                                <th>Rank</th>
                                <th>Date Started</th>
                                <th>Date Ended</th>
                                <th>Description</th>
                                <?php
                                    if(count($military_service_details)<>0){
                                        $ctr=1;
                                        foreach($military_service_details as $row){
                                            echo "<tr>
                                                    <td>".$ctr."</td>
                                                    <td>".$row->country."</td>
                                                    <td>".$row->branch."</td>
                                                    <td>".$row->rank."</td>
                                                    <td>".$row->start."</td>
                                                    <td>".$row->end."</td>
                                                    <td>".$row->description."</td>
                                                </tr>";
                                            $ctr++;
                                        }
                                    }else{
                                        echo "<tr><td colspan='7'><center>No data available.</center></td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <div class="card">
        <div class="card-header card-header-tabs card-header-info">
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
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
                    <div class='panel-body item-row-container-awards'>
                        <div style="overflow-x:auto;">
                            <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                                <th>#</th>
                                <th>Title</th>
                                <th>Date Awarded</th>
                                <th>Description</th>
                                <?php 
                                    if(count($awards_details)<>0){
                                        $ctr=1;
                                        foreach($awards_details as $row){
                                            echo "<tr>
                                                    <td>".$ctr."</td>
                                                    <td>".$row->title."</td>
                                                    <td>".$row->date_awarded."</td>
                                                    <td>".$row->description."</td>
                                                </tr>";
                                            $ctr++;
                                        }
                                    }else{
                                        echo "<tr><td colspan='4'><center>No data available.</center></td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="organizations">
                    <div class='panel-body item-row-container-organizations'>
                        <div style="overflow-x:auto;">
                            <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                                <th>#</th>
                                <th>Title</th>
                                <th>Date Started</th>
                                <th>Date Ended</th>
                                <th>Description</th>
                                <?php 
                                    if(count($organizations_details)<>0){
                                        $ctr=1;
                                        foreach($organizations_details as $row){
                                            echo "<tr>
                                                    <td>".$ctr."</td>
                                                    <td>".$row->title."</td>
                                                    <td>".$row->start."</td>
                                                    <td>".$row->end."</td>
                                                    <td>".$row->description."</td>
                                                </tr>";
                                            $ctr++;
                                        }
                                    }else{
                                        echo "<tr><td colspan='5'><center>No data available.</center></td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="patents">
                    <div class='panel-body item-row-container-patents'>
                        <div style="overflow-x:auto;">
                            <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                                <th>#</th>
                                <th>Title</th>
                                <th>Patent No.</th>
                                <th>URL</th>
                                <th>Date Published</th>
                                <th>Description</th>
                                <?php
                                    if(count($patents_details)<>0){ 
                                        $ctr=1;
                                        foreach($patents_details as $row){
                                            echo "<tr>
                                                    <td>".$ctr."</td>
                                                    <td>".$row->title."</td>
                                                    <td>".$row->patent_number."</td>
                                                    <td>".$row->url."</a></td>
                                                    <td>".$row->date_published."</td>
                                                    <td>".$row->description."</td>
                                                </tr>";
                                            $ctr++;
                                        }
                                    }else{
                                        echo "<tr><td colspan='6'><center>No data available.</center></td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="publications">
                    <div class='panel-body item-row-container-publications'>
                        <div style="overflow-x:auto;">
                            <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                                <th>#</th>
                                <th>Title</th>
                                <th>URL</th>
                                <th>Date Published</th>
                                <th>Description</th>
                                <?php 
                                    if(count($publications_details)<>0){
                                        $ctr=1;
                                        foreach($publications_details as $row){
                                            echo "<tr>
                                                    <td>".$ctr."</td>
                                                    <td>".$row->title."</td>
                                                    <td>".$row->url."</a></td>
                                                    <td>".$row->date_published."</td>
                                                    <td>".$row->description."</td>
                                                </tr>";
                                            $ctr++;
                                        }
                                    }else{
                                        echo "<tr><td colspan='5'><center>No data available.</center></td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div>

    <div class="card">
        <div class="card-header card-header-tabs card-header-info">
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
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
                    <div class='panel-body item-row-container-language-spoken'>
                        <div style="overflow-x:auto;">
                            <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                                <th>#</th>
                                <th>Language</th>
                                <th>Fluency (Rating 1-10)</th>
                                <?php
                                    if(count($language_details)<>0){
                                        $ctr=1;
                                        foreach($language_details as $row){
                                            echo "<tr>
                                                    <td>".$ctr."</td>
                                                    <td>".$row->language."</td>
                                                    <td>".$row->fluency."</td>
                                                </tr>";
                                            $ctr++;
                                        }
                                    }else{
                                        echo "<tr><td colspan='3'><center>No data available.</center></td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="government_documents">
                    <div class='panel-body item-row-container-government-documents'>
                        <div style="overflow-x:auto;">
                            <table class='mdl-data-table mdl-shadow--2dp table-hovered responsive" cellspacing="0"' style="width:100%">
                                <th>#</th>
                                <th>Document Type</th>
                                <th>Document File</th>
                                <?php 
                                    if(count($government_documents_details)<>0){
                                        $ctr=1;
                                        foreach($government_documents_details as $row){
                                            echo "<tr>
                                                    <td>".$ctr."</td>
                                                    <td>".$row->document_type."</td>
                                                    <td><a href='".URL::asset('storage'.substr($row->document_file,6))."' class='btn btn-default btn-round btn-sm'  download='government_doc'>Download</a></td>
                                                </tr>";
                                            $ctr++;
                                        }
                                    }else{
                                        echo "<tr><td colspan='3'><center>No file available.</center></td></tr>";
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="upload_video">
                    <div class='panel-body item-row-container-upload-video'>
                        <div style="overflow-x:auto;">
                            <div style="width:100%">
                                <?php
                                    if(count($video_intro_details)<>0){ 
                                        foreach($video_intro_details as $row){
                                            echo "<center>
                                                    <video width='420' height='340' controls>
                                                        <source src=".URL::asset('storage'.substr($row->video_file,6))." type='video/mp4'>
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </center>
                                                <br><br>";
                                        }
                                    }else{
                                        echo "<center><br> No video available. <br></center>";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    @else
        <div class="alert alert-info alert-block">
            <center><strong>Some information is hidden due to privacy.</strong></center>
        </div>
    @endif
</table>
</div>