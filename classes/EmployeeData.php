<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./classes/NameDate.php";

class EmployeeData extends IteratorIterator {

	public function __construct($pathToFile) {
		// Call the parent constructor with an SplFileObject (also Traversable) for the given path.
		parent::__construct(new SplFileObject($pathToFile, 'r'));

		// These set up the inner SplFileObject's properties to process CSV.
		$file = $this->getInnerIterator();
		$file->setFlags(SplFileObject::READ_CSV); //study
		$file->setCsvControl(',', '"', "\\");// study
	}
}

class FilterRows extends FilterIterator{
  public function accept()
  {
    $current = $this->getInnerIterator()->current();
    if (count($current) == 1){
        return false;
    }
    return true;
  }
}