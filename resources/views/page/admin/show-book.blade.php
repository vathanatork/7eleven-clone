@extends ('page/admin/layout/index')

@section('content')
    <div class="card mb-3" style="max-width: 700px;">
        <div class="row g-0">
        <div class="col-md-8">
            <img src="{!!asset('img/'.$book->image)!!}" class="img-fluid rounded-start" alt="{{$book->name}}">
        </div>
        <div class="col-md-4">
            <div class="card-body pt-0">
            <h5 class="card-title">Type:{{$book->category['type']}}</h5>
            <h1 class="text-danger">{{$book->title}}</h1>
            <p class="card-text">{{$book->description}}</p>
            <p class="text-warning">Price:{{$book->price}}$</p>
            <p class="text-info">{{$book->create_at}}</p>
            <p class="text-info">{{$book->update_at}}</p>
            <a href="{!!url('admin/product')!!}"><div class="btn btn-primary">Back</div></a>
            </div>
        </div>
        </div>
    </div>    
@endsection