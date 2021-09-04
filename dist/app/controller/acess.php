<?php
    include_once "../db/config.php";
    $Fname = mysqli_real_escape_string($conn, $_POST['Fname']);
    $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    if(isset($_POST['Agr'])){
        $Agr = mysqli_real_escape_string($conn,$_POST['Agr']);
    }else{
        $Agr= 'false';
    };
    $Phone = mysqli_real_escape_string($conn, $_POST['Phone']);
    $Pass = mysqli_real_escape_string($conn, $_POST['Pass']);
    $Cpass = mysqli_real_escape_string($conn, $_POST['Cpass']);
    $Country = mysqli_real_escape_string($conn, $_POST['Country']);
   
    
    if(!empty($Fname) && !empty($Lname) && !empty($Email)  && !empty($Phone) && !empty($Pass) && !empty($Cpass)){
        if(filter_var($Email,FILTER_VALIDATE_EMAIL)){
            if(strlen($Pass) >= 10 && strlen($Pass) <= 30){
                if($Cpass === $Pass){
                    if($Agr=='true'){
                        $sql2 = "SELECT * FROM users WHERE email=? LIMIT 1 ";
                        $stmt = $conn->prepare($sql2);
                        $stmt->bind_param('s', $Email);
                        if($stmt->execute()){
                            $num =$stmt->get_result();
                                if($num->num_rows > 0){
                                    echo 'email already exist';
                                    }else{
                                    $sql3 = "SELECT * FROM users WHERE phone=? LIMIT 1 ";
                                    $stmt = $conn->prepare($sql3);
                                    $stmt->bind_param('i', $Phone);
                                    $stmt->execute();
                                    $num =$stmt->get_result();
                                    
                                    if($num->num_rows > 0){
                                        echo 'phone number already exist';
                                    }else{
                                        $token = md5( rand(0,1000));
                                        $verified = false;
                                        
                                        $Pass = password_hash($Pass,PASSWORD_DEFAULT);
                                        $query = "INSERT INTO users (fname,lname,email,country,phone,pass,hash,verified) VALUES (?,?,?,?,?,?,?,?)";
                                        $stmt = $conn->prepare($query);
                                        $stmt->bind_param('ssssissb', $Fname,$Lname,$Email,$Country,$Phone,$Pass,$token,$verified); 
                                        if($stmt->execute()){
                                            // sending tokens to user's email address
                                            echo $Email;
                                            $toEmail = $Email;
                                            $subject = 'Cnnfirm your email';
                                            $body ='<h2>Contact Request</h2>
                                                <h4>Name <P>.$Fname.</p>
                                                <h4>Email <P>'.$Email.'</p>
                                                <h4>Name <P>'.$Fname.'</p>
                                                ';
                                            $headers ="MIME-Version:1.0" ."/r/n";
                                            $headers .="Content-Type:text/html;charset=UTF-8" . "/r/n";
                                            $headers .= "From: Chatme";
                                            if(mail($toEmail,$subject,$body,$headers)){
                                                echo 'verification link has been sent to your email address';
                                            }
                                            else{
                                                echo'some error occured';
                                            }

                                        }else{
                                            echo 'you have a problem';
                                        }
                                    }
                                }
                        }else{
                            echo 'sql error';
                        }

                    }else{
                        echo 'agree to the terms and condition';
                    }
                }else{
                    echo 'passwords must be the same';
                }
            }elseif (strlen($Pass) < 10) {
                echo 'password too short';
            }elseif(strlen($Pass) > 30){
                echo 'password too long';
            }
        }
        else{
            echo 'is not a valid mail';
        }

    }
    else{
        
        echo ('all fields are required');
    }

    

?>