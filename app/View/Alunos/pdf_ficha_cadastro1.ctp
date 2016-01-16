<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//App::import('Vendor', 'phpjasperxml/PHPJasperXML.inc');
App::import('Vendor', 'PHPJasperXML', array('file' => 'phpjasperxml' . DS . 'PHPJasperXML.inc.php'));
App::import('Vendor', 'TCPDF', array('file' => 'phpjasperxml' . DS .'tcpdf'.DS. 'tcpdf.php'));
App::import('Vendor', 'PHPJasperXMLTcPDF', array('file' => 'phpjasperxml' . DS .'setting.php'));
//include_once('../../Config/database.php');
//include_once("class/PHPJasperXML.inc.php");
//include_once ('setting.php');


$xml =  simplexml_load_file(APP."/Reports/ficha_cadastro.jrxml");

$db = new DATABASE_CONFIG();
$PHPJasperXML = new PHPJasperXML();

$PHPJasperXML->arrayParameter=array("p_aluno_id"=>$aluno_id);
$PHPJasperXML->xml_dismantle($xml);
//$PHPJasperXML->debugsql=true;
$PHPJasperXML->transferDBtoArray($db->default['host'],$db->default['login'],$db->default['password'],$db->default['database']);

$PHPJasperXML->outpage("D");    //page output method I:standard output  D:Download file



?>
