<?php
    // session_start();
    include_once "../db/config.php";
    $output ="";
    $sql = "SELECT * FROM users";
    $stmt=$conn->prepare($sql);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $count= $result->num_rows;
    
    }
    else{
        echo 'error1';
    }
    if($count == 1){
        $output .= "no user available";
        echo 'error2';
    }elseif($count > 1){
        while($rows = $result->fetch_assoc()){
            $output .='
                <div class="item">
                    <div class="online user-icon">
                        <img src="img/a3.png" alt="">
                    </div>
                    <p class="nm">sammy</p>
                </div>
            ';
        }
    }
    echo $output;
?>