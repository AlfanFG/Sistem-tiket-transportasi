
    <div id="data-transp_type">
            <table class="table-condensed table-bordered table-hover table-striped" id="d_transp_type">
  <thead>
    <tr>
      <th>No</th>
      <th>Tipe Transportasi ID</th>
      <th>Deskripsi</th>
      <th>Tools</th>
      
    </tr>

  </thead>
  <tbody">
  <?php
     $i = 1;
      foreach ($d_transp_type as $data) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$data['transportation_typeid']."</td>";
  
        echo "<td>".$data['description']."</td>";
        ?>
        
        <td align='left'> 
          <a href="javascript:;" 
          data-id="<?php echo $data['transportation_typeid'] ?>"
          data-desc="<?php echo $data['description'] ?>"
       
          data-toggle="modal" data-target="#edit-data">
          <button data-toggle="modal" data-target="#edit" class="btn btn-orange"><i class="glyphicon glyphicon-pencil"></i></button>
          </a>
          <a class="remove"><i class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></i></a>


            
        </td>
<?php
        echo "</tr>";
        $i++;
      }
     ?>
    
  </tbody>
</table>
</div>

  





