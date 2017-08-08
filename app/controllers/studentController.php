<?php
//for error checking
ini_set("display_errors", true);
error_reporting(E_ALL);
/**
*controller class for the student related operation
*/
class studentController extends Controller{

  protected $student;
  /**
  *construcotr of the controller class and this will also initialize the $student attribute with the model class object
  */
  public function __construct(){
       $this->student=$this->model('Student');
  }
  /**
  *this function will be used to call the render view function
  *this will render the addStudent html page
  */
  public function insertview(){
    $this->view('student/add');
  }
  /**
  *this function will get the parameter from the url body and insert it into the studnet table
  */
  public function addStudent(){
           //echo 'addStudent';
           echo $this->student->rollNo=$_POST['rollNo'];
           echo $this->student->name=$_POST['name'];
           echo $this->student->emailId=$_POST['emailId'];
           //ORM method call to build query
           Student::create([
             'rollNo'=>$_POST['rollNo'],
             'name'=>$_POST['name'],
             'emailId'=>$_POST['emailId']
           ]);
  }
  /**
  *this function will be used to call the render view function
  *this will render the deleteStudent html page
  */
  public function deleteView(){
    $this->view('student/delete');
  }
  /**
  *this function will get the parameter from the url body and delete the row from the student table
  */
  public function deleteStudent(){
    //ORM method call to build query
    Student::where('rollNo','=',$_POST['rollNo'])->delete();
  }
  /**
  *this function will be used to call the render view function
  *this will render the deleteStudent html page
  */
  public function updateView(){
    $this->view('student/update');
  }
  /**
  *this function will get the parameter from the url body and update the row from the student table
  */
  public function updateStudent(){
    //ORM method call to build query
    $stu=Student::where('rollNo','=',$_POST['rollNo'])->get();
    $stu->name=$_POST['name'];
    $stu->save();
  }
  /**
  *this function will be used to call the render view function
  *this will render the showStudent html page
  */
  public function showStudent(){

    //$this->student=$this->model('student');
    //ORM method call to build query
    $stu=Student::where('rollNo','=','3')->get();
    //echo $this->student->name;
    $this->view('student/show',['name'=>$stu->name]);
  }

}

 ?>
