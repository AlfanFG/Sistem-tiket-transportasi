<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/navigation');
 ?>
            
                            
        
         <div class="row">
            <div class="col-sm-12">
                <form id="print">
                   
<button type="submit" id="print-pengembalian" class="btn btn-info" value="Print"> <span class="glyphicon glyphicon-print"></span> Print Data</button>
</form>
 <div class="panel minimal minimal-gray">
                    
                    <div class="panel-heading">
                        <div class="panel-title"><h3>Laporan Master</h3></div>
                        <div class="panel-options">
                            
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#profile-1" data-toggle="tab" id="user">User</a></li>
                                <li><a href="#profile-2" data-toggle="tab" id="cust">Custumer</a></li>
                                <li><a href="#profile-3" data-toggle="tab" id="stas">Stasiun</a></li>
                                <li><a href="#profile-4" data-toggle="tab" id="trans">Transportation</a></li>
                                <li><a href="#profile-5" data-toggle="tab" id="tipe">Tipe Transportation</a></li>
                                <li><a href="#profile-6" data-toggle="tab" id="rute">Rute</a></li>


                            </ul>
                        </div>
                    </div>
                    
                    <div class="panel-body">
                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile-1">
                                <div id="data-user">

      
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
    
  </tbody>
</table>
</div>
                            </div>
                            
                            <div class="tab-pane" id="profile-2">
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
        
        
<?php
        echo "</tr>";
        $i++;
      }
     ?>
    
  </tbody>
</table>
</div>
                            </div>

                            <div class="tab-pane" id="profile-3">
                                 <div id="data-stasiun">
            <table class="table-condensed table-bordered table-hover table-striped" id="d_stasiun">
  <thead>
    <tr>
       <th>No</th>
      <th>Stasiun Id</th>
      <th>Name</th>
      <th>City</th>
      <th>ABBR</th>
      
      
    </tr>

  </thead>
  <tbody">
  <?php
     $i = 1;
      foreach ($d_stasiun as $data) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$data['stasiunid']."</td>";
  
        echo "<td>".$data['name']."</td>";
        echo "<td>".$data['city']."</td>";
        echo "<td>".$data['abbr']."</td>";
        ?>
        
        
<?php
        echo "</tr>";
        $i++;
      }
     ?>
    
  </tbody>
</table>
</div>
                            </div>

                            <div class="tab-pane" id="profile-4">
                                 <div id="data-trans">
            <table class="table-condensed table-bordered table-hover table-striped" id="d_trans">
  <thead>
    <tr>
      <th>No</th>
      <th>ID Transportasi</th>
      <th>Kode</th>
      <th>Deskripsi</th>
      <th>Jumlah Kursi</th>
      <th>ID Tipe Transportasi</th>
      
      
    </tr>

  </thead>
  <tbody">
  <?php
     $i = 1;
      foreach ($d_trans as $data) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$data['transportationid']."</td>";
  
        echo "<td>".$data['code']."</td>";
        echo "<td>".$data['description']."</td>";
        echo "<td>".$data['seat_qty']."</td>";
        echo "<td>".$data['transportation_typeid']."</td>";
        ?>
        
        
<?php
        echo "</tr>";
        $i++;
      }
     ?>
    
  </tbody>
</table>
</div>
                            </div>

                            <div class="tab-pane" id="profile-5">
                                 <div id="data-transp_type">
            <table class="table-condensed table-bordered table-hover table-striped" id="d_transp_type">
  <thead>
    <tr>
      <th>No</th>
      <th>Tipe Transportasi ID</th>
      <th>Deskripsi</th>
      
      
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
        
        
<?php
        echo "</tr>";
        $i++;
      }
     ?>
    
  </tbody>
</table>
</div>
                            </div>

                            <div class="tab-pane" id="profile-6">
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
      
      
    </tr>

  </thead>
  <tbody">
  <?php
     $i = 1;
      foreach ($d_rute as $data) {
       echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$data['ruteid']."</td>";
  
        echo "<td>".$data['depart_at']."</td>";
        
        echo "<td>".$data['rute_from']."</td>";
        echo "<td>".$data['rute_to']."</td>";
        echo "<td>".$data['price']."</td>";
        echo "<td>".$data['transportationid']."</td>";
        ?>
        
        
<?php
        echo "</tr>";
        $i++;
      }
     ?>
    
  </tbody>
</table>
</div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
 

  
                


    <br>

                 <!-- <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="btn btn-default">Add Data</a> -->

                
            </div></div>
    
        
        <!-- lets do some work here... -->
        <!-- Footer -->
        <footer class="main">
            
            &copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
        
        </footer>
  

    
    
</div>




    <!-- Bottom scripts (common) -->
<?php 
    $this->load->view('parts/footer');
 ?>

 <script type="text/javascript">



    $(document).ready(function(){
        $('#d_user').DataTable(); 
        $('#d_customer').DataTable();
        $('#d_stasiun').DataTable();
        $('#d_trans').DataTable();
        $('#d_transp_type').DataTable();
        $('#d_rute').DataTable();

if($('#user').click()){
            $('#print').attr('action', '<?php echo site_url('Report/print_users') ?>');
        }

        $('#user').click(function(){
            $('#print').attr('action', '<?php echo site_url('Report/print_users') ?>');
        });

        $('#cust').click(function(){
            $('#print').attr('action', '<?php echo site_url('Report/print_customers') ?>');
        });

        $('#stas').click(function(){
            $('#print').attr('action', '<?php echo site_url('Report/print_stasiun') ?>');
        });

        $('#trans').click(function(){
            $('#print').attr('action', '<?php echo site_url('Report/print_transportations') ?>');
        });

        $('#tipe').click(function(){
            $('#print').attr('action', '<?php echo site_url('Report/print_tipe') ?>');
        });

        $('#rute').click(function(){
            $('#print').attr('action', '<?php echo site_url('Report/print_rute') ?>');
        });

       
$('#d_stasiun').on('click','.sweet-14',function(){
      var nopas = $(this).closest('tr').find('td:eq(1)').text();
    var url = '<?php echo base_url() ?>index.php/Stasiun/Delete/'+nopas;
  
    // $('form').attr('action');

    
        swal({
          title: "Apakah Anda Yakin?",
          text: "Anda Akan Mendelete Data "+nopas,
          type: "error",
          showCancelButton: true,
          confirmButtonClass: 'btn-danger delete',
          confirmButtonText: 'Delete'
        });

    $('.delete').click(function(){  
        $.get(url,function(){
            location.reload();
        });
    });

});

$('#edit-data').on('submit',function(event){
    event.preventDefault();
    var url =  $('#edit-d').attr('action');
    var data =  $('#edit-d').serializeArray();
     $.post(url,data,function(){

        $('#edit-data').modal('hide');
        swal({
          title: "Data Telah di edit",
          text: "Success",
          type: "success",
          confirmButtonClass: 'btn-success edit',
          confirmButtonText: 'OK'
        });
     
 
     $('.edit').click(function(){
             location.reload(); 
        })

     })
            
  
        
     
 });
       
    });

        $(document).ready(function(){
        $('#insert_form').on('submit',function(event){
            event.preventDefault();
            if($('#NamaPas').val() == ""){
                alert("Name is required");

            }else if($('#AlmPas').val() == ""){
                alert("Address is required");

            }else if($('#TelpPas').val() == ""){
                alert("Phone Number is required");

            }else if($('#TglLhr').val() == ""){
                alert("Birthdate is required");

            }else if($('#TglReg').val() == ""){
                alert("Restration date is required");

            }
            else{
                $.ajax({
                    
                    url:"<?php echo base_url() ?>index.php/Stasiun/insert",
                    method:"POST",
                    data:$('#insert_form').serialize(),
                    success:function(data)
                    {
                        $('#insert_form')[0].reset();
                         $('#modal-6').modal('hide');
                        
                       
                        swal({
          title: "Data Tersimpan",
          text: "Jika ada perubahan data silahkan klik tombol edit",
          type: "success",
          confirmButtonClass: 'btn-success ok',
          confirmButtonText: 'OK'

        });
       
     
       $('.ok').click(function(){
             location.reload(); 
        })  
                        
                    }
                })
            }
        });

    });


    $(document).ready(function(){
        $('#edit-data').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget)
            var modal = $(this)
            modal.find('#stasiun1').attr("value",div.data('id'));
            modal.find('#Nama1').attr("value",div.data('nama'));
            modal.find('#city1').attr("value",div.data('city'));
            modal.find('#abbr').val(div.data('abbr'));

        });
    });

     $('#abbr').blur(function(){
      var abbr = $('#abbr').val();
      var url = "<?php echo base_url()?>index.php/Stasiun/KodeStasiun/"+abbr;
      $.get(url,function(e){
        $('#stasiun').val(e);
        $('#stasiun1').val(e);
    });

  });
      


 </script>

