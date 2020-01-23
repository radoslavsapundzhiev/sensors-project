<h1>EDIT SENSOR</h1>
<?php echo Form::open('/sensors/edit/<?php echo $sensor->id; ?>'); ?>
	<div class="form-group">
		<?php echo Form::label('Name', 'name'); ?>
		<?php echo Form::input('name', Input::post('name', isset($sensor) ? $sensor->name : ''), array('class' => 'form-control')); ?>
	</div>
	<div class="form-group">
		<?php echo Form::label('Unit', 'unit'); ?>
		<?php echo Form::input('unit', Input::post('unit', isset($sensor) ? $sensor->unit : ''), array('class' => 'form-control')); ?>
	</div>

	<input type="hidden" name="sensor_id" value="<?php echo $sensor->id; ?>">

	<div class="actions">
		<?php echo Form::submit('send'); ?>
	</div>
<?php echo Form::close(); ?>