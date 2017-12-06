<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

@extends('layouts.app')
@section('content')
    @include('inc.top-space')
    <div class="container" style="margin-top: 2em">
        <div class="row">


            {{--Listing job in the right side--}}

            <div class="col-md-8 col-sm-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div style="margin-left: 12px">
                                    <a href="#"><img src="{{ asset($company->logo) }} " alt="" style=" width: 120px; height: 115px " ></a>
                                </div>
                                <div class="row">
                                    {{--social media--}}
                                    <h5 class="text-center" style="font-family: Roboto, Arial, sans-serif; margin-top: 20px">
                                        Share this job
                                    </h5>

                                    <div class="col-md-12 text-center">
                                        <a href="" style="font-size: 25px; color: #0e90d2; margin-left: 10px">
                                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                        </a>
                                        <a href="" style="font-size: 25px; color: #0e90d2; margin-left: 10px">
                                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                        </a>
                                        <a href="" style="font-size: 25px; color: #0e90d2; margin-left: 10px">
                                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                    {{--Location--}}
                                    <div class="col-md-12" style="margin-top: 15px; margin-left: 15px; margin-bottom: 5px">
                                        <span style="color: #00AEEF">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </span>

                                        {{ $singleJob->location->name }}
                                    </div>
                                    {{--Deadline--}}
                                    <div class="col-md-12" style="color: #FF6666; margin-left: 15px;">
                                        <a href="#" data-toggle="tooltip" title="Deadline!">
                                            <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
                                            {{ Carbon\Carbon::createFromTimestamp(strtotime($singleJob->deadLine))->toFormattedDateString()}}
                                        </a>
                                        <script>
                                            $(document).ready(function(){
                                                $('[data-toggle="tooltip"]').tooltip();
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                {{--Job Tile--}}

                                    <div class="row">
                                        <div class="col-md-12 col-sm-6" style="margin-bottom: 2em">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p style="color: #0b97c4;font-size: 20px; font-family: 'Roboto Condensed', sans-serif;">
                                                        {{ $singleJob->jobTitle }}
                                                    </p>
                                                    <a href="#" style="font-size: 16px; margin-top: -20px">
                                                        <span style="color: #00AEEF">
                                                           <i class="fa fa-briefcase" aria-hidden="true"></i>
                                                        </span>
                                                         {{ $company->companyName }}
                                                    </a>
                                                </div>
                                                <div class="col-md-6" style="margin-top: 35px; padding-right: 25px">
                                                    <button class="btn btn-primary pull-right">APPLY NOW!</button>
                                                </div>
                                            </div>

                                        </div>


                                        <h3 style="font-family: 'Roboto Condensed', sans-serif; font-size: 18px; margin-left: 1em">
                                            Job Details
                                        </h3>
                                        <hr style="margin-top: 3px; margin-left: 1em; ">

                                        <div class="col-md-3 col-sm-6">

                                            @if(count($contractType))
                                                @foreach($contractType as $contractTypes)
                                                    @if($contractTypes->id == $singleJob->contractType_id)

                                                        <span style="color: #00AEEF">
                                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                        </span>
                                                        {{ $contractTypes->name }}
                                                    @endif
                                                @endforeach
                                           @endif
                                        </div>
                                        {{--Salary Range--}}
                                        <div class="col-md-3 col-sm-6" style="margin-left: -10px">
                                            @if(count($salaryRange))
                                                @foreach($salaryRange as $salaryRanges)
                                                    @if($salaryRanges->id == $singleJob->salaryRange_id)
                                                        <span style="color: #00AEEF">
                                                            <i class="fa fa-money" aria-hidden="true"></i>
                                                        </span>
                                                        {{ $salaryRanges->name }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        {{--Job Category--}}
                                        <div class="col-md-3 col-sm-6">
                                            @if(count($countCategory))
                                                @foreach($countCategory as $countCategories)
                                                    @if($countCategories->id == $singleJob->category_id)
                                                        <span style="color: #00AEEF">
                                                            <i class="fa fa-id-card-o" aria-hidden="true"></i>
                                                        </span>

                                                        {{ $countCategories->name }}
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>
                                        {{--number of hiring--}}
                                        <div class="col-md-3 col-sm-6" style="margin-left: -10px">
                                            <span style="color: #00AEEF">
                                               <i class="fa fa-user" aria-hidden="true"></i> Hire :
                                            </span>
                                             {{ $singleJob->hire }} pos(s)
                                        </div>

                                    </div>
                                <h3 style="font-family: 'Roboto Condensed', sans-serif; font-size: 18px">
                                    Preferred Candidate</h3>
                                <hr style="margin-top: 3px">
                                {{--Preferred level--}}
                                <div class="col-md-6 col-sm-6" style="margin-bottom: 10px">
                                    @if(count($level))
                                        @foreach($level as $levels)
                                            @if($levels->id == $singleJob->level_id)
                                                <span style="color: #00AEEF">
                                                   <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                                                </span>
                                                Level : {{ $levels->name }}
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                                {{--Degree--}}
                                <div class="col-md-6 col-sm-6" style="margin-bottom: 10px">
                                    @if(count($degree))
                                        @foreach($degree as $degrees)
                                            @if($degrees->id == $singleJob->degree_id)
                                                <span style="color: #00AEEF">
                                                   <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                </span>
                                                Degree : {{ $degrees->name }}
                                            @endif
                                        @endforeach
                                    @endif
                                </div>

                                {{--Experience--}}
                                <div class="col-md-6 col-sm-6">
                                    @if(count($preExperience))
                                        @foreach($preExperience as $preExperiences)
                                            @if($preExperiences->id == $singleJob->job_experience_id)
                                                <span style="color: #00AEEF">
                                                   <i class="fa fa-sliders" aria-hidden="true"></i>
                                                </span>
                                                Experience : {{ $preExperiences->name }}
                                            @endif
                                        @endforeach
                                    @endif
                                </div>

                                {{--Experience--}}
                                <div class="col-md-6 col-sm-6">

                                  <span style="color: #00AEEF">
                                       <i class="fa fa-language" aria-hidden="true"></i>
                                    </span>
                                    Language : {{ $singleJob->language }}

                                </div>

                            </div>
                        </div>


                        <h3 style="font-family: 'Roboto Condensed', sans-serif; font-size: 18px; margin-left: 15px">
                            Job Description
                        </h3>
                        <hr style="margin-top: 3px; margin-left: 15px">
                        <p style="font-size: 16px; margin-left: 30px">
                            {!! $singleJob->jobDescription !!}
                        </p>
                        <h3 style="font-family: 'Roboto Condensed', sans-serif; font-size: 18px; margin-left: 15px">
                            Job Requirements
                        </h3>
                        <hr style="margin-top: 3px; margin-left: 1em">
                        <p style="font-size: 16px; margin-left: 30px">
                            {!! $singleJob->jobRequirement !!}
                        </p>

                        <h3 style="font-family: 'Roboto Condensed', sans-serif; font-size: 18px; margin-left: 1em">
                            Contact Info
                        </h3>
                        <hr style="margin-top: 3px; margin-left: 1em">

                        <table class="table table-sm" style="margin-left: 30px; margin-top: -10px">

                            <tbody>
                            <tr >
                                <td style="font-weight: 500; color:#84888e">Contact Person</td>
                                <td width="75%">: {{ $company->contactPerson }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight: 500; color:#84888e">Phone</td>
                                <td width="80%">: {{ $company->phone }}</td>
                            </tr>
                            <tr >
                                <td style="font-weight: 500; color:#84888e">Email</td>
                                <td width="75%">: {{ $company->email }}</td>
                            </tr>
                            <tr >
                                <td style="font-weight: 500; color:#84888e" >Website</td>
                                <td width="75%">: <a href="{{ $company->website }}">{{ $company->website }}</a> </td>
                            </tr>
                            <tr>
                                <td style="font-weight: 500; color:#84888e">Address</td>
                                <td width="75%">: {{ $company->address }}</td>
                            </tr>

                            </tbody>
                        </table>


                        {{--about company--}}
                        <h3 style="font-family: 'Roboto Condensed', sans-serif; font-size: 18px; margin-left: 1em">
                            About Company
                        </h3>
                        <hr style="margin-top: 3px; margin-left: 1em">

                        <p style="font-size: 16px; margin-left: 30px">
                            {{ $company->about }}
                        </p>


                        {{--@component('components.who')--}}
                        {{--@endcomponent--}}
                    </div>

                </div>
            </div>


            {{--Similar job--}}
            @include('pages.similar-job')


        </div>
    </div>
@endsection
