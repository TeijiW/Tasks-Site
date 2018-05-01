<?php
    require_once("db_connect.php");

    if(isset($_POST["send"])):
        $errors = array();
        $mat = mysqli_escape_string($connect, $_POST["mat"]);
        $work = mysqli_escape_string($connect, $_POST["work"]);
        $date = mysqli_escape_string($connect, $_POST["date"]);
        if(empty($mat) or empty($work) or empty($date)):
            $errors[] = "Preencha todos os campos <br>";
        else:
            $sql = "INSERT INTO works (mat,homework,dateofworks) VALUES ('$mat', '$work', '$date')";
            $result = mysqli_query($connect, $sql);
            header('Location: index.php');
        endif;
    #$sql = "INSERT INTO works (mat,homework,dateofworks) VALUES ('$mat', '$work', '$date')";
    #mysqli_query($connect,$sql);
    endif;
    if (!empty($errors)):
        foreach($errors as $error):
            echo "$error";
        endforeach;
    endif;
    

    
        
?>
