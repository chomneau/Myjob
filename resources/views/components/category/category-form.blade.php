
<div class="well bs-component" style="margin-bottom: 2em">
    {!!Form::open(['action' => 'CategoryController@store','method' => 'POST'])!!}
    {{Form::bsText('category','',['placeholder' => 'category'])}}
    {{Form::bsSubmit('submit', ['class'=>'btn btn-primary pull-right'])}}
    {!! Form::close() !!}


</div>

