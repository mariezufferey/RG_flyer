<?php

$name = $_POST['name'];
$priority = $_POST['priority'];

$champ1_value = $_POST['champ1_value'];
$champ2_value = $_POST['champ2_value'];
$champ3_value = $_POST['champ3_value'];
$champ4_value = $_POST['champ4_value'];
$champ5_value = $_POST['champ5_value'];
$champ6_value = $_POST['champ6_value'];
$champ7_value = $_POST['champ7_value'];
$champ8_value = $_POST['champ8_value'];
$champ9_value = $_POST['champ9_value'];

$p1_col1_tit1 = $_POST['p1_col1_tit1'];
$p1_col1_tit1_col_expd = explode(",",$_POST['p1_col1_tit1_col'],3);
$p1_col1_tit2 = $_POST['p1_col1_tit2'];
$p1_col1_tit2_col_expd = explode(",",$_POST['p1_col1_tit2_col'],3);
$p1_col1_bluename = $_POST['p1_col1_bluename'];
$p1_col1_bluename_col_expd = explode(",",$_POST['p1_col1_bluename_col'],3);
$p1_col1_assocname = $_POST['p1_col1_assocname'];
$p1_col1_assocname_col1_expd = explode(",",$_POST['p1_col1_assocname_col1'],3);
$p1_col1_assocname_col2_expd = explode(",",$_POST['p1_col1_assocname_col2'],3);


$membre_cat1_name = $_POST['membre_cat1_name'];
$membre_cat1_value = $_POST['membre_cat1_value'];
$membre_cat2_name = $_POST['membre_cat2_name'];
$membre_cat2_value = $_POST['membre_cat2_value'];
$membre_cat3_name = $_POST['membre_cat3_name'];
$membre_cat3_value = $_POST['membre_cat3_value'];
$membre_cat4_name = $_POST['membre_cat4_name'];
$membre_cat4_value = $_POST['membre_cat4_value'];

$membre_footnote = $_POST['membre_footnote'];

$p1_col2_titre1 = $_POST['p1_col2_titre1'];  // local
$p1_col2_titre1_col_expd = explode(",",$_POST['p1_col2_titre1_col'],3);
$p1_col2_desc1 = $_POST['p1_col2_desc1'];  // same as lokal
$p1_col2_desc1_adress = $_POST['p1_col2_desc1_adress'];
$p1_col2_titre2 = $_POST['p1_col2_titre2'];  // national
$p1_col2_titre2_col_expd = explode(",",$_POST['p1_col2_titre2_col'],3);
$p1_col2_desc2 = $_POST['p1_col2_desc2']; // same as national
$p1_col2_desc2_adress = $_POST['p1_col2_desc2_adress'];
$p1_col2_titre3 = $_POST['p1_col2_titre3'];  // centres-nature
$p1_col2_titre3_col_expd = explode(",",$_POST['p1_col2_titre3_col'],3);
$p1_col2_desc3 = $_POST['p1_col2_desc3']; // same as centre nature
$p1_col2_desc3_adress = $_POST['p1_col2_desc3_adress'];



$p1_col3_titre1 = $_POST['p1_col3_titre1'];
$p1_col3_titre1_col_expd=explode(",",$_POST['p1_col3_titre1_col'],3);
$p1_col3_titre2 = $_POST['p1_col3_titre2'];
$p1_col3_titre2_col_expd=explode(",",$_POST['p1_col3_titre2_col'],3);
$p1_col3_titre3 = $_POST['p1_col3_titre3'];
$p1_col3_titre3_col_expd=explode(",",$_POST['p1_col3_titre3_col'],3);

$p1_col3_footer_verein = $_POST['p1_col3_footer_verein'];
$p1_col3_footer_adresse = $_POST['p1_col3_footer_adresse'];
$p1_col3_footer_col_expd=explode(",",$_POST['p1_col3_footer_col'],3);

$p2_col1_titre1 = $_POST['p2_col1_titre1'];  // qui sommes-nous
$p2_col1_titre1_col_expd=explode(",",$_POST['p2_col1_titre1_col'],3);
$p2_col1_texte1 = $_POST['p2_col1_texte1'];  // qui sommes-nous -> texte

$p2_col1_titre2 = $_POST['p2_col1_titre2'];  // actions concrètes
$p2_col1_titre2_col_expd=explode(",",$_POST['p2_col1_titre2_col'],3);
$p2_col1_texte2 = $_POST['p2_col1_texte2'];  // actions concrètes -> texte

$p2_col2_titre1 = $_POST['p2_col2_titre1'];  // apprendre et découvrir
$p2_col2_titre1_col_expd=explode(",",$_POST['p2_col2_titre1_col'],3);
$p2_col2_texte1 = $_POST['p2_col2_texte1'];  // apprendre et découvrir -> texte

$p2_col2_titre2 = $_POST['p2_col2_titre2'];  // rejoins nous
$p2_col2_titre2_col_expd=explode(",",$_POST['p2_col2_titre2_col'],3);
$p2_col2_texte2 = $_POST['p2_col2_texte2'];  // rejoins nous -> texte


$adresse_envoi = $_POST['adresse_envoi'];
$timbre_texte1 = $_POST['timbre_texte1'];
$timbre_texte2 = $_POST['timbre_texte2'];

$logo_sekt='images/LOGO_RG.50.PNG';
$logo_foo = 'images/tulipe.PNG';


# défaut pour le remplissage de l'adresse
//	<input type="radio" name="bleed" value="0" checked="checked"> A imprimer soi-même (A4)</input><br />
//	<input type="radio" name="bleed" value="1" > Pour l’imprimerie (avec fond perdu, traits de coupe et repères de pliage)</input><br />



include('rotate_addon.php');
define('FPDF_FONTPATH', 'fpdf/font/');

//include('myvars.php');

$lan = 'fr';




// --- Document Setup --- //

if ($_POST['bleed'] == 1) {
	$c = 7.5;
	$b = 3;
	$o = 2.1;
	$img_cut = '_c';
	$pdf = new PDF('L', 'mm', array(210 + 2 * $c, 297 + 2 * $c));
} else {
	$c = 0;
	$b = 0;
	$o = 0;
	$img_cut = '';
	$pdf = new PDF('L', 'mm', 'A4');
}


//$pdf = new FPDF();

$pdf->SetAutoPageBreak(false);

$pdf->AddPage();

$pdf->SetFont('Helvetica','',10);

// --- Add Fonts --- //

$pdf->AddFont('SyntaxLT', '', 'helvetica.php');  /// syntax_lt_r ????
$pdf->AddFont('SyntaxLT', 'I', 'helvetica.php'); // syntax_lt_i ????
$pdf->AddFont('SyntaxLT', 'B', 'helvetica.php');  // syntax_lt_b ???


// -------- Seite 1 -------- //

// --- Spalte 1 --- //


$stdx = 6 + $c;

$pdf->SetXY($stdx, 40 + $c);

//$pdf->SetTextColor(0, 0, 0);
$pdf->SetTextColor($p1_col1_tit1_col_expd[0], $p1_col1_tit1_col_expd[1], $p1_col1_tit1_col_expd[2]);
$pdf->SetFillColor(255, 255, 255);

// Ausgabe Text "Ja, ich werde Mitglied des XY"
$pdf->SetFont('SyntaxLT', '', 16); 
$pdf->Cell(80, 6.5, $p1_col1_tit1, 0, 2);

//$pdf->SetTextColor(135, 135, 135);
$pdf->SetTextColor($p1_col1_tit2_col_expd[0], $p1_col1_tit2_col_expd[1], $p1_col1_tit2_col_expd[2]);
$n = $pdf->GetStringWidth($p1_col1_tit2); 
$pdf->Cell($n, 6.5, $p1_col1_tit2, 0, 0);
//$pdf->SetTextColor(0, 110, 171);
$pdf->SetTextColor($p1_col1_bluename_col_expd[0], $p1_col1_bluename_col_expd[1], $p1_col1_bluename_col_expd[2]);

$n = $pdf->GetStringWidth($p1_col1_bluename); 
$pdf->Cell($n, 6.5, $p1_col1_bluename, 0, 0);
//$pdf->SetTextColor(135, 135, 135);
$pdf->SetTextColor($p1_col1_assocname_col1_expd[0], $p1_col1_assocname_col1_expd[1], $p1_col1_assocname_col1_expd[2]);

$mitglied_splitted = explode(' ', trim($p1_col1_assocname));
$str3 = array_shift($mitglied_splitted);

$n = $pdf->GetStringWidth($str3);
$pdf->Cell($n, 6.5, $str3, 0, 2);
//$pdf->SetTextColor(63, 165, 53);
$pdf->SetTextColor($p1_col1_assocname_col2_expd[0], $p1_col1_assocname_col2_expd[1], $p1_col1_assocname_col2_expd[2]);

$pdf->SetX($stdx);
$str4 = implode(' ', $mitglied_splitted);
$pdf->MultiCell(86, 6.5, $str4, 0, 'L', 1);


// Ausgabe Text Adressdatenerfassung
$pdf->SetXY($stdx, 79 + $c);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('SyntaxLT', '', 10);   
// $pdf->Cell(80, 8, $adressen_name[$lan], 0, 2);
// $pdf->Cell(80, 8, $adressen_vorname[$lan], 0, 2);
// $pdf->Cell(80, 8, $adressen_strasse[$lan], 0, 2);
// $pdf->Cell(80, 8, $adressen_plzort[$lan], 0, 2);
// $pdf->Cell(80, 8, $adressen_geburtsdatum[$lan], 0, 2);
// $pdf->Cell(80, 8, $adressen_telefon[$lan], 0, 2);
// $pdf->Cell(80, 8, $adressen_email[$lan], 0, 2);
// $pdf->Cell(80, 8, $adressen_datum[$lan], 0, 2);
// $pdf->Cell(80, 8, $adressen_unterschrift[$lan], 0, 2);

$field=0;
if ($champ1_value != '') {
	$pdf->Cell(80, 8, $champ1_value, 0, 2);
	$field += 1;
}
if ($champ2_value != '') {
	$pdf->Cell(80, 8, $champ2_value, 0, 2);
	$field += 1;
}
if ($champ3_value != '') {
	$pdf->Cell(80, 8, $champ3_value, 0, 2);
	$field += 1;
}
if ($champ4_value != '') {
	$pdf->Cell(80, 8, $champ4_value, 0, 2);
	$field += 1;
}
if ($champ5_value != '') {
	$pdf->Cell(80, 8, $champ5_value, 0, 2);
	$field += 1;
}
if ($champ6_value != '') {
	$pdf->Cell(80, 8, $champ6_value, 0, 2);
	$field += 1;
}
if ($champ7_value != '') {
	$pdf->Cell(80, 8, $champ7_value, 0, 2);
	$field += 1;
}
if ($champ8_value != '') {
	$pdf->Cell(80, 8, $champ8_value, 0, 2);
	$field += 1;
}
if ($champ9_value != '') {
	$pdf->Cell(80, 8, $champ9_value, 0, 2);
	$field += 1;
}



// Linien Adressdatenerfassung
$pdf->SetDrawColor(135, 135, 135);
$x1 = $stdx + 26;
$x2 = $x1 + 60;
// for ($i = 0; $i < 9; $i++) {
// 	$y = 85 + $c + 8 * $i;
// 	$pdf->Line($x1, $y, $x2, $y);
// }
for ($i = 0; $i < $field; $i++) {
	$y = 85 + $c + 8 * $i;
	$pdf->Line($x1, $y, $x2, $y);
}

// Hintergrund Mitgliedschaften
$pdf->SetFillColor(200, 200, 200);
$x = $c - $b;
$w = 97 + $b;
$y = 157 + $c;
$h = 53 + $b;
$pdf->Rect($x, $y, $w, $h, 'F');


// Texte für Beiträge generieren

//...// HARD CODED

$ind_r = 8;
$pdf->SetXY($stdx + $ind_r, 162 + $c);

// Ausgabe Text Beiträge

if ($membre_cat1_name != '') {
	$pdf->SetFont('SyntaxLT', '', 10);
	$pdf->Cell(45, 5, $membre_cat1_name, 0, 0);
	$pdf->Cell(33, 5, $membre_cat1_value, 0, 2);
	$linenr += 1;
}

if ($membre_cat2_name != '') {
	$pdf->SetX($stdx + $ind_r);
	$pdf->Cell(45, 5, $membre_cat2_name, 0, 0);
	$pdf->Cell(33, 5, $membre_cat2_value, 0, 2);
	$linenr += 1;
}
if ($membre_cat3_name != '') {
	$pdf->SetX($stdx + $ind_r);
	$pdf->Cell(45, 5, $membre_cat3_name , 0, 0);
	$pdf->Cell(33, 5, $membre_cat3_value, 0, 2);
	$linenr += 1;
}
if ($membre_cat4_name != '') {
    $pdf->SetX($stdx + $ind_r);
    $pdf->Cell(45, 5, $membre_cat4_name, 0, 0);
    $pdf->Cell(33, 5, $membre_cat4_value, 0, 2);
    $linenr += 1;
}



// Linien vor Mitgliedschaften
$pdf->SetDrawColor(255, 255, 255);
$x1 = $stdx;
$x2 = $x1 + 6;
for ($i = 0; $i < $linenr; $i++) {
	$y = 166 + $c + 5 * $i;
	$pdf->Line($x1, $y, $x2, $y);
}

$pdf->SetXY($stdx + $ind_r, 186 + $c);

// Ausgabe Text zu Mitgliedschaften
$pdf->SetFont('SyntaxLT', '', 10.5);
$pdf->MultiCell(80, 4.75, $membre_footnote, 0, 'L', 1);



// Schnittlinie
$pdf->SetDrawColor(135, 135, 135);
$x = 97 + $c;
for ($y1 = 1.5 + $c; $y1 < (210 + $c); $y1 += 6) {
	$y2 = $y1 + 3;
	$pdf->Line($x, $y1, $x, $y2);
}

// --- Spalte 2 --- //

$stdx = 102 + $c;

// Ausgabe rotierte Titel

$pdf->SetFont('SyntaxLT', 'BU', 13.5);
//$pdf->SetTextColor(0, 110, 171);  // MZ: no I split so can each title can have different color




if ($lan == 'fr') {
    $pdf->SetTextColor($p1_col2_titre1_col_expd[0], $p1_col2_titre1_col_expd[1], $p1_col2_titre1_col_expd[2]);
    $pdf->RotatedText($stdx + 1, 22 + $c, $p1_col2_titre1, 10);
    $pdf->SetTextColor($p1_col2_titre2_col_expd[0], $p1_col2_titre2_col_expd[1], $p1_col2_titre2_col_expd[2]);
    $pdf->RotatedText($stdx + 1, 92 + $c, $p1_col2_titre2, 10);
    $pdf->SetTextColor($p1_col2_titre3_col_expd[0], $p1_col2_titre3_col_expd[1], $p1_col2_titre3_col_expd[2]);
    $pdf->RotatedText($stdx + 1, 157 + $c, $p1_col2_titre3, 10);
    $ebene2 = $national['fr'];
    $ebene2_adr = $addr_national['fr'];
    $ebene3 = $centres;
    $ebene3_adr = 'www.birdlife.ch/centres-nature';
}

// Ausgabe Text lokal
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY($stdx, 25 + $c);
$pdf->SetFont('SyntaxLT', '', 10);
$pdf->CustomJustify(trim($p1_col2_desc1), 90, 3.75); // $lokal

$pdf->SetFont('SyntaxLT', '', 8);
$pdf->SetXY($stdx, $pdf->GetY() + 3.25);
$pdf->MultiCell(90, 3.25, $p1_col2_desc1_adress, 0, 'L', 0);

// Ausgabe Text Ebene 2
$pdf->SetXY($stdx, 95 + $c);
$pdf->SetFont('SyntaxLT', '', 10);
$pdf->CustomJustify(trim($p1_col2_desc2), 90, 3.75); // $ebene2

$pdf->SetFont('SyntaxLT', '', 8);
$pdf->SetX($stdx);
$pdf->MultiCell(90, 3.25, "\n" . $p1_col2_desc2_adress, 0, 'L', 0);

// Ausgabe Text Ebene 3
$pdf->SetXY($stdx, 157 + 3 + $c);
$pdf->SetFont('SyntaxLT', '', 10);
$pdf->CustomJustify($p1_col2_desc3, 90, 3.75);  //$ebene3

$pdf->SetFont('SyntaxLT', '', 8);
$pdf->SetX($stdx);
$pdf->MultiCell(90, 3.25, "\n" . $p1_col2_desc3_adress, 0, 'L', 0);

// Logos
if ($logo_sekt != '') {
	$size = getimagesize($logo_sekt);
	$relation = $size[0] / $size[1];
	if ($relation > 10 / 3) {
		$width = 40;
		$height = 40 / $relation;
	} else {
		$width = 12 * $relation;
		$height = 12;
	}
	$pdf->Image($logo_sekt, 190 + $c - $width, 22 + $c - $height, $width, $height);
}


if ($lan == 'fr') {
	$pdf->Image($logo_foo, 174.17 + $c, 80 + $c, 15.83, 12.02);
}


// --- Spalte 3 --- //

$stdx = 202 + $c;

// Titelbild
$pdf->Image('images/main.jpg', 197 + $c, $c - $b, 100 + $b, 210 + 2 * $b);

// Ausgabe Text Titel
$pdf->SetXY($stdx, 7 + $c);
	

if ($lan == 'fr') {
	//$pdf->SetTextColor(251, 204, 42);
	$pdf->SetTextColor($p1_col3_titre1_col_expd[0], $p1_col3_titre1_col_expd[1], $p1_col3_titre1_col_expd[2]);
	$pdf->SetFont('SyntaxLT', 'B', 28);
	//$pdf->Cell(89, 13, $titel1[$lan], 0, 2);
	$pdf->Cell(89, 13, $p1_col3_titre1, 0, 2);
}

if ($lan == 'fr') {
	//$pdf->SetTextColor(255, 255, 255);
	$pdf->SetTextColor($p1_col3_titre2_col_expd[0], $p1_col3_titre2_col_expd[1], $p1_col3_titre2_col_expd[2]);
	$pdf->SetFont('SyntaxLT', '', 17);
	//$pdf->Cell(89, 9.5, $titel2[$lan], 0, 2);
	$pdf->Cell(89, 13, $p1_col3_titre2, 0, 2);
}

//$pdf->SetTextColor(255, 255, 255);
$pdf->SetTextColor($p1_col3_titre3_col_expd[0], $p1_col3_titre3_col_expd[1], $p1_col3_titre3_col_expd[2]);
$pdf->SetFont('SyntaxLT', '', 17);
//$pdf->Cell(89, 9.5, $titel3[$lan], 0, 2);
$pdf->Cell(89, 9.5, $p1_col3_titre3, 0, 2);	
	

// Logo Sektion
if ($logo_sekt != '') {
	$size = getimagesize($logo_sekt);
	$relation = $size[0] / $size[1];
	if ($size[0] > $size[1]) {
		$width = 20;
		$height = 20 / $relation;
	} else {
		$width = 20 * $relation;
		$height = 20;
	}
	$pdf->Image($logo_sekt, 220 + $c - $width, 182 + $c, $width, $height);
}

// Ausgabe Adresse Sektion
$pdf->SetXY($stdx + 21, 182 + $c);
//$pdf->SetTextColor(0, 0, 0); // black
//$pdf->SetTextColor(255, 255, 255); // MZ: white
$pdf->SetTextColor($p1_col3_footer_col_expd[0], $p1_col3_footer_col_expd[1], $p1_col3_footer_col_expd[2]); // MZ: white
$pdf->SetFont('SyntaxLT', 'B', 12);
$pdf->MultiCell(60, 6, $p1_col3_footer_verein, 0, 'L', 0);

$pdf->SetX($stdx + 21);
$pdf->SetFont('SyntaxLT', '', 8);
$pdf->MultiCell(70, 4, $p1_col3_footer_adresse, 0, 'L', 0);
	
	
	

// --- Schnittmarken --- //

if ($_POST['bleed'] == 1) {
    $pdf->SetDrawColor(255, 255, 255);
    $pdf->SetLineWidth(0.3);
    
    // oben
    $pdf->Line($c, 0, $c, $c - $o);
    $pdf->Line($c + 297, 0, $c + 297, $c - $o);
    // links
    $pdf->Line(0, $c, $c - $o, $c);
    $pdf->Line(0, $c + 210, $c - $o, $c + 210);
    // unten
    $pdf->Line($c, 210 + $c + $o, $c, 210 + 2 * $c);
    $pdf->Line($c + 297, 210 + $c + $o, $c + 297, 210 + 2 * $c);
    // rechts
    $pdf->Line(297 + $c + $o, $c, 297 + 2 * $c, $c);
    $pdf->Line(297 + $c + $o, $c + 210, 297 + 2 * $c, $c + 210);
    
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0.1);
    
    // oben
    $pdf->Line($c, 0, $c, $c - $o);
    $pdf->Line($c + 97, 0, $c + 97, $c - $o);
    $pdf->Line($c + 197, 0, $c + 197, $c - $o);
    $pdf->Line($c + 297, 0, $c + 297, $c - $o);
    // links
    $pdf->Line(0, $c, $c - $o, $c);
    $pdf->Line(0, $c + 210, $c - $o, $c + 210);
    // unten
    $pdf->Line($c, 210 + $c + $o, $c, 210 + 2 * $c);
    $pdf->Line($c + 97, 210 + $c + $o, $c + 97, 210 + 2 * $c);
    $pdf->Line($c + 197, 210 + $c + $o, $c + 197, 210 + 2 * $c);
    $pdf->Line($c + 297, 210 + $c + $o, $c + 297, 210 + 2 * $c);
    // rechts
    $pdf->Line(297 + $c + $o, $c, 297 + 2 * $c, $c);
    $pdf->Line(297 + $c + $o, $c + 210, 297 + 2 * $c, $c + 210);
}

// -------- End Seite 1 -------- //



// -------- Seite 2 -------- //

$pdf->AddPage();
$pdf->SetTopMargin(0);
$pdf->SetLeftMargin(0);


// --- Spalte 1 --- //

$stdx = 6 + $c;

// Bilder
$pdf->Image('images/p2c1b1_b.jpg', $c - $b, $c - $b, 95 + $b, 58.5 + $b);
$pdf->Image('images/p2c1b2_b.jpg', $c - $b, 116 + $c, 47.5 + $b, 48);
$pdf->Image('images/p2c1b3_b.jpg', 47.5 + $c, 116 + $c, 47.5, 48);

// Ausgabe Text Wer sind wir?
$pdf->SetXY($stdx, 63.5 + $c);
//$pdf->SetTextColor(63, 165, 53);
$pdf->SetTextColor($p2_col1_titre1_col_expd[0], $p2_col1_titre1_col_expd[1], $p2_col1_titre1_col_expd[2]);
$pdf->SetFont('SyntaxLT', 'B', 18);
$pdf->Cell(89, 5, $p2_col1_titre1, 0, 2);

$pdf->SetXY($stdx, 71 + $c);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('SyntaxLT', '', 10);
$pdf->CustomJustify($p2_col1_texte1, 89, 4.25);


// Ausgabe Text Artenvielfalt erhalten
$pdf->SetXY($stdx, 169 + $c);
//$pdf->SetTextColor(63, 165, 53);
$pdf->SetTextColor($p2_col1_titre2_col_expd[0], $p2_col1_titre2_col_expd[1], $p2_col1_titre2_col_expd[2]);
$pdf->SetFont('SyntaxLT', 'B', 18);
$pdf->Cell(89, 5, $p2_col1_titre2, 0, 2);

$pdf->SetXY($stdx, 176.5 + $c);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('SyntaxLT', '', 10);
$pdf->CustomJustify($p2_col1_texte2, 89, 4.25);


// --- Spalte 2 --- //

$stdx = 105 + $c;

// Bilder
$pdf->Image('images/p2c2b1_b.jpg', 105 + $c, 58.5 + $c, 90, 57.5);
$pdf->Image('images/p2c2b2_b.jpg', 105 + $c, 164 + $c, 45, 46 + $b);
$pdf->Image('images/p2c2b3_b.jpg', 150 + $c, 164 + $c, 45, 46 + $b);

// Ausgabe Text Mitmachen erhalten
$pdf->SetXY($stdx, 15 + $c);
//$pdf->SetTextColor(63, 165, 53);
$pdf->SetTextColor($p2_col2_titre1_col_expd[0], $p2_col2_titre1_col_expd[1], $p2_col2_titre1_col_expd[2]);
$pdf->SetFont('SyntaxLT', 'B', 18);
$pdf->Cell(89, 5, $p2_col2_titre1, 0, 2);

$pdf->SetXY($stdx, 22.5 + $c);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('SyntaxLT', '', 10);
$pdf->CustomJustify($p2_col2_texte1, 90, 4.25);

// Ausgabe Text Mitglied werden
$pdf->SetXY($stdx, 121 + $c);
//$pdf->SetTextColor(63, 165, 53);
$pdf->SetTextColor($p2_col2_titre2_col_expd[0], $p2_col2_titre2_col_expd[1], $p2_col2_titre2_col_expd[2]);
$pdf->SetFont('SyntaxLT', 'B', 18);
$pdf->Cell(89, 5, $p2_col2_titre2, 0, 2);

$pdf->SetXY($stdx, 128.5 + $c);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('SyntaxLT', '', 10);
$pdf->CustomJustify($p2_col2_texte2, 90, 4.25);


// --- Spalte 3 --- //

// Logos
$width_n = 20.83;
$height_n = 15.83;

if ($lan == 'fr') {
    $width_k = -5;
    $height_k = 0;
}




if ($logo_sekt != '') {
	$size = getimagesize($logo_sekt);
	$relation = $size[0] / $size[1];
	if ($relation > 32 / 16) {
		$width_s = 32;
		$height_s = 32 / $relation;
	} elseif ($relation > 18 / 16) {
		$width_s = 16 * $relation;
		$height_s = 16;
	} elseif ($relation > 18 / 24) {
		$width_s = 18;
		$height_s = 18 / $relation;
	} else {
		$width_s = 24 * $relation;
		$height_s = 24;
	}
	
	if ($width_n + $width_k + $width_s > 81) {
		$resize = 81 / ($width_n + $width_k + $width_s);
		$width_n = $width_n * $resize;
		$height_n = $height_n * $resize;
		$width_k = $width_k * $resize;
		$height_k = $height_k * $resize;
		$width_s = $width_s * $resize;
		$height_s = $height_s * $resize;
	}
	
	$pdf->RotatedImage($logo_sekt, 232 - $height_s + $c, 202 + $c, $width_s, $height_s, 90);
}

if ($lan == 'fr') {
	$pdf->RotatedImage($logo_foo, 232 - $height_n + $c, 192 - $width_s - $width_k + $c, $width_n, $height_n, 90);
}

// Frankierung

$pdf->SetDrawColor(135, 135, 135);

$pdf->Rect(212 + $c, 12 + $c, 14, 14, 'D');

$pdf->SetTextColor(135, 135, 135);
$pdf->SetFont('SyntaxLT', '', 7);

if ($lan == 'fr') {
    //$pdf->RotatedText(218 + $c, 24 + $c, $frankieren1[$lan], 90);
    //$pdf->RotatedText(221 + $c, 22 + $c, $frankieren2[$lan], 90);
    $pdf->RotatedText(218 + $c, 24 + $c, $timbre_texte1, 90);
    $pdf->RotatedText(221 + $c, 22 + $c, $timbre_texte2, 90);
}



// Vereinsadresse
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('SyntaxLT', '', 12);

$anmeldung_adresse_zeilen = explode("\n", $adresse_envoi);

$x = 259;
foreach ($anmeldung_adresse_zeilen as $zeile) {
	$zeile = rtrim($zeile);
	$pdf->RotatedText($x, 72.5, utf8_decode($zeile), 90);
	$x += 5.5;
}



// Schnittlinie
$pdf->SetDrawColor(135, 135, 135);
$x = 200 + $c;
for ($y1 = 1.5 + $c; $y1 < (210 + $c); $y1 += 6) {
	$y2 = $y1 + 3;
	$pdf->Line($x, $y1, $x, $y2);
}

$pdf->Image('shere.png', 197.5 + $c, 17 + $c, 5, 8);


// --- Schnittmarken --- //

if ($_POST['bleed'] == 1) {
    $pdf->SetDrawColor(255, 255, 255);
    $pdf->SetLineWidth(0.3);
    
    // oben
    $pdf->Line($c, 0, $c, $c - $o);
    $pdf->Line($c + 297, 0, $c + 297, $c - $o);
    // links
    $pdf->Line(0, $c, $c - $o, $c);
    $pdf->Line(0, $c + 210, $c - $o, $c + 210);
    // unten
    $pdf->Line($c, 210 + $c + $o, $c, 210 + 2 * $c);
    $pdf->Line($c + 297, 210 + $c + $o, $c + 297, 210 + 2 * $c);
    // rechts
    $pdf->Line(297 + $c + $o, $c, 297 + 2 * $c, $c);
    $pdf->Line(297 + $c + $o, $c + 210, 297 + 2 * $c, $c + 210);
    
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0.1);
    
    // oben
    $pdf->Line($c, 0, $c, $c - $o);
    $pdf->Line($c + 100, 0, $c + 100, $c - $o);
    $pdf->Line($c + 200, 0, $c + 200, $c - $o);
    $pdf->Line($c + 297, 0, $c + 297, $c - $o);
    // links
    $pdf->Line(0, $c, $c - $o, $c);
    $pdf->Line(0, $c + 210, $c - $o, $c + 210);
    // unten
    $pdf->Line($c, 210 + $c + $o, $c, 210 + 2 * $c);
    $pdf->Line($c + 100, 210 + $c + $o, $c + 100, 210 + 2 * $c);
    $pdf->Line($c + 200, 210 + $c + $o, $c + 200, 210 + 2 * $c);
    $pdf->Line($c + 297, 210 + $c + $o, $c + 297, 210 + 2 * $c);
    // rechts
    $pdf->Line(297 + $c + $o, $c, 297 + 2 * $c, $c);
    $pdf->Line(297 + $c + $o, $c + 210, 297 + 2 * $c, $c + 210);
}

// -------- End Seite 2 -------- //


// --- Send Document --- //

$pdf->Output(); 

?>
