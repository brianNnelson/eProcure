<div class="form-group">
	{!! Form::label('symbol', 'Symbol Name: ') !!}
	{!! Form::text('symbol', null, array('class' => 'form-control')) !!}
</div>

<div class="form-group">
	{!! Form::label('discount', 'Our Discount: ') !!}
	{!! Form::number('discount', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
	{!! Form::label('discount_target', 'Target Discount: ') !!}
	{!! Form::number('discount_target', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
	{!! Form::label('number_shares', 'Number of Shares: ') !!}
	{!! Form::number('number_shares', null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
	{{ Form::label('need_id', 'Need a: ') }}
	{{ Form::select('need_id', $needs, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('exchange_id', 'Exchange: ') }}
	{{ Form::select('exchange_id', $exchanges, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('custodian_id', 'Custodian: ') }}
	{{ Form::select('custodian_id', $custodians, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('source_id', 'Source: ') }}
	{{ Form::select('source_id', $sources, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('rep_id', 'Qilin Rep: ') }}
	{{ Form::select('rep_id', $reps, null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{!! Form::label('status', 'Status:') !!}
    {{ Form::select('status', [
    	'unpublished'=>'Unpublished',
    	'published'=>'Published',
    	'archived'=>'Archived'
    	], null, ['class' => 'form-control']) }}
</div>

{!! Form::submit($submitButtonText, array('class' => 'btn btn-default')) !!}