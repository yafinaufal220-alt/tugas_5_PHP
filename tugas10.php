<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Angka 5 dilewati
    }
    echo $i . " ";
}
?>