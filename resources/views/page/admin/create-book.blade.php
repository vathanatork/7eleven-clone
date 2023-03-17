@extends ('page/admin/layout/index')

@section('content')
    
 
    @if(Session::has('product_create'))
    <div class="alert alert-primary alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Primary!</strong> {!! session('product_create') !!}
    </div>
    @endif
    @if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Something is Wrong</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card mb-4">
        <div class="card-body">
            <h1>Create Product</h1>
            {!! Form::open(array('url'=>'admin/product', 'files'=>'true')) !!}
               
                {!! Form::label('name', 'Product Name:') !!}
                {!! Form::text('name',null, array('class'=>'form-control')) !!}
                <br>
                {!! Form::label('category_id', 'Category:') !!}
                <select class="form-control" name="category_id">
                    @foreach ($categorys as $category)
                      <option value="{{ $category->id }}">{{ $category->Name }} </option>
                    @endforeach   
                </select>
                <br>
                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price',null, array('class'=>'form-control')) !!}
                <br>
                {!! Form::label('image', 'Image:') !!}
                {!! Form::file('image', array('class'=>'form-control')) !!}
                <br>
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description',null, array('class'=>'form-control')) !!}
                <br>
                {!! Form::submit('Post', array('class'=>'btn btn-primary')) !!}

                <a class="btn btn-primary" href="{!! url('admin/product')!!}">Back</a>

            {!! Form::close() !!}

        </div>
    </div>

@endsection
