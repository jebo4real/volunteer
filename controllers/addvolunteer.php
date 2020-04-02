<?php
include('../class/mysql_crud.php');
$db = new Database();
$db->connect();
session_start();

//check captcha code
$code = (isset($_POST['captcha_code']))?$_POST['captcha_code']:'';
if($code != $_SESSION['captcha_code']){
    header('Location:../volunteer.php?response=wrongcaptcha');
}else{
    //get user skills
    $skills_arr = (isset($_POST['skills'])) ? $_POST['skills'] : '';
    $skills =  implode(",", $skills_arr);

    //get user permissions
    $perm_arr= (isset($_POST['perm'])) ? $_POST['perm'] : '';
    $perm =  implode(",", $perm_arr);

    // Table name, column names and respective values
    //Insert into userinfo table
    $sql_response = $db->insert(
        'userinfo',
        array(
            'firstname'=>$db->escapeString( (isset($_POST['firstname'])) ? $_POST['firstname'] : '' ),
            'lastname'=>$db->escapeString( (isset($_POST['firstname'])) ? $_POST['firstname'] : '' ),
            'gender'=>$db->escapeString( (isset($_POST['gender'])) ? $_POST['gender'] : '' ),
            'dob'=>$db->escapeString( (isset($_POST['dob'])) ? $_POST['dob'] : '' ),
            'email'=>$db->escapeString( (isset($_POST['email'])) ? $_POST['email'] : '' ),
            'phone'=>$db->escapeString( (isset($_POST['phone'])) ? $_POST['phone'] : '' ),
            'country'=>$db->escapeString( (isset($_POST['country'])) ? $_POST['country'] : '' ),
            'city'=>$db->escapeString( (isset($_POST['city'])) ? $_POST['city'] : '' ),
            'websiteLink'=>$db->escapeString( (isset($_POST['websiteLink'])) ? $_POST['websiteLink'] : '' ),
            'status'=>$db->escapeString( (isset($_POST['websiteLink'])) ? $_POST['websiteLink'] : '' ),
        )
    ); 
    $userid = $db->getResult();
    if(isset($userid)){
        //Insert into userhelp/skills table
        $db->insert(
            'userhelp',
            array(
                'userid'=>$userid[0],
                'help'=>$skills,
            )
        ); 
        $res = $db->getResult();
        //Insert into user permissions table
        $db->insert(
            'userpermission',
            array(
                'userid'=>$userid[0],
                'permissions'=>$perm,
            )
        ); 
        //print_r($res);
    }  
    if($sql_response){
        header('Location:../volunteer.php?response=success');
    }else{
        header('Location:../volunteer.php?response=error');
    }
    

}
?>