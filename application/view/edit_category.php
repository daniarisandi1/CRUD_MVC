<?php $this->load->view('v_header');?>
<br><br><br>
<div class="container w3-card">
	<h3>Form Ubah Data</h3>
	<hr>
		<br>
			<?php if(validation_errors() || isset($error)) : ?>
				<div class="alert alert-danger" role="alert" align="center">
					<?=validation_errors()?>
					<?=(isset($error)?$error:'')?>
				</div>
			<?php endif; ?>
			
			<?=form_open_multipart('index/edit/'.$data->id_berat,['class'=>'form-horizontal col-sm-12'])?>
		  		<div class="form-group row">
		  		<div class="col-xs-6">
			        <label for="ex1">ID Berat</label>
			        <input type="text" name="title" class="form-control" value="<?=$data->id_berat?>">
			    </div>
			    <div class="col-xs-6">
			        <label for="ex2">Tanggal</label>
			        <input type="date" class="form-control" name="tanggal" value="<?=$data->tanggal?>">
			    </div>
			    <div class="col-xs-6">
			        <label for="ex3">Berat Max</label>
			        <input type="text" class="form-control" name="berat_max" value="<?=$data->berat_max?>">
			    </div>
			    <div class="col-xs-6">
			        <label for="ex3">Berat Min</label>
			        <input type="text" class="form-control" name="berat_min" value="<?=$data->berat_min?>">
			    </div>
			    <div class="col-xs-6">
			        <label for="ex3">Perbedaan</label>
			        <input type="text" class="form-control" name="hasil" value="<?=$data->hasil?>">
			    </div>
			    </div>
			<div class="col-sm-12 text-center">
		  		<button type="submit" class="btn btn-primary">Simpan</button>
		  		<?=anchor('index','Batal',['class'=>'btn btn-warning'])?>
		  	</div>
		  	&nbsp;
		</form>
</div>
<br><br><br>
<?php $this->load->view('v_footer');?>