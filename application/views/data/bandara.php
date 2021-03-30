
    <div id="data-bandara">
            <table class="table-condensed table-bordered table-hover table-striped" id="d_bandara">
  <thead>
    <tr>
      <th>No</th>
      <th>Bandara ID</th>
      <th>Name</th>
      <th>City</th>
      <th>ABBR</th>
      <th>Tools</th>
      
    </tr>

  </thead>
  <tbody">
  <?php
     $i = 1;
      foreach ($d_bandara as $data) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$data['bandaraid']."</td>";
  
        echo "<td>".$data['name']."</td>";
        echo "<td>".$data['city']."</td>";
        echo "<td>".$data['abbr']."</td>";
        
        ?>
        
        <td align='left'> 
          <a href="javascript:;" 
          data-id="<?php echo $data['bandaraid'] ?>"
          data-nama="<?php echo $data['name'] ?>"
          data-city="<?php echo $data['city'] ?>"
          data-abbr="<?php echo $data['abbr'] ?>"
          data-toggle="modal" data-target="#edit-data">
       <!--    <button data-toggle="modal" data-target="#edit" class="btn btn-orange"><i class="glyphicon glyphicon-pencil"></i></button> -->
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

  





