<?php
class Tourbuilder{
    public function compressXML($output){
        //strip comments
        $output = preg_replace('/<!--(.*?)-->/', '', $output);
        //strip tabs, double spaces and newlines
        $output = preg_replace("/\s+/S", " ", $output);
        //strip spaces between tags
        $output = str_replace("> <", "><", $output);
        return $output;
    }
    public function compressXMLFile($filepath){
        $file = file_get_contents($filepath);
        return $this->compressXML($file);
    }
}
?>