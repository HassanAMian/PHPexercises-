/* PHP Basics Exercises from w3resource.com. */
/* url: http://www.w3resource.com/php-exercises/php-basic-exercises.php */
/* Some solutions are different than those listed on w3resource solution pages. If my solution is significantly different, I will include both solutions and explain my reasoning for picking mine over the posted solution. */


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
<?php 
	echo $_SERVER['REMOTE_ADDR'];
?>

NOTE: The solution from w3resource is the conditional statement below, but I've read that there are security issues related to obtaining client IP with this method, so my solution was simply to use $_SERVER['REMOTE_ADDR'] to obtain the IP value.

<?php
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    	$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
    	$ip = $_SERVER['REMOTE_ADDR'];
	}
?>


6. Write a simple PHP browser detection script.
<?php  
	echo $_SERVER ['HTTP_USER_AGENT'];  
?>  


7. Write a PHP script to get the current file name.
<?php  
	$file_name = basename($_SERVER['PHP_SELF']);  
	echo $file_name;  
?> 


8. Write a PHP script, which will return the Scheme, Host, and Path of a url.
<?php  
	$url = 'https://www.reddit.com/r/all/';  
	$url=parse_url($url);
?>
<ul>
	<li> Scheme: <?php echo $url['scheme']; ?></li>  
	<li> Host: <?php echo $url['host']; ?></li>  
	<li> Path: <?php echo $url['path']; ?></li>  
</ul>

	
9. Write a PHP script, which change the color of first character of a word.
<?php
	$text = 'The First Letter Should Be Blue';
	$text = preg_replace('/(\b[a-z])/i','<span style="color:blue;">\1</span>',$text);
	echo $text;
?>


10. Write a PHP script, to check whether the page is called from 'https' or 'http'.
<?php
	if (!empty($_SERVER['HTTPS'])) {
    	echo 'https';
	} else  {  
		echo 'http';  
	}  
?>  


11. Write a PHP script to redirect a user to a different page.
<?php  
	header('Location: http://www.google.com/');  
?>  


12. Write a simple PHP program to check that emails are valid.
<?php   
	$email = "mail@gmail.com";  
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {  
     echo $email . ' is valid';  
	} else {  
     	echo $email . ' is invalid';  
	}  
?> 


13. Write a PHP script to display string and values within a table.
<?php  
	$a=1000;  
	$b=1200;  
	$c=1400;  
?>
<table border=1>  
	<tr>
		<td><span style="color:blue;">Salary of Mr. A is</span></td> 
		<td><?php echo $a . "$"; ?></td>
	</tr>   
	<tr>
		<td><span style="color:blue;">Salary of Mr. B is</span></td> 
		<td><?php echo $b . "$"; ?></td>
	</tr>  
	<tr>
		<td><span style="color:blue;">Salary of Mr. C is</span></td> 
		<td><?php echo $c . "$"; ?></td>
	</tr>  
</table>


14. Write a PHP script to display source code of a webpage.
<?php  
	$all_lines = file('http://www.example.com/');  
	foreach ($all_lines as $line_num => $line)  
 	{  
    	echo "Line {$line_num}: " . htmlspecialchars($line) . "<br>\n";  
 	}  
?> 


15. Write a PHP script to get last modified information of a file.
<?php
	$filename = 'file.php';
	if (file_exists($filename)) {
    	echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
	}
?>


16. Write a PHP script to count lines in a file.
<?php 
  $file = "file.php"; 
  $lines = count(file($file)); 
  echo "There are $lines lines in $file"; 
?>


17. Write a PHP script to print current PHP version. Note : Do not use phpinfo() function.  
<?php  
	echo phpversion();   
?>  


18. Write a PHP script to delay the program execution for the given number of seconds.
<?php  
	$t = 10;
	echo date('h:i:s') . "<br>";
	sleep($t); 
	echo date('h:i:s');
?> 


19. Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers. 
	Sample Output :
	A01
	A02
	A03
	A04
	A05
<?php  
	$d = 'A00';  
	for ($n=0; $n<5; $n++) {  
		echo ++$d .'<br>';  
	}  
?> 


20. Write a PHP script to get the last occurred error.
<?php
	echo $a;
	print_r(error_get_last());
?>


* 21. Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator.
<?php  

?>  


22. Write a PHP script to get the full URL.
<?php 
	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
	echo $url; 
?>  


23. Write a PHP script to compare the PHP version. Note : Use version_compare() function and PHP_VERSION constant.
<?php
	if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
    	echo 'I am at least PHP version 6.0.0, my version: ' . PHP_VERSION . "\n";
	}

	if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
    	echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . "\n";
	}

	if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
    	echo 'I am using PHP 5, my version: ' . PHP_VERSION . "\n";
	}

	if (version_compare(PHP_VERSION, '5.0.0', '<')) {
    	echo 'I am using PHP 4, my version: ' . PHP_VERSION . "\n";
	}
?>


24. Write a PHP script to get the name of the owner of the current PHP script.
<?php  
	echo get_current_user();  
?>  


* 25. Write a PHP script to get the document root directory under which the current script is executing, as defined in the server's configuration file.



26. Write a PHP script to get the information about the operating system PHP is running on.
<?php
	echo php_uname();
	echo PHP_OS;

	if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    	echo 'This is a server using Windows!';
	} else {
    	echo 'This is a server not using Windows!';
	}
?>


27. Write a PHP script to print out all the credits for PHP.
<?php
	// some code of your own
	phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
	// some more code
?>


28. Write a PHP script to get the directory path used for temporary files.
<?php  
	$temp_file = tempnam(sys_get_temp_dir(), 'Tux');  
	echo $temp_file;  
?>  


29. Write a PHP script to get the names of the functions of a module. Note : Find XML, JSON functions etc. 
<?php  
	print_r(get_extension_funcs("JSON"));  
	echo '<br>';  
	print_r(get_extension_funcs("XML"));  
?>  


30. Write a PHP script to get the time of the last modification of the current page.
<?php  
	echo date ("F d Y H:i:s.", getlastmod());  
?> 

