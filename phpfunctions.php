/* PHP Functions from w3resource.com. */
/* url: http://www.w3resource.com/php-exercises/php-function-exercises.php */
/* Some solutions may be different than those listed on w3resource solution pages. If my solution is significantly different, I will include both solutions and explain my reasoning for picking mine over the posted solution. */

1. Write a function to calculate the factorial of a number (non-negative integer). The function accepts the number as a argument. 


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


4. Write a function to sort an array. 


5. Write a PHP function that checks if a string is all lower case. 


6. Write a PHP function that checks whether a passed string is palindrome or not? 
