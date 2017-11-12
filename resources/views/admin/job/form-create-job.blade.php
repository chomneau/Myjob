
{{--<!-- page content -->--}}
{{--<div class="right_col" role="main">--}}
        {{--<div class="page-title">--}}
            {{--<div class="title_left">--}}
                {{--<h3>Create New job</h3>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="clearfix"></div>--}}

            {{--<div class="row">--}}
                {{--<form class="form-horizontal" action="{{ route('createjob.store') }}" method="post">--}}
                    {{--{{csrf_field()}}--}}
                        {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                            {{--<div class="x_panel">--}}
                                {{--<div class="x_title">--}}
                                    {{--<h2>Form Wizards <small>Sessions</small></h2>--}}
                                    {{--<div class="clearfix"></div>--}}
                                {{--</div>--}}
                                {{--<div class="x_content">--}}
                                    {{--<!-- Smart Wizard -->--}}
                                    {{--<div id="wizard" class="form_wizard wizard_horizontal">--}}
                                        {{--<ul class="wizard_steps">--}}
                                            {{--<li>--}}
                                                {{--<a href="#step-1">--}}
                                                    {{--<span class="step_no">1</span>--}}
                                                    {{--<span class="step_descr">--}}
                                                          {{--Step 1<br />--}}
                                                          {{--<small>Job Description</small>--}}
                                                      {{--</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#step-2">--}}
                                                    {{--<span class="step_no">2</span>--}}
                                                    {{--<span class="step_descr">--}}
                                                          {{--Step 2<br />--}}
                                                          {{--<small>Job Detail</small>--}}
                                                      {{--</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#step-3">--}}
                                                    {{--<span class="step_no">3</span>--}}
                                                    {{--<span class="step_descr">--}}
                                                          {{--Step 3<br />--}}
                                                          {{--<small>Preferred Candidate </small>--}}
                                                      {{--</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            {{--<li>--}}
                                                {{--<a href="#step-4">--}}
                                                    {{--<span class="step_no">4</span>--}}
                                                    {{--<span class="step_descr">--}}
                                                          {{--Step 4<br />--}}
                                                          {{--<small>Company Info</small>--}}
                                                      {{--</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}

                                            {{--<div id="step-1">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">--}}
                                                        {{--Job Title <span class="required">*</span>--}}
                                                    {{--</label>--}}
                                                    {{--<div class="col-md-9 col-sm-6 col-xs-12">--}}
                                                        {{--<input type="text" name="jobTitle" id="first-name" required="required" class="form-control col-md-10 col-xs-12">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label col-md-2 col-sm-3 col-xs-12" for="job description">--}}
                                                        {{--Job Description <span class="required">*</span>--}}
                                                    {{--</label>--}}
                                                    {{--<div class="col-md-9 col-sm-12 col-xs-12">--}}
                                                        {{--<textarea name="jobDes" id="" cols="20" rows="10" class="form-control col-md-10 col-xs-12"></textarea>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label for="job requirement" class="control-label col-md-2 col-sm-3 col-xs-12">--}}
                                                        {{--Job Requirement--}}
                                                    {{--</label>--}}
                                                    {{--<div class="col-md-9 col-sm-6 col-xs-12">--}}
                                                        {{--<textarea name="jobRequired" id="" cols="20" rows="10" class="form-control col-md-10 col-xs-12"></textarea>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--end step 1--}}



                                        {{--<div id="step-2">--}}
                                            {{--<div class="row">--}}
                                                {{--left side--}}
                                                {{--<div class="col-md-1 col-sm-12"></div>--}}
                                                {{--<div class="col-md-5 col-sm-12">--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="control-label" for="location">City / Province*</label>--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<select class="form-control" id="select" name="location">--}}
                                                                {{--<option value="Banteay Meanchey">Banteay Meanchey</option>--}}
                                                                {{--<option value="Battambang">Battambang</option>--}}
                                                                {{--<option value="Kampong Cham">Kampong Cham</option>--}}
                                                                {{--<option value="Kampong Chhnang">Kampong Chhnang</option>--}}
                                                                {{--<option value="Kampong Speu">Kampong Speu</option>--}}
                                                                {{--<option value="Kampong Thom">Kampong Thom</option>--}}
                                                                {{--<option value="Kampot">Kampot</option>--}}
                                                                {{--<option value="Kandal">Kandal</option>--}}
                                                                {{--<option value="Kep">Kep</option>--}}
                                                                {{--<option value="Koh Kong">Koh Kong</option>--}}
                                                                {{--<option value="Kratié">Kratié</option>--}}
                                                                {{--<option value="Mondulkiri">Mondulkiri</option>--}}
                                                                {{--<option value="Oddar Meanchey">Oddar Meanchey</option>--}}
                                                                {{--<option value="Pailin">Pailin</option>--}}
                                                                {{--<option value="Phnom Penh" selected >Phnom Penh</option>--}}
                                                                {{--<option value="Preah Sihanouk">Preah Sihanouk</option>--}}
                                                                {{--<option value="Preah Vihear">Preah Vihear</option>--}}
                                                                {{--<option value="Pursat">Pursat</option>--}}
                                                                {{--<option value="Prey Veng">Prey Veng</option>--}}
                                                                {{--<option value="Ratanakiri">Ratanakiri</option>--}}
                                                                {{--<option value="Siem Reap">Siem Reap</option>--}}
                                                                {{--<option value="Stung Treng">Stung Treng</option>--}}
                                                                {{--<option value="Svay Rieng">Svay Rieng</option>--}}
                                                                {{--<option value="Takéo">Takéo</option>--}}
                                                                {{--<option value="Tboung Khmum">Tboung Khmum</option>--}}

                                                            {{--</select>--}}
                                                        {{--</div>--}}

                                                    {{--</div>--}}

                                                    {{--<div class="form-group">--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<label class="control-label" for="location">Contract type*</label>--}}
                                                            {{--<select class="form-control" id="select" name="location">--}}
                                                                {{--<option value="Banteay Meanchey">Banteay Meanchey</option>--}}
                                                                {{--<option value="Battambang">Battambang</option>--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--Right side--}}

                                                {{--<div class="col-md-5 col-sm-12">--}}

                                                    {{--<div class="form-group">--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<label class="control-label" for="location">Job Category*</label>--}}
                                                            {{--<select class="form-control" id="select" name="location">--}}
                                                                {{--<option value="Banteay Meanchey">Banteay Meanchey</option>--}}
                                                                {{--<option value="Battambang">Battambang</option>--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="control-label" for="location">Salary*</label>--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<select class="form-control" id="select" name="location">--}}
                                                                {{--<option value="Banteay Meanchey">Banteay Meanchey</option>--}}
                                                                {{--<option value="Battambang">Battambang</option>--}}
                                                                {{--<option value="Kampong Cham">Kampong Cham</option>--}}
                                                                {{--<option value="Kampong Chhnang">Kampong Chhnang</option>--}}
                                                                {{--<option value="Kampong Speu">Kampong Speu</option>--}}

                                                            {{--</select>--}}
                                                        {{--</div>--}}

                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-1 col-sm-12"></div>--}}
                                            {{--</div>--}}
                                            {{--end row--}}
                                        {{--</div>--}}




                                        {{--<div id="step-3">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-1 col-sm-12"></div>--}}
                                                {{--left side for step 3--}}
                                                {{--<div class="col-md-5 col-sm-12">--}}
                                                    {{--Candidate education--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="control-label" for="location">Degree*</label>--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<select class="form-control" id="select" name="location">--}}
                                                                {{--<option value="Banteay Meanchey">Banteay Meanchey</option>--}}
                                                                {{--<option value="Battambang">Battambang</option>--}}
                                                                {{--<option value="Kampong Cham">Kampong Cham</option>--}}
                                                                {{--<option value="Kampong Chhnang">Kampong Chhnang</option>--}}
                                                                {{--<option value="Kampong Speu">Kampong Speu</option>--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--Experience--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="control-label" for="location">Experience*</label>--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<select class="form-control" id="select" name="location">--}}
                                                                {{--<option value="">Select your experience</option>--}}
                                                                {{--<option value="1 year ">1 year</option>--}}
                                                                {{--<option value="2 years">2 years</option>--}}
                                                                {{--<option value="3 years">3 years</option>--}}
                                                                {{--<option value="4 years">4 years</option>--}}
                                                                {{--<option value="5 years">5 years</option>--}}
                                                                {{--<option value="6 years up">6 years up</option>--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}


                                                {{--</div>--}}
                                                {{--right side for step 3--}}
                                                {{--<div class="col-md-5 col-sm-12">--}}
                                                    {{--Candidate education--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="control-label" for="location">Sex*</label>--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<select class="form-control" id="select" name="location">--}}
                                                                {{--<option value="">please select sex</option>--}}
                                                                {{--<option value="Male">Male</option>--}}
                                                                {{--<option value="Female">Female</option>--}}
                                                                {{--<option value="Other">Other</option>--}}

                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--Experience--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="control-label" for="location">Age*</label>--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<select class="form-control" id="select" name="location">--}}
                                                                {{--<option value="">please select age</option>--}}
                                                                {{--<option value="0-18">0-18</option>--}}
                                                                {{--<option value="18-25">18-25</option>--}}
                                                                {{--<option value="25-30">25-30</option>--}}
                                                                {{--<option value="30-35">30-35</option>--}}
                                                                {{--<option value="35-up">35-up</option>--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                {{--</div>--}}
                                                {{--<div class="col-md-1 col-sm-12"></div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}








                                        {{--<div id="step-4">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-1 col-md-12"></div>--}}
                                                {{--left side of company info--}}
                                                {{--<div class="col-md-5 col-md-12">--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="control-label" for="location">Company name*</label>--}}
                                                        {{--<input type="text" name="company_name" required class="col-md-12 col-sm-12" style="padding: 7px">--}}
                                                    {{--</div>--}}

                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="control-label" for="location">Company name*</label>--}}

                                                        {{--<input type="text" name="company_name" required class="col-md-12 col-sm-12" style="padding: 7px">--}}

                                                    {{--</div>--}}

                                                {{--</div>--}}
                                                {{--right side of company info--}}
                                                {{--<div class="col-md-5 col-md-12">--}}
                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="control-label" for="location">Tell me*</label>--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<input type="text" name="company_name" required class="col-md-12 col-sm-12" style="padding: 7px">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                    {{--<div class="form-group">--}}
                                                        {{--<label class="control-label" for="location">Company name*</label>--}}
                                                        {{--<div class="form-group">--}}
                                                            {{--<input type="text" name="company_name" required class="col-md-12 col-sm-12" style="padding: 7px">--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<input type="submit" name="submit">--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-1 col-md-12"></div>--}}

                                            {{--</div>--}}
                                            {{--end row--}}
                                        {{--</div>--}}


                                    {{--<!-- End SmartWizard Content -->--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</form>--}}
        {{--</div>--}}
{{--<!-- /page content -->--}}
{{--</div>--}}






<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Create New job</h3>
        </div>
    </div>
    <div class="clearfix"></div>


<div class="container">
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Wizards <small>Sessions</small></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">




        <div class="col-md-1"></div>
        <div class="col-md-10">
        <section>
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <form role="form" class="form-group">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <div class="step1">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Job Title</label>
                                        <input type="jobTitle" class="form-control" id="exampleInputEmail1" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="exampleInputEmail1">Job Description</label>
                                        <textarea name="jobDes" id="" cols="15" rows="8" class="form-control"></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Job Requirement</label>
                                        <textarea name="jobDes" id="" cols="15" rows="8" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div style="margin-top: 20px">
                                    <h4>Contact info</h4>
                                    <hr>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Contact person</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Confirm Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-3">
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                            </div>
                                            <div class="col-md-9 col-xs-9">
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step2">
                            <div class="step2">
                                <div class="step1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">First Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Last Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Confirm Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Mobile Number</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <div class="row">
                                                <div class="col-md-3 col-xs-3">
                                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                                </div>
                                                <div class="col-md-9 col-xs-9">
                                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-22">

                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step3">
                            <div class="step33">
                                <h5><strong>Basic Details</strong></h5>
                                <hr>
                                <div class="row mar_ned">

                                </div>
                                <div class="row mar_ned">
                                    <div class="col-md-4 col-xs-3">
                                        <p align="right"><stong>Date of birth</stong></p>
                                    </div>
                                    <div class="col-md-8 col-xs-9">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 wdth">
                                                <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                    <option value="">Date</option>
                                                    <option value="2">1</option>
                                                    <option value="1">2</option>
                                                    <option value="4">3</option>
                                                    <option value="5">4</option>
                                                    <option value="6">5</option>
                                                    <option value="3">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-4 wdth">
                                                <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                    <option value="">Month</option>
                                                    <option value="2">Jan</option>
                                                    <option value="1">Feb</option>
                                                    <option value="4">Mar</option>
                                                    <option value="5">Apr</option>
                                                    <option value="6">May</option>
                                                    <option value="3">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">Aug</option>
                                                    <option value="9">Sept</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xs-4 wdth">
                                                <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                    <option value="">Year</option>
                                                    <option value="2">1990</option>
                                                    <option value="1">1991</option>
                                                    <option value="4">1992</option>
                                                    <option value="5">1993</option>
                                                    <option value="6">1994</option>
                                                    <option value="3">1995</option>
                                                    <option value="7">1996</option>
                                                    <option value="8">1997</option>
                                                    <option value="9">1998</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mar_ned">
                                    <div class="col-md-4 col-xs-3">
                                        <p align="right"><stong>Marital Status</stong></p>
                                    </div>
                                    <div class="col-md-8 col-xs-9">
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Single
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Married
                                        </label>
                                    </div>
                                </div>
                                <div class="row mar_ned">
                                    <div class="col-md-4 col-xs-3">
                                        <p align="right"><stong>Highest Education</stong></p>
                                    </div>
                                    <div class="col-md-8 col-xs-9">
                                        <select name="highest_qualification" id="highest_qualification" class="dropselectsec">
                                            <option value=""> Select Highest Education</option>
                                            <option value="1">Ph.D</option>
                                            <option value="2">Masters Degree</option>
                                            <option value="3">PG Diploma</option>
                                            <option value="4">Bachelors Degree</option>
                                            <option value="5">Diploma</option>
                                            <option value="6">Intermediate / (10+2)</option>
                                            <option value="7">Secondary</option>
                                            <option value="8">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mar_ned">
                                    <div class="col-md-4 col-xs-3">
                                        <p align="right"><stong>Specialization</stong></p>
                                    </div>
                                    <div class="col-md-8 col-xs-9">
                                        <input type="text" name="specialization" id="specialization" placeholder="Specialization" class="dropselectsec" autocomplete="off">
                                    </div>
                                </div>
                                <div class="row mar_ned">
                                    <div class="col-md-4 col-xs-3">
                                        <p align="right"><stong>Year of Passed Out</stong></p>
                                    </div>
                                    <div class="col-md-8 col-xs-9">
                                        <select name="year_of_passedout" id="year_of_passedout" class="birthdrop">
                                            <option value="">Year</option>
                                            <option value="1980">1980</option>
                                            <option value="1981">1981</option>
                                            <option value="1982">1982</option>
                                            <option value="1983">1983</option>
                                            <option value="1984">1984</option>
                                            <option value="1985">1985</option>
                                            <option value="1986">1986</option>
                                            <option value="1987">1987</option>
                                            <option value="1988">1988</option>
                                            <option value="1989">1989</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mar_ned">
                                    <div class="col-md-4 col-xs-3">
                                        <p align="right"><stong>Total Experience</stong></p>
                                    </div>
                                    <div class="col-md-8 col-xs-9">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6 wdth">
                                                <select name="visa_status" id="visa_status" class="dropselectsec1">
                                                    <option value="">Month</option>
                                                    <option value="2">Jan</option>
                                                    <option value="1">Feb</option>
                                                    <option value="4">Mar</option>
                                                    <option value="5">Apr</option>
                                                    <option value="6">May</option>
                                                    <option value="3">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">Aug</option>
                                                    <option value="9">Sept</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-xs-6 wdth">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mar_ned">

                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="complete">
                            <div class="step44">
                                <h5>Completed</h5>


                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </section>
        </div>
        <div class="col-md-1"></div>
    </div>
                </div>
        </div>
    </div>
</div>
</div>