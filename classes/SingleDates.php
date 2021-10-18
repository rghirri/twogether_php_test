<?php 
require_once "./classes/CakeDay.php";

class SingleDates{

  public static function singleCakeDay($currentDay, $currentName){
    
    //  Fri, Sat, Sun, Christmasday, Boxingday, NewYear test
      // Fri
      $IsDateFriCurrent = CakeDay::IsDateFri($currentDay);
      //*************************************************** */
      // Sat
      $IsDateSatCurrent = CakeDay::IsDateSat($currentDay);
      /**************************************************** */
      // Sun
      $IsDateSunCurrent = CakeDay::IsDateSun($currentDay);
      /**************************************************** */
      // Chritmas Day
      $IsDateChrisCurrent = CakeDay::IsDateChris($currentDay);
      /**************************************************** */
      // Boxing Day
      $IsDateBoxCurrent = CakeDay::IsDateBox($currentDay);
      /**************************************************** */
     if ($IsDateFriCurrent){
        $currentDays = '3';
        CakeDay::DisplayOutputSingle($currentDay, $currentName,$currentDays);
      }
      elseif ($IsDateSatCurrent){
        $currentDays = '2';
        CakeDay::DisplayOutputSingle($currentDay,$currentName,$currentDays);
      }
    elseif ($IsDateSunCurrent){
        $currentDays = '2';
        CakeDay::DisplayOutputSingle($currentDay,$currentName,$currentDays);
      }

      elseif ($IsDateChrisCurrent){
        $currentDays = '3';
        CakeDay::DisplayOutputSingle($currentDay, $currentName,$currentDays);
      }
      elseif ($IsDateBoxCurrent){
        $currentDays = '2';
        CakeDay::DisplayOutputSingle($currentDay, $currentName,$currentDays);
      }

      else
      {
        $currentDays = '1';
        CakeDay::DisplayOutputSingle($currentDay,$currentName,$currentDays);
      }

  }

}