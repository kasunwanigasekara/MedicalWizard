<?php

namespace medicalwizard\controller;
use medicalwizard\model\manageUsers;

 class uservalidate
{
    private string $user;
    private string $pass;
    private array $data;

    public function checkUser($user,$pass):bool
    {
        $this->user=$user;
        $this->pass=$pass;

        $userData= new manageUsers();
        $data=$userData->fetchUserData($this->user);

        if(count($data)>0)
        {
            foreach($data as $userdata)
            {                
                if(password_verify($this->pass, $userdata['password']))
                {
                    return true;
                }
                else{
                    return false;
                }

            }
        } 

        else{

            return false;
        }
        


    }

}

?>