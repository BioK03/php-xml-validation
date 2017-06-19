<?php


$xml = new DOMDocument();
$xml->load("example.xml");

if (!$xml->schemaValidate('example.xsd')) {
    print '<b>DOMDocument::schemaValidate() Generated Errors!</b>';
}else{
    print 'Seems good !';
}