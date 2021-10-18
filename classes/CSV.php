<?php

class CSV{

  public static function CSVcreateRow($array){
    $fp = fopen('cakedayRow.csv', 'w');

    foreach ($array as $lines) {
        fputcsv($fp, $lines);
    }

    fclose($fp);
  }

  public static function CSVcreateSingle($array){
    $fp = fopen('cakedaySingle.csv', 'w');

    foreach ($array as $lines) {
        fputcsv($fp, $lines);
    }

    fclose($fp);
  }

}