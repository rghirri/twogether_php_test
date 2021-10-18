<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./classes/ExtraCode.php";

class cakeDay{


  public static function IsDateRow($nextDay, $currentDay, $thirdDate)
  {

    $currentDay = new \DateTime($currentDay);
    $nextDay = new \DateTime($nextDay);
    $thirdDate = new \DateTime($thirdDate);
    $dateDiff = date_diff($nextDay, $currentDay);
    $dateDiffPre = date_diff($thirdDate, $currentDay);

    if (($dateDiff->d == 1) && ($dateDiffPre->d != 2)){
      return true;
    }
    return false;
  
}

public static function IsDateDup($currentDay,$fileName)
{
  $dupDay = ExtraCode::datePattern($fileName);
  $currentDay = new \DateTime($currentDay);
  //$nextDay = new \DateTime($nextDay);
  $currentDay = $currentDay->format('m-d');
  //$nextDay = $nextDay->format('m-d');

  //var_dump($dupDate);
 
  // if ((in_array($currentDay, $dupDay)) || (in_array($nextDay, $dupDay))){
  //   return true;
  // }else
  // {
  // return false;
  // }

  if ((in_array($currentDay, $dupDay)))
  
  {
      return true;
    }else
    {
    return false;
    }

}

public static function IsDateFri($Daytest)
{
      $Daytest = new \DateTime($Daytest);
      $timestamp = strtotime($Daytest->format('Y-m-d'));
      $cakeDay = date('D', $timestamp);
      
      
      if ($cakeDay == "Fri"){
        return true;
      }
      else
      {
        return false;
      }
}

public static function IsDateSat($Daytest)
{
      $Daytest = new \DateTime($Daytest);
      $timestamp = strtotime($Daytest->format('Y-m-d'));
      $cakeDay = date('D', $timestamp);
      
      
      if ($cakeDay == "Sat"){
        return true;
      }
      else
      {
        return false;
      }
}

public static function IsDateSun($Daytest)
{
      $Daytest = new \DateTime($Daytest);
      $timestamp = strtotime($Daytest->format('Y-m-d'));
      $cakeDay = date('D', $timestamp);
      
      
      if ($cakeDay == "Sun"){
        return true;
      }
      else
      {
        return false;
      }
}

public static function IsDateChris($Daytest)
{
  $Daytest = new \DateTime($Daytest);
  $Daytest = $Daytest->format('m-d');

  if ($Daytest == "12-25")
  
  {
      return true;
    }else
    {
    return false;
    }

}

public static function IsDateBox($Daytest)
{
  $Daytest = new \DateTime($Daytest);
  $Daytest = $Daytest->format('m-d');

  if ($Daytest == "12-26")
  
  {
      return true;
    }else
    {
    return false;
    }

}

public static function IsDateNewYear($Daytest)
{
  $Daytest = new \DateTime($Daytest);
  $Daytest = $Daytest->format('m-d');

  if ($Daytest == "01-01")
  
  {
      return true;
    }else
    {
    return false;
    }

}

public static function DisplayOutput($nextDay, $currentDay,$nextName, $currentName, $currentDays, $nextDays)
{
      
      $currentDayOriginal = new \DateTime($currentDay);
      $nextDayOriginal = new \DateTime($nextDay);
      $currentDay = new \DateTime($currentDay);
      $nextDay = new \DateTime($nextDay);
      $birthCurrent = $currentDay->add(new DateInterval('P'.$currentDays.'D'));
      $birthNext = $nextDay->add(new DateInterval('P'.$nextDays.'D'));

      echo "</br></br>****************************************************************** Birthdays in a Row ********************************************************************************</br></br>";
      echo $currentName." born the ".$currentDayOriginal->format('dS F'). " shares one large cake with coleague on ".$birthCurrent->format('dS F Y')."</br></br>";
      echo $nextName." born the ".$nextDayOriginal->format('dS F'). " shares one large cake with coleague on ".$birthNext->format('dS F Y')."</br></br>";
}


}