<?php

/**
*
*Create a Factory to generate object of classes based on given information
*/
class controllerFactory{
  public function __construct(){
    require_once '../app/controllers/studentController.php';
    require_once '../app/controllers/courseController.php';
    require_once '../app/controllers/teacherController.php';
    echo "controllerfactory constructor"."<br>";
  }
  /**
  *
  *method to create the objects of different classes on provided information
  *@param $TYPE  value will detemine which class object should be created
  *@return it will return the requested class object
  */
  public function getInstance($type){
    // Check that the class exists before trying to use it
   if (class_exists($type)) {
       echo "getInstance"."<br>";
       echo "object return of ".$type."<br>";
        $obj=new $type();
        return $obj;
      }
    return false;
  }
  public function show(){
    echo "i am controller factory"."<br>";
  }
}

//$obj=new ModelFactory();
//$o=$obj->getInstance("Student");

 ?>
