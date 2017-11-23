<div class="panel panel-default">
    <div class="panel-heading"><h3>Job Category</h3></div>
    <div class="panel-body">

        <div class="bs-docs-section">
            <div class="bs-component">
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Job Category</th>
                        <th>Create_date</th>
                        <th class="pull-right" style="margin-right: 5em">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if(count($category))
                        @foreach($category as $job_category)
                            <tr>

                                <td>{{$job_category->id}}</td>
                                <td>{{$job_category->name}}</td>
                                <td>{{$job_category->created_at}}</td>
                                <td>
                                    <div class="action pull-right">
                                        <a href="/home/showcategory/{{$job_category->id}}/edit"><Button class="btn btn-primary btn-sm">Edit</Button></a>
                                        <Button class="btn btn-danger btn-sm">Delete</Button>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <h2>Job Location not found!</h2>
                    @endif
                    </tbody>
                </table>
            </div><!-- /example -->
        </div>

    </div>
</div>

