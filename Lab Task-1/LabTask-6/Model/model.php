<?php 

require_once 'db_connect.php';

function addData($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `supervisor`(`sname`, `semail`, `susername`, `sPassword`,`sphone`,`saddress`)  VALUES (:sname, :semail, :susername, :spassword, :sphone, :saddress )";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':sname' => $_POST['sname'],
            ':semail' => $_POST['semail'],
            ':sphone' => $_POST['sphone'],
            ':saddress' => $_POST['saddress'],
            ':susername' => $_POST['susername'],
            ':spassword' => $_POST['spassword'],
            // ':shift' => $_POST['shift'],
            // ':category' => $_POST['category'],
            // ':gender' => $_POST['gender'],
            // ':dob' => $_POST['dob']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function getID($susername,$spassword)
{
    $conn = db_conn();
    $sql = "SELECT * FROM `supervisor` WHERE `susername`= '$susername'  and `spassword` = '$spassword' ;";
    //SELECT * FROM `doctor` WHERE `dusername`= 'hassan_tushar' and `dpassword` = '#12345678';

          $result = $conn->query($sql);

          //$fetch = $result->fetch_assoc();
        //   echo " hoa jao plz";
    //$fetch = $result->fetch_array();
    if ($result->rowCount() > 0){
    $fetch = $result->fetch(); // returns a row .
    // echo " hoa jao plz";
    return $fetch;

    }
    else{
        return "";
    }
    
}

function showAllData(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `supervisor` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function updateData($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `supervisor` set `sname` = ?, `semail` = ?,`susername` = ?,`spassword` = ?, `sphone` = ?, `saddress` = ? where `sid` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
      

            // $a=$data['docid'];
            $b=$data['sname'];
            $c=$data['semail'];
           
            $e=$data['susername'];
            $f=$data['spassword'];
    
            $i=$data['sphone'];
            $h=$data['saddress'];
            
            // $j= $data['gender'];
            // $k=$data['dblood_group'];
           // $l=;
    
            $stmt->execute([$b, $c, $e, $f, $i, $h, $id]);



            //$data['sname'], $data['semail'], $data['susername'], $data['spassword'], $data['sphone'], $data['saddress'], $id
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePassword($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `supervisor` set `sPassword` = ? where `sid` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePicture($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `supervisor` set `simage` = ? where `sid` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `product_info` WHERE `sid` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showData($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `supervisor` where `sid` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

// function searchData($name){
//     $conn = db_conn();
//     $selectQuery = "SELECT * FROM `supervisor` WHERE Name = ?";
//      try {
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([$name]);
//     } catch (PDOException $e) {
//         echo $e->getMessage();
//     }
//     $data = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $data;
// }
?>