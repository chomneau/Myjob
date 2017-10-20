@extends('layouts.app')

@section('content')
@include('user.headBlank')
<div class="container" style="margin-top: 1em">
    <div class="row">
        <div class="col-md-3 pull-left">
            @include('user.userSidebar')
        </div>
        @include('inc.message')
        <div class="col-md-9 pull-right">
            @include('user.showProfile')

            {{--<h1>Welcome {{ Auth::user()->name }}</h1>--}}
        </div>

        @include('inc.logoSlider')



    </div>
</div>



@endsection
