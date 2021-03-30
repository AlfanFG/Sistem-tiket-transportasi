

  
      <!-- Panel Basic -->
      <center><h2>Laporan Rute</h2></center>
       

      <h4>fwehfw</h4>
            <table class="table-condensed table-bordered table-hover table-striped" id="d_user">

  <thead>
    <tr>
      <th>No</th>
      <th>User Id</th>
      <th>Username</th>
      <th>Password</th>
      <th>fullname</th>
      <th>level</th>
     
      
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
        
        
<?php
        echo "</tr>";
        $i++;
      }
     ?>
    
  
</table>

   
  <!-- Core  -->
  
  
 <!--  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });
    })(document, window, jQuery);
    function cetak(){
      window.print();
    }

  </script> -->


