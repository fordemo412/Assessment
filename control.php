<?php
ob_start();

include_once 'Model.php';

class Mycontrol extends Model
{
  public function __construct()
  {
      parent::__construct();
      $url = $_SERVER['PATH_INFO'];
//    $data = $this->SelectAll("country");
//    echo $url;exit;

      switch($url)
      {
        case '/add_emp':
//        include_once 'add_emp.php';
          if(isset($_POST['submit']))
          {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $password = $_POST['pwd'];
            $data = array('fname'=>$fname,
                          'lname'=>$lname,
                          'email'=>$email,
                          'mobile'=>$mobile,
                          'address'=>$address,
                          'gender'=>$gender,
                          'password'=>$password);
            $res=$this-> InsertData('employee',$data);
            if($res) // 1 means true
				  {
					echo "<script> 
						alert('') 
						window.location='view_emp';
						</script>";
				  }
          include_once 'add_emp.php';
            break;
        }

        case '/view_emp':
        include_once 'header.php';
        $employee_arr=$this->SelectAll('employee');
        include_once('view_emp.php');
        break;

        case '/delete':
          echo "<script> 
						confirm('Are you Sure Want to
            Delete Data');
						</script>";
        if(isset($_REQUEST['del_emp_id']))
			  {
				$e_id = $_REQUEST['del_emp_id'];
				$where = array("emp_id"=>$e_id);

				$res=$this->delete_where('employee',$where);
				if($res) // 1 means true
				  {
					echo "<script> 
						alert('Delete Success') 
						window.location='view_emp';
						</script>";
				  }
			  }
        break;
      
      case '/edit_emp':
//      include_once 'header.php';
//      echo $e->fname;
      $employee_arr=$this->SelectAll('employee');
      include_once 'edit_emp.php';
      break;

      case '/edit';
      if(isset($_REQUEST['edit_emp_id']))
      {
        $e_id = $_REQUEST['edit_emp_id'];
        $where = array("emp_id"=>$e_id);
        $user_data = $this->Select_Where('employee',$where);
        $user_fetch = $user_data->fetch_object();

        //update
        if(isset($_POST['update']))
              {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];

          $data = array('fname'=>$fname,
                        'lname'=>$lname,
                        'email'=>$email,
                        'mobile'=>$mobile);

          $res = $this->UpdateData('employee',$data,$where);
          if($res) // 1 means true
				  {
					  echo "<script>
						alert('User Profile Updated') 
						window.location='view_emp';
						</script>";
				  }
          header('location:view_emp');                  
        }
      }
      include_once 'edit_emp.php';
      break;
    }
  }
}
$obj = new Mycontrol;
ob_flush();
?>