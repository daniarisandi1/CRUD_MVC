<?php $this->load->view('v_header');?>
<br><br><br>
	<div class="container w3-card">
	<h3>Form Tambah Data</h3>
	<hr>
		<?=form_open_multipart('index/add')?>
		  <br>

		<div class="form-group row">
	      <div class="col-xs-6">
	        <label for="ex1">Tanggal</label>
	        <input type="date" class="form-control" name="tanggal">
	      </div>
	      <div class="col-xs-6">
	        <label for="ex2">Berat Max</label>
	        <input type="text" class="form-control" name="berat_max">
	      </div>
	      <div class="col-xs-6">
	        <label for="ex3">Berat Min</label>
	        <input type="text" class="form-control" name="berat_min">
	      </div>
	    </div>
	    <br>
		  <div class="text-center">
		  	<button type="submit" class="btn btn-primary">Simpan</button>
		  	<?=anchor('index','Batal',['class'=>'btn btn-warning'])?>
		  </div>
		</form>
		<br>
		<?php if(validation_errors() || isset($error)) : ?>
			<div class="alert alert-danger" role="alert" align="center">
				<?=validation_errors()?>
				<?=(isset($error)?$error:'')?>
			</div>
		<?php endif; ?>
	</div>
<br>
<?php $this->load->view('v_footer');?>