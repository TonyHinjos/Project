<?php
/**
 * Created by IntelliJ IDEA.
 * User: urandu
 * Date: 2/27/16
 * Time: 1:38 PM
 */
require_once 'vsword/VsWord.php';
VsWord::autoLoad();

function get_word_from_html()
{

    $doc = new VsWord();
    $parser = new HtmlParser($doc);
    $parser->parse('<h1>Hello world!</h1>');
    $parser->parse('<h3>Hello world!</h3>');
    $parser->parse('<p>Hello world!</p>');
    $parser->parse('<h2>Header table</h2><table><tr><td>Coll 1</td><td>Coll 2</td></tr></table>');
   // $parser->parse($html);

    echo '<pre>'.($doc->getDocument()->getBody()->look()).'</pre>';

    $doc->saveAs('htmlparser.docx');
}

function magic_p($html)
{
    include("mpdf60/mpdf.php");

    $mpdf=new mPDF('win-1252','A4','','',0,0,0,0,0,0);
    //$mpdf2=new mPDF('win-1252','A4','','',0,0,0,0,0,0);
    $mpdf->useOnlyCoreFonts = true;    // false is default
    $mpdf->SetProtection(array('print'));
   // $mpdf->SetTitle($title);
    $mpdf->SetAuthor("Land|GIS.");
    $mpdf->SetWatermarkText("Land GIS");
    $mpdf->showWatermarkText = true;
    $mpdf->watermark_font = 'DejaVuSansCondensed';
    $mpdf->watermarkTextAlpha = 0.1;
    $mpdf->SetDisplayMode('fullpage');


    $mpdf->WriteHTML($html);
    $title = "invoice";
    $mpdf->Output($title.".pdf",'D');

    exit;

}




function get_total_exams()
{
    $CI=get_instance();
    $CI->db->where("deleted",0);
    $result=$CI->db->get("exams");
    return $result->num_rows();
}

function get_my_total_exams($user_id)
{
    $CI=get_instance();
    $CI->db->where("deleted",0);
    $CI->db->where("user_id",$user_id);
    $result=$CI->db->get("exams");
    return $result->num_rows();
}
