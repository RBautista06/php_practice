<?php

require __DIR__.'/vendor/autoload.php'; //so it will automatically load the composers for use when we use "use"
use Cocur\Slugify\Slugify; // this is the same as import

//  $fullname = 'Railley';
//  echo "My name is $fullname"; // make sure to use always "" insted of ''
// -> this symbol is same as . in accessing object keys

  $slugify = new Slugify();
  echo $slugify->slugify('The Sky is Blue');

// creating function
  function doubleMe($x) {
    return $x * 2;
  }

  function tripleMe($x) {
    return $x * 3;
  }

  $result =  tripleMe(doubleMe(10));

  if($result > 200){
    echo "\nthe number $result is 200 higher";
  } else {
    echo "\nthe number $result is lower than 200";
  }

 ?>