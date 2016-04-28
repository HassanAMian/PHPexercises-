/* PHP Basics Exercises from w3resource.com. */

1. Write a PHP script to get the PHP version and configuration information.

<?php 
	phpinfo();  
?> 

2. Write a PHP script to display the following strings. 
	Sample String : 
	'Tomorrow I \'ll learn PHP global variables.'
	'This is a bad command : del c:\\*.*' 

<?php  
	echo 'Tomorrow I\'ll learn PHP global variables.';   
	echo 'This is a bad command : del c:\\*.*';   
?> 


3. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within a HTML document.

<?php  
	$var = 'PHP Tutorial'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $var; ?></title>
</head>
<body>
	<h3><a href="http://www.google.com"><?php echo $var; ?></a></h3>
</body>
</html>


4. Create a simple HTML form and accept the user name and display the name through PHP echo statement.

<form method='POST'>
	<p>Please input your username:</p>  
	<input type="text" name="name">  
	<input type="submit" value="submit">  
</form>  
<?php    
	echo htmlspecialchars($_POST["name"]);
?>

5. Write a PHP script to get the client IP address.

6. Write a simple PHP browser detection script.

7. Write a PHP script to get the current file name.

8. Write a PHP script, which will return the following components of the url 'http://www.w3resource.com/php-exercises/php-basic-exercises.php'.
	List of components : Scheme, Host, Path


9. Write a PHP script, which change the color of first character of a word.

10. Write a PHP script, to check whether the page is called from 'https' or 'http'.

11. Write a PHP script to redirect a user to a different page.

12. Write a simple PHP program to check that emails are valid.

13. Write a e PHP script to display string, values within a table.

14. Write a PHP script to display source code of a webpage.

15. Write a PHP script to get last modified information of a file.

16. Write a PHP script to count lines in a file.

17. Write a PHP script to print current PHP version. Note : Do not use phpinfo() function.  

18. Write a PHP script to delay the program execution for the given number of seconds.

19. Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers. Go to the editor
	Sample Output :
	A01
	A02
	A03
	A04
	A05

20. Write a PHP script to get the last occurred error.

21. Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator.

22. Write a PHP script to get the full URL.

23. Write a PHP script to compare the PHP version. Note : Use version_compare() function and PHP_VERSION constant.

24. Write a PHP script to get the name of the owner of the current PHP script.

25. Write a PHP script to get the document root directory under which the current script is executing, as defined in the server's configuration file.

26. Write a PHP script to get the information about the operating system PHP is running on.

27. Write a PHP script to print out all the credits for PHP.

28. Write a PHP script to get the directory path used for temporary files.

29. Write a PHP script to get the names of the functions of a module. Note : Find XML, JSON functions etc. 

30. Write a PHP script to get the time of the last modification of the current page.