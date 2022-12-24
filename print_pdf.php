<?php
	function generateRow(){
		$contents = '';
		include_once('mysqli_connect.php');
		$sql = "SELECT * FROM registration";

		//use for MySQLi OOP
		$query = $dbc->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['register_id']."</td>
				<td>".$row['f_name']."</td>
				<td>".$row['l_name']."</td>
				<td>".$row['phonenumber']."</td>
				<td>".$row['registration_date']."</td>
				<td>".$row['address']."</td>
			</tr>
			";
		}

		return $contents;
	}

	require_once('tcpdf/tcpdf.php');
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetTitle("Generated PDF using TCPDF");
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetDefaultMonospacedFont('helvetica');
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetAutoPageBreak(TRUE, 10);
    $pdf->SetFont('helvetica', '', 11);
    $pdf->AddPage();
    $content = '';
    $content .= '
      	<h2 align="center">Generated PDF using TCPDF</h2>
      	<h4>Members Table</h4>
      	<table border="1" cellspacing="0" cellpadding="3">
           <tr>
                <th width="5%">ID</th>
				<th width="20%">First Name</th>
				<th width="20%">Last Name</th>
				<th width="20%">Phone Number</th>
				<th width="20%">Booking Date</th>
				<th width="55%">Address</th> 
           </tr>
      ';
    $content .= generateRow();
    $content .= '</table>';
    $pdf->writeHTML($content);
    $pdf->Output('users.pdf', 'I');
