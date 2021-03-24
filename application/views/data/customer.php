
    <div id="data-customer">
            <table class="table-condensed table-bordered table-hover table-striped" id="d_customer">
  <thead>
    <tr>
      <th>No</th>
      <th>Customer Id</th>
      <th>Name</th>
      <th>Adress</th>
      <th>Phone</th>
      <th>Gender</th>
      <th>Tools</th>
      
    </tr>

  </thead>
  <tbody">
  <?php
     $i = 1;
      foreach ($d_customer as $data) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$data['customerid']."</td>";
  
        echo "<td>".$data['name']."</td>";
        echo "<td>".$data['address']."</td>";
        echo "<td>".$data['phone']."</td>";
        echo "<td>".$data['gender']."</td>";
        ?>
        
        <td align='left'> 
          <a href="javascript:;" 
          data-id="<?php echo $data['customerid'] ?>"
          data-nama="<?php echo $data['name'] ?>"
          data-address="<?php echo $data['address'] ?>"
          data-phone="<?php echo $data['phone'] ?>"
          data-gender="<?php echo $data['gender'] ?>"
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

  





