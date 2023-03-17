@extends('../page/admin/layout/index')

@section('content')
    <h1 class='mb-3'>Create category</h1>
    {!!Form::open(array('url'=>['admin/category',$category->id],'method'=>'PUT'))!!}
        <div>
            {!!Form::label('type','Type')!!}
            {!!Form::text('type',$category->type,array('class'=>'form-control','placeholder'=>'Type'))!!}
        </div>
        <br>
        <div>
            {!!Form::label('name','Name')!!}
            {!!Form::text('name',$category->Name,array('class'=>'form-control','placeholder'=>'Name'))!!}
        </div>
        <br>
        {!! Form::submit('Post', array('class'=>'btn btn-primary')) !!}
        <a class="btn btn-primary" href="{!! url('admin/category')!!}">Back</a>
    {!!Form::close()!!}
@endsection