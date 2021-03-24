 <?php 
    $seat = [];
    if(sizeof($result)){
       foreach($result as $sr => $seat_result_red){
        $seat[] = intval($seat_result_red['seat_code']);
    } 
    }

?>  
<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/navigation');

$this->session->flashdata('item');

 ?>


         <div class="row">
            
                <form method="post" class="insert_pelanggan" action="<?php echo site_url('Reservation/simpan') ?>">
            <div class="col-sm-6" id="seatdesk">
                <?php 
                for($i=1; $i<=$dewasas; $i++){



             ?>
                <div class="panel panel-success" data-collapsed="0" style="height: 303px;">
                    
                    <!-- panel head -->
                    <div class="panel-heading">
                        <div class="panel-title">Input Pemesan</div>
                        
                        <div class="panel-options">
                            
                        </div>
                    </div>
                    
                    <!-- panel body -->
                    <div class="panel-body" style="margin-top: 50px;">

                        
                    
             <div class="row">
                 <div class="col-sm-6">
                    <label>Nama Customer</label> 
                    <input type="hidden" name="kode_pesan[]" id="kode_pesan" value="<?php echo $idreservation ?>">
<input type="text" class="form-control validate[required]" id="nama<?php echo $i; ?>" name="nama[]"  placeholder="Nama Pelanggan" data-prompt-position="topLeft">
                    <!-- <input type="text" class="form-control input-md" name="nama[<?php echo $i ?>]" id="nama">  -->
                </div>
                <div class="col-sm-6">
                    <label>Alamat</label> <br>
                    <input type="text" class="form-control validate[required]" name="alamat[]" id="alamat<?php echo $i; ?>" placeholder="Alamat Pelanggan" data-prompt-position="topLeft"> 
                </div>
                    </div>
<br>
            <div class="row">
                <div class="col-sm-6">
                    <label>No Telp.</label> <br>
                    <input type="text" class="form-control validate[required]" name="nohp[]" id="nohp<?php echo $i; ?>" placeholder="Phone" data-prompt-position="topLeft" onkeypress="return hanyaAngka(event)">
                    <!-- <input type="text" name="seat_code[]" id="seat_code<?php echo $i ?>"> -->
                </div>
                <div class="col-sm-5">
                    <label>Gender</label> <br>
                     
                    <select class="form-control" name="jeniskelamin[]" id="jeniskelamin<?php echo $i; ?>">
                                        
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                    
                                        
                                    </select>


                                            
                </div>
            </div>

<?php 
$sef = substr($price,3);
    $total = $sef * $dewasas;
 ?>
 <!-- <input type="hidden" name="seat" id="seat" value="<?php echo $seat; ?>"> -->
         <input type="hidden" name="price" id="price" value="<?php echo $total; ?>">
        <input type="hidden" name="reservation_date" id="reservation_date" value="<?php echo date('y/m/d') ?>">
         <!-- <input type="hidden" name="rute_from" id="rute_from" value="<?php echo $rute_from; ?>">

        <input type="hidden" name="rute_to" id="rute_to" value="<?php echo $rute_to; ?>"> -->
                        
    
    

    <input type="hidden" id="des" name="desk" value="<?php  echo $desk ?>">

<input type="hidden" name="ncus" id="ncus">
 <input type="hidden" name="reservation_code" id="reservation_code" value="<?php echo $random_code ?>">
    <input type="hidden" name="rute_f" id="rute_f" value="<?php print_r($rute_from); ?>">
    <input type="hidden" name="rute_t" id="rute_t" value="<?php print_r($rute_to); ?>">
    <input type="hidden" name="dwsa" value="<?php echo $dewasas ?>" id="dwsa">
    <input type="hidden" name="ruid" value="<?php echo $rute ?>" id="ruid">
    <input type="hidden" name="desk" id="desk" value="<?php echo $desk; ?>">
    <input type="hidden" name="desc" id="desc" value="<?php echo $desc; ?>">
    <input type="hidden" id="dw" name="dewasas" value="<?php  echo $dewasas ?>">
    <input type="hidden" id="de" name="depart" value="<?php  echo $depart ?>">       
           
                        
                    </div>
                    
                </div>
                  <?php } ?>
                </div>
              
        
               

                <div class="col-sm-6">
                    
            
                <div class="panel panel-default" data-collapsed="0">
                    
                    <!-- panel head -->
                    <div class="panel-heading">
                        <div class="panel-title"><h4>Keberangkatan</h4> <br> <?php echo date('D, Y-m-d'); ?></div>
                        
                        <div class="panel-options">
                           
                            
                        </div>
                    </div>
                    <!-- <h4>
                   <?php 
                         ?> <i class="entypo entypo-right-thin"></i>
                        <?php  
                        ?>
                    </h4> -->
                    
                    <!-- panel body -->
                    <div class="panel-body">
                        
        <label><h3><?php echo $desc; ?></h3></label> <br>
        <label><h3>Berangkat Jam : <?php echo $depart; ?></h3></label> <br>  
        <label style="font-size: 18px; color: #31271e;"><?php  print_r($rute_from); ?></label> <br>
        <i class="entypo entypo-down-thin" style="font-size: 20px; margin-left: 90px; margin-bottom:50px;"></i> <br>
                        <label style="margin-top: 6px; font-size: 18px; color: #31271e;"><?php  print_r($rute_to); ?></label>
                        
                        
                        
                    </div>
                    
                </div>



                 
                    
                </div>
                
            </div>

            <hr style="border-top: 3px double #8c8b8b;">

            <h2 style="text-align: left; margin-left: 14px;">Price Details</h2>

            <div class="col-md-6">
            <div class="panel panel-info" data-collapsed="0">
                    
                    <!-- panel head -->
                    
                    <!-- panel body -->
                    <div class="panel-body" style="margin-left: 50px;">
                        <?php 
                            $sef = substr($price,3);
                            $total = $sef * $dewasas;
                        ?>
                       <label><h4><?php echo $desc; ?></h4></label><label style="margin-left: 20px;"><h4>x</h4></label> <label style="margin-left: 20px;"><h4><?php echo $dewasas; ?></h4></label> 

                       <label style="margin-left: 90px;"><h4><?php echo $price; ?></h4></label>
                      <!--  <label><h3>Berangkat Jam : <?php echo $depart; ?></h3></label> <br>  
                        <label><h3><?php echo $rute_from; ?></h3></label> <i class="entypo entypo-right-thin" style="font-size: 20px;"></i>
                        <label><h3><?php echo $rute_to; ?></h3></label> -->
                        
                        
                        
                    </div> 
                    <div class="panel-footer">
                        <label style="text-align: left; color: #000; font-size: 20px; margin-left: 47px;">Total Harga</label><label style="text-align: right; font-size: 20px; color: #000; margin-left: 140px;"><?php echo 'Rp.'.$sef * $dewasas; ?></label>
                        <label id="tot" style="margin-left: 180px;"></label>
                    </div> 


                </div>
                <button type="button" class="btn btn-orange btn-block" id="select">Select Seat</button> 
            </div>
 <style type="text/css" >
                
#holder{    
height:200px;    
width:750px;
background-color:#F5F5F5;
border:1px solid #A4A4A4;
margin-left:35px;   
}
#place {
position:relative;
margin:7px;
}
#place a{
font-size:0.6em;
}
#place li
{
 list-style: none outside none;
 position: absolute;   
}    
#place li:hover
{
background-color:gray;      
} 
#place .seat{
background:url("../../assets/images/Available.png") no-repeat scroll 0 0 transparent;
height:33px;
width:33px;
display:block;   
}
#place .selectedSeat
{ 
background-image:url("../../assets/images/booked.png");          
}
#place .selectingSeat
{ 
background-image:url("../../assets/images/selected.png");        
}
#place .row-3, #place .row-4{
margin-top:10px;
}
#seatDescription li{
verticle-align:middle;    
list-style: none outside none;
padding-left:35px;
height:35px;
float:center;
}
            </style>
            <div class="row">
                <div class="col-md-10" style="margin-top: 20px; margin-left: 100px;">
                    <div class="panel panel-gray" data-collapsed="0" id="selek" style="display: none">
                    
                    <!-- panel head -->
                   <div class="panel-heading">
                        <div class="panel-title">Select Seat</div>
                        
                        <div class="panel-options">
                           
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            
                        </div>
                    </div>
                    
                    <!-- panel body -->
                    <div class="panel-body">
                      
                <div id="holder"> 
        <ul  id="place">
        </ul>    
    </div>
    
 
    <ul id="seatDescription" style="margin-top: 20px;">
        <li style="background:url('../../assets/images/Available.png') no-repeat scroll 0 0 transparent;">Available Seat</li>
        <li style="background:url('../../assets/images/booked.png') no-repeat scroll 0 0 transparent;">Booked Seat</li>
        <li style="background:url('../../assets/images/selected.png') no-repeat scroll 0 0 transparent;">Selected Seat</li>
        
         

    </ul>
    
        <div style="clear:both;width:100%">

        </div>

<!-- inputan --> 
               
            <button type="submit" id="ceta" name="btnShowNew" class="btn btn-success" value="Pesan" style="margin-left: 40px;" />Pesan</button>
 
                    </div> 
                    
    
                </div>
            </div>

           


 <!-- <button class="btn btn-green" name="add" id="add" data-toggle="modal" data-target="#modal-6">add data</button> -->
                <!-- <div class="btn-group">
                                <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown">
                                    Pilih Transportasi <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-blue" role="menu">
                                    <li><a href="#" id="upesawat">Pesawat</a>
                                    </li>
                                    <li><a href="#" id="ukereta">Kereta Api</a>
                                    </li>
                                    
                                </ul>
                            </div> -->
<!-- <div id="t_pesawat" style="display: none;">
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Depart At</th>
                    <th>Rute From</th>
                    <th>Rute_to</th>
                    <th>Price</th>
                    <th>Transportation id</th>
                    <th>Tools</th>
                    
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
</div>

<div id="t_kereta" style="display: none;">
        <table id="table2" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Depart At</th>
                    <th>Rute From</th>
                    <th>Rute_to</th>
                    <th>Price</th>
                    <th>Transportation id</th>
                    <th>Tools</th>
                    
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
</div> -->

<!-- <form id="data" method="post" action="<?php echo base_url() ?>index.php/Reservation/booking">
    <input type="hidden" name="dewasas" id="dewasas">
    <input type="hidden" name="depart" id="depart">
    <input type="hidden" name="rute_from" id="rute_from">
    <input type="hidden" name="rute_to" id="rute_to">
     <button type="submit" id="var" class="pilih" onclick="pilih()">Pilih</button> -->
    
</form> 
   
    <input type="hidden" id="dws" name="dws" value="<?php echo $dewasas ?>">

       <style type="text/css">
  .modal.modal-wide .modal-dialog {
  width: 150%;
}
.modal-wide .modal-body {
  overflow-y: auto;

}

#modal-6 .modal-body p { 
    margin-left: 900px 
}
h4.modal-title {
    text-align: center;
}
</style>

<div id="pesawat">
                 <div class="modal fade" id="modal-6">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Input Data User</h4>
                </div>
                
                <div class="modal-body">
                <form method="post" id="form-filter">
                    <div class="row">
                        
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Dari</label>
                                
                                <?php echo $rute_from; ?>
                            </div>  
                        
                        </div>
                   
                
                    <?php print_r($seat[0]); ?>
                        <div class="col-md-4">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">Tujuan</label>
                                
                                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan">
                                <input type="hidden" class="form-control" id="trans">
                            </div>  
                            
                        </div>
                        <div class="col-md-2" style="margin-top: 21px;">
                                <div class="form-group">
                                <button type="button" class="btn btn-info" id="btn-filter">Search</button>
                            </div>
                            </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-4" class="control-label">Berangkat Jam</label>
                                
                                <input type="time" class="form-control" id="depart_at" name="depart_at" placeholder="Berangkat Jam">
                            </div>  
                            
                        </div>
                        
                        <div class="col-md-4">
                       <div class="form-group">
                                <label class="col-sm-3 control-label">Dewasa</label>
                                
                               
                                    <select class="form-control" id="dewasa" name="dewasa">
                                        
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                       <div class="form-group">
                                <label class="col-sm-3 control-label">Anak</label>
                                
                               
                                    <select class="form-control" name="anak">
                                        
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        
                                    </select>
                                </div>
                            </div>


                        </form>
                             </div>
                        

                            
   
                     </div>
                
                
                
            </div>
        </div>
    </div>
    </div>




    <!-- Edit -->

     <!-- <div aria-hidden="true" class="modal fade" id="edit-data" role="dialog" tabindex="-1"  >
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
                                
                               
                                    <select class="form-control">
                                        <option>-------------Select-------------</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                        
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
        </div> -->
    <!-- </div> -->

    <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Apakah anda Yakin?</h4>
                
            </div>
            <div class="modal-body">
               <p style="color: #595757; font-size: 15px; font-family: inherit;">Nama Pemesan <span style="margin-left: 48px">:</span> 
                <span id="Name" style="color: #595757; font-size: 15px; font-family: inherit;"></span> </p>

               <p style="color: #595757; font-size: 15px; font-family: inherit;">Alamat Pemesan <span style="margin-left: 42px">:</span>   
                <span id="alm" style="color: #595757; font-size: 15px; font-family: inherit;"></span> </p>

                <p style="color: #595757; font-size: 15px; font-family: inherit;">No Telp. <span style="margin-left: 100px">:</span>   
                    <span id="No" style="color: #595757; font-size: 15px; font-family: inherit;">
                    </span> </p>
               
                <p style="color: #595757; font-size: 15px; font-family: inherit;">Jenis Kelamin <span style="margin-left: 60px">:</span>  
                 <span id="gend" style="color: #595757; font-size: 15px; font-family: inherit;"></span> </p>

                <h3>Anda akan memesan tiket : </h3>
                <h4>
                   <?php 
                        print_r($from[0]['name']);  ?> <i class="entypo entypo-right-thin"></i>
                        <?php   print_r($to[0]['name']);
                        ?>
                    </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success sweet-12" onclick="_gaq.push(['_trackEvent', 'example, 'try', 'Success']);" id="process_it">Bayar</button>
            </div>
        </div>
    </div>
</div>



    <br>

                 <!-- <a href="javascript:;" onclick="jQuery('#modal-6').modal('show', {backdrop: 'static'});" class="btn btn-default">Add Data</a> -->

                
            
    
        
        <!-- lets do some work here... -->
        <!-- Footer -->
        <footer class="main" style="margin-top: 700px;">
            
            &copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
        
        </footer>
 <?php $ase = $kode; 


 ?>


<?php $arr = explode(", ", $kode);  ?>
<p id="as" hidden="hidden"><?php print_r(array_values($seatqty)); ?></p>
<input type="hidden" name="" id="kode" value="<?php echo $kode; ?>">
</div>

    <!-- Bottom scripts (common) -->
<?php 
    $this->load->view('parts/footer');
 ?>

 <script type="text/javascript">


    // $('#ceta').click(function(event){
    //     event.preventDefault();
    //     var data = $('.insert_pelanggan').serializeArray();
    //     var url = $('.insert_pelanggan').attr('action');
    //     $.post(url,data,function(e){
    //         window.location.href = "<?php echo site_url('Reservation/payment') ?>";
    //     })
    //     // $('#confirmation').modal('show');
    //     // $('#Name').text($('#nama1').val());
    //     // $('#No').text($('#nohp1').val());
    //     // $('#alm').text($('#alamat1').val());
    //     // $('#gend').text($('#jeniskelamin1').val());

    // });
    $('#selek').hide();
    $('#select').click(function(){
        
        $('#selek').fadeIn(2500);
    })

    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }

var kode_reserve = $('#kode_pesan').val();


//      $('#process_it').click(function(e){
//             e.preventDefault();
//             $.ajax({
//                 url: '<?php echo base_url()?>index.php/Reservation/simpan',
//                 type: "POST",
//                 data: $('.insert_pelanggan').serializeArray(), //serialize() untuk mengambil semua data di dalam form
//                 dataType: "html",
//                 success: function(){      
//                     $('#confirmation').modal('hide');
//                     // window.location = "<?php  echo base_url() ?>index.php/Reservation/simpan";
//        //      swal({
//        //    title: "Data Tersimpan",
//        //    text: "Jika ada perubahan data silahkan klik tombol edit",
//        //    type: "success",
//        //    confirmButtonClass: 'btn-success ok',
//        //    showCancelButton: true,
//        //    confirmButtonText: 'Cetak'

//        //  });
       
     
//        // $('.ok').click(function(){
//        //      var address = "<?php echo base_url() ?>index.php/Reservation/cetak_pesanan/" + kode_reserve;
//        //      var thePopup = window.open(address, "Faktur","menubar=0, location=0, height=500,width=860");
//        //  })  


//             },
//             error: function(){
//                 window.alert('Gagal mang');
//             }
// });
//    });

var kode = $('#kode').val();
var fwe = $('#as').text();
 // alert(String(fwe.toString()));
var dws = $('#dws').val();
var a = fwe.substring(61,66);
var settings = {
               rows: 5,
               cols: a / 5,
               rowCssPrefix: 'row-',
               colCssPrefix: 'col-',
               seatWidth: 35,
               seatHeight: 35,
               seatCss: 'seat',
               selectedSeatCss: 'selectedSeat',
               selectingSeatCss: 'selectingSeat'
           };

           var init = function (reservedSeat) {
                var str = [], seatNo, className;
                for (i = 0; i < settings.rows; i++) {
                    for (j = 0; j < settings.cols; j++) {
                        // alert(i + j * settings.rows + 1);
                        seatNo = (i + j * settings.rows + 1);
                        className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString();
                            // alert(reservedSeat);
                        console.log(reservedSeat);
                        if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
                            className += ' ' + settings.selectedSeatCss;
                        }
                        str.push('<li class="' + className + '"' +
                                  'style="top:' + (i * settings.seatHeight).toString() + 'px;left:' + (j * settings.seatWidth).toString() + 'px">' +
                                  '<a title="' + seatNo + '">' + seatNo + '</a>' +
                                  '</li>');
                    }
                }
                $('#place').html(str.join(''));
                
                
            };
            //case I: Show from starting
            //init();
             
            //Case II: If already booked
            var bookedSeats = <?php echo @json_encode($seat); ?>

            
            init(bookedSeats);
                

    // $('#btn-reset').click(function(){ //button reset event click
    //     $('#form-filter')[0].reset();
    //     table.ajax.reload();  //just reload table
    // });
// $('#d_user').on('click','.sweet-14',function(){
   
    
// $('.' + settings.seatCss).click(function(){
//     if ($(this).hasClass(settings,selectingSeatCss)){
//         var select = $this.closest('[id]').attr('id');


//     }
// })

$('.' + settings.seatCss).click(function () {
    


if ($(this).hasClass(settings.selectedSeatCss)){
    alert('This seat is already reserved');
}

else if(dws <= $('.' + settings.selectingSeatCss).length){
  
   
         

    if($(this).hasClass(settings.selectingSeatCss)){
                  $('#seatt').remove();
                  $(this).toggleClass(settings.selectingSeatCss)

  


    }else{
    alert('Anda Hanya Memesan '+ dws + ' tiket');  

    // $('#shit').val(str.join(','));
    }
}

else if(dws >= $('.'+settings.selectingSeatCss).length) {
    
    $(this).toggleClass(settings.selectingSeatCss);
          var str = [], item;
    $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        item = $(this).attr('title');                   
        str.push(item);                   
    });

    if($(this).hasClass(settings.selectingSeatCss)){
    $('#seatdesk').append("<input type='hidden' name='seat_code[]' id='seatt' value='"+item+"'>");
  
}
else if($(this).hasClass(settings.seatCss)){
    $('#seatt').remove();
    
}




                  
                  // $('#seatt').remove();
              

//     if ($('#seat_code1').val() == '' && $('#seat_code2').val() == '') {
//  $('#seat_code1').val(item);
//  return true;

        
//         }  

//        else if ($('#seat_code1').val() != '' && $('#seat_code2').val() == '' && $('#seat_code3').val() == '') {
//  $('#seat_code2').val(item);
//         return true;
//         }


//         else if ($('#seat_code1').val() != '' && $('#seat_code2').val() != '' && $('#seat_code3').val() == '') {
//  $('#seat_code3').val(item);
//         return true;
//         }


//         else if ($('#seat_code1').val() != '' && $('#seat_code2').val() != '' && $('#seat_code3').val() != '' && $('#seat_code4').val() == '') {
//  $('#seat_code4').val(item);
//         return true;
//         }

//       if($('#seat_code1').val() != ''){
//     $('#seat_code1').val('');
// }

//  if($('#seat_code2').val() != ''){
//     $('#seat_code2').val('');
// }
//  if($('#seat_code3').val() != ''){
//     $('#seat_code3').val('');

// }
//  if($('#seat_code4').val() != ''){
//     $('#seat_code4').val('');
   

// }
    }

        
    });




$('#btnShow').click(function () {
    var str = [];
    $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.'+ settings.selectingSeatCss + ' a'), function (index, value) {
        str.push($(this).attr('title'));
    });
    // alert(str.join(','));
    alert(bookedSeats);
    alert(kode);
})

$('#btnShowNew').click(function () {
    var str = [], item;
    $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        item = $(this).attr('title');                   
        str.push(item);                   
    });
    // alert(str.join(','));
    $('#shit').val(str.join(', '))
   

});
//     var nopas = $(this).closest('tr').find('td:eq(1)').text();
//     var url = '<?php echo base_url() ?>index.php/User/Delete/'+nopas;
  
//     // $('form').attr('action');
//     swal({
//           title: "Apakah Anda Yakin?",
//           text: "Anda Akan Mendelete Data "+nopas,
//           type: "error",
//           showCancelButton: true,
//           confirmButtonClass: 'btn-danger delete',
//           confirmButtonText: 'Delete'
//         });

//     $('.delete').click(function(){  
//         $.get(url,function(){
//             location.reload();
//         });
//     });

// });

// $('#edit-data').on('submit',function(event){
//     event.preventDefault();
//     var url =  $('#edit-d').attr('action');
//     var data =  $('#edit-d').serializeArray();
//      $.post(url,data,function(){

//         $('#edit-data').modal('hide');
//         swal({
//           title: "Data Telah di edit",
//           text: "Success",
//           type: "success",
//           confirmButtonClass: 'btn-success edit',
//           confirmButtonText: 'OK'
//         });
     
 
//      $('.edit').click(function(){
//              location.reload(); 
//         })

//      })
            
  
        
     
//  });
       
   

        

    // $(document).ready(function(){
    //     $('#edit-data').on('show.bs.modal', function(event) {
    //         var div = $(event.relatedTarget)
    //         var modal = $(this)
    //         modal.find('#user').attr("value",div.data('user'));
    //         modal.find('#sandi').attr("value",div.data('pass'));
    //         modal.find('#lnama').attr("value",div.data('full'));
    //         modal.find('#level').attr("value",div.data('level'));

    //     });
    // });
     


 </script>
