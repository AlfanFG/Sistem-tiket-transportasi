<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/navigation');
 ?>
        
         <div class="row">
            <div class="col-sm-12">
     <form id="print" action="<?php echo site_url('Report/print_jadwal_p') ?>">
                   
        <button type="submit" id="print-pengembalian" class="btn btn-info"> <span class="glyphicon glyphicon-print"></span> Print Jadwal</button>
    </form>           
    <div id="data-jadwal">
            <table class="table-condensed table-bordered table-hover table-striped" id="d_jadwal">
  <thead>
    <tr>
      <th>No</th>
      <th>Rute From</th>
      <th>Name</th>
      <th>Rute To</th>
      <th>Time</th>
      <th>Price</th>
      <th>Seat Qty</th>
      <th>Seat Reserved</th>
      
    </tr>

  </thead>
  <tbody">
  <?php
     $i = 1;
     $a=0;
      foreach ($d_jadwal_p as $data) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$singkatanfrom[$a]."</td>";
  
        echo "<td>".$data['description']."</td>";
        echo "<td>".$singkatanto[$a]."</td>";
        echo "<td>".$data['depart_at'].' - '.$data['time']."</td>";
        echo "<td>".$data['price']."</td>";
        echo "<td>".$data['seat_qty']."</td>";
        echo "<td>".$data['Seat_Reserved']."</td>";
        
        
        
        
        echo "</tr>";
        $i++;
        $a++;
      }
     ?>
    
  </tbody>
</table>
</div>

  






            </div>
        </div>
    


    <!-- Edit -->

     
       

 
<!-- Rute type -->


    <!-- <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Warning</h4>
                
            </div>
            <div class="modal-body">
                <h4>Apakah anda Yakin?</h4>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok" id="btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div> -->



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

$('#tujuan').on('change',function(){
    if($('#dari').val() == $('#tujuan').val()){
        alert('Rute Keberangkatan & Tujuan tidak Boleh sama');
        $('#tujuan').val('');
       }
})

    $(document).ready(function(){
        $('#d_jadwal').DataTable(); 

    $('#tujuan').on('change',function(){
    if($('#dari').val() == $('#tujuan').val()){
        alert('Rute Keberangkatan & Tujuan tidak Boleh sama');
        $('#tujuan').val('');
       }
})
       
$('#d_rute').on('click','.sweet-14',function(){
    
    
    var nopas = $(this).closest('tr').find('td:eq(1)').text();
    var url = '<?php echo base_url() ?>index.php/Rute/Delete/'+nopas;
  
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

 $('#btn-cls').click(function(){
    $('#t_transp').modal('toggle');
  
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

       

  $('#d_transp').on('click','.pilih',function(){
      var kode = $(this).closest('tr').find('td:eq(1)').text();  
      var desc = $(this).closest('tr').find('td:eq(2)').text();

      $('#transp').val(kode);
      $('#trans').val(kode);
      $('#tipe').val(kode);
      

      $('#t_transp').modal('toggle');
  });

   // document.querySelector('.sweet-12').onclick = function(){
   //      swal({
   //        title: "Are you sure?",
   //        text: "You will not be able to recover this imaginary file!",
   //        type: "success",
   //        showCancelButton: true,
   //        confirmButtonClass: 'btn-success ok',
   //        confirmButtonText: 'Success!'

   //      });
       
   //    };
       
    });
       
        $(document).ready(function(){
        $('#insert_form').on('submit',function(event){
            event.preventDefault();

            if($('#trans').val() == ""){
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
            if($('#dari').val() == $('#tujuan').val()){
        alert('Rute Keberangkatan & Tujuan tidak Boleh sama');
        
       }else if($('#dari').val() != $('#tujuan').val()){
            
                $.ajax({
                    
                    url:"<?php echo base_url() ?>index.php/Rute/insert",
                    method:"POST",
                    data:$('#insert_form').serialize(),
                    success:function(data)
                    {
                        $('#insert_form')[0].reset();
                         $('#modal-6').modal('hide');
                        
       
        swal({
          title: "Data Tersimpan",
          text: "Jika ada perubahan data silahkan ubah di tombol edit",
          type: "success",
          showCancelButton: true,
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
            modal.find('#ruteid2').attr("value",div.data('id'));
            modal.find('#transp').attr("value",div.data('trans'));
            modal.find('#depart_at2').attr("value",div.data('depart_at'));
            modal.find('#rute_from2').attr("value",div.data('from'));
            modal.find('#tujuan2').attr("value",div.data('to'));
            modal.find('#price2').val(div.data('price'));

        });
    });
      


 </script>

