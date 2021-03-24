<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/navigation');
 ?>
            
                                    

        
         <div class="row">
            <div class="col-sm-12">
 <button class="btn btn-green" name="add" id="add" data-toggle="modal" data-target="#modal-6">add data</button>
                <?php 
                    $this->load->view('data/rute');
                 ?>
        <!-- <button class="btn btn-lg btn-success sweet-12" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Success']);">Success</button> -->
                 <div class="modal fade" id="modal-6">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Input Data Rute</h4>
                </div>
                
                <div class="modal-body">
                <form method="POST" id="insert_form">
                    <div class="row">
                    <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">ID Rute</label>
                                
                             <input type="text" class="form-control" id="ruteid" name="ruteid" value="<?php echo $kode ?>" readonly>
                            </div>  
                        
                        </div>

                         <div class="col-md-4">
                     <div class="form-group">
                                <label for="field-4" class="control-label">ID Transportasi</label>
                                
                                <input type="text" readonly="true" class="form-control" id="trans" name="tid" placeholder="ID Transportasi">
                                 
                            </div>  
                            </div>

                            <div class="control-label" style="margin:22px 0px 0px 0px;">
                            <a class="btn btn-primary" id="pilih" data-toggle="modal" data-target="#t_transp">Pilih</a>
                        </div>
                    </div>

                    <div class="row">
                        
                        
                    
                
                    
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">Berangkat Pada</label>
                                
                                <input type="time" class="form-control" id="depart_at" name="depart_at" placeholder="Berangkat Pada"></div>  
                            
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                    <div class="form-group">
                    <label for="field-4" class="control-label">Dari</label>
                           <select name="rute_from" id="dari" class="form-control" style="font-size: 13px">
<?php foreach($stasiundata->result() as $stasiun){ ?>
    <option value="<?php echo $stasiun->stasiunid ?>"><?php echo $stasiun->name; echo ' ('.$stasiun->abbr; echo ') '.$stasiun->city; ?></option>
<?php } ?>
</select>

                            </div>  
                        </div>

                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-4" class="control-label">Tujuan</label>
                                
                               <select name="rute_to" id="tujuan" class="form-control" style="font-size: 13px">
<?php foreach($stasiundata->result() as $stasiun){ ?>
    <option value="<?php echo $stasiun->stasiunid ?>"><?php echo $stasiun->name; echo ' ('.$stasiun->abbr; echo ') '.$stasiun->city; ?></option>
<?php } ?>
</select>
                            </div>  
                            
                        </div>
                        
                       
                    

                     <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-4" class="control-label">Harga</label>
                                
                                <input type="number" class="form-control" id="price" name="price" placeholder="Harga">
                            </div>  
                            
                        </div>
                
                    
                </div>
                    
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" id="insert" class="btn btn-success sweet-12" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Success']);" value="Save Changes">
                </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit -->

     <div aria-hidden="true" class="modal fade" id="edit-data" role="dialog" tabindex="-1"  >
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Data User</h4>
                </div>
                
                <form method="POST" id="edit-d" action="<?php echo base_url('index.php/Rute/edit') ?>" enctype="multipart/form-data" role="form">
                <div class="modal-body">

                    <div class="row">
                    <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">ID Rute</label>
                                
                             <input type="text" class="form-control" id="ruteid2" name="ruteid" readonly>
                            </div>  
                        
                        </div>


                        <div class="col-md-4">
                       
                            <div class="form-group">
                                <label for="field-4" class="control-label">ID Transportasi</label>
                                
                                <input type="text" readonly="true" class="form-control" id="transp" name="tid" placeholder="ID Transportasi">
                            </div>  
                            </div>

                             <div class="control-label" style="margin:22px 0px 0px 0px;">
                            <a class="btn btn-primary" id="pilih" data-toggle="modal" data-target="#t_transp">Pilih</a>
                        </div>

                    </div>
                
                    <div class="row">
                        
                                           
                
                   
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">Berangkat Jam</label>
                                
                                <input type="time" class="form-control" name="depart_at" id="depart_at2" placeholder="Berangkat Jam">
                            </div>  
                            
                        </div>
                    </div>
                
                   <div class="row">

                    <div class="col-md-6">
                    <div class="form-group">
                                <label for="field-4" class="control-label">Dari</label>
                                
                                <input type="text" class="form-control" id="rute_from2" name=rute_from placeholder="Dari">
                            </div>  
                        </div>

                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-4" class="control-label">Tujuan</label>
                                
                                <input type="text" class="form-control" id="tujuan2" name=rute_to placeholder="Tujuan">
                            </div>  
                            
                        </div>
                        
                       
                    

                     <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-4" class="control-label">Harga</label>
                                
                                <input type="number" class="form-control" id="price2" name=price placeholder="Harga">
                            </div>  
                            
                        </div>
                
                    
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success sweet-12" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Success']);">Save Changes</button>
                </form>
                </div>
            </div>
        </div>
    </div>

 <style type="text/css">
        #t_transp {

    z-index: 100000;

        }

         #modal-6 {

    z-index: 100000;

        }

         #edit-data {

    z-index: 100000;

        }
</style>
<!-- Rute type -->

 <div class="modal fade" id="t_transp" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Input Data Jadwal</h4>
                </div>
                
                <div class="modal-body">

  
            <table id="d_transp">
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
  <tbody>
  <?php
     $i = 1;
      foreach ($d_transp as $data) {
         echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$data['transportationid']."</td>";
  
        echo "<td>".$data['code']."</td>";
        echo "<td>".$data['description']."</td>";
        echo "<td>".$data['seat_qty']."</td>";
        echo "<td>".$data['transportation_typeid']."</td>";
        
        
        
        echo "<td align='left'><button type='button' class='pilih btn btn-primary'>Pilih</button>"; 

        echo "</td>";

        echo "</tr>";
        $i++;
      }
     ?>
    
  </tbody>
</table>

</div>
 <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="btn-cls">Close</button>        
                </div>

</div>
</div>
</div>

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
        $('#d_rute').DataTable(); 
        $('#d_transp').DataTable(); 


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
      var tipe = $(this).closest('tr').find('td:eq(5)').text();
//   $('#tp').val(tipe);
// if($('#tp').val('T0002')){
//  $('#dari').html($('#tujuan1').html());
//   alert('few');

// }
// else{
//   alert('fwe');

// }
      
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
                alert("Transportationid is required");

            }else if($('#dari').val() == ""){
                alert("Rute From is required");

            }else if($('#tujuan').val() == ""){
                alert("Rute To is required");

            }else if($('#price').val() == ""){
                alert("Price is required");

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

