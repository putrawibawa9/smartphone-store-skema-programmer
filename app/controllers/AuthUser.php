<?php
// Semua Controller untuk kebutuhan autentikasi
use Controller\Controller;
class AuthUser extends Controller{
    public function login(){
      $this->view('auth/loginUser');
    }

    public function signin(){
        $auth = new User_model;
        if($auth->login($_POST)){
          $admin = $auth->login($_POST);
          setcookie("admin", $admin, time() + 3600, '/');
            header('Location: '. BASEURL . '/dashboard/index');
      }else{
        header("Location: ../index.php?status=0");
        exit();
      };
    }

    public function logout(){
        session_destroy();
        header('Location: '. BASEURL . '/auth/login');
    }

    public function register(){
      $auth = new User_model;
      $auth->username = $_POST['username'];
      $auth->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      if($auth->insert() > 0){
           header('Location: '. BASEURL . '/auth/login');
        }
    }

}