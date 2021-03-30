<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/navigation');
 ?>
        <!--     <style type="text/css" media="screen"></style>

<style type="text/css" media="print">
    body {
    page-break-before: avoid;
    width:100%;
    height:100%;
    -webkit-transform: rotate(-90deg) scale(.68,.68); 
    -moz-transform:rotate(-90deg) scale(.58,.58);
    zoom: 200%    }

</style> -->

        
         <div class="row">
            <div class="col-sm-12">
               
<!--  <button class="btn btn-green" name="add" id="add" data-toggle="modal" data-target="#modal-6">add data</button> -->
                    <div class="row" style="margin-left: 0px; margin-top: 160px;">
            <div class="col-md-12">
             <div class="PrintArea">
                <div class="panel panel-primary" data-collapsed="0" style="border-color: #21a9e1;" >
                    
                    <!-- panel head -->
                   <!--  <div class="panel-heading">
                        <div class="panel-title">Tiket Kereta Api</div>
                        
                        <div class="panel-options">
                           
                        </div>
                    </div> -->
                    
                    <!-- panel body -->
                    <div class="panel-body">
                       
                <div class="fill" style="margin-top: 100px; margin-left: 40px;">
                        <font size="5px" color="black">
                       <?php 
                            print_r($pesan['desc']);    
                        ?>
                        </font>
                       <span style="margin-left: 50px; font-size: 15px;"><b><?php echo date('D m y') ?></b></span>
                       <label style="margin-left: 375px; position: absolute;">Booking Code</label> 
                       <label style="margin-left: 355px; position: absolute; font-family: cursive; font-size: 20px; color: #f58736"><br><?php print_r($pesan['reservation_code']); ?></label>
                        <br>

                        <br>
                         <style>
.vl {
    border-left: 2px solid #dadada;
    height: 50px;
    margin-bottom: 5px;

}

</style>
<label style="margin-left: 177px; position: absolute;"><?php print_r($pesan['depart']); ?></label>
<label style="margin-left: 177px; margin-top: 40px; position: absolute;"><?php print_r($pesan['depart']); ?></label>
<div style="margin-left: 212px;">
    
 <div class="fa fa-circle-o" style="margin-left: 20.5px; position: absolute;"></div>
<i class="fa fa-circle" style="margin-left: 20.5px; margin-top: 50px; position: absolute;"></i>
<div style="margin-left: 37px; position: absolute;"><label>
    <?php 
        print_r($pesan['rute_f']);
     ?>
     </label></div>

<div style="margin-left: 37px; position: absolute; margin-top: 40px;"><label>
    <?php 
        print_r($pesan['rute_t']);
     ?>
     </label></div>     
 <div class="vl" style="margin-left: 25px; margin-top: 10px; display:  inline-block;"></div>

 
</div>

</div>
<div style="margin-right: 290px;"><hr style="width: 980px; border-top: 3px double #8c8b8b;"></div>     
<!--  <label>No.</label>  <label style="margin-left: 180px;">Nama</label>   -->  
<table class="table responsive">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                          
                        </tr>
                    </thead>
                    
                    <tbody>
                         <?php 
                         $i = 1;
        foreach($pesan['nama'] as $fw){

                      echo"<tr>";
                      echo "<td>".$i."</td>";
                      echo "<td>".$fw."</td>";
                          
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
            <form method="post" id="insert_payment" action="<?php echo site_url('Reservation/') ?>"></form>

            <input type="hidden" name="reservation_code" value="<?php print_r($pesan['reservation_code']) ?>">
            <input type="hidden" name="reservation_code" value="<?php print_r($pesan['reservation_date']) ?>">
            <input type="hidden" name="rute_id" value="<?php print_r($pesan['ruid']) ?>">
            <input type="hidden" name="price" value="<?php print_r($pesan['price']) ?>">
            <?php for($i = 0; $i< $pesan['dwsa']; $i++) {?>
            <input type="hidden" name="nama[]" value="<?php print_r($pesan['nama'][$i]) ?>">
           
            <input type="hidden" name="alamat[]" value="<?php print_r($pesan['alamat'][$i]) ?>">

            <input type="hidden" name="nohp[]" value="<?php print_r($pesan['nohp'][$i]) ?>">

            <input type="hidden" name="gender[]" value="<?php print_r($pesan['jeniskelamin'][$i]) ?>">
             <?php } ?>
<button type="button" id="pay" class="btn btn-success" style="margin-left: 15px;">Cetak</button>
      </form>
                 <div class="modal fade" id="modal-6">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Input Data Customer</h4>
                </div>
                
                <div class="modal-body">
                <form method="POST" id="insert_form">
                    <div class="row">
                    <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Customer ID</label>
                                
                             <input type="text" class="form-control" id="cust" name="cust" value="<?php echo $kode ?>" readonly>
                            </div>  
                        
                        </div>
                    </div>
                    <div class="row">
                        
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Nama</label>
                                
                                <input type="text" class="form-control" id="Nama" autofocus="autofocus" name=Nama placeholder="Nama">
                            </div>  
                        
                        </div>
                    
                
                    
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">Alamat</label>
                                
                                <input type="text" class="form-control" id="address" name=address placeholder="Alamat">
                            </div>  
                            
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-4" class="control-label">No Telp.</label>
                                
                                <input type="number" class="form-control" id="phone" name=phone placeholder="No Telp.">
                            </div>  
                            
                        </div>
                        
                        <div class="col-md-4">
                       <div class="form-group">
                                <label class="col-sm-3 control-label">Gender</label>
                                
                               
                                    <select class="form-control" name="gender" id="gender">
                                        <option>-------------Select-------------</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                        
                                    </select>
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
 <script src="<?php echo base_url() ?>assets/js/jquery.PrintArea.js"></script>

 <script type="text/javascript">

 



    $(document).ready(function(){
        $('#d_customer').DataTable(); 
$('#pay').click(function(){
  
   var mode = 'iframe';
   var close = mode == "popup";
   var popHt = popHt == 500;
   var popY = popY == 1000;
   var options = {mode : mode, popClose : close, popHt : popHt, popY : popY};
     $("div.PrintArea").printArea( options );
     
});

    
$('#d_customer').on('click','.sweet-14',function(){
      var nopas = $(this).closest('tr').find('td:eq(1)').text();
    var url = '<?php echo base_url() ?>index.php/Customer/Delete/'+nopas;
  
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
                    
                    url:"<?php echo base_url() ?>index.php/Customer/insert",
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
            modal.find('#cust').attr("value",div.data('id'));
            modal.find('#Nama').attr("value",div.data('nama'));
            modal.find('#address').attr("value",div.data('address'));
            modal.find('#phone').attr("value",div.data('phone'));
            modal.find('#gender').val(div.data('gender'));

        });
    });
      


 </script>

