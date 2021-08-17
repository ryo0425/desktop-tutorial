<?php

for ($i = 1; $i <= 100; $i++) {
echo '<br>';

if($i % 3 == 0){
print "Fizz";

}else if($i % 5 == 0){
print "Buzz";

}else if($i % 3 == 0 && $i % 5 == 0){
print "FizzBuzz";

}else{
print $i;
}

}
?>
