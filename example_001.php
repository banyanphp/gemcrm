<?php






// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);


// set default header data
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

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
 	include('dbconnect.php');
	$quation_id=$_GET['id'];
						$dat=date('Y');
						$split = substr((string)$dat,-2);
							$no=$split;
							$no.="/";
							$mnth= date('m');
							$no.= $mnth;
							$no.="/";
					  $quation_id;
					  		
					$total="SELECT *, SUM(`enq_product_price`) AS total FROM `tbl_quotation`  WHERE `quotation_no`='$quation_id' AND `quotation_status`='1' GROUP BY  `quotation_no`";
					$query=mysqli_query($conn,$total);
					$res = mysqli_fetch_array($query);
						
					 $t= $res['total'];
// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect

// Set some content to print
$html ="<ul class='px-0 list-unstyled'>
					<li class='text-bold-800'>GEM INDIA SERVICE</li>
					<li></li>
					<li>Coimbatore,Tamilnadu</li>
					<li>India.</li>
				</ul>
			</div>
			<div class='col-md-6 col-sm-12 text-xs-center text-md-right'>
				<h2>Quotation</h2>
				<p class='pb-3' style='color:#0099d3;'>No : GEM ".$no."
					</p>
				<ul class='px-0 list-unstyled'>
		
					<li>TOTAL AMOUNT</li>
					<li class='lead text-bold-800'>Rs. ".$t." </li>
				</ul>

			</div>
		</div>";
			

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->Output(__DIR__ . '\invoice\Delivery Note.pdf', '');
// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.


//============================================================+
// END OF FILE
//============================================================+
