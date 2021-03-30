<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/navigation');

$this->session->flashdata('item');

 ?>

                                    
        
         <div class="row">
            <div class="col-sm-12">
 <button class="btn btn-green" name="add" id="add" data-toggle="modal" data-target="#modal-6">add data</button>
                <?php 
                    $this->load->view('data/user');
                 ?>
       
                 <div class="modal fade" id="modal-6">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Input Data User</h4>
                </div>
                
                <div class="modal-body">
                <form method="POST" id="insert_form">
                    <div class="row">
                        
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Username</label>
                                
                                <input type="text" class="form-control" id="username" autofocus="autofocus" name=username placeholder="Username">
                            </div>  
                        
                        </div>
                    
                
                    
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">Password</label>
                                
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                            </div>  
                            
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-4" class="control-label">Full Name</label>
                                
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                            </div>  
                            
                        </div>
                        
                        <div class="col-md-4">
                       <div class="form-group">
                                <label class="col-sm-3 control-label">Level</label>
                                
                               
                                    <select class="form-control" name="level">
                                        <option>---------Select-------------</option>
                                        <option value="admin">Admin</option>
                                        <option value="operator">Operator</option>
                                        
                                    </select>
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
                
                <form method="POST" id="edit-d" action="<?php echo base_url('index.php/User/edit') ?>" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                
                    <div class="row">
                        
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Username</label>
                                <input type="hidden" class="form-control" id="id" name="id">
                                <input type="text" class="form-control" id="user" autofocus="autofocus" name=username placeholder="Username">
                            </div>  
                        
                        </div>
                   
                
                   
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">Password</label>
                                
                                <input type="password" class="form-control" id="sandi" name="pass" placeholder="Password">
                            </div>  
                            
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-4" class="control-label">Full Name</label>
                                
                                <input type="text" class="form-control" id="lnama" name=fullname placeholder="Full Name">
                            </div>  
                            
                        </div>
                        
                        <div class="col-md-4">
                       <div class="form-group">
                                <label class="col-sm-3 control-label">Level</label>
                                
                               
                                    <select class="form-control" name="level" id="level2">
                                        <option>-------------Select-------------</option>
                                        <option value="admin">Admin</option>
                                        <option value="operator">Operator</option>
                                        
                                    </select>
                                </div>
                            </div>
                        
                      
                    </div>
                
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save Changes</button>
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
        $('#d_user').DataTable(); 
        
       
$('#d_user').on('click','.sweet-14',function(){
   
    
    var nopas = $(this).closest('tr').find('td:eq(1)').text();
    var url = '<?php echo base_url() ?>index.php/User/Delete/'+nopas;
  
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
                    
                    url:"<?php echo base_url() ?>index.php/User/insert",
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
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#user').attr("value",div.data('user'));
            modal.find('#sandi').attr("value",div.data('pass'));
            modal.find('#lnama').attr("value",div.data('full'));
            modal.find('#level2').val(div.data('level'));

        });
    });
      


 </script>

