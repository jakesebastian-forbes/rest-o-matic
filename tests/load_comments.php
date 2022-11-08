<?php
    include 'ajax_content.php';

    $comment_newCount = $_POST['commentNewCount'];
    $sql = "SELECT * FROM client_account LIMIT " . $comment_newCount;
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            echo "<p>";
            echo $row['client_id'];
            echo $row['username'];
            echo "</p>";


        }
    }else{
        echo "No comment";
    }

?>