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
  

  $currentName = $lineGeneratorEmployee->current()->name;
  $currentDay = $lineGeneratorEmployee->current()->birthDay;
  $lineGeneratorEmployee->next();
  
  $nextName = $lineGeneratorEmployee->current()->name;
  $nextDay = $lineGeneratorEmployee->current()->birthDay;
  $lineGeneratorEmployee->next();  
  $thirdName =  $lineGeneratorThirdValue->current()->name;
  $thirdDay =  $lineGeneratorThirdValue->current()->birthDay;
  $lineGeneratorThirdValue->next();
  
  var_dump($currentDay);
  var_dump($nextDay);
  var_dump($thirdDay);

  $IsDateThreeRow = CakeDay::IsDateThreeRow($currentDay, $nextDay, $thirdDay);
  $IsDateTwoRow = CakeDay::IsDateTwoRow($currentDay, $nextDay, $thirdDay);
  $IsDateSingle = CakeDay::IsDateSingle($currentDay, $nextDay, $thirdDay);
   
  if ($IsDateThreeRow)
  {

      RowDates::rowThreeCakeDay($nextDay, $currentDay,$nextName, $currentName, $fileCSVRow);
      ThirdDates::thirdCakeDay($thirdDay, $thirdName, $fileCSVSingle);
    // RowDates::rowCakeDay($nextDay, $thirdDay,$nextName, $thirdName, $fileCSVRow);
      
  }

  if ($IsDateTwoRow)
  {

      RowDates::rowTwoCakeDay($nextDay, $thirdDay,$nextName, $thirdName, $fileCSVRow);
      
  }

  if ($IsDateSingle)
  {
    singleDates::singleCakeDay($currentDay, $currentName,$fileCSVSingle);
  }

   $lineGeneratorEmployee->next();  
  
}

fclose($fileCSVRow);
fclose($fileCSVSingle);