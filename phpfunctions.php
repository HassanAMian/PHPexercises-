/* PHP Functions from w3resource.com. */
/* url: http://www.w3resource.com/php-exercises/php-function-exercises.php */
/* Some solutions may be different than those listed on w3resource solution pages. If my solution is significantly different, I will include both solutions and explain my reasoning for picking mine over the posted solution. */

1. Write a function to calculate the factorial of a number (non-negative integer). The function accepts the number as a argument. 
<?php  
  function factorial($n) {  
    if($n ==0) {  
       return 1;  
    } else {     
       return $n * factorial($n-1);  
    }  
  }   
?>  


2. Write a function to check a number is prime or not. 
<?php
	function Prime($num) {
    	if($num == 1)
        	return false;
    	if($num == 2)
        	return true;
    	if($num % 2 == 0) {
        	return false;
    	}
    	for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        	if($num % $i == 0)
            	return false;
    	}
    	return true;
	}
?>


3. Write a function to reverse a string. 
<?php  
function reverse($str1) {  
 $n = strlen($str1);  
 if($n == 1)  
   {  
    return $str1;  
   }  
 else  
   {  
   $n--;  
   return reverse(substr($str1,1, $n)) . substr($str1, 0, 1);  
   }  
}  
print_r(reverse('hello world!'));  
?>  


4. Write a function to sort an array. 
<?php  
  function sortarray($a) {  
    for($x=0;$x< count($a);++$x) {  
    $min = $x;  
      for($y=$x+1;$y< count($a);++$y)  
      {  
        if($a[$y] < $a[$min]) {  
        $temp = $a[$min];  
        $a[$min] = $a[$y];  
        $a[$y] = $temp;  
        }  
      }  
    }  
  return $a;  
  }   
?> 


5. Write a PHP function that checks if a string is all lower case. 


6. Write a PHP function that checks whether a passed string is palindrome or not? 
