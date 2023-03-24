@extends ('page/admin/layout/index')

@section('content')
    <h1>Edit Product</h1>
    <div class="container-fluid">
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="admin/product">View all product</a></li>
			<li class="breadcrumb-item active"><a href="admin/product/create">Create post</a></li>
		</ol>
		<div class="card mb-4">
			<div class="card-body">
            @if(Session::has('product_update'))
                <div class="alert alert-primary alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Primary!</strong> {!! session('product_update') !!}
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
                
                {!! Form::model($product , array('route' => array('product.update', $product->id), 'method'=>'PUT','files'=>'true')) !!}
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name',$product->title, array('class'=>'form-control')) !!}
                <br>
                {!! Form::label('category_id', 'Category:') !!}
                    <select class="form-control" name="category_id">
                        @foreach ($categorys as $category)
                        <option value="{{ $category->id }}">{{ $category->Name }} </option>
                        @endforeach   
                    </select>
                <br>
                {!! Form::label('price', 'Price:') !!}
                {!! Form::text('price',$product->price, array('class'=>'form-control')) !!}

                {!! Form::label('image', 'Image:') !!}
                {!! Form::file('image', array('class'=>'form-control')) !!}
                <br>
                
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description',$product->description, array('class'=>'form-control')) !!}
                <br>
                {!! Form::submit('Update', array('class'=>'btn btn-primary')) !!}
                <a class="btn btn-primary" href="{!! url('admin/product')!!}">Back</a>
                {!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection