<x-admin-master>
    @section('content')

    <h1>Users</h1>

    @if(session('user-deleted'))

    <div class="alert alert-danger">
        {{session('user-deleted')}}
    </div>

    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>email</th>
                            <th>Image</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>email</th>
                            <th>Image</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                        <tr>

                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>


                            <td><a href="{{route('user.profile.show', $user->id)}}">{{$user->username}}</a></td>
                            <td>{{$user->email}}</td>
                            <td>
                                <image width="100px" src="{{$user->avatar}}" alt="">
                                </image>
                            </td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                            <td>{{$user->updated_at->diffForHumans()}}</td>
                            <td>


                                <form method="post" action="{{route('user.destroy', $user->id)}}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>

                        @endforeach

                    </tbody>


                </table>
            </div>
        </div>
    </div>

    <div class="d-flex">
        <div class="mx-auto">
            {{$users->links()}}
        </div>
    </div>

    @endsection
</x-admin-master>