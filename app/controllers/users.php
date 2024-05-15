<?php

class Users extends Controller
{
    public function list()
    {
        $user = $this->model("User");
        $stmt = $user->getUsers();

        $this->view("home/users",["data" =>$stmt]);
    }
}
