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
$transid = $_GET['transid'];
$josql = "select * from vw_jotrans where transid =". $_GET['transid'];

$result = $mycon->query($josql);
$row = $result->fetch_assoc();



$pdf = new PDF();
$pdf->AliasNbPages();
//$pdf->AddPage("L","A4");

$pdf->AddPage();
$pgwidth = $pdf->GetPageWidth() - 20;
$pgheight = $pdf->GetPageHeight() - 40;

$pdf->SetLineWidth(0.01);
$pdf->Rect(8,37, $pgwidth + 5 ,$pgheight - 5);
//$pdf->SetXY(10,47);
$pdf->Ln(6);
$pdf->SetFont('Times','B',12);
$pdf->Cell(28,0,'JOB ORDER ',0,0,'L');
$pdf->SetTextColor(255,0,0);

$pdf->Cell(10,0,'No.: ',0,0,'L');

$pdf->SetTextColor(0,0,0);
$jonumber = $row['jonumber'];

$pdf->SetFont('Times','B',12);
$curW = $pdf->GetStringWidth('0'.$row['jonumber']);
$pdf->Cell($curW + 1,0,sprintf( '%05d', $row['jonumber']) ,0,0,'L');

$pdf->SetX($pgwidth - 50);
$jodate = date('m/d/Y',strtotime($row['jodate']));
$pdf->Cell($curW + 1,0,'Date In: '.$jodate,0,0,'L');


$jodateout = is_null($row['jodateout'])? '': date('m/d/Y',strtotime($row['jodate']));
$pdf->Ln(5);
$pdf->SetX($pgwidth - 50);
$pdf->Cell($curW + 1,0,'Date Out: '.$jodateout,0,2,'L');



$pdf->SetFont('Arial','BI',11);

$pdf->Ln(5);
$pdf->Cell(40,0,'Customer Information',0,0,'L');

$pdf->Ln(3.5);

$pdf->SetFont('Arial','B',10);

$pdf->Cell($pgwidth * 0.18 ,0,' Customer Name : ',0,0,'R');
$pdf->SetFont('Times','B',11);

$pdf->Cell($pgwidth * 0.32,0,$row['custname'],0,0,'L');

$pdf->SetFont('Arial','B',10);
$pdf->Cell($pgwidth * 0.18 ,0,'Type of Service: ',0,0,'L');
$pdf->SetFont('Times','B',11);
$pdf->Cell($pgwidth * 0.32 ,0,$row['servicetype'],0,0,'R');

$pdf->Ln(3.5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell($pgwidth * 0.18 ,0,' Address : ',0,0,'R');
$pdf->SetFont('Times','B',11);
$pdf->Cell($pgwidth * 0.32,0,$row['address'],0,0,'L');

$pdf->SetFont('Arial','B',10);
$pdf->Cell($pgwidth * 0.28 ,0,'Warranty Information : ',0,0,'L');
$pdf->SetFont('Times','B',11);
$pdf->Cell($pgwidth * 0.22,0,$row['warrantyinfo'],0,0,'R');

$pdf->Ln(3.5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell($pgwidth * 0.18  ,0,' Telephone: ',0,0,'R');
$pdf->SetFont('Times','B',11);
$pdf->Cell($pgwidth * 0.32 ,0,$row['telno'],0,0,'L');


$pdf->Ln(5);

$pdf->SetFont('Arial','BI',11);

$pdf->Cell(40,0,'Unit Information',0,0,'L');

$pdf->Ln(3.5);

$myrowwidth = array();
$myrowwidth[] = $pgwidth * 0.3;
$myrowwidth[] = $pgwidth * 0.4;
$myrowwidth[] = $pgwidth * 0.3;

$pdf->SetWidths($myrowwidth);
$pdf->SetFont('Times','B',11);

$mydata = array();

$mydata[] = 'Unit/Brand';
$mydata[] = 'Model';
$mydata[] = 'Serial No.';
$pdf->SetAligns(array('C','C','C'));
$pdf->Row($mydata);

$pdf->SetFont('Times','',10);

$modelsql = "SELECT * from unitinfo where uijonumber =".$jonumber;
$modelresult = $mycon->query($modelsql);

while($modrow = $modelresult->fetch_assoc()){
    $mydata = array();
    $mydata[] = $modrow['brand'];
    $mydata[] = $modrow['model'];
    $mydata[] = $modrow['serialno'];
    $pdf->SetAligns(array('C','C','C'));
    $pdf->Row($mydata);
}


$pdf->Ln(3.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(35  ,0,'ACCESSORIES : ',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(0 ,0, $row['accessories'] ,0,2,'L');


$pdf->Ln(3.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(35  ,0,'COMPLAIN : ' ,0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(0 ,0, $row['complain'] ,0,2,'L');

$pdf->Ln(3.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(35 ,0,'REPAIR ACTION : ',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(0 ,0, $row['repairaction'] ,0,0,'L');

$pdf->Ln(3.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(35 ,0,'DEALER : ',0,0,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell($pgwidth * 0.5  ,0, $row['dealer'] ,0,0,'L');


$pdf->Ln(3.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(35 ,0,'DATE PURCHASE : ',0,2,'L');
$pdf->SetFont('Times','',10);
$pdf->Cell(0  ,0,( is_null($row['datepurchase'])?date('m/d/Y',strtotime($row['datepurchase'])):'') ,0,2,'L');


$pdf->Ln(3.5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell($pgwidth * 0.5  ,0,'REMARKS : _____________________________________________________________________________________'. ( is_null($row['datepurchase'])?date('m/d/Y',strtotime($row['datepurchase'])):'') ,0,2,'L');
$pdf->Ln(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell($pgwidth ,0,'CLAIM BY : _________________________' ,0,0,'R');
$pdf->Ln(3.5);
$pdf->SetFont('Times','',8);
$pdf->Cell($pgwidth ,0,'Signature over printed name and date' ,0,0,'R');

$modelsql = "SELECT * from repairdetail where rdtransid =".$transid;
$modelresult = $mycon->query($modelsql);
$gtotal = 0;

$reprow = $modelresult->num_rows; 
//------------------------ repair details ----------------------
//if( $reprow > 0) {

$pdf->Ln(3.5);
$pdf->SetFont('Arial','BI',11);
$pdf->Cell($pgwidth ,0,'Repair Details' ,0,0,'L');


$pdf->Ln(3.5);
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

$pdf->SetFont('Times','',10);
while($modrow = $modelresult->fetch_assoc()){
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
}
if ($reprow <= 6){
$blankrow = 7- $reprow;
    for ($i=0; $i < $blankrow ; $i++) { 
    $mydata = array();
    $mydata[] = '';
    $mydata[] = '';
    $mydata[] =  '';
    $mydata[] = '';
    $mydata[] = '';
    $gtotal += '';
    $mydata[] = '';
    $pdf->SetAligns(array('C','C','C','C','C','R'));
    $pdf->Row($mydata);


    }


$myrowwidth = array();
$myrowwidth[] = $pgwidth * 0.8;
$myrowwidth[] = $pgwidth * 0.2;
$pdf->SetWidths($myrowwidth);
$mydata = array();
$mydata[] = 'TOTAL';
$mydata[] = $gtotal;
$pdf->SetAligns(array('R','R'));
$pdf->Row($mydata);



} //---------------- end of if repair details ------------
$pdf->Ln(5);
$pdf->SetFont('Arial','BI',11);
$pdf->Cell($pgwidth * 0.7 ,0,'Terms and Conditions' ,0,0,'C');
$pdf->Cell($pgwidth * 0.3 ,0,'Summary of Charges' ,0,0,'C');

//----------------------------------------
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'1. The consumer should present warranty card and receipt to TCESC to validate unit warranty. Otherwise ' ,0,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell($pgwidth * 0.15 ,0,'Parts Cost: ' ,0,0,'R');
$pdf->SetFont('Arial','',10);
$pdf->Cell($pgwidth * 0.15 ,0,$gtotal ,0,0,'R');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'the costumer will be charged for any service or repair made to the unit.' ,0,0,'L');
//----------------------------------------

//----------------------------------------
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'2. Three(3) months waarranty only for out-of warranty repairs - same problem only.' ,0,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell($pgwidth * 0.15 ,0,'Labor Estimate: ' ,0,0,'R');
$pdf->SetFont('Arial','',10);
$labor = $row['labor'];
$pdf->Cell($pgwidth * 0.15 ,0,$labor ,0,0,'R');
//----------------------------------------

//----------------------------------------
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'3. The costumer copy must be presented upon claim of the unit. TCESC has no liability for any enormous ' ,0,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell($pgwidth * 0.15 ,0,'Transportation: ' ,0,0,'R');
$pdf->SetFont('Arial','',10);
$transportation = $row['transportation'];
$pdf->Cell($pgwidth * 0.15 ,0,$transportation ,0,0,'R');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'release of the unit to the 3rd party due to loss of Job Order Form.' ,0,0,'L');
//----------------------------------------

//----------------------------------------
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'4. TCESC shall not be hled liable for any loss due to rubbery or damage due to material calamities, fire ' ,0,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell($pgwidth * 0.15 ,0,'Shipping Cost: ' ,0,0,'R');
$pdf->SetFont('Arial','',10);
$shippingcost = $row['shippingcost'];
$pdf->Cell($pgwidth * 0.15 ,0,$shippingcost ,0,0,'R');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'or other force major incidents.' ,0,0,'L');
//----------------------------------------

//----------------------------------------
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'5. The customer shall not claim the unit within 15 days upon notification by TCESC of the units repair.' ,0,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell($pgwidth * 0.15 ,0,'Other Charges: ' ,0,0,'R');
$pdf->SetFont('Arial','',10);
$othercharges = $row['othercharges'];
$pdf->Cell($pgwidth * 0.15 ,0,$othercharges ,0,0,'R');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'Furthermore, the costumer agree to be charged a average fee of P15.00 pesos per day(maximum after' ,0,0,'L');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'my failure to claim the unit within above stated period. Notification of TCESC shall meany any form of ' ,0,0,'L');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'communication such as phone call, text message or email.' ,0,0,'L');

//----------------------------------------

//----------------------------------------
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'6. The Customer shall inform of any change of my contact number or address.' ,0,0,'L');
$pdf->SetFont('Arial','B',9);
$pdf->Cell($pgwidth * 0.15 ,0,'Check Up Fee: ' ,0,0,'R');
$pdf->SetFont('Arial','',10);
$checkupfee = $row['checkupfee'];
$pdf->Cell($pgwidth * 0.15 ,0,$checkupfee ,0,0,'R');


//----------------------------------------


//----------------------------------------
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'7. The customer authorize TCESC to dispose of his/her unit not claimed 30days after the date repair to ' ,0,0,'L');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'cover the cost of repairs, parts and average fee in the event that I fail to claim said unit after notification' ,0,0,'L');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,' by TCESC.' ,0,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell($pgwidth * 0.15 ,0,'Grand  Total: ' ,0,0,'R');
$pdf->SetFont('Arial','BI',10);
$grandtotal = $gtotal + $labor + $transportation + $shippingcost + $othercharges + $checkupfee;
if($row['repairaction'] != 'open'){
$pdf->Cell($pgwidth * 0.15 ,0,$grandtotal ,0,0,'R');
}else{
$pdf->Cell($pgwidth * 0.15 ,0,'' ,0,0,'R');
}

//----------------------------------------

//----------------------------------------
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'8. TCESC reserve the right to refuse units bought for repair due to excessive tampering of unit by ' ,0,0,'L');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'unauthorized technicians, unavailability of parts due to obsolence.' ,0,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell($pgwidth * 0.3 ,0,'__________________________' ,0,0,'C');

//----------------------------------------

//----------------------------------------
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'9. Once unit is accepted for repair by customer, a reasonable check-up fee will be charge by TCESC if ' ,0,0,'L');

$pdf->SetFont('Arial','',7);
$pdf->Cell($pgwidth * 0.3 ,0,'Signature over printed name of Customer' ,0,0,'C');

$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'customer decided not to continue the repairs anymore.' ,0,0,'L');

//----------------------------------------

//----------------------------------------
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'10. By signing this form, the costumer whose name and signature affixed herein, agrees and understood' ,0,0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->Cell($pgwidth * 0.3 ,0,'__________________________' ,0,0,'C');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,' all the terms and conditions stated herein' ,0,0,'L');
$pdf->SetFont('Arial','',7);
$pdf->Cell($pgwidth * 0.3 ,0,'Signature over printed name of ' ,0,0,'C');
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',8);
$pdf->Cell($pgwidth * 0.7 ,0,'' ,0,0,'L');
$pdf->SetFont('Arial','',7);
$pdf->Cell($pgwidth * 0.3 ,0,'TCESC Representative' ,0,0,'C');

//----------------------------------------
$pdf->Ln(3.5);
$pdf->SetFont('Arial','',11);

$pdf->Cell($pgwidth ,0,'Customer Comments : ' ,0,0,'L');


$pdf->Output();

?>