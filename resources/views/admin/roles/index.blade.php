<x-admin-master>
    @section('content')

    <div class="row">

        <div class="com-sm-3">
            <form method="post" action="{{route('roles.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Create a Role</button>

            </form>
        </div>

        <div class="col-sm-9">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 clasas="m-0 font-weight-bold text-primary">Roles</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">



                        <table class="table table-bordered" id="dataTable" width="100%">

                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>

                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start</th>
                                    <th>Salary</th>
                                </tr>
                                <tbody>
                                    <tr>
                                        <td>

                                        </td>
                                    </tr>
                            </tfoot>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-admin-master>