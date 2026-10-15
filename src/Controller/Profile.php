<?php
namespace App\Controller;
use App\Helpers\View;
class Profile{
    public function profilePage(){
        View::handleView('user-views/profile.php');
        return;
    }
    public function showEditProfile()
{
    View::handleView('user-views/edit-profile.php');
}
}