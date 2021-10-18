<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./classes/DataSend.php";
require "./classes/RowDates.php";
require "./classes/SingleDates.php";

$fileName = 'employee-birthdates.txt';

function ThirdDate()
{ 
  $fileName = 'employee-birthdates.txt';
  $lineGeneratorEmployee = DataSend::getEmployeeData($fileName);
  while ($lineGeneratorEmployee->valid()) {
  $lineGeneratorEmployee->current();
  $lineGeneratorEmployee->next();
  $lineGeneratorEmployee->current();
  $lineGeneratorEmployee->next();

  $thirdDate = $lineGeneratorEmployee->current();

  yield $thirdDate;
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
  $thirdDate =  $lineGeneratorThirdValue->current()->birthDay;
  $thirdDate = $lineGeneratorThirdValue->next();
  //var_dump($nextPre);

  $IsDateRow = CakeDay::IsDateRow($nextDay, $currentDay, $thirdDate);
 // $IsDateDup = CakeDay::IsDateDup($currentDay,$nextDay,$fileName);

  if ($IsDateRow)
  {

      RowDates::rowCakeDay($nextDay, $currentDay,$nextName, $currentName);
      
  }else
  {
    singleDates::singleCakeDay($currentDay, $currentName);
  }

 $lineGeneratorEmployee->next();
  
}