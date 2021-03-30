<?php 
	/**
	* 
	*/
	class Report extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Report');
			// $this->load->library('m_pdf');
			$this->load->library('Pdf');
		}

		function index(){
			$data['d_user'] = $this->M_Report->index();
      $data['user'] = $this->session->userdata('username');
      $data['d_customer'] = $this->M_Report->customer();
      $data['d_stasiun'] = $this->M_Report->stasiun();
      $data['d_trans'] = $this->M_Report->transportation();
      $data['d_rute'] = $this->M_Report->rute();

      $data['d_transp_type'] = $this->M_Report->transportation_type();
			$this->load->view('view-rep_user',$data);
		}

    function dapat(){
      $tgldari = $this->input->post('tgldari');
      $tglke = $this->input->post('tglke');

      $data = $this->M_Report->pendapatan($tgldari,$tglke);
      echo json_encode($data);

    }

   

    function jadwal(){
      // Rute from ----------------------------------------------------------------------------------------------------------


      $data['user'] = $this->session->userdata('username');
      $data['d_jadwal'] = $this->M_Report->jadwal()->result_array();
      $this->load->view('view-rep_jadwal',$data);
    }

    function jadwal_P(){
      $data['d_jadwal_p'] = $this->M_Report->jadwal_PE()->result_array();
      for ($i=0; $i < count($data['d_jadwal_p']); $i++) { 
 // print_r($data['d_rute'][$i]["rute_from"]);
 $query = $this->db->query("SELECT name,city,abbr from bandara where bandaraid = '".$data['d_jadwal_p'][$i]["rute_from"]."'");
 $data[$i] = $query->result_array();
  
$data['singkatanfrom'][$i] = $data[$i][0]["name"]." (".$data[$i][0]["abbr"].") ".$data[$i][0]["city"];
}

// Rute to ----------------------------------------------------------------------------------------------------------

for ($i=0; $i < count($data['d_jadwal_p']); $i++) { 
 // print_r($data['d_rute'][$i]["rute_from"]);
 $query = $this->db->query("SELECT name,city,abbr from bandara where bandaraid = '".$data['d_jadwal_p'][$i]["rute_to"]."'");
 $data[$i] = $query->result_array();
  
$data['singkatanto'][$i] = $data[$i][0]["name"]." (".$data[$i][0]["abbr"].") ".$data[$i][0]["city"];
}
      $data['user'] = $this->session->userdata('username');
      
      $this->load->view('view-rep_jadwal_p',$data);
    }

    function pendapatan(){
      $data['user'] = $this->session->userdata('username');
     
      $this->load->view('view-rep_pendapatan',$data);
    }

		function print_users(){
			
			$data['d_user'] = $this->M_Report->index();
      $data['tgl'] = $this->input->post();
		  	
			
    
 
  $image_file = K_PATH_IMAGES.'<?php echo base_url() ?>index.php/assets/images/logo-light.png';
       $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
  
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Muhammad Saqlain Arif');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
  $tDate = date("F j, Y, g:i a");
    // set default header data
    $pdf->SetHeaderData('/logo-light.png',30, "Tiket Kereta Api", "Jln.Siliwangi No.56", array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
  
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
  
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
  
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 
  
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
  
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }   
  
    // ---------------------------------------------------------    
  
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
    $pdf->AddPage(); 
  
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    $pdf->Cell(0, 5,'Laporan User', 0, false, 'C', 0, '', 0);
    $pdf->Ln();
    $pdf->Ln();
   $pdf->Cell(0, 5,'Tanggal : '.date("d/m/Y"), 0, false, 'L', 0, '', 0,false, 'T', 'M');
// $pdf->Cell(0, 5, date("d/m/Y"), 0, false, 'L', 0, '', 0, false, 'T', 'M');  
$pdf->Ln();
$pdf->Ln();
    // Set some content to print
   $i = 1; 
   $html = '<table border="1" colspan="0" width="110%">
           <tr style="font-size:15px;" align="center">
              <th width="50px">No</th>
              <th>Username</th>
              <th>Password</th>
              <th>Fullname</th>
              <th>Level</th>
           </tr>';
 foreach($data['d_user'] as $key){
     $html .= '<tr style="font-size:15px;">
                  <td> '.$i.'</td>
                  <td> '.$key['username'].'</td>
                  <td> '.$key['password'].'</td>
                  <td> '.$key['fullname'].'</td>
                  <td> '.$key['level'].'</td>
               </tr>';
               $i++;
  }
  $html .= '</table>';

    
     

  
    // Print text using writeHTMLCell()
    $pdf->writeHTML($html);   
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Laporan_User.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
		}

    function print_customers(){
      
      $data['d_customer'] = $this->M_Report->customer();
    
        
      $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

         
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Muhammad Saqlain Arif');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
  $tDate = date("F j, Y, g:i a");
    // set default header data
    $pdf->SetHeaderData('/logo-light.png',30, "Tiket Kereta Api", "Jln.Siliwangi No.56", array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
  
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    
  
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
  
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
  
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }   
  
    // ---------------------------------------------------------    
  
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
     $pdf->setPrintHeader(true);
    $pdf->setPrintFooter(true);
    $pdf->AddPage(); 
  $pdf->setPrintHeader(false);
    
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    $pdf->Cell(0, 5,'Laporan Customer', 0, false, 'C', 0, '', 0);

    $pdf->Ln();
    $pdf->Ln();
   $pdf->Cell(0, 5,'Tanggal : '.date("d/m/Y"), 0, false, 'L', 0, '', 0,false, 'T', 'M');
// $pdf->Cell(0, 5, date("d/m/Y"), 0, false, 'L', 0, '', 0, false, 'T', 'M');  
$pdf->Ln();
$pdf->Ln();
    // Set some content to print
   $i = 1;
   $html = '<table border="1" cellpadding="1" celspacing="0" width="110%">
           <tr style="font-size:15px;" align="center">
              <th width="50px">No</th>
              <th>Id Customer</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No Telp.</th>
              <th>Gender</th>
           </tr>';
 foreach($data['d_customer'] as $key){
     $html .= '<tr style="font-size:15px;">
                  <td> '.$i.'</td>
                  <td> '.$key['customerid'].'</td>
                  <td> '.$key['name'].'</td>
                  <td> '.$key['address'].'</td>
                  <td> '.$key['phone'].'</td>
                  <td> '.$key['gender'].'</td>
               </tr>';
               $i++;
  }
  $html .= '</table>';

    
     

  
    // Print text using writeHTMLCell()
    $pdf->writeHTML($html);   
        
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Laporan_Customer.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
    }

    function print_stasiun(){
      
      $data['d_stasiun'] = $this->M_Report->stasiun();
    
        
      $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

         
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Muhammad Saqlain Arif');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
  $tDate = date("F j, Y, g:i a");
    // set default header data
    $pdf->SetHeaderData('/logo-light.png',30, "Tiket Kereta Api", "Jln.Siliwangi No.56", array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
  
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    
  
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
  
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(15);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
  
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }   
  
    // ---------------------------------------------------------    
  
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
     $pdf->setPrintHeader(true);
    $pdf->setPrintFooter(true);
    $pdf->AddPage(); 
  $pdf->setPrintHeader(false);
    
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    $pdf->Cell(0, 5,'Laporan Stasiun', 0, false, 'C', 0, '', 0);

    $pdf->Ln();
    $pdf->Ln();
   $pdf->Cell(0, 5,'Tanggal : '.date("d/m/Y"), 0, false, 'L', 0, '', 0,false, 'T', 'M');
// $pdf->Cell(0, 5, date("d/m/Y"), 0, false, 'L', 0, '', 0, false, 'T', 'M');  
$pdf->Ln();
$pdf->Ln();
    // Set some content to print
    $i = 1;
   $html = '<table border="1" colspan="0" width="747px">
           <tr style="font-size:15px;" align="center">
              <th width="50px">No</th>
              <th>ID Stasiun</th>
              <th>Nama</th>
              <th>Kota</th>
              <th>abbr</th>
              
           </tr>';
 foreach($data['d_stasiun'] as $key){
     $html .= '<tr style="font-size:15px;">
                  <td> '.$i.'</td>
                  <td> '.$key['stasiunid'].'</td>
                  <td> '.$key['name'].'</td>
                  <td> '.$key['city'].'</td>
                  <td> '.$key['abbr'].'</td>
               </tr>';
               $i++;
  }
  $html .= '</table>';

    
     

  
    // Print text using writeHTMLCell()
    $pdf->writeHTML($html);   
        
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Laporan_Stasiun.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
    }

    function print_transportations(){
      
      $data['d_trans'] = $this->M_Report->transportation();
    
        
      $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

         
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Muhammad Saqlain Arif');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
  $tDate = date("F j, Y, g:i a");
    // set default header data
    $pdf->SetHeaderData('/logo-light.png',30, "Tiket Kereta Api", "Jln.Siliwangi No.56", array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
  
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
  
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(15);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
  
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }   
  
    // ---------------------------------------------------------    
  
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
     $pdf->setPrintHeader(true);
    $pdf->setPrintFooter(true);
    $pdf->AddPage(); 
  $pdf->setPrintHeader(false);
    
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    $pdf->Cell(0, 5,'Laporan Transportasi', 0, false, 'C', 0, '', 0);

    $pdf->Ln();
    $pdf->Ln();
   $pdf->Cell(0, 5,'Tanggal : '.date("d/m/Y"), 0, false, 'L', 0, '', 0,false, 'T', 'M');
// $pdf->Cell(0, 5, date("d/m/Y"), 0, false, 'L', 0, '', 0, false, 'T', 'M');  
$pdf->Ln();
$pdf->Ln();


    // Set some content to print
    $i = 1;
   $html = '<table border="1" colspan="0" width="120%">
           <tr style="font-size:15px;" align="center" bgcolor="orange">
              <th width="50px">No</th>
              <th>&nbsp; ID Transportasi</th>
              <th width="80px">Kode</th>
              <th width="150px">Deskripsi</th>
              <th width="100px">Seat Qty</th>
              <th>ID Type Transportasi</th>
              
           </tr>';
 foreach($data['d_trans'] as $key){
     $html .= '<tr style="font-size:15px;">
                  <td> '.$i.'</td>
                  <td> '.$key['transportationid'].'</td>
                  <td> '.$key['code'].'</td>
                  <td> '.$key['description'].'</td>
                  <td> '.$key['seat_qty'].'</td>
                  <td> '.$key['transportation_typeid'].'</td>
               </tr>';
              $i++;
  }
  $html .= '</table>';

    
     

  
    // Print text using writeHTMLCell()
    $pdf->writeHTML($html);   
        
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Laporan_Stasiun.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
    }

    function print_rute(){
      
      $data['d_rute'] = $this->M_Report->rute();
    
        
      $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

         
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Muhammad Saqlain Arif');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
  $tDate = date("F j, Y, g:i a");
    // set default header data
    $pdf->SetHeaderData('/logo-light.png',30, "Tiket Kereta Api", "Jln.Siliwangi No.56", array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
  
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
  
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(15);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
  
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }   
  
    // ---------------------------------------------------------    
  
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
     $pdf->setPrintHeader(true);
    $pdf->setPrintFooter(true);
    $pdf->AddPage(); 
  $pdf->setPrintHeader(false);
    
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    $pdf->Cell(0, 5,'Laporan Rute', 0, false, 'C', 0, '', 0);

    $pdf->Ln();
    $pdf->Ln();
   $pdf->Cell(0, 5,'Tanggal : '.date("d/m/Y"), 0, false, 'L', 0, '', 0,false, 'T', 'M');
// $pdf->Cell(0, 5, date("d/m/Y"), 0, false, 'L', 0, '', 0, false, 'T', 'M');  
$pdf->Ln();
$pdf->Ln();
    

    // Set some content to print
    $i = 1;
   $html = '<table border="1" colspan="0" width="110%">
           <tr style="font-size:15px;" align="center" bgcolor="orange">
              <th width="50px">No</th>
              <th>ID Rute</th>
              <th>Berangkat Pada</th>
              <th>Dari</th>
              <th>Tujuan</th>
              <th>Harga</th>
              <th>ID Transportasi</th>
              
           </tr>';
 foreach($data['d_rute'] as $key){
     $html .= '<tr style="font-size:15px;">
                  <td> '.$i.'</td>
                  <td> '.$key['ruteid'].'</td>
                  <td> '.$key['depart_at'].'</td>
                  <td> '.$key['rute_from'].'</td>
                  <td> '.$key['rute_to'].'</td>
                  <td> '.$key['price'].'</td>
                  <td> '.$key['transportationid'].'</td>
               </tr>';
              $i++;
  }
  $html .= '</table>';

    
     

  
    // Print text using writeHTMLCell()
    $pdf->writeHTML($html);   
        
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Laporan_Stasiun.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
    }

    function print_tipe(){
      
      $data['d_transp_type'] = $this->M_Report->transportation_type();
    
        
      $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

         
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Muhammad Saqlain Arif');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
  $tDate = date("F j, Y, g:i a");
    // set default header data
    $pdf->SetHeaderData('/logo-light.png',30, "Tiket Kereta Api", "Jln.Siliwangi No.56", array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
  
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
  
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(15);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
  
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }   
  
    // ---------------------------------------------------------    
  
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
     $pdf->setPrintHeader(true);
    $pdf->setPrintFooter(true);
    $pdf->AddPage(); 
  $pdf->setPrintHeader(false);
    
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    $pdf->Cell(0, 5,'Laporan Tipe Transportasi', 0, false, 'C', 0, '', 0);

    $pdf->Ln();
    $pdf->Ln();
   $pdf->Cell(0, 5,'Tanggal : '.date("d/m/Y"), 0, false, 'L', 0, '', 0,false, 'T', 'M');
// $pdf->Cell(0, 5, date("d/m/Y"), 0, false, 'L', 0, '', 0, false, 'T', 'M');  
$pdf->Ln();
$pdf->Ln();
    

    // Set some content to print
    $i = 1;
   $html = '<table border="1" colspan="0" width="140%">
           <tr style="font-size:15px;" align="center" bgcolor="orange">
              <th width="50px">No</th>
              <th>ID Tipe Transportasi</th>
              <th>Deskripsi</th>
              
           </tr>';
 foreach($data['d_transp_type'] as $key){
     $html .= '<tr style="font-size:15px;">
                  <td> '.$i.'</td>
                  <td> '.$key['transportation_typeid'].'</td>
                  <td> '.$key['description'].'</td>

               </tr>';
              $i++;
  }
  $html .= '</table>';

    
     

  
    // Print text using writeHTMLCell()
    $pdf->writeHTML($html);   
        
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Laporan_Stasiun.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
    }

    function rute_from($rute_from){
        $data['d_stasiun'] = $this->M_Report->getstasiun($rute_from)->result();

        foreach ($data['d_stasiun'] as $key) {
            $key->name;
            return $key->name. " (".$key->abbr.") ".$key->city;
        }
          
    }

    function rute_to($rute_to){
        $data['d_stasiun'] = $this->M_Report->getstasiunto($rute_to)->result();

        foreach ($data['d_stasiun'] as $key) {
            $key->name;
            return $key->name. " (".$key->abbr.") ".$key->city;
        }
          
    }

    function rute_fromp($rute_fromp){
        $data['d_airport'] = $this->M_Report->getPfrom($rute_fromp)->result();

        foreach ($data['d_airport'] as $key) {
            $key->name;
            return $key->name. " (".$key->abbr.") ".$key->city;
        }
          
    }

    function rute_top($rute_top){
        $data['d_airport'] = $this->M_Report->getPto($rute_top)->result();

        foreach ($data['d_airport'] as $key) {
            $key->name;
            return $key->name. " (".$key->abbr.") ".$key->city;
        }
          
    }

    function print_jadwal(){
      
      $data['d_jadwal'] = $this->M_Report->jadwal()->result();
    
        
      $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

         
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Muhammad Saqlain Arif');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
  $tDate = date("F j, Y, g:i a");
    // set default header data
    $pdf->SetHeaderData('/logo-light.png',30, "Tiket Kereta Api", "Jln.Siliwangi No.56", array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
  
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
  
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(15);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
  
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }   
  
    // ---------------------------------------------------------    
  
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
     $pdf->setPrintHeader(true);
    $pdf->setPrintFooter(true);
    $pdf->AddPage(); 
  $pdf->setPrintHeader(false);
    
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    $pdf->Cell(0, 5,'Laporan Jadwal Pemberangkatan', 0, false, 'C', 0, '', 0);

    $pdf->Ln();
    $pdf->Ln();
   $pdf->Cell(0, 5,'Tanggal : '.date("d/m/Y"), 0, false, 'L', 0, '', 0,false, 'T', 'M');
// $pdf->Cell(0, 5, date("d/m/Y"), 0, false, 'L', 0, '', 0, false, 'T', 'M');  
$pdf->Ln();
$pdf->Ln();
    
//     for ($i=0; $i < count($data['d_jadwal']); $i++) { 
//   // print_r($data['d_rute'][$i]["rute_from"]);
//   $query = $this->db->query("SELECT name,city,abbr from stasiun where stasiunid = '".$data['d_jadwal'][$i]["rute_from"]."'");
//   $data[$i] = $query->result_array();
  
// $data['singkatanfrom'][$i] = $data[$i][0]["name"]." (".$data[$i][0]["abbr"].") ".$data[$i][0]["city"];
// }

    // Set some content to print
    $i = 1;
    $a = 0;
   $html = '<table border="1" colspan="0" width="110%">
           <tr style="font-size:15px;" bgcolor="orange">
              <th width="50px"> No</th>
              <th> Rute From</th>
              <th> Name</th>
              <th> Rute To</th>
              <th> Time</th>
              <th> Price</th>
              <th> Seat Qty</th>
              <th> Seat Reserved</th>
              
           </tr>';
 foreach($data['d_jadwal'] as $data){
     $html .= '<tr style="font-size:15px;">
                  <td> '.$i.'</td>
                  <td align="center"> '.$this->rute_from($data->rute_from).'</td>
                  <td> '.$data->description.'</td>
                  <td align="center"> '.$this->rute_to($data->rute_to).'</td>
                  <td> '.$data->time.'</td>
                  <td> '.$data->price.'</td>
                  <td> '.$data->seat_qty.'</td>
                  <td> '.$data->Seat_Reserved.'</td>
               </tr>';
              $i++;
              $a++;
  }
  $html .= '</table>';

    
     

  
    // Print text using writeHTMLCell()
    $pdf->writeHTML($html);   
        
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Laporan_Jadwal_Pemberangkatan.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
    }

     function print_jadwal_p(){
      
      $data['d_jadwal_pe'] = $this->M_Report->jadwal_PE()->result();
    
        
      $pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

         
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Muhammad Saqlain Arif');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
  $tDate = date("F j, Y, g:i a");
    // set default header data
    $pdf->SetHeaderData('/logo-light.png',30, "Tiket Kereta Api", "Jln.Siliwangi No.56", array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
  
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
  
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(15);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
  
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }   
  
    // ---------------------------------------------------------    
  
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
     $pdf->setPrintHeader(true);
    $pdf->setPrintFooter(true);
    $pdf->AddPage(); 
  $pdf->setPrintHeader(false);
    
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    $pdf->Cell(0, 5,'Laporan Jadwal Pemberangkatan', 0, false, 'C', 0, '', 0);

    $pdf->Ln();
    $pdf->Ln();
   $pdf->Cell(0, 5,'Tanggal : '.date("d/m/Y"), 0, false, 'L', 0, '', 0,false, 'T', 'M');
// $pdf->Cell(0, 5, date("d/m/Y"), 0, false, 'L', 0, '', 0, false, 'T', 'M');  
$pdf->Ln();
$pdf->Ln();
    
//     for ($i=0; $i < count($data['d_jadwal']); $i++) { 
//   // print_r($data['d_rute'][$i]["rute_from"]);
//   $query = $this->db->query("SELECT name,city,abbr from stasiun where stasiunid = '".$data['d_jadwal'][$i]["rute_from"]."'");
//   $data[$i] = $query->result_array();
  
// $data['singkatanfrom'][$i] = $data[$i][0]["name"]." (".$data[$i][0]["abbr"].") ".$data[$i][0]["city"];
// }

    // Set some content to print
    $i = 1;
    $a = 0;
   $html = '<table border="1" colspan="0" width="110%">
           <tr style="font-size:15px;" bgcolor="orange">
              <th width="50px"> No</th>
              <th> Rute From</th>
              <th> Name</th>
              <th> Rute To</th>
              <th> Time</th>
              <th> Price</th>
              <th> Seat Qty</th>
              <th> Seat Reserved</th>
              
           </tr>';
 foreach($data['d_jadwal_pe'] as $data){
     $html .= '<tr style="font-size:15px;">
                  <td> '.$i.'</td>
                  <td align="center"> '.$this->rute_fromp($data->rute_from).'</td>
                  <td> '.$data->description.'</td>
                  <td align="center"> '.$this->rute_top($data->rute_to).'</td>
                  <td> '.$data->depart_at.'-'.$data->time.'</td>
                  <td> '.$data->price.'</td>
                  <td> '.$data->seat_qty.'</td>
                  <td> '.$data->Seat_Reserved.'</td>
               </tr>';
              $i++;
              $a++;
  }
  $html .= '</table>';

    
     

  
    // Print text using writeHTMLCell()
    $pdf->writeHTML($html);   
        
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Laporan_Jadwal_Pemberangkatan.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
    }

    function print_pendapatan(){
      $awal = $this->input->post('awal');
      $akhir = $this->input->post('akhir');
      
      $data['d_pendapatan'] = $this->M_Report->pendapatanrep($awal,$akhir);
    
        
      $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

         
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Muhammad Saqlain Arif');
    $pdf->SetTitle('TCPDF Example 001');
    $pdf->SetSubject('TCPDF Tutorial');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
  $tDate = date("F j, Y, g:i a");
    // set default header data
    $pdf->SetHeaderData('/logo-light.png',30, "Tiket Kereta Api", "Jln.Siliwangi No.56", array(0,64,255), array(0,64,128));
    $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
  
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
  
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(15);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
  
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
  
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
  
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
        require_once(dirname(__FILE__).'/lang/eng.php');
        $pdf->setLanguageArray($l);
    }   
  
    // ---------------------------------------------------------    
  
    // set default font subsetting mode
    $pdf->setFontSubsetting(true);   
  
    // Set font
    // dejavusans is a UTF-8 Unicode font, if you only need to
    // print standard ASCII chars, you can use core fonts like
    // helvetica or times to reduce file size.
    $pdf->SetFont('dejavusans', '', 14, '', true);   
  
    // Add a page
    // This method has several options, check the source code documentation for more information.
     $pdf->setPrintHeader(true);
    $pdf->setPrintFooter(true);
    $pdf->AddPage(); 
  $pdf->setPrintHeader(false);
    
    // set text shadow effect
    $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));    
    $pdf->Cell(0, 5,'Laporan Pendapatan', 0, false, 'C', 0, '', 0);

    $pdf->Ln();
    $pdf->Ln();
   $pdf->Cell(0, 5,'Tanggal : '.date("d/m/Y"), 0, false, 'L', 0, '', 0,false, 'T', 'M');
// $pdf->Cell(0, 5, date("d/m/Y"), 0, false, 'L', 0, '', 0, false, 'T', 'M');  
$pdf->Ln();
$pdf->Ln();
    

    // Set some content to print
    $i = 1;
   $html = '<table border="1" colspan="0" width="110%">
           <tr style="font-size:15px;" align="center" bgcolor="orange">
              <th width="50px">No</th>
              <th>reservation date</th>
              <th>Jumlah Transaksi</th>
              <th>Result</th>
              
           </tr>';
 foreach($data['d_pendapatan'] as $key){
     $html .= '<tr style="font-size:15px;">
                  <td> '.$i.'</td>
                  <td> '.$key['reservation_date'].'</td>
                  <td> '.$key['jumlah_transaksi'].'</td>
                  <td> '.$key['price'].'</td>

               </tr>';
              $i++;
  }
  $html .= '</table>';

    
     

  
    // Print text using writeHTMLCell()
    $pdf->writeHTML($html);   
        
  
    // ---------------------------------------------------------    
  
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output('Laporan_Pendapatan.pdf', 'I');    
  
    //============================================================+
    // END OF FILE
    //============================================================+
    }

	}
 ?>