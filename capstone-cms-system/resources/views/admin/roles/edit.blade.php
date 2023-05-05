<x-admin-master>
    @section('content')

    <div class="col-sm-6">

        <h1>Edit Role: {{$role->name}}</h1>
        @if(session()->has('role-updated'))

        <div class="alert alert-success">
            {{session('role-updated')}}
        </div>
        @endif

        <form method="post" action="{{route('roles.update', $role->id)}}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$role->name}}" @error('name') role-updated @enderror>
            </div>
            <button class="btn btn-primary">update</button>
        </form>

    </div>

    @endsection
</x-admin-master>