@extends('../page/admin/layout/index')

@section('content')
    <h1 class='mb-3'>Create category</h1>
    {!!Form::open(array('url'=>'admin/category','method'=>'POST'))!!}
        <div>
            {!!Form::label('type','Type')!!}
            {!!Form::text('type','',array('class'=>'form-control','placeholder'=>'Type'))!!}
        </div>
        <br>
        <div>
            {!!Form::label('name','Name')!!}
            {!!Form::text('name','',array('class'=>'form-control','placeholder'=>'Name'))!!}
        </div>
        <br>
        {!! Form::submit('Post', array('class'=>'btn btn-primary')) !!}
        <a class="btn btn-primary" href="{!! url('admin/category')!!}">Back</a>
    {!!Form::close()!!}
@endsection