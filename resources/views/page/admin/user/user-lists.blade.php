@extends ('page/admin/layout/index')

@section('content')
    <div >
        <h1 class="mt-5">User list</h1>
    </div>
    <div>
        {{-- table --}}
        <table class="table table-fixed table-bordered border-2 border-primary ">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>  
            @foreach ($users as $user)
            <tr> 
                <td class="text-dark text-decoration-none">#{{$user->id}}</td>
                <td class="text-dark text-decoration-none">#{{$user->name}}</td>
                <td class="text-dark text-decoration-none">#{{$user->email}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
    <div class="mt-2">
        {{ $users->links('pagination::bootstrap-5') }}
    </div>  
@endsection
