<?php

 require_once __DIR__ . '/User.php';
  
  $user = new User();
  
echo $user->selfIntroduction();
echo $user->greet('Tom');
