<?php

class CSV{

  // public static function CSVcreateRow($line,$fileCSV){

  //   fwrite($fileCSV, $line);

  //   fclose($fileCSV);
  // }

  // public static function CSVcreateSingle($line,$fileCSV){

  //   fwrite($fileCSV, $line);

  //   fclose($fileCSV);
  // }

 

public static function CSVcreateRow($array,$fileCSV){


  foreach ($array as $line) {
    fwrite($fileCSV, $line);
}

fclose($fileCSV);
}

  public static function CSVcreateSingle($array,$fileCSV){

    foreach ($array as $line) {
      fwrite($fileCSV, $line);
  }
  
  fclose($fileCSV);
  }


}