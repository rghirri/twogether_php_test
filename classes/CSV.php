<?php

/** This class is used for creating the output CSV file */

class CSV{


  public static function CSVcreate($array,$fileCSV){

    foreach ($array as $line) {
     // fputcsv($fileCSV, $line, "\n");
      fwrite($fileCSV, $line);
  }
  
  }


}