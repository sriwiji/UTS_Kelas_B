<?php
//SRI WIJI ASTUTI

namespace Codecademy;

function both($first, $second)
{
  if ($first){
    if ($second){
      return "both";
    } else {
      return "not both";
    }
  } else {
    return "not both";
  }
}
//2255201058

echo both(TRUE, TRUE);
echo "\n\n";
echo both(FALSE, FALSE);
echo "\n\n";
echo both(TRUE, FALSE);
//kelas B