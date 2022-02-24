<?php

session_start();

include('dbconfig.php');

if (isset($_POST['delete_btn'])) {

    $del_id = $_POST['delete_btn'];
    $ref_table = 'contacts/'.$del_id;
    $deletequery_result=$database->getReference($ref_table)->remove();
    if($deletequery_result){
        $_SESSION['status'] = "Contact Deleted successfully";
        header('Location: index.php');

    }else{
       $_SESSION['status'] = "Contact not deleted";
       header('Location: index.php');
    }


}


if (isset($_POST['update_contact'])) {

    $key = $_POST['key'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $updateData = [
        'fname' => $first_name,
        'lname' => $last_name,
        'email' => $email,
        'phone' => $phone,

    ];
$ref_table = 'contacts/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if($updatequery_result){
        $_SESSION['status'] = "Contact updated successfully";
        header('Location: index.php');

    }else{
       $_SESSION['status'] = "Contact not updated";
       header('Location: index.php');
    }

}



if(isset($_POST['save_contact']))
{

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $postData = [
        'fname' => $first_name,
        'lname' => $last_name,
        'email' => $email,
        'phone' => $phone,

    ];
    $ref_table = 'contacts';
    $postRef_result = $database->getReference($ref_table)->push($postData);
     if($postRef_result){
         $_SESSION['status'] = "Contact addedd successfully";
         header('Location: index.php');

     }else{
        $_SESSION['status'] = "Contact not added";
        header('Location: index.php');
     }
}
?>