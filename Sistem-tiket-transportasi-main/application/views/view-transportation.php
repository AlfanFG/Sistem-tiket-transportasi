<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/navigation');
 ?>
            
                                    
        
         <div class="row">
            <div class="col-sm-12">
 <button class="btn btn-green" name="add" id="add" data-toggle="modal" data-target="#modal-6">add data</button>
                <?php 
                    $this->load->view('data/transportation');
                 ?>
       
                 <div class="modal fade" id="modal-6">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Input Data Transportasi</h4>
                </div>
                
                <div class="modal-body">
                <form method="POST" id="insert_form">
                    <div class="row">
                    <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">ID Transportasi</label>
                                
                             <input type="text" class="form-control" id="trans" name="tid" value="<?php echo $kode ?>" readonly>
                            </div>  
                        
                        </div>

                         <div class="col-md-4">
                     <div class="form-group">
                                <label for="field-4" class="control-label">ID Tipe Transportasi</label>
                                
                                <input type="text" readonly="true" class="form-control" id="tipe" name=ttid placeholder="ID Tipe Transportasi">
                            </div>  
                            </div>

                            <div class="control-label" style="margin:22px 0px 0px 0px;">
                            <a class="btn btn-primary" id="pilih" data-toggle="modal" data-target="#t_transp_type">Pilih</a>
                        </div>
                    </div>

                    <div class="row">
                        
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Kode</label>
                                
                                <input type="text" class="form-control" id="kode" autofocus="autofocus" name=code placeholder="Kode">
                            </div>  
                        
                        </div>
                    
                
                    
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">Deskripsi</label>
                                
                                <input type="text" class="form-control" id="desc" name=desc placeholder="Deskripsi">
                            </div>  
                            
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-4" class="control-label">Jumlah Tempat Duduk</label>
                                
                                <input type="number" class="form-control" id="seat1" name=seat placeholder="Jumlah Tempat Duduk">
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
                
                <form method="POST" id="edit-d" action="<?php echo base_url('index.php/Transportation/edit') ?>" enctype="multipart/form-data" role="form">
                <div class="modal-body">

                    <div class="row">
                    <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">ID Transportasi</label>
                                
                             <input type="text" class="form-control" id="transp" name="tid" readonly>
                            </div>  
                        
                        </div>


                        <div class="col-md-4">
                       
                            <div class="form-group">
                                <label for="field-4" class="control-label">ID Tipe Transportasi</label>
                                
                                <input type="text" readonly="true" class="form-control" id="type" name=ttid placeholder="ID Tipe Transportasi">
                            </div>  
                            </div>

                             <div class="control-label" style="margin:22px 0px 0px 0px;">
                            <a class="btn btn-primary" id="pilih" data-toggle="modal" data-target="#t_transp_type">Pilih</a>
                        </div>

                    </div>
                
                    <div class="row">
                        
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Kode</label>
                                <input type="hidden" class="form-control" id="id" name="id">
                                <input type="text" class="form-control" id="code" autofocus="autofocus" name=code placeholder="Kode">
                            </div>  
                        
                        </div>
                   
                
                   
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">Deskripsi</label>
                                
                                <input type="text" class="form-control" id="Desc" name=desc placeholder="Deskripsi">
                            </div>  
                            
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-4" class="control-label">Jumlah Tempat Duduk</label>
                                
                                <input type="number" class="form-control" id="seat2" name=seat placeholder="Jumlah Tempat Duduk">
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
        #t_transp_type {

    z-index: 100000;

        }

         #modal-6 {

    z-index: 100000;

        }

         #edit-data {

    z-index: 100000;

        }
</style>
<!-- transportation type -->

 <div class="modal fade" id="t_transp_type" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Input Data Jadwal</h4>
                </div>
                
                <div class="modal-body">

  
            <table id="d_transp_type">
  <thead>
    <tr>
       <th>No</th>
      <th>Tipe Transportasi ID</th>
      <th>Deskripsi</th>
      <th>Tools</th>
      
    </tr>

  </thead>
  <tbody>
  <?php
     $i = 1;
      foreach ($d_transp_type as $data) {
         echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td class='kode'>".$data['transportation_typeid']."</td>";
  
        echo "<td>".$data['description']."</td>";
        
        
        
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

    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        $('#d_transportation').DataTable(); 
        $('#d_transp_type').DataTable(); 

       
$('#d_transportation').on('click','.sweet-14',function(){
    
    var nopas = $(this).closest('tr').find('td:eq(1)').text();
    var url = '<?php echo base_url() ?>index.php/Transportation/Delete/'+nopas;
  
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
    $('#t_transp_type').modal('toggle');
  
    });

  $('#d_transp_type').on('click','.pilih',function(){
      var kode = $(this).closest('tr').find('td:eq(1)').text();  
      var desc = $(this).closest('tr').find('td:eq(2)').text();

      $('#type').val(kode);
      $('#tipe').val(kode);
      $('#Desc').val(desc);  
      $('#desc').val(desc);

      $('#t_transp_type').modal('toggle');
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
            if($('#tipe').val() == ""){
                alert("Type is required");

            }else if($('#kode').val() == ""){
                alert("code is required");

            }else if($('#desc').val() == ""){
                alert("Phone Number is required");

            }else if($('#seat1').val() == ""){
                alert("Birthdate is required");

            }else if($('#TglReg').val() == ""){
                alert("Restration date is required");

            }
            else{
                $.ajax({
                    
                    url:"<?php echo base_url() ?>index.php/Transportation/insert",
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
            modal.find('#transp').attr("value",div.data('id'));
            modal.find('#code').attr("value",div.data('code'));
            modal.find('#Desc').attr("value",div.data('desc'));
            modal.find('#seat2').attr("value",div.data('seat'));
            modal.find('#type').val(div.data('trans'));

        });
    });
      


 </script>

