<div class="container" style="margin-top: 2em">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form action="{{ route('createjob.postjob', ['id'=>$company->id]) }}" method="post">
                {{csrf_field()}}
                @include('admin.job.components.edit-job-description')
                @include('admin.job.components.edit-job-detail')
                @include('admin.job.components.edit-job-preferred-candidate')
                <hr>
                <ul class="list-inline pull-right" style="margin-bottom: 3em">
                    <li><button type="submit" class="btn btn-primary next-step">update now</button></li>
                </ul>
            </form>
        </div>

        <div class="col-md-1"></div>

    </div>
</div>