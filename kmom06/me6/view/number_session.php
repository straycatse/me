<?php

 $number = $_SESSION["number"] ?? 1;

 $number = $number * 2;

 $_SESSION["number"] = $number;

 echo '<pre>';
 var_dump($_SESSION);
 echo '</pre>';
