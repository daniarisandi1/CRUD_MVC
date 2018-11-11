<?php $this->load->view('v_header');?>
<br><br>
  <div class="container">
  <br>
    <table class="container table table-bordered">
      <?=anchor('index/','Ke Beranda',['class'=>'btn btn-success', 'role'=>'button'])?>
      <p></p>
      <tr>
        <th class="col-sm-2">Tanggal</th>
        <th class="col-sm-2"><?=$data->tanggal?></th>
      </tr>
      <tr>
        <td>Berat Max</td>
        <td><?=$data->berat_max?></td>
      </tr>
      <tr>
        <td>Berat Min</td>
        <td><?=$data->berat_min?></td>
      </tr>
      <tr>
        <td>Perbedaan</td>
        <?php
          $berat_min = $data->berat_min;
          $berat_max = $data->berat_max;
          $hasil = $berat_max - $berat_min;
        ?>
        <td><?=$hasil?></td>
      </tr>
    </table>
</div>
<br><br><br>
<?php $this->load->view('v_footer');?>