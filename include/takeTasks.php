<?php

    
    require_once('connectDB.php');
    function take_all_tasks($connect) {
        $all_tasks = mysqli_query($connect, "SELECT * FROM `task_list`");
        if ($all_tasks) {
            $rows = mysqli_num_rows($all_tasks);
            for ($i = 0; $i < $rows; $i++) {
                $row = mysqli_fetch_row($all_tasks);
                echo '<div class="row" id="column">';
                for($j = 1; $j < 4; $j++) {
                    echo '<div class="col">' . $row[$j] . '</div>';
                }
                echo '<div class="col"> <form method="post" action="../changetask.php"><button name="id" value=' . $row[0] . '>Edit.</button></form></div>';
                if ($row[4] == 0) {echo '<div class="col"> <form method="post" action="include/changestatus.php"><button name="id" value=' . $row[0] . ' style="background-color:red"> Edit.</button></form> </div>';}
                else {echo '<div class="col"> <form method="post" action="include/changestatus.php"><button name="id" value=' . $row[0] . ' style="background-color:green"> Edit.</button></form> </div>';}
                echo '</div>';
                
            }

        }  
    }

    function take_user_tasks($connect, $page) {
        $page = $page * 3;
        $all_tasks = mysqli_query($connect, "SELECT * FROM `task_list` LIMIT $page, 3");
        if ($all_tasks) {
            $rows = mysqli_num_rows($all_tasks);
            
            for ($i = 0; $i < $rows; $i++) {
                $row = mysqli_fetch_row($all_tasks);
                if ($row[4] == 1) {
                echo '<div class="row" id="column" style="background-color:green">';
                for($j = 1; $j < 4; $j++) {
                    echo '<div class="col" style="background-color:green">' . $row[$j] . '</div>';
                }
                echo '</div>';
            }
            else {
                echo '<div class="row" id="column" style="background-color:red">';
                for($j = 1; $j < 4; $j++) {
                    echo '<div class="col" style="background-color:red">' . $row[$j] . '</div>';
                }
                echo '</div>';
            }
        } 
        }  
    }
    

    ?>