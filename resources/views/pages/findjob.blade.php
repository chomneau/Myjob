@extends('layouts.app')
@section('content')
    @include('inc.search')
    <div class="container" style="margin-top: 2em">
        <div class="row">
            <div class="col-md-4 col-sm-12 pull-left">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="font-size: 18px; font-family: 'Anton', sans-serif; letter-spacing: 2px; color: #1b6d85 ">QUICK ACCESS</div>
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


                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size: 18px; font-family: 'Anton', sans-serif; letter-spacing: 2px; color: #1b6d85 ">CATEGORY</div>
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
                    <div class="panel-heading" style="font-size: 18px; font-family: 'Anton', sans-serif; letter-spacing: 2px;color: #1b6d85 ">LATEST JOBS</div>
                    <div class="panel-body">
                            <div class="row">

                                <div class="col-md-3 col-sm-12">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt="" width="150" height="150"></a>
                                    </div>
                                </div>


                                <div class="col-md-9 col-sm-12">
                                    <div class="bs-component">
                                        <div class="list-group">
                                            <a href="#" >
                                                <p style="font-size: 25px">Software Developer</p>
                                            </a>
                                            <button class="btn btn-info pull-right" style="margin-top: -20px"><a href="#">View now</a></button>
                                            <a href="#" >
                                                 <p style="font-size: 16px"><i class="fa fa-briefcase" aria-hidden="true"></i> Company name</p>
                                            </a>
                                            <hr style="margin-bottom: -3px; margin-top:5px ">

                                                <div class="row">

                                                    <div class="col-md-3 col-sm-12">
                                                        <h5 style="color: #0DC2C9"><i class="fa fa-map-marker" aria-hidden="true"></i> Phnom Penh</h5>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <h5 style="color: #C97975"><i class="fa fa-calendar-times-o" aria-hidden="true"></i> Oct 31, 2017</h5>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <h5 style="color: #0DC2C9"><i class="fa fa-id-card-o" aria-hidden="true"></i> Software/IT</h5>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <h5 style="color: #0DC2C9"><i class="fa fa-clock-o" aria-hidden="true"></i> Full time</h5>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-12">
                                    <div class="thumbnail">
                                        <a href="#"><img src="http://placehold.it/360x240" alt="" width="150" height="150"></a>
                                    </div>
                                </div>


                                <div class="col-md-9 col-sm-12">
                                    <div class="bs-component">
                                        <div class="list-group">
                                            <a href="#" >
                                                <p style="font-size: 25px">Software Developer</p>
                                            </a>
                                            <button class="btn btn-default pull-right" style="margin-top: -20px"><a href="#">View now</a></button>
                                            <a href="#">
                                            <p style="font-size: 16px"><i class="fa fa-briefcase" aria-hidden="true"></i> Company name</p>
                                            </a>
                                            <hr style="margin-bottom: -3px; margin-top:5px ">

                                            <div class="row">

                                                <div class="col-md-3 col-sm-12">
                                                    <h5 style="color: #0DC2C9"><i class="fa fa-map-marker" aria-hidden="true"></i> Phnom Penh</h5>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <h5 style="color: #C97975"><i class="fa fa-calendar-times-o" aria-hidden="true"></i> Oct 31, 2017</h5>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <h5 style="color: #0DC2C9"><i class="fa fa-id-card-o" aria-hidden="true"></i> Software/IT</h5>
                                                </div>
                                                <div class="col-md-3 col-sm-12">
                                                    <h5 style="color: #0DC2C9"><i class="fa fa-clock-o" aria-hidden="true"></i> Full time</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>












                            {{--@component('components.who')--}}
                            {{--@endcomponent--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
