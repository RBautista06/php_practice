<?php
//  $fullname = 'Railley';
//  echo "My name is $fullname"; // make sure to use always "" insted of ''

// creating function
  function doubleMe($x) {
    return $x * 2;
  }

  function tripleMe($x) {
    return $x * 3;
  }

  $result =  tripleMe(doubleMe(10));

  if($result > 200){
    echo "the number is 200 higher";
  } else {
    echo "the number is lower than 200";
  }

 ?>