<?php 
require "./classes/CakeDay.php";

class RowDates{

  public static function rowCakeDay($nextDay, $currentDay,$nextName, $currentName){
    
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
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }
      elseif ($IsDateFriCurrent){
        $currentDays = '4';
        $nextDays = '3';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }
      elseif ($IsDateSatNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }
      elseif ($IsDateSatCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }

      elseif ($IsDateSunNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }
      elseif ($IsDateSunCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }

      elseif ($IsDateChrisNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$year);
      }
      elseif ($IsDateChrisCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$year);
      }

      elseif ($IsDateBoxNext){
        $currentDays = '5';
        $nextDays = '4';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$year);
      }
      elseif ($IsDateBoxCurrent){
        $currentDays = '3';
        $nextDays = '2';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays,$year);
      }

      else
      {
        $currentDays = '2';
        $nextDays = '1';
        CakeDay::DisplayOutput($nextDay, $currentDay,$nextName, $currentName,$currentDays,$nextDays);
      }

  }

}