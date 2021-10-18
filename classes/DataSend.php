<?php 
require "./classes/EmployeeData.php";


class DataSend{

  public static function getEmployeeData($fileName)
  {
    
    $EmployeeArray = new EmployeeData($fileName);
    $EmployeeArray = new FilterRows($EmployeeArray);

    foreach ($EmployeeArray as $i => $lineArray) {
      $lineArray = array('name' => $lineArray[0], 'birthDay' => isset($lineArray[1]) ? $lineArray[1] : null);
      $name = $lineArray['name'];
      $dateOfBirth = new \DateTime($lineArray['birthDay']);
      $currentDate = $dateOfBirth->format(date("Y")."-m-d");
      $age = date_diff($dateOfBirth, date_create($currentDate));
      $years = "P".$age->format("%y")."Y";
      $dateOfBirth->add(new DateInterval($years));
      $dateOfBirth = $dateOfBirth->format('Y-m-d');
      $employee = new NameDate($name, $dateOfBirth);

      yield $employee;
 
    }
    
  //   $myfile = fopen($fileName, "r") or die("Unable to open file!");
  //   // Output one line until end-of-file
  //   $lineArray = array();
  //   while(!feof($myfile)) {
  //     $str = trim(fgets($myfile));
  //     $employeeDateArray = explode(",",$str);
  //     $lineArray = array('name' => $employeeDateArray[0], 'birthDay' => isset($employeeDateArray[1]) ? $employeeDateArray[1] : null);
  //     $name = $lineArray['name'];
  //     $dateOfBirth = new \DateTime($lineArray['birthDay']);
  //     $currentDate = $dateOfBirth->format(date("Y")."-m-d");
  //     $age = date_diff($dateOfBirth, date_create($currentDate));
  //     $years = "P".$age->format("%y")."Y";
  //     $dateOfBirth->add(new DateInterval($years));
  //     $dateOfBirth = $dateOfBirth->format('Y-m-d');
  //     $employee = new NameDate($name, $dateOfBirth);

  //     yield $employee;

  //   }
  //   fclose($myfile);
  // }

  
}

}