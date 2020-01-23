<h1>ADD VIEW</h1>
<?php echo Form::open('/sensors/add'); ?>
	<div class="form-group">
		<?php echo Form::label('Name', 'name'); ?>
		<?php echo Form::input('name', Input::post('name', isset($sensor) ? $sensor->name : ''), array('class' => 'form-control')); ?>
	</div>
	<div class="form-group">
		<?php echo Form::label('Unit', 'unit'); ?>
		<?php echo Form::input('unit', Input::post('unit', isset($sensor) ? $sensor->unit : ''), array('class' => 'form-control')); ?>
	</div>
	<div class="actions">
		<?php echo Form::submit('send'); ?>
	</div>
<?php echo Form::close(); ?>