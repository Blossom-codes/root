<?php

class Signup extends Controller
{
    public function user()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['submit'])) {

            $first_name = $_GET['firstname'];
            $last_name = $_GET['lastname'];
            $gender = $_GET['gender'];

            if (!empty($first_name) && !empty($last_name) && !empty($gender)) {

                $user = $this->model("Register");
                if ($user->checkUser("$first_name", "$last_name", "$gender")) {
                    #user already exists
                    $this->view("home/signup", ["errmsg" => "User Exists"]);
                } else {

                    if ($user->setUser("$first_name", "$last_name", "$gender")) {
                        $this->view("home/signup", ["name" => $first_name, "msg" => "Sign up was successful"]);
                    }
                }
            } else {
                $this->view("home/signup", ["errmsg" => "Registration failed"]);
            }
        }

        $this->view("home/signup");
    }
}
