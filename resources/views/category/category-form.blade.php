{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="well bs-component">--}}
            {{--<div class="col-md-11">--}}
                {{--{!!Form::open(['action' => 'CategoryController@store','method' => 'POST'])!!}--}}
                {{--{{Form::bsText('category','',['placeholder' => 'category'])}}--}}
            {{--</div>--}}

            {{--<div class="col-md-1 form-group">--}}
                {{--{{Form::bsSubmit('Add', ['class'=>'btn btn-primary pull-right'])}}--}}
            {{--</div>--}}
            {{--{!! Form::close() !!}--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="container" style="margin-top: 2em">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #1CE1E8">Add Category</div>
                <div class="space"></div>
                <div class="panel-body" style="margin-top: 1em" >
                    {!!Form::open(['action' => 'CategoryController@store','method' => 'POST'])!!}
                            <div class="col-md-10">
                                {{Form::bsText('category','', ['placeholder' => 'category'])}}
                                {{--{{Form::bsText('adminid','',['placeholder' => 'category'])}}--}}
                            </div>
                            <div class="col-md-2">
                                {{--{{Form::bsSubmit('Add', ['class'=>'btn btn-primary pull-right'])}}--}}
                                <button type="submit" class="btn btn-primary" style="margin-top: 2em">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    Add
                                </button>
                            </div>



                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>




    {{--{{Form::bsText('adminid','',['placeholder' => 'category'])}}--}}





