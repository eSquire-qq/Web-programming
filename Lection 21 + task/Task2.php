<?php

function days($num){
    switch ($num){
        case 1: "Понеділок";
        case 2: "Вівторок";
        case 3: "Середа";
        case 4: "Четвер";
        case 5: "П'ятниця";
        case 6: "Субота";
        case 7: "Неділя";
            
        default: echo '<script>console.log("Error !") </script>';
        return "exeption";
    }
}

echo "Result: " .days(3)."<br><br>";

?>
