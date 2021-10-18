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
   // fputcsv($fileCSV, $line, "\n");
   fwrite($fileCSV, $line);
}


}

  public static function CSVcreateSingle($array,$fileCSV){

    foreach ($array as $line) {
     // fputcsv($fileCSV, $line, "\n");
      fwrite($fileCSV, $line);
  }
  
  }


}