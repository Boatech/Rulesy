<?php
/**
 *  *PHP Scripts({0.1(1)}) ~ By Rulsey Dev Team ~ V-invalid(0)
 *Copyright 2021-2029 Rulsey, Inc.(importation from Rulsey Originals PHP script)
 * License - https://dev.rusley.com/rulsey_dev/builds/current_version
 * for www.rulsey.com | beta.rusley.com
 * generated dynamically based on request from melody {{stream.Line(interval)}}
**/
require 'classes/initialize.construct.php';
if(isset($_SESSION['user_id']) && isset($_SESSION['email'])){
    $user_data = $user_obj->find_user_by_id($_SESSION['user_id']);
    if($user_data ===  false){
        header('Location: logout.php');
        exit;
    }
    // fetch all users, which their id is not equals to the current user's id
    $all_users = $user_obj->all_users($_SESSION['user_id']);
}
else{
    header('Location: logout');
    exit;
}
// REQUEST NOTIFICATION NUMBER
$get_req_num = $frnd_obj->request_notification($_SESSION['user_id'], false);
// TOTAL REQUESTS
$get_req_num = $frnd_obj->request_notification($_SESSION['user_id'], false);
// TOTal FRIENDS
$get_frnd_num = $frnd_obj->get_all_friends($_SESSION['user_id'], false);
// GET MY($_SESSION['user_id']) ALL FRIENDS
$get_all_friends = $frnd_obj->get_all_friends($_SESSION['user_id'], true);
?>
