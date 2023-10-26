<div class="form-group">
    {!! Form::label('name', 'Product name: ') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group mt-3">
    {!! Form::label('price', 'Product Price: ') !!}
    {!! Form::text('price', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group mt-3">
    {!! Form::label('amount', 'Product Amount: ') !!}
    {!! Form::number('amount', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group mt-3">
    {!! Form::label('category_id', 'Product Category: ') !!}
    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group mt-3">
    {!! Form::label('image', 'Product Image: ') !!}
    {!! Form::file('image', ['class'=>'form-control']) !!}
</div>

