<div class="bs-example" >
    {{--<!-- Small modal -->--}}
    {{--<button class="btn btn-primary" data-toggle="modal" data-target="#smallModal">Small modal</button>--}}

    <div id="post-smallModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="glyphicon glyphicon-align-right" aria-hidden="true"></i> Post a new job</h4>
                </div>
                @include('admin.job.form-postjob')
            </div>
        </div>
    </div>
</div>