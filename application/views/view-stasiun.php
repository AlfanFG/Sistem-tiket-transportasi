<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/navigation');
 ?>
            
                                    

        
         <div class="row">
            <div class="col-sm-12">
 <button class="btn btn-green" name="add" id="add" data-toggle="modal" data-target="#modal-6">add data</button>
                <?php 
                    $this->load->view('data/stasiun');
                 ?>
       
                 <div class="modal fade" id="modal-6">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Input Data Stasiun</h4>
                </div>
                
                <div class="modal-body">
                <form method="POST" id="insert_form">
                    <div class="row">
                    <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Stasiun ID</label>
                                
                             <input type="text" class="form-control" id="stasiun" name="stasiun" value="" readonly>
                            </div>  
                        
                        </div>

                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Nama</label>
                                
                                <input type="text" class="form-control" id="Nama" autofocus="autofocus" name=Nama placeholder="Nama">
                            </div>  
                        
                        </div>
                    </div>
                    <div class="row">
                       
                    
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">City</label>
                                
                                <input type="text" class="form-control" id="city" name=city placeholder="City">
                            </div>  
                            
                        </div>
                    
                
                  
                        <div class="col-md-6">
                        
                       <div class="form-group">
                                <label class="col-sm-3 control-label">ABBR</label>
                                
                               
                                   <input type="text" name="abbr" id="abbr" class="form-control">
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


    <!-- Edit -->

     <div aria-hidden="true" class="modal fade" id="edit-data" role="dialog" tabindex="-1"  >
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Data Stasiun</h4>
                </div>
                
                <form method="POST" id="edit-d" action="<?php echo base_url('index.php/Stasiun/edit') ?>" enctype="multipart/form-data" role="form">
                <div class="modal-body">

                    <div class="row">
                    <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Stasiun ID</label>
                                
                             <input type="text" class="form-control" id="stasiun1" name="stasiun1" value="" readonly>
                            </div>  
                        
                        </div>
                    
                
                   
                        
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Nama</label>
                                <input type="hidden" class="form-control" id="id" name="id">
                                <input type="text" class="form-control" id="Nama1" autofocus="autofocus" name=Nama1 placeholder="Nama">
                            </div>  
                        
                        </div>
                   
                </div>
                   <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">City</label>
                                
                                <input type="text" class="form-control" id="city1" name=city1 placeholder="City">
                            </div>  
                            
                        </div>
                    
                
                    
                         <div class="col-md-6">
                        
                       <div class="form-group">
                                <label class="col-sm-3 control-label">ABBR</label>
                                
                               
                                   <input type="text" name="abbr" id="abbr" class="form-control">
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
        $('#d_stasiun').DataTable(); 

       
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

