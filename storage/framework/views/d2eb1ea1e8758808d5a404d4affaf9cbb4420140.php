<?php $__env->startSection('content'); ?>

<div class="container">
<div class="panel panel-warning">
<div class="panel-heading"><h3><b>Tambah Mata Diklat</b></h3></div>
	<div class="panel-body">
	<?php echo Form::open(['url' => '/Jabatan']); ?>


	<div class="form-group">
		<?php echo Form::label('Kode_jabatan', 'Kode Jabatan : '); ?>

		<?php echo Form::text('Kode_jabatan', null, ['class' => 'form-control']); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Nama_jabatan', 'Nama Jabatan :'); ?>

		<?php echo Form::text('Nama_jabatan', null, ['class' => 'form-control']); ?>

	</div>
	<div class="form-group">
		<?php echo Form::label('Besaran_uang', 'Besaran Uang :'); ?>

		<?php echo Form::text('Besaran_uang', null, ['class' => 'form-control']); ?>

	</div>
	<div class="form-group">
	<?php echo Form::submit('Simpan', ['class' => 'btn btn-warning']); ?>	
	<?php echo Form::close(); ?>

	</div>
	
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>