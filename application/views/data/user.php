
    <div id="data-user">

      <?php $this->session->flashdata('notif') ?>
            <table class="table-condensed table-bordered table-hover table-striped" id="d_user">
  <thead>
    <tr>
      <th>No</th>
      <th>User Id</th>
      <th>Username</th>
      <th>Password</th>
      <th>fullname</th>
      <th>level</th>
      <th>Tools</th>
      
    </tr>

  </thead>
  <tbody">
  <?php
     $i = 1;
      foreach ($d_user as $data) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$data['userid']."</td>";
  
        echo "<td>".$data['username']."</td>";
        echo "<td>".$data['password']."</td>";
        echo "<td>".$data['fullname']."</td>";
        echo "<td>".$data['level']."</td>";
        ?>
        
        <td align='left'> 
          <a href="javascript:;"
          data-id="<?php echo $data['userid'] ?>" 
          data-user="<?php echo $data['username'] ?>"
          data-pass="<?php echo $data['password'] ?>"
          data-full="<?php echo $data['fullname'] ?>"
          data-level="<?php echo $data['level'] ?>"
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

  





