<?php
    include_once "../db/config.php";
    $acess = mysqli_real_escape_string($conn,$_POST['Login']);
    $Pass = mysqli_real_escape_string($conn,$_POST['Pass']);
    if(isset($_POST['kp'])){
        $kp = true;
    }else{
        $kp= false;
    }


    if(!empty($_POST['Login']) ){
        if(!empty($_POST['Pass'])){
            $query = "SELECT * FROM users WHERE email=? OR phone=? LIMIT 1";
            $stmt=$conn->prepare($query);
            $stmt->bind_param('si',$acess,$acess);
            $stmt->execute();
            $result = $stmt->get_result();
            $count = $result->num_rows;
            
            if($count >0 ){
                $user = $result->fetch_assoc();
                if(password_verify($Pass, $user ['pass'])){
                    $_SESSION['lname'] = $user['lname'];
                    $_SESSION['fname'] = $user['fname'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['status'] = $user['status'];
                    echo 'success';
                }else{
                    echo 'Wrong password';
                }
                
            }else{
                echo 'Email or phone not registered';
            }
        }else{
            echo 'Enter your password';
        }
    }else{
        echo "enter phone or email";
    }

?>