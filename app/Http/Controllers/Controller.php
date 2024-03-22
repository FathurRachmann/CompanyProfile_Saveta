<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function login(){
        session_start();
        require('config.php');

        if (isset($_POST['username']) and isset($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
         
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);

        if ($count == 1){
        $_SESSION['username'] = $username;
        }else{

        $fmsg = "Invalid Login Credentials.";
        }
        }

        if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        return view('list');
         
        }else{
            return view('login');
        }
    }
}
