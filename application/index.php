<?php $this->load->view('v_header');?>  
<div class="container">
    <br><br>
    <?=anchor('index/add/','Tambah Data',['class'=>'btn btn-danger', 'role'=>'button'])?>
    <?php if($index->num_rows() > 0) : ?>
      <br><p></p>
      <?php if($this->session->flashdata('message')) : ?>
        <div class="alert alert-success" role="alert" align="center">
          <?=$this->session->flashdata('message')?>
        </div>
      <?php endif; ?>
      <hr />  
      <div class="row">
        <table class="table table-bordered container">
        	<tr>
        		<th class="col-sm-2">Tanggal</th>
            <th class="col-sm-2">Berat Max</th>
        		<th class="col-sm-2">Berat Min</th>
        		<th class="col-sm-2">Perbedaan</th>
            <th class="col-sm-2">Aksi</th>
        	</tr>
        	<tr>
        	<?php foreach($index->result() as $ind) : ?>
              <td><?=$ind->tanggal?></td>
              <td><?=$ind->berat_max?></td>
              <td><?=$ind->berat_min?></td>
              <?php 
                $berat_max = $ind->berat_max;
                $berat_min = $ind->berat_min;
                $hasil = $berat_max - $berat_min;
              ?>
              <td><?=$hasil?></td>
              <td>
                <?=anchor('index/show/'.$ind->id_berat,'Lihat',['class'=>'btn btn-primary', 'role'=>'button'])?>
                <?=anchor('index/edit/'.$ind->id_berat,'Ubah',['class'=>'btn btn-danger', 'role'=>'button'])?>
                <?=anchor('index/delete/'.$ind->id_berat,'Hapus',['class'=>'btn btn-warning', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
              </td>
            </tr>
          <?php endforeach; ?>
            <tr>
              <?php 
                $query = $this->db->query("SELECT avg(berat_max) AS berat_max, avg(berat_min) AS berat_min, avg(hasil) AS hasil  FROM berat");
                foreach($query->result() as $view):?>
                <td><strong>Rata-rata</td>
                <td class="col-sm-2"><?=$view->berat_max?></td>
                <td class="col-sm-2"><?=$view->berat_min?></td>
                <td class="col-sm-2"><?=$view->hasil?></td>
              <?php endforeach; ?>
            </tr>
        </table>
      </div>
    <?php else : ?>
      <div align="center">Belum ada data, tambahkan data terlebih dahulu</div>
    <?php endif; ?>
</div>

<?php $this->load->view('v_footer');?>