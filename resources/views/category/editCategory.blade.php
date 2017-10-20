
<div class="container" style="margin-top: 2em">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #1CE1E8">Add Category</div>
                <div class="space"></div>
                <div class="panel-body" style="margin-top: 1em" >
                    {!!Form::open(['action' => 'CategoryController@update',$category->id,'method' => 'PUT'])!!}
                    <div class="col-md-10">
                        {{Form::bsText('category','$category->name', ['placeholder' => 'category'])}}
                        {{--{{Form::bsText('adminid','',['placeholder' => 'category'])}}--}}
                    </div>
                    <div class="col-md-2">
                        {{--{{Form::bsSubmit('Add', ['class'=>'btn btn-primary pull-right'])}}--}}
                        <button type="submit" class="btn btn-primary" style="margin-top: 2em">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Update
                        </button>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
