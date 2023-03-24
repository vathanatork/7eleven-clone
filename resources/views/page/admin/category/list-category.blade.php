@extends('../page/admin/layout/index')


@section('content')
<div>
    <div><h1 class="mb-4">Categories list</h1></div>
    {{-- drop down --}}
    <!-- Example single danger button -->
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='height:25px width:30px'>
        filter
        </button>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="{!!url('admin/category')!!}">ALL</a>
        @foreach($distinctItems as $item)
        <a class="dropdown-item" href="{!!url('admin/category/filter')!!}/{{$item->type}}">{{$item->type}}</a>
        @endforeach

        </div>
    </div>
       
</div>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Name</th>
        {{-- <th>Number of Product</th> --}}
        <th>Edit</th>
        <th>Delete</th>
    </tr>  
    @foreach ($categoryItems as $item)
    <tr> 
        <td class="text-dark text-decoration-none">#{{$item->id}}</td>
        <td class="text-dark text-decoration-none">{{$item->type}}</td>
        <td class="text-dark text-decoration-none">{{$item->Name}}</td>
        {{-- <td class="text-dark text-decoration-none">{{$item->product}}</td> --}}
        <td><a href="{!! url('admin/category')!!}/{{$item->id}}/edit"><i class="fa-solid fa-pen-to-square"></i></a></td>
        <td>
            {!!Form::open(['url'=>['admin/category',$item->id],'method'=>'delete'])!!}
                <input type="submit" value="delete" class="btn btn-primary">
            {!!Form::close()!!}
        </td>
    </tr>
    @endforeach
</table>
<div class="mt-2">
    {{ $categoryItems->links('pagination::bootstrap-4') }}
</div>
@endsection