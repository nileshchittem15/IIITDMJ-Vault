<?php
session_start();
$link = mysql_connect('localhost', 'root','');
//Check link to the mysql server
if(!$link){
die('Failed to connect to server: ' . mysql_error());
}
//Select database
$db = mysql_select_db('iiitdmjv');
if(!$db){
die("Unable to select database");
}
//Create query
$qry = 'SELECT * FROM STUDENTS WHERE ROLLNO ='.$_SESSION['user'].' ';
//Execute query
$result = mysql_query($qry);
if($result)
{
while ($row = mysql_fetch_assoc($result))
{ 
$_SESSION['ROLLNO']=$row['ROLLNO'];
$_SESSION['NAME']=$row['NAME'];
$_SESSION['BALANCE']=$row['BALANCE'];
$_SESSION['TRANS_PASSWORD']=$row['TRANS_PASSWORD'];
$_SESSION['DOB']=$row['DOB'];
$_SESSION['PROGRAMME']=$row['PROGRAMME'];
$_SESSION['YEAR']=$row['YEAR'];
$_SESSION['BRANCH']=$row['BRANCH'];
$_SESSION['FATHER_NAME']=$row['FATHER_NAME'];

}
}
$qry = 'SELECT * FROM hosteldue WHERE ROLLNO ='.$_SESSION['user'].' ';
$result = mysql_query($qry);
if($result)
{
while ($row = mysql_fetch_assoc($result))
{ 
$_SESSION['H_DUE']=$row['H_DUE'];
$_SESSION['H_FINE']=$row['H_FINE'];
}
}
$qry = 'SELECT * FROM book_due WHERE ROLLNO ='.$_SESSION['user'].' ';
$result = mysql_query($qry);
if($result)
{
while ($row = mysql_fetch_assoc($result))
{ 
$_SESSION['L_DUE']=$row['due'];
}
}
?>