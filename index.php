<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./classes/DataSend.php";
require "./classes/RowDates.php";
require "./classes/SingleDates.php";
require "./classes/ThirdDates.php";


$fileName = 'employee-birthdates.txt';
$fileCSVRow = fopen("cakedayRow.csv", "w") or die("Unable to open file!");
$fileCSVSingle = fopen("cakedaySingle.csv", "w") or die("Unable to open file!");



function ThirdDate()
{ 
  $fileName = 'employee-birthdates.txt';
  $lineGeneratorEmployee = DataSend::getEmployeeData($fileName);
  while ($lineGeneratorEmployee->valid()) {
  $lineGeneratorEmployee->current();
  $lineGeneratorEmployee->next();
  $lineGeneratorEmployee->current();
  $lineGeneratorEmployee->next();

  $thirdValue = $lineGeneratorEmployee->current();

  yield $thirdValue;
  $lineGeneratorEmployee->next();
  }
}

$lineGeneratorEmployee = DataSend::getEmployeeData($fileName);
$lineGeneratorThirdValue = ThirdDate();


//yieldPreNext();

while ($lineGeneratorEmployee->valid()) {

  if ($lineGeneratorEmployee->current()->name == "") {
    exit();
  }

  $currentName = $lineGeneratorEmployee->current()->name;
  $currentDay = $lineGeneratorEmployee->current()->birthDay;
  $lineGeneratorEmployee->next();
  $nextName = $lineGeneratorEmployee->current()->name;
  $nextDay = $lineGeneratorEmployee->current()->birthDay;
  $lineGeneratorEmployee->next();  
  $thirdName =  $lineGeneratorThirdValue->current()->name;
  $thirdDay =  $lineGeneratorThirdValue->current()->birthDay;
  //$lineGeneratorThirdValue->next();
  var_dump($currentDay);
  var_dump($nextDay);
  var_dump($thirdDay);

  $IsDateRow = CakeDay::IsDateRow($currentDay, $nextDay, $thirdDay);
  $IsDateSingle = CakeDay::IsDateSingle($currentDay, $nextDay, $thirdDay);
 // $IsDateDup = CakeDay::IsDateDup($currentDay,$nextDay,$fileName);

  if ($IsDateRow)
  {

      RowDates::rowCakeDay($nextDay, $currentDay,$nextName, $currentName, $fileCSVRow);
      ThirdDates::thirdCakeDay($thirdDay, $thirdName, $fileCSVSingle);
      
  }
  if ($IsDateSingle)
  {
    singleDates::singleCakeDay($currentDay, $currentName,$fileCSVSingle);
  }

  // $lineGeneratorEmployee->next();  
  
}

fclose($fileCSVRow);
fclose($fileCSVSingle);