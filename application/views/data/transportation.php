
    <div id="data-transportation">
            <table class="table-condensed table-bordered table-hover table-striped" id="d_transportation">
  <thead>
    <tr>
      <th>No</th>
      <th>ID Transportasi</th>
      <th>Kode</th>
      <th>Deskripsi</th>
      <th>Jumlah Kursi</th>
      <th>ID Tipe Transportasi</th>
      <th>Tools</th>
      
    </tr>

  </thead>
  <tbody">
  <?php
     $i = 1;
      foreach ($d_transportation as $data) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$data['transportationid']."</td>";
  
        echo "<td>".$data['code']."</td>";
        echo "<td>".$data['description']."</td>";
        echo "<td>".$data['seat_qty']."</td>";
        echo "<td>".$data['transportation_typeid']."</td>";
        ?>
        
        <td align='left'> 
          <a href="javascript:;" 
          data-id="<?php echo $data['transportationid'] ?>"
          data-code="<?php echo $data['code'] ?>"
          data-desc="<?php echo $data['description'] ?>"
          data-seat="<?php echo $data['seat_qty'] ?>"
          data-trans="<?php echo $data['transportation_typeid'] ?>"
          data-toggle="modal" data-target="#edit-data">
          <button data-toggle="modal" data-target="#edit" class="btn btn-orange"><i class="glyphicon glyphicon-pencil"></i></button>
          </a>
          <button class="btn btn-danger sweet-14" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Danger']);"><i class="glyphicon glyphicon-trash"></i></button>


            
        </td>
<?php
        echo "</tr>";
        $i++;
      }
     ?>
    
  </tbody>
</table>
</div>

  





