<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@extends('layouts.app')
@section('content')
    @include('inc.search')
    <div class="container" style="margin-top: 2em">
        <div class="row">
            <div class="col-md-4 col-sm-12 pull-left">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="font-size: 18px; letter-spacing: 2px; color: #1b6d85 ">QUICK ACCESS</div>
                        <div class="panel-body">

                                <ul class="list-group">
                                    @if(count($location))
                                        @foreach($location as $locations)
                                            <li class="list-group-item">
                                                    {{ $locations->name }} <span class="badge">12</span>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>

                        </div>
                    </div>


                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 18px; letter-spacing: 2px; color: #1b6d85 ">CATEGORY</div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <select class="form-control" id="select">
                                <option value="accounting">Accounting</option>
                                <option value="it">IT Programing</option>
                                <option value="marketing">Marketing</option>
                            </select>

                            <br>

                            <select class="form-control" id="select">
                                <option value="accounting">Accounting</option>
                                <option value="it">IT Programing</option>
                                <option value="marketing">Marketing</option>
                            </select>

                            <br>

                            <select class="form-control" id="select">
                                <option value="accounting">Accounting</option>
                                <option value="it">IT Programing</option>
                                <option value="marketing">Marketing</option>
                            </select>

                            <br>

                            <select class="form-control" id="select">
                                <option value="accounting">Accounting</option>
                                <option value="it">IT Programing</option>
                                <option value="marketing">Marketing</option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>

            {{--Listing job in the right side--}}

            <div class="col-md-8 col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 18px; letter-spacing: 2px;color: #1b6d85 ">LATEST JOBS</div>
                    <div class="panel-body">
                        @if(count($job))
                            @foreach($job as $jobs)
                                <div class="row">

                                    <div class="col-md-3 col-sm-12">
                                        <div class="thumbnail">
                                            <a href="#"><img src="{{ asset($jobs->company->logo) }} " alt="" style=" width: 120px; height: 110px " ></a>
                                        </div>
                                    </div>


                                    <div class="col-md-9 col-sm-12">
                                        <div class="bs-component">
                                            <div class="list-group">
                                                <a href="#" >
                                                    <p style="font-size: 25px"> {{ $jobs->jobTitle }}</p>
                                                </a>
                                                <button class="btn btn-primary pull-right" style="margin-top: -20px">
                                                    <a href="#" style="color: #f0f0f0">View now</a>
                                                </button>
                                                <a href="#" >
                                                     <p style="font-size: 16px"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                                        {{ $jobs->company->companyName }}
                                                         <small>|
                                                         {{ Carbon\Carbon::createFromTimestamp(strtotime($jobs->created_at))->diffForHumans() }}
                                                         </small>


                                                     </p>
                                                </a>
                                                <hr style="margin-bottom: -3px; margin-top:5px ">

                                                    <div class="row">

                                                        <div class="col-md-3 col-sm-12">
                                                            <h5 style="color: #0DC2C9"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                                {{ $jobs->jobLocation }}
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12">
                                                            <a href="#" data-toggle="tooltip" title="Expired date!">
                                                            <h5 style="color: #C97975">

                                                                <i class="fa fa-calendar-times-o" aria-hidden="true"></i>

                                                                {{ Carbon\Carbon::createFromTimestamp(strtotime($jobs->deadLine))->toFormattedDateString()}}
                                                                {{--{{ Carbon\Carbon::createFromTimestamp(strtotime($jobs->deadLine))->addDays(30)->diffForHumans()}}--}}
                                                                {{--{{ Carbon\Carbon::now()->addDays(30)->diffForHumans()}}--}}

                                                            </h5>
                                                            </a>

                                                            <script>
                                                                $(document).ready(function(){
                                                                    $('[data-toggle="tooltip"]').tooltip();
                                                                });
                                                            </script>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12">
                                                            <h5 style="color: #0DC2C9"><i class="fa fa-id-card-o" aria-hidden="true"></i>
                                                                {{ $jobs->jobCategory }}
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-3 col-sm-12">
                                                            <h5 style="color: #0DC2C9"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                {{ $jobs->contractType }}
                                                            </h5>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        @endforeach
                        @endif

                            {{--@component('components.who')--}}
                            {{--@endcomponent--}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
