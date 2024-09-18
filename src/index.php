<?php
function eggCollection($chickens = 10, $days = 7) {
    $totalEggs = 0;
    $eggArray = [];

    for ($i = 0; $i < $chickens; $i++) { // << this loop is for each chicken 
        $dailyEggs = [];
        for ($j = 0; $j < $days; $j++) { // << this loop is for each day
            $eggs = rand(0, 5);
            $dailyEggs[] = $eggs;
            $totalEggs += $eggs;  
        }

        $eggArray[] = $dailyEggs;
    }

    echo "Egg collection for each chicken over $days days:\n";
    foreach ($eggArray as $index => $dailyEggs) {
        echo "Chicken " . ($index + 1) . ": ";
        
        for ($k = 0; $k < count($dailyEggs); $k++) {
            echo $dailyEggs[$k];
            if ($k < count($dailyEggs) - 1) {
                echo ", "; 
            }
        }
        echo "\n"; 
    }

    echo "Total eggs collected: $totalEggs\n";
}

eggCollection();
?>
