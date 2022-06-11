<?php

function days($num){
    switch ($num){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
            
        default: echo '<script>console.log("Error !") </script>';
        return "exeption";
    }
}

echo "Result: " .days(3)."<br><br>";

?>