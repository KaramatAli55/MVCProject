<?php
//ini_set("display_errors", true);
//error_reporting(E_ALL);
class Controller{

 /**
 *this method will give the required model class object from the modelFactorys
 *@param $model required model class name
 */
  public function model($model){

    require_once '../app/models/modelFactory.php';
    //require_once '../app/models/student.php';
     $obj=new ModelFactory();
     $obj->show()."<br>";
     echo "<br>".$model."<br>"."here is the model"."<br>";
     return $obj->getInstance($model);
    // $obj=new student();
    // echo $obj->name='ali';
     //return $obj;
     //echo $obj->name;
  }
  /**
  *this method will renderv the required View
  *@param $view required view name
  *@param $data any data to that view
  */
  public function view($view,$data =[])
  {
    require_once '../app/views/'.$view.'.html';
  }

}

 ?>
