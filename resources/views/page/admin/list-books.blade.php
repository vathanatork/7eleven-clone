@extends ('page/admin/layout/index')

@section('content')
    <h1 class="mb-4">Products list</h1>
    <!-- Example single danger button -->
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='height:25px width:30px'>
        filter
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item text-danger" href="{!!url('admin/product/filter/title')!!}">Title</a>
            <a class="dropdown-item text-danger" href="{!!url('admin/product/filter/category')!!}">Category</a>
        </div>
    </div>
    <!-- Example single danger button -->
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='height:25px width:30px'>
        Sort
        </button>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="{!!url('admin/product')!!}">ALL</a>
            <a class="dropdown-item" href="{!!url('admin/product/search/Food')!!}">Food</a>
            <a class="dropdown-item" href="{!!url('admin/product/search/Drink')!!}">Drink</a>
        </div>
    </div>
    {{-- table --}}
    <table class="table mt-5 ">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>category</th>
            <th>image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>  
        @foreach ($books as $book)
        <tr> 
            <td><a href="{!!url('admin/product')!!}/{{$book->id}}" class="text-dark text-decoration-none">#{{$book->id}}</a></td>
            <td><a href="{!!url('admin/product')!!}/{{$book->id}}" class="text-dark text-decoration-none">{{$book->title}}</a></td>
            <td><a href="{!!url('admin/product')!!}/{{$book->id}}" class="text-dark text-decoration-none">{{$book->description}}</a></td>
            <td ><a href="{!!url('admin/product')!!}/{{$book->id}}" class="text-dark text-decoration-none">{{$book->Name}}</a></td>
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
    {{ $books->links() }}

    
@endsection
