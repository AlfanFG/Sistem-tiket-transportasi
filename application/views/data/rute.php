
    <div id="data-rute">
            <table class="table-condensed table-bordered table-hover table-striped" id="d_rute">
  <thead>
    <tr>
      <th>No</th>
      <th>ID Rute</th>
      <th>Berangkat Pada</th>
      <th>Dari</th>
      <th>Tujuan</th>
      <th>Harga</th>
      <th>ID Transportasi</th>
      <th>Tools</th>
      
    </tr>

  </thead>
  <tbody">
  <?php
     $i = 0;
     $a = 1;
     // $bwa = $singkatan . "0";
      foreach ($d_rute as $data) {
        echo "<tr>";
        echo "<td>".$a."</td>";
        echo "<td class='kode'>".$data['ruteid']."</td>";
  
        echo "<td>".$data['depart_at']."</td>";
        
        echo "<td>".$data['rute_from']."</td>";
        echo "<td>".$data['rute_to']."</td>";
        echo "<td>".$data['price']."</td>";
        echo "<td>".$data['transportationid']."</td>";
        ?>
        
        <td align='left'> 
          <a href="javascript:;" 
          data-id="<?php echo $data['ruteid'] ?>"
   
          data-depart_at="<?php echo $data['depart_at'] ?>"
          data-from="<?php echo $data['rute_from'] ?>"
          data-to="<?php echo $data['rute_to'] ?>"
          data-price="<?php echo $data['price'] ?>"
          data-trans="<?php echo $data['transportationid'] ?>"
          data-toggle="modal" data-target="#edit-data">
          <button data-toggle="modal" data-target="#edit" class="btn btn-orange"><i class="glyphicon glyphicon-pencil"></i></button>
          </a>
          <button class="btn btn-danger sweet-14" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Danger']);"><i class="glyphicon glyphicon-trash"></i></button>


            
        </td>
<?php
        echo "</tr>";
        $i++;
        $a++;
      }
     ?>
    
  </tbody>
</table>
</div>

  





