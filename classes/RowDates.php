<?php 
require_once "./classes/CakeDay.php";

class RowDates{

  public static function rowCakeDay($nextDay, $currentDay,$nextName, $currentName, $fileCSVRow){
    
    //  Fri, Sat, Sun, Christmasday, Boxingday, NewYear test
      // Fri
      $IsDateFriNext    = CakeDay::IsDateFri($nextDay);
      $IsDateFriCurrent = CakeDay::IsDateFri($currentDay);
      //*************************************************** */
      // Sat
      $IsDateSatNext    = CakeDay::IsDateSat($nextDay);
      $IsDateSatCurrent = CakeDay::IsDateSat($currentDay);
      /**************************************************** */
      // Sun
      $IsDateSunNext    = CakeDay::IsDateSun($nextDay);
      $IsDateSunCurrent = CakeDay::IsDateSun($currentDay);
      /**************************************************** */
      // Chritmas Day
      $IsDateChrisNext    = CakeDay::IsDateChris($nextDay);
      $IsDateChrisCurrent = CakeDay::IsDateChris($currentDay);
      /**************************************************** */
      // Boxing Day
      $IsDateBoxNext    = CakeDay::IsDateBox($nextDay);
      $IsDateBoxCurrent = CakeDay::IsDateBox($currentDay);
      /**************************************************** */
      if ($IsDateFriNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateFriCurrent){
        $currentDays = '4';
        $nextDays = '3';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateSatNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateSatCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }

      elseif ($IsDateSunNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateSunCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }

      elseif ($IsDateChrisNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateChrisCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }

      elseif ($IsDateBoxNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }
      elseif ($IsDateBoxCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }

      else
      {
        $currentDays = '2';
        $nextDays = '1';
        CakeDay::DisplayOutputRow($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$fileCSVRow);
      }

  }

}