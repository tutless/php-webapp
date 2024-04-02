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
    $this->SetFont('Times','B',7);
    $this->Cell(0,0,'TOSHIBA DEVANT HISENSE NEXTBASE HAIER SANYO SKYWORTH PRESTIZ EXTREME MAGIC SING KEVLER CAMEL SPEED QUEEN AVISION',0,1,'C');   
    $this->Ln(3.5);
    $this->SetFont('Times','B',7);
    $this->Cell(0,0,'TCL HYUNDAI XENON PENSONIC ASTRON SAKURA DB AUDIO MINAMI CROWN FUKUDA AOC LCD EZY KARAVISION LED MONITOR MYVIEW',0,1,'C');   

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
include 'myfunctions.php';
$josql = "select * from  payments inner join vw_jotrans on 
payments.paytransid = vw_jotrans.transid 
 where paymentid =". $_GET['paymentid'];

$result = $mycon->query($josql);
$jo = $result->fetch_assoc();




$pdf = new PDF();
$pdf->AliasNbPages();
//$pdf->AddPage("L",array(105,147));
//$pdf->AddPage();       w   h
$pdf->AddPage("L",array(210,180)); // -------------- CHANGE  180 for fit to page -----------
$pgwidth = $pdf->GetPageWidth() - 20 ;
$pgheight = $pdf->GetPageHeight() ;

$pdf->Ln(10);
$pdf->SetFont('Times','B',10);
$pdf->Cell($pgwidth * 0.15,0,'Recieved From : ',0,0,'L'); 
$pdf->SetFont('Times','',10);
$pdf->Cell($pgwidth * 0.6,0,$jo['custname'],0,0,'L'); 
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,0,'Date : ',0,0,'L'); 
$pdf->SetFont('Times','',10);
$pdf->Cell(0,0,date('m/d/Y',strtotime($jo['paydate'])),0,1,'L'); 



$pdf->Ln(3);
$pdf->SetFont('Times','B',10);
$pdf->Cell($pgwidth * 0.15,0,'Address : ',0,0,'L'); 
$pdf->SetFont('Times','',10);
$pdf->Cell($pgwidth * 0.6,0,$jo['address'],0,0,'L'); 
$pdf->SetFont('Times','B',10);
$pdf->Cell(23,0,'JO Number : ',0,0,'L'); 
$pdf->SetFont('Times','',10);
$pdf->Cell(0,0,sprintf( '%05d', $jo['jonumber']),0,1,'L'); 




$pdf->Ln(5);
$pdf->SetFont('Times','B',11);
$pdf->Cell(0,0,'Repair Details',0,1,'L'); 

$pdf->Ln(5);
$myrowwidth = array();
$myrowwidth[] = $pgwidth * 0.1;
$myrowwidth[] = $pgwidth * 0.2;
$myrowwidth[] = $pgwidth * 0.2;
$myrowwidth[] = $pgwidth * 0.1;
$myrowwidth[] = $pgwidth * 0.2;
$myrowwidth[] = $pgwidth * 0.2;


$pdf->SetWidths($myrowwidth);
$pdf->SetFont('Times','B',11);

$mydata = array();

$mydata[] = 'No';
$mydata[] = 'Part Number';
$mydata[] = 'Part Description';
$mydata[] = 'Qty';
$mydata[] = 'Unit Price';
$mydata[] = 'Total Amount';

$pdf->SetAligns(array('C','C','C','C','C','C'));
$pdf->Row($mydata);
 $gtotal = 0;
$repsql = "Select * from repairdetail where rdtransid =" . $jo['transid'] ;
$repair = $mycon->query($repsql);
if($repair){
    if($repair->num_rows > 0){
       
        $repair->data_seek(0);
        while($modrow = $repair->fetch_assoc()){

            $mydata = array();
            $mydata[] = $modrow['rdno'];
            $mydata[] = $modrow['partnumber'];
            $mydata[] = $modrow['partdescription'];
            $mydata[] = $modrow['qty'];
            $mydata[] = $modrow['unitprice'];
            $gtotal += $modrow['qty'] * $modrow['unitprice'];
            $mydata[] = $modrow['qty'] * $modrow['unitprice'];
            $pdf->SetAligns(array('C','C','C','C','C','R'));
            $pdf->Row($mydata);

        }// while

    }// if repair num rows

}//--- if repair

//------------- total --------------
$myrowwidth = array();
$myrowwidth[] = $pgwidth * 0.8;
$myrowwidth[] = $pgwidth * 0.2;
$pdf->SetWidths($myrowwidth);
$mydata = array();
$mydata[] = 'Total Parts Cost';
$mydata[] = $gtotal;
$pdf->SetAligns(array('R','R'));
$pdf->Row($mydata);
//----------------------------------


$pdf->Ln(3.5);
$pdf->SetFont('Times','B',10);
$pdf->Cell($pgwidth * 0.15,0,'Labor Estimate : ',0,0,'L'); 
$pdf->SetFont('Times','',10);
$pdf->Cell($pgwidth * 0.1,0,$jo['labor'],0,0,'L'); 

$pdf->Ln(3.5);
$pdf->SetFont('Times','B',10);
$pdf->Cell($pgwidth * 0.15,0,'Transportation : ',0,0,'L'); 
$pdf->SetFont('Times','',10);
$pdf->Cell($pgwidth * 0.1,0,$jo['transportation'],0,0,'L'); 

$pdf->Ln(3.5);
$pdf->SetFont('Times','B',10);
$pdf->Cell($pgwidth * 0.15,0,'Shipping Cost : ',0,0,'L'); 
$pdf->SetFont('Times','',10);
$pdf->Cell($pgwidth * 0.1,0,$jo['shippingcost'],0,0,'L'); 

$pdf->Ln(3.5);
$pdf->SetFont('Times','B',10);
$pdf->Cell($pgwidth * 0.15,0,'Other Charges : ',0,0,'L'); 
$pdf->SetFont('Times','',10);
$pdf->Cell($pgwidth * 0.1,0,$jo['othercharges'],0,0,'L'); 

$pdf->Ln(3.5);
$pdf->SetFont('Times','B',10);
$pdf->Cell($pgwidth * 0.15,0,'Total Parts Cost : ',0,0,'L'); 
$pdf->SetFont('Times','',10);
$pdf->Cell($pgwidth * 0.1,0,$gtotal,0,0,'L'); 

$pdf->Ln(3.5);
$pdf->SetFont('Times','B',10);
$pdf->Cell($pgwidth * 0.15,0,'Check Up Fee : ',0,0,'L'); 
$pdf->SetFont('Times','',10);
$pdf->Cell($pgwidth * 0.1,0,$jo['checkupfee'],0,0,'L'); 



$grandtotal = $gtotal + $jo['labor'] + $jo['transportation'] + $jo['shippingcost'] + $jo['othercharges'] + $jo['checkupfee'];

$pdf->Ln(3.5);
$pdf->SetFont('Times','B',12);
$pdf->Cell($pgwidth * 0.15,0,'Grand Total : ',0,0,'L'); 
$pdf->SetFont('Times','',12);
$pdf->Cell($pgwidth * 0.1,0,$grandtotal,0,0,'L'); 

$prevpayment = getPayments($jo['transid']) - $jo['payamount'] ;
$pdf->Ln(3.5);
$pdf->SetFont('Times','B',12);
$pdf->Cell($pgwidth * 0.20,0,'Previous Payments : ',0,0,'L'); 
$pdf->SetFont('Times','',12);
$pdf->Cell($pgwidth * 0.1,0,$prevpayment,0,0,'L'); 




$pdf->Ln(5);
$pdf->SetWidths(array($pgwidth * 0.70,$pgwidth * 0.30));
$pdf->SetAligns(array('C','C'));
$pdf->SetFont('Times','B',10);
$pdf->Row(array('Payment Details','Amount'));

//$pdf->Ln(5);
$pdf->SetWidths(array($pgwidth * 0.70,$pgwidth * 0.30));
$pdf->SetAligns(array('C','R'));
$pdf->SetFont('Times','',10);
$pdf->Row(array($jo['article'],$jo['payamount']));

//$pdf->Ln(5);
$pdf->SetWidths(array($pgwidth * 0.70,$pgwidth * 0.30));
$pdf->SetAligns(array('C','R'));
$pdf->SetFont('Times','B',10);
$pdf->Row(array('Balance',getBalance($jo['transid']) ));



$pdf->Ln(10);
$pdf->SetFont('Times','B',10);
$pdf->Cell(10,0,'No : ',0,0,'L'); 
$pdf->SetFont('Times','B',14);
$pdf->Cell(60,0,$jo['paymentid'],0,0,'L'); 
$pdf->SetFont('Times','B',10);
$pdf->Cell(15,0,'',0,0,'L'); 




$pdf->Ln(10);
$pdf->SetFont('Times','B',10);
$pdf->Cell(10,0,'',0,0,'L'); 
$pdf->SetFont('Times','B',14);
$pdf->Cell(65,0,'',0,0,'L'); 
$pdf->SetFont('Times','',9);
$pdf->Cell(50,5,'Cashier/Authorized Representative  ','T',0,'C'); 


$pdf->Output();

?>