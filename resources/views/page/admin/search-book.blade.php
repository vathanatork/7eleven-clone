@extends ('page/admin/layout/index')

@section('content')
    <a class="mb-5 decoration-lime-500" href="{!! url('admin/product')!!}">Back</a>
    <h1 class="mb-4">Products list</h1>
    {{-- table --}}
    <table class="table mt-5">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>category</th>
            <th>image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>  
        @foreach ($products as $book)
        <tr> 
            
            <td><a href="{!!url('admin/product')!!}/{{$book->id}}" class="text-dark text-decoration-none">#{{$book->id}}</a></td>
            <td><a href="{!!url('admin/product')!!}/{{$book->id}}" class="text-dark text-decoration-none">{{$book->title}}</a></td>
            <td><a href="{!!url('admin/product')!!}/{{$book->id}}" class="text-dark text-decoration-none text-wrap max-width-50">{{$book->description}}</a></td>
            <td><a href="{!!url('admin/product')!!}/{{$book->id}}" class="text-dark text-decoration-none">{{$book->category->Name}}</a></td>
            <td><img src="{!!asset('img/'.$book->image)!!}" alt="img" object-fit='fit'></td>
            <td><a href="{!! url('admin/product')!!}/{{$book->id}}/edit"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td>
                {!!Form::open(['url'=>['admin/product',$book->id],'method'=>'delete'])!!}
                    <input type="submit" value="delete" class="btn btn-primary">
                {!!Form::close()!!}
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection
