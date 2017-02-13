{!! Form::open(['url' => 'product', 'method'=>'get', 'class'=>'form-inline'])!!}
<div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
	{!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control', 'placeholder' => 'Ketikkan Produk...']) !!}
	{!! $errors->first('q', '<p class="help-block">:message</p>') !!}
</div>
{!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}