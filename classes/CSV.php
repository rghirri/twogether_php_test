<?php

class CSV{

  public static function CSVcreateRow($line){
    $fileCSV = fopen("cakedayRow.csv", "w") or die("Unable to open file!");

    fwrite($fileCSV, $line);

    fclose($fileCSV);
  }

  public static function CSVcreateSingle($line){
    $fileCSV = fopen("cakedaySingle.csv", "w") or die("Unable to open file!");

    fwrite($fileCSV, $line);

    fclose($fileCSV);
  }

}