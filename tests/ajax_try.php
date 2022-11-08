<?php
include 'ajax_content.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
$(document).ready(function() {
    var comment_count = 2;
    $("button").click(function (){
        comment_count = comment_count + 2;
        $("#comments").load("load_comments.php",{
            commentNewCount : comment_count
        });


    });

});

    </script>
</head>
<body>

    <div id ="comments" style = "width: 90vw; height: 100px;background-color: rgb(194, 194, 194);">
            <?php
               
                $sql = "SELECT * FROM client_account LIMIT 2";
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
    </div>
    
    <button>Show more</button>

</body>
</html>