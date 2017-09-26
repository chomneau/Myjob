
@extends('layouts.app')

@section('content')
    @include('user.headBlank')
    <div class="container" style="margin-top: 1em">
        <div class="row">
            <div class="col-md-3 pull-left">
                @include('admin.adminSidebar')
            </div>

            <div class="col-md-9 pull-right">
                @include('components.category.category-form')
                @include('components.category.category-table')
            </div>

            @include('inc.logoSlider')



        </div>
    </div>



@endsection



