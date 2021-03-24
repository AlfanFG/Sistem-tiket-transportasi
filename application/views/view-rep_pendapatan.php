<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/navigation');
 ?>
            
                                    

        <div class="row">
            <div class="col-md-12">
                
                <div class="panel panel-primary" data-collapsed="0">
                
                    <div class="panel-heading">
                        <div class="panel-title">
                            Tanggal Laporan
                        </div>
                        
                        <div class="panel-options">
                            
                        </div>
                    </div>
                    
                    <div class="panel-body">
                        
                        <form role="form" class="form-horizontal form-groups-bordered">
            
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tanggal dari</label>
                                
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input type="text" id="tgldari" name="tgldari" class="form-control datepicker" data-format="yyyy-mm-dd">
                                        
                                        <div class="input-group-addon">
                                            <a href="#"><i class="entypo-calendar"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tanggal ke</label>
                                
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input type="text" id="tglke" name="tglke" class="form-control datepicker" data-format="yyyy-mm-dd">
                                        
                                        <div class="input-group-addon">
                                            <a href="#"><i class="entypo-calendar"></i></a>
                                        </div>
                                    </div>

                                </div>
                                <button type="button" id="search" class="btn btn-success">Search</button>
                            </div>
                            
                        </form>
                        
                    </div>
                
                </div>
            
            </div>
        </div>
        <hr style="border-top: 3px double #8c8b8b;">
        <br>

        <div class="row">
        <div class="col-sm-12">
                   
       <form role="form" method="post" action="<?php echo site_url('Report/print_pendapatan') ?>" class="form-horizontal form-groups-bordered">
              <input type="hidden" name="awal" id="awal">
              <input type="hidden" name="akhir" id="akhir">
    <div id="data-pendapatan">
         <button type="submit" id="print-pengembalian" class="btn btn-info"> <span class="glyphicon glyphicon-print"></span> Print Pendapatan</button>
         </form> 
            <table class="table-condensed table-bordered table-hover table-striped" id="d_pendapatan">
  <thead>
    <tr>
      <th>No</th>
      <th>Reservation Date</th>
      <th>Jumlah Transaksi</th>
      <th>Price</th> 
    </tr>

  </thead>
  <tbody id="isi">
  
    
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
 <footer class="main">
            
            &copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
        
        </footer>
                
            </div>
    
        
        <!-- lets do some work here... -->
        <!-- Footer -->
       
  

    
    
</div>




    <!-- Bottom scripts (common) -->
<?php 
    $this->load->view('parts/footer');
 ?>

 <script type="text/javascript">
$(document).ready(function(){
   
$('#d_pendapatan').DataTable();
   $('#data-pendapatan').hide();
   $('#search').click(function(){
     $('#awal').val($('#tgldari').val());
    $('#akhir').val($('#tglke').val());
    var tgldari = $('#tgldari').val();
    var tglke = $('#tglke').val();

    $.ajax({
                    
                    url:"<?php echo base_url() ?>index.php/Report/dapat",
                    type:"POST",
                    async:false,
                    dataType:'json',
                    data: {tgldari:tgldari, tglke:tglke},
                    success:function(data)
                    {
                        var i;
                        var a=1;
                        var html = "";

                        for(i=0; i<data.length; i++){
                            html+= '<tr>'+
                                   '<td>'+a+'</td>'+
                                   '<td>'+data[i].reservation_date+'</td>'+
                                   '<td>'+data[i].jumlah_transaksi+'</td>'+ 
                                   '<td>'+data[i].price+'</td>'+ 
                                   '</tr>';
                                   a++;
                        }
                        $('#isi').html(html);
                        $('#data-pendapatan').show();

                    }
                });
   });
});

 </script>

