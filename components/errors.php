<?php

if(isset($error)) {
    foreach ($error as $e) {
        echo "<span class='text-red-700'>$e</span>";
    }
}