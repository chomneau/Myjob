<div class="container" style="margin-top: 2em">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <form action="{{ route('createjob.postjob', ['id'=>$company->id]) }}" method="post">
                {{csrf_field()}}
                @include('admin.job.components.job-description')
                @include('admin.job.components.job-detail')
                @include('admin.job.components.job-preferred-candidate')
                <hr>
                <ul class="list-inline pull-right" style="margin-bottom: 3em">
                    <li><button type="button" class="btn btn-default next-step">Save to draft</button></li>
                    <li><button type="submit" class="btn btn-primary next-step">Post now</button></li>
                </ul>
            </form>
        </div>

        <div class="col-md-1"></div>

    </div>
</div>