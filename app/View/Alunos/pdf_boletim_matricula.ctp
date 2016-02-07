<?php
    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */
    //App::import('Vendor', 'phpjasperxml/PHPJasperXML.inc');
    App::import('Vendor', 'PHPJasperXML', ['file' => 'phpjasperxml' . DS . 'PHPJasperXML.inc.php']);
    App::import('Vendor', 'TCPDF', ['file' => 'phpjasperxml' . DS . 'tcpdf' . DS . 'tcpdf.php']);
    App::import('Vendor', 'PHPJasperXMLTcPDF', ['file' => 'phpjasperxml' . DS . 'setting.php']);
    //include_once('../../Config/database.php');
    //include_once("class/PHPJasperXML.inc.php");
    //include_once ('setting.php');


    $xml = simplexml_load_file(APP . "/Reports/pdf_boletim_matricula.jrxml");

    $db = new DATABASE_CONFIG();
    $PHPJasperXML = new PHPJasperXML();
    //$PHPJasperXML->debugsql=true;
    $PHPJasperXML->arrayParameter = ["p_aluno_id" => $aluno_id];
    $PHPJasperXML->xml_dismantle($xml);
    $PHPJasperXML->transferDBtoArray($db->default['host'], $db->default['login'], $db->default['password'],
        $db->default['database']);
    $PHPJasperXML->outpage("D");    //page output method I:standard output  D:Download file


?>
