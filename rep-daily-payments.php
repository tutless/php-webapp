<?php

require('fpdf/fpdf.php');

class PDF extends FPDF
{

    function MultiCell($w, $h, $txt, $border=0, $align='J', $fill=false, $maxline=0)
    {
        //Output text with automatic or explicit line breaks, at most $maxline lines
        $cw=&$this->CurrentFont['cw'];
        if($w==0)
            $w=$this->w-$this->rMargin-$this->x;
        $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
        $s=str_replace("\r",'',$txt);
        $nb=strlen($s);
        if($nb>0 && $s[$nb-1]=="\n")
            $nb--;
        $b=0;
        if($border)
        {
            if($border==1)
            {
                $border='LTRB';
                $b='LRT';
                $b2='LR';
            }
            else
            {
                $b2='';
                if(is_int(strpos($border,'L')))
                    $b2.='L';
                if(is_int(strpos($border,'R')))
                    $b2.='R';
                $b=is_int(strpos($border,'T')) ? $b2.'T' : $b2;
            }
        }
        $sep=-1;
        $i=0;
        $j=0;
        $l=0;
        $ns=0;
        $nl=1;
        while($i<$nb)
        {
            //Get next character
            $c=$s[$i];
            if($c=="\n")
            {
                //Explicit line break
                if($this->ws>0)
                {
                    $this->ws=0;
                    $this->_out('0 Tw');
                }
                $this->Cell($w,$h,substr($s,$j,$i-$j),$b,2,$align,$fill);
                $i++;
                $sep=-1;
                $j=$i;
                $l=0;
                $ns=0;
                $nl++;
                if($border && $nl==2)
                    $b=$b2;
                if($maxline && $nl>$maxline)
                    return substr($s,$i);
                continue;
            }
            if($c==' ')
            {
                $sep=$i;
                $ls=$l;
                $ns++;
            }
            $l+=$cw[$c];
            if($l>$wmax)
            {
                //Automatic line break
                if($sep==-1)
                {
                    if($i==$j)
                        $i++;
                    if($this->ws>0)
                    {
                        $this->ws=0;
                        $this->_out('0 Tw');
                    }
                    $this->Cell($w,$h,substr($s,$j,$i-$j),$b,2,$align,$fill);
                }
                else
                {
                    if($align=='J')
                    {
                        $this->ws=($ns>1) ? ($wmax-$ls)/1000*$this->FontSize/($ns-1) : 0;
                        $this->_out(sprintf('%.3F Tw',$this->ws*$this->k));
                    }
                    $this->Cell($w,$h,substr($s,$j,$sep-$j),$b,2,$align,$fill);
                    $i=$sep+1;
                }
                $sep=-1;
                $j=$i;
                $l=0;
                $ns=0;
                $nl++;
                if($border && $nl==2)
                    $b=$b2;
                if($maxline && $nl>$maxline)
                {
                    if($this->ws>0)
                    {
                        $this->ws=0;
                        $this->_out('0 Tw');
                    }
                    return substr($s,$i);
                }
            }
            else
                $i++;
        }
        //Last chunk
        if($this->ws>0)
        {
            $this->ws=0;
            $this->_out('0 Tw');
        }
        if($border && is_int(strpos($border,'B')))
            $b.='B';
        $this->Cell($w,$h,substr($s,$j,$i-$j),$b,2,$align,$fill);
        $this->x=$this->lMargin;
        return '';
    }


// Page header
function Header(){

	
	
    // Logo
    //$this->Image('pics/deped200.png',10,6,30);
    //$this->Image('pics/depedright200.png',$this->GetPageWidth()-38,6,30);
    // Arial bold 15
    $this->SetFont('Times','B',12);
    // Move to the right
    //$this->Cell(80);
	// Title
    $this->SetTextColor(0,0,250);    
	$this->Cell(0,0,'TACLOBAN CHRONICLES ELECTRONICS SERVICE CENTER',0,1,'C');	
    $this->SetTextColor(0,0,0);    

    $this->Ln(3.5);
    $this->SetFont('Times','B',10);
	$this->Cell(0,0,'Brgy. 76 Fatima Village , Tacloban City',0,1,'C');	
    $this->Ln(3.5);
    $this->SetFont('Times','',10);
	$this->Cell(0,0,'Telefax No: (053)522-4196 / Mobile Nos: 09219974920(Smart) / 09335168028(Sun) / 09171181456(Globe)',0,1,'C');	
    $this->Ln(3.5);
	$this->Cell(0,0,'Email Add: tac.chronicle@yahoo.com.ph',0,1,'C');	
    $this->Ln(3.5);
    $this->SetFont('Times','B',10);
    $this->Cell(0,0,'WE REPAIR ALL BRANDS OF AUDIO VIDEO HOME APPLIANCES',0,1,'C');   
    $this->Ln(3.5);

    $this->SetTextColor(255,0,0);
    $this->SetFont('Times','B',12);
    $this->Cell(0,0,'AUTHORIZED SERVICE CENTER',0,1,'C');   
    $this->SetTextColor(0,0,255);
    $this->Ln(4);
    $this->SetFont('Times','B',8);
    $this->Cell(0,0,'TOSHIBA DEVANT HISENSE NEXTBASE HAIER SANYO SKYWORTH PRESTIZ EXTREME MAGIC SING KUMYOUNG CAMEL',0,1,'C');   
    $this->Ln(3.5);
    $this->SetFont('Times','B',8);
    $this->Cell(0,0,'TCL AKAI XENON PENSONIC ASTRON SAKURA DB AUDIO MINAMI CROWN FUKUDA AOC LCD EZY PHILLIPS LED MONITOR',0,1,'C');   

    // Line break
    //$this->Ln(3.5);
}

// Page footer
function Footer()
{
    /*
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    */
}

function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Simple table
function BasicTable($header, $data)
{
    // Header
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}

// Better table
function ImprovedTable($header, $data)
{
    // Column widths
    $w = array(40, 35, 40, 45);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(40, 35, 40, 45);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

/// ------------------------------------------------------------

//class PDF_MC_Table extends FPDF
//{
var $widths;
var $aligns;

function SetWidths($w)
{
    //Set the array of column widths
    $this->widths=$w;
}

function SetAligns($a)
{
    //Set the array of column alignments
    $this->aligns=$a;
}

function Row($data)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
    $h=5*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        $this->Rect($x,$y,$w,$h);
        //Print the text
        $this->MultiCell($w,5,$data[$i],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}

function RowA($data,$al)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
    $h=5*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        //$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
        $a = $al;
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        $this->SetLineWidth(0.4);
        $this->SetDrawColor(10,10,10);
        $this->Rect($x,$y,$w,$h);
        //Print the text
        if(is_null($data[$i])){
            $this->SetFillColor(150,150,150);
            $this->MultiCell($w,5,$data[$i],0,$a,true);
        }else{
            $this->MultiCell($w,5,$data[$i],0,$a);
        }
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}


function UnRow($data)
{
    //Calculate the height of the row
    $nb=0;
    for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
    $h=5*$nb;
    //Issue a page break first if needed
    $this->CheckPageBreak($h);
    //Draw the cells of the row
    for($i=0;$i<count($data);$i++)
    {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        //$this->Rect($x,$y,$w,$h); disable the rectangle here
        //Print the text
        $this->MultiCell($w,5,$data[$i],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
    }
    //Go to the next line
    $this->Ln($h);
}



function CheckPageBreak($h)
{
    //If the height h would cause an overflow, add a new page immediately
    if($this->GetY()+$h>$this->PageBreakTrigger)
        $this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
    //Computes the number of lines a MultiCell of width w will take
    $cw=&$this->CurrentFont['cw'];
    if($w==0)
        $w=$this->w-$this->rMargin-$this->x;
    $wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
    $s=str_replace("\r",'',$txt);
    $nb=strlen($s);
    if($nb>0 and $s[$nb-1]=="\n")
        $nb--;
    $sep=-1;
    $i=0;
    $j=0;
    $l=0;
    $nl=1;
    while($i<$nb)
    {
        $c=$s[$i];
        if($c=="\n")
        {
            $i++;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
            continue;
        }
        if($c==' ')
            $sep=$i;
        $l+=$cw[$c];
        if($l>$wmax)
        {
            if($sep==-1)
            {
                if($i==$j)
                    $i++;
            }
            else
                $i=$sep+1;
            $sep=-1;
            $j=$i;
            $l=0;
            $nl++;
        }
        else
            $i++;
    }
    return $nl;
}
}

include 'php/cons.php';


$pdf = new PDF();
$pdf->AliasNbPages();
//$pdf->AddPage("L","A4");

$datefrom = date('Y-m-d',strtotime($_POST['datefrom']));
$dateto = date('Y-m-d',strtotime($_POST['dateto']));

$sql = "Select distinct paydate from payments where paydate between '{$datefrom}' and '{$dateto}' Order By paydate ASC";
$result = $mycon->query($sql);

if ($result){
    if ($result->num_rows > 0) {
        $result->data_seek(0);
        while ( $row = $result->fetch_assoc() ){

        $pdf->AddPage();
        $pgwidth = $pdf->GetPageWidth() - 20 ;
        $pgheight = $pdf->GetPageHeight() ;

        //$pdf->SetLineWidth(0.01);
        //$pdf->Rect(8,37, $pgwidth + 5 ,$pgheight - 5);
        //$pdf->SetXY(10,47);
        $pdf->Ln(10);
        $pdf->SetFont('Times','B',14);
        $pdf->Cell($pgwidth,0,'DAILY PAYMENTS',0,0,'C');
        $pdf->Ln(5);
        //$pdf->Cell($pgwidth,0,$sql,0,0,'C');

        $pdf->SetFont('Times','B',12);
        $pdf->Cell($pgwidth,0,'Date : '.date('m/d/Y',strtotime($row['paydate'])),0,0,'L');

        $pdf->Ln(3.5);

        $myrowwidth = array();
        $myrowwidth[] = $pgwidth * 0.1;
        $myrowwidth[] = $pgwidth * 0.2;
        $myrowwidth[] = $pgwidth * 0.1;
        $myrowwidth[] = $pgwidth * 0.1;
        $myrowwidth[] = $pgwidth * 0.1;
        $myrowwidth[] = $pgwidth * 0.3;
        $myrowwidth[] = $pgwidth * 0.1;

        $pdf->SetWidths($myrowwidth);
        
        $pdf->SetFont('Times','B',9);
        $mydata = array();
        $mydata[] = 'Job Order';
        $mydata[] = 'Customer';
        $mydata[] = 'Transaction';
        $mydata[] = 'Payment Id';
        $mydata[] = 'Date';
        $mydata[] = 'Article';
        $mydata[] = 'Amount';

        $pdf->SetAligns(array('C','C','C','C','C','C','C'));
        $pdf->Row($mydata);

        $sqlpay = "select * from vw_jotranspay where paydate = '".$row['paydate']."' ";
        //echo $sqlpay;
        $payresult = $mycon->query($sqlpay);
        //echo $payresult->num_rows;
        $payresult->data_seek(0);
        $totdaily = 0;
        while ($prow = $payresult->fetch_assoc() ){

            $pdf->SetFont('Times','',9);
            $mydata = array();

            $mydata[] = $prow['jonumber'];
            $mydata[] = $prow['custname'];
            $mydata[] = $prow['transtype'];
            $mydata[] = $prow['paymentid'];
            $mydata[] = date('m/d/Y',strtotime($prow['paydate']));
            $mydata[] = $prow['article'];
            $mydata[] = $prow['payamount'];
            $totdaily += $prow['payamount'];

            $pdf->SetAligns(array('C','C','C','C','C','C','R'));
            $pdf->Row($mydata);

        }

        $myrowwidth = array();
        $myrowwidth[] = $pgwidth * 0.9;
        $myrowwidth[] = $pgwidth * 0.1;
        $pdf->SetWidths($myrowwidth);

        $mydata = array();

        $mydata[] = 'TOTAL';
        $mydata[] = $totdaily;
        $pdf->SetAligns(array('C','R'));
        $pdf->Row($mydata);






        }// ---------- while row ----------

    }//----------- result num rows

} //--------------if result -----------







$pdf->Output();

?>   