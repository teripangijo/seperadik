<?php 
function tgl_indo($tanggal)
{
	//yyyy-mm-dd ke dd-mm-yyyy
	$tgl = substr($tanggal, 8, 2);
	$bln = substr($tanggal, 5, 2);
	$thn = substr($tanggal, 0, 4);

	$tanggal_baru = $tgl.'-'.$bln.'-'.$thn;
	return $tanggal_baru;
}
function tgl_sql($tanggal)
{
	//dd-mm-yyyy ke yyyy-mm-dd 
	$bln = substr($tanggal, 0, 2);
	$tgl = substr($tanggal, 3, 2);
	$thn = substr($tanggal, 6, 4);

	$tanggal_baru = $thn.'-'.$bln.'-'.$tgl;
	return $tanggal_baru;
}
function tgl_input($tanggal)
{
	//dd-mm-yyyy ke yyyy-mm-dd 
	$tgl = substr($tanggal, 0, 2);
	$bln = substr($tanggal, 3, 2);
	$thn = substr($tanggal, 6, 4);

	$tanggal_baru = $thn.'-'.$bln.'-'.$tgl;
	return $tanggal_baru;
}
function tgl_dp($tanggal)
{
	//yyyy-mm-dd ke dd-mm-yyyy
	$tgl = substr($tanggal, 8, 2);
	$bln = substr($tanggal, 5, 2);
	$thn = substr($tanggal, 0, 4);

	$tanggal_baru = $bln.'-'.$tgl.'-'.$thn;
	return $tanggal_baru;
}

function tgl_text($tanggal)
{
	//yyyy-mm-dd ke dd-mm-yyyy
	$tgl = substr($tanggal, 8, 2);
	$bln = substr($tanggal, 5, 2);
	$thn = substr($tanggal, 0, 4);

	switch ($bln) {
		case '01':
			$bln = "Jan";
			break;
		case '02':
			$bln = "Feb";
			break;
		case '03':
			$bln = "Mar";
			break;
		case '04':
			$bln = "Apr";
			break;
		case '05':
			$bln = "Mei";
			break;
		case '06':
			$bln = "Jun";
			break;
		case '07':
			$bln = "Jul";
			break;
		case '08':
			$bln = "Agu";
			break;
		case '09':
			$bln = "Sep";
			break;
		case '10':
			$bln = "Okt";
			break;
		case '11':
			$bln = "Nov";
			break;
		case '12':
			$bln = "Des";
			break;	
	}

	$tanggal_baru = $tgl.'-'.$bln."-".$thn;
	return $tanggal_baru;
}



 ?>