<?php 
    $this->load->view('parts/header');
    $this->load->view('parts/navigation');

$this->session->flashdata('item');

 ?>

        
         <div class="row">
            <div class="col-sm-12">
 <!-- <button class="btn btn-green" name="add" id="add" data-toggle="modal" data-target="#modal-6">add data</button> -->
                <div class="btn-group">
                                <button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown">
                                    Pilih Transportasi <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-blue" role="menu">
                                    <li><a href="#" id="upesawat">Pesawat</a>
                                    </li>
                                    <li><a href="#" id="ukereta">Kereta Api</a>
                                    </li>
                                    
                                </ul>
                            </div>

                            <div class="row">
            <div class="col-md-12">
            
                <div class="panel panel-default panel-shadow" data-collapsed="0"><!-- to apply shadow add class "panel-shadow" -->
                    
                    <!-- panel head -->
                    <div class="panel-heading hidden">
                        <div class="panel-title"></div>
                        
                            
                    </div>
                    
                    <!-- panel body -->
                    <div class="panel-body">
                        
                     <h3>   <?php echo date('D, Y-m-d');  ?></h3>
                        <br>
                      
                                            
                    </div>
                    
                </div>
            
            </div>
        </div>

<div id="t_kereta" style="display: none">
        <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%" style="font-size:15px; ">
            <thead>
                <tr>
                    <th>No</th>
                    <th id="rui">Rute Id</th>
                    <th>Depart At</th>
                    <th>Rute From</th>
                    <th>Rute_to</th>    
                    <th>Deskripsi</th>

                    <th>Price</th>
                    <th id="tid">Transportation id</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
</div>

<div id="t_pesawat" style="display: none">
        <table id="table2" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th id="rui">Rute Id</th>
                    <th>Depart At</th>
                    <th>Rute From</th>
                    <th>Rute_to</th>    
                    <th>Deskripsi</th>

                    <th>Price</th>
                    <th id="tid">Transportation id</th>
                    
                </tr>
            </thead>
            <tbody>
                
                
            </tbody>
        </table>
</div>

<style type="text/css">
  .modal.modal-wide .modal-dialog {
  width: 100%;
}
.modal-wide .modal-body {
  overflow-y: auto;

}

#modal-6 .modal-body p { margin-left: 900px }
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
                    <h4 class="modal-title">Cari Kereta</h4>
                </div>
                
                <div class="modal-body">
                <form method="post" id="form-filter">
                    <div class="row">
                        
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Dari</label>
                                
<select name="dari" id="dari" class="form-control" style="font-size: 13px">
<?php foreach($stasiundata->result() as $stasiun){ ?>
    <option value="<?php echo $stasiun->stasiunid ?>"><?php echo $stasiun->name; echo ' ('.$stasiun->abbr; echo ') '.$stasiun->city; ?></option>
<?php } ?>
</select>
                            </div>  
                        
                        </div>

                    
                
                    
                        <div class="col-md-4">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">Tujuan</label>
                                

 <select name="tujuan" id="tujuan" class="form-control" style="font-size: 13px">
<?php foreach($stasiundata->result() as $stasiun){ ?>
    <option value="<?php echo $stasiun->stasiunid ?>"><?php echo $stasiun->name; echo ' ('.$stasiun->abbr; echo ') '.$stasiun->city; ?></option>
<?php } ?>
</select>
                                <input type="hidden" class="form-control" id="trans">
                            </div>  
                            
                        </div>
                        <div class="col-md-2" style="margin-top: 21px;">
                                <div class="form-group">
                                <button type="button" class="btn btn-info" id="btn-filterp">Search</button>
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

                            


                        </form>
                             </div>
                        

                            
   
                     </div>
                
                
                
            </div>
        </div>
    </div>
    </div>
<!--  modal pesawat -->
     <div class="modal fade" id="modal-pesawat">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Cari Pesawat</h4>
                </div>
                
                <div class="modal-body">
                <form method="post" id="form-filter">
                    <div class="row">
                        
                        
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="field-2" class="control-label">Dari</label>
                                
                                  <select name="dari1" id="dari1" class="form-control" style="font-size: 13px">
<?php foreach($airportdata->result() as $airport){ ?>
    <option value="<?php echo $airport->bandaraid ?>"><?php echo $airport->name; echo ' ('.$airport->abbr; echo ') '.$airport->city; ?></option>
<?php } ?>
</select>


                            </div>  
                        
                        </div>

                    
                
                    
                        <div class="col-md-4">
                            
                            <div class="form-group">
                                <label for="field-3" class="control-label">Tujuan</label>
                                
                            <select name="tujuan1" id="tujuan1" class="form-control" style="font-size: 13px">
<?php foreach($airportdata->result() as $airport){ ?>

    <option value="<?php echo $airport->bandaraid ?>"><?php echo $airport->name; echo ' ('.$airport->abbr; echo ') '.$airport->city; ?></option>
<?php } ?>
</select>

                                <input type="hidden" class="form-control" id="trans">
                            </div>  
                            
                        </div>
                        <div class="col-md-2" style="margin-top: 21px;">
                                <div class="form-group">
                                <button type="button" class="btn btn-info" id="btn-filterps">Search</button>
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
                                
                               
                                    <select class="form-control" id="dewasa1" name="dewasa">
                                        
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

    <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Peringatan</h4>
                
            </div>
            <div class="modal-body">
                <h4>Anda Akan Memesan Tiket Kereta : <label id="desk"></label> </h4>
                <!-- <input type="text" id="dep" name="depart">
                <input type="text" id="rute_from" name="rute_from">
                <input type="text" id="rute_to" name="rute_to"> -->
<style type="text/css">
    #rute_from {
        font-size: 20px;

    }

</style>   
         <form method="post" action="<?php echo site_url('Reservation/booking') ?>">
               <label id="rute_from"></label> <i class="entypo entypo-right-thin" style="font-size: 20px;"></i>
               <input type="hidden" name="rute_from" id="rute_from1">
               <label id="rute_to" style="font-size: 20px;"></label> <br>
               <input type="hidden" name="rute_to" id="rute_to1">
               <span style="font-size: 20px;">Berangkat :</span> <label id="dep" style="font-size: 20px;"></label>
               <input type="hidden" name="rid" id="rid">
               <input type="hidden" name="depart" id="dep1">
               <input type="hidden" name="desk" id="desk1">
               <input type="hidden" name="desc" id="desc">
               <input type="hidden" name="dewasas" id="dewasas">
               <input type="hidden" name="price" id="price">
               
                

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success btn-ok" id="btn-ok">Pilih</button>
                </form>
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

var table;
$('#rui').hide();
$('#tid').hide();
$('#t_pesawat').hide();
$('#t_kereta').hide();

// $('#rid').hide();
// $('#rute_from').on('change',function(){
//     $('#tampil').val($('#rute_from').val());
// })
        // $('#d_user').DataTable(); 
        
       $('#upesawat').click(function(){
        $('#modal-pesawat').modal('show');
        $('#trans').val('T0002');
       });

       $('#ukereta').click(function(){
        $('#modal-6').modal('show');
        $('#trans').val('T0001');
       });

      

        table = $('#table').DataTable({ 

 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Reservation/ajax_list')?>",
            "type": "POST",
            "data": function ( data ) {
                // data.depart_at = $('#depart_at').val();
                data.dari = $('#dari').val();
                data.tujuan = $('#tujuan').val();
                

               
                // data.address = $('#address').val();
            }
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0], //first column / numbering column
            "orderable": false, //set not orderable

        },
        {
            "targets": [1],
            "visible": false
        },
        {
            "targets": [7],
            "visible": false
        }

        ],
 
    });
        var inputan;
//------------------------PESAWAT------------------------------------------------------------------------------
         table2 = $('#table2').DataTable({ 

 
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
 
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Reservation/ajax_list2')?>",
            "type": "POST",
            "data": function ( data ) {
                // data.depart_at = $('#depart_at').val();
                data.dari1 = $('#dari1').val();
                data.tujuan1 = $('#tujuan1').val();
                
               
                // data.address = $('#address').val();
            }
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
            
        },
        {
            "targets": [1],
            "visible": false
        },
        {
            "targets": [7],
            "visible": false
        } 
        ],
 
    });
         
    
         var dewasa = $('#dewasa').val();
        //  $('#btn-filterp').click(function(){
        //    alert(dewasa);  
        //  })
        
        // $('#btn-filterps').click(function(){
        //    alert(dewasa);  
        //  })
        
   
//        $('#table2 tbody').on('click', '.pilih', function () {
    
//     var table = $('#table').DataTable();

//     // var depart = $(this).closest('tr').find('td:eq(1)').text();
//     // console.log(depart);
//         alert( table.cell( this ).data() );
// });

       $('#table tbody').on('click', '.pilih', function () {
 
    var table = $('#table').DataTable();
    var ruteid = $(this).find('td.hidden:first').html();
    var depart = $(this).closest('tr').find('td:eq(1)').text();
    var rute_from = $(this).closest('tr').find('td:eq(2)').text();
    var rute_to = $(this).closest('tr').find('td:eq(3)').text();
    var desk = $(this).closest('tr').find('td:eq(4)').text();
    var price = $(this).closest('tr').find('td:eq(5)').text();
    var tid = $(this).closest('tr').find('td:eq(6)').text();
    var currentRow = $(this).closest("tr");
    var data = $('#table').DataTable().row(currentRow).data();
    // alert(data[1]);

    $('#rid').val(data[1]);
    $('#dep1').val(depart);
    $('#rute_from1').val(rute_from);
    $('#desc').val(desk);
    $('#rute_to1').val(rute_to);
    $('#desk1').val(data[7]);
    var res = price.substring(0,8);
    $('#price').val(res);

    document.getElementById("dep").innerHTML=depart;
    document.getElementById("rute_from").innerHTML=rute_from;
    document.getElementById("rute_to").innerHTML=rute_to;
    document.getElementById("desk").innerHTML=desk;
 $('#confirm').modal('show');
    // alert( table.row( this ).data() );
});

       $('#table2 tbody').on('click', '.pilih', function () {
 
    var table = $('#table').DataTable();
    var ruteid = $(this).find('td.hidden:first').html();
    var depart = $(this).closest('tr').find('td:eq(1)').text();
    var rute_from = $(this).closest('tr').find('td:eq(2)').text();
    var rute_to = $(this).closest('tr').find('td:eq(3)').text();
    var desk = $(this).closest('tr').find('td:eq(4)').text();
    var price = $(this).closest('tr').find('td:eq(5)').text();
    var tid = $(this).closest('tr').find('td:eq(6)').text();
    var currentRow = $(this).closest("tr");
    var data = $('#table2').DataTable().row(currentRow).data();
    // alert(data[1]);

    $('#rid').val(data[1]);
    $('#dep1').val(depart);
    $('#rute_from1').val(rute_from);
    $('#desc').val(desk);
    $('#rute_to1').val(rute_to);
    $('#desk1').val(data[7]);
    var res = price.substring(0,8);
    $('#price').val(res);

    document.getElementById("dep").innerHTML=depart;
    document.getElementById("rute_from").innerHTML=rute_from;
    document.getElementById("rute_to").innerHTML=rute_to;
    document.getElementById("desk").innerHTML=desk;
 $('#confirm').modal('show');
    // alert( table.row( this ).data() );
});

  // $('#data').on('submit',function(event){
  //           event.preventDefault();

  //   $.ajax({
                    
  //                   url: "<?php echo base_url() ?>index.php/Reservation/booking",
  //                   method:"POST",
  //                   data:$('#data').serialize(),
  //                   success:function(data)
  //                   {
  //                       // location.href = "<?php echo base_url() ?>index.php/Reservation/booking";    

                       
                         
                        
  //           }
  //        });
  //   });


//  function pilih(){

     
//     var depart = $(this).closest('tr').find('td:eq(1)').text();
//     var rute_from = $(this).closest('tr').find('td:eq(2)').text();
//     var rute_to = $(this).closest('tr').find('td:eq(3)').text();

       

// $('#confirm').modal('show');
//  $('#dep').val(depart);
//         // var data = dewasa;
//   //       $.ajax({
                    
//   //                   url:$('#data').attr('action'),
//   //                   method:"POST",
//   //                   data:$('#data').serialize(),
//   //                   success:function(data)
//   //                   {
                        
//   //                      // alert(data);
                         
//   //                       document.getElementById("myLink").innerHTML=data;
//   //                       location.href = "<?php echo base_url() ?>index.php/Reservation/booking";
//   //     }
//   // });
// }

 
    $('#btn-filterp').click(function(){ //button filter event click
      
    if($('#dari').val() == $('#tujuan').val()){
        alert('Rute Keberangkatan & Tujuan tidak Boleh sama');
        
       }else{

 $('#dewasas').val(dewasa); 
 $('#depart').val($('#depart_at').val()); 
 $('#rute_from').val($('#dari').val()); 
 $('#rute_to').val($('#tujuan').val()); 
 $('#dewasas').val($('#dewasa').val()); 

        $('#modal-6').modal('toggle');

        //    if($('#trans').val() == 'T0002')
        // {
        //     $('#t_kereta').hide();
        //     $('#t_pesawat').show();
        // }
        //     else if($('#trans').val() == 'T0001')
        // {
        //     $('#t_pesawat').hide();
        //     $('#t_kereta').show();
        // }   
        $('#t_kereta').show();
        
        table.ajax.reload();  //just reload table
    }
    });

        $('#btn-filterps').click(function(){ //button filter event click
      
    if($('#dari1').val() == $('#tujuan1').val()){
        alert('Rute Keberangkatan & Tujuan tidak Boleh sama');
        
       }else{

 
 $('#depart').val($('#depart_at').val()); 
 $('#rute_from').val($('#dari').val()); 
 $('#rute_to').val($('#tujuan').val()); 
 $('#dewasas').val($('#dewasa1').val()); 

        $('#modal-pesawat').modal('toggle');

        //    if($('#trans').val() == 'T0002')
        // {
        //     $('#t_kereta').hide();
        //     $('#t_pesawat').show();
        // }
        //     else if($('#trans').val() == 'T0001')
        // {
        //     $('#t_pesawat').hide();
        //     $('#t_kereta').show();
        // }  
        $('#t_pesawat').show(); 
        $('#t_kereta').hide(); 
        
        table2.ajax.reload();  //just reload table
    }
    });
    // $('#btn-reset').click(function(){ //button reset event click
    //     $('#form-filter')[0].reset();
    //     table.ajax.reload();  //just reload table
    // });
// $('#d_user').on('click','.sweet-14',function(){
   
    
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

