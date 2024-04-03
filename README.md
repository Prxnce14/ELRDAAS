# ELRDAAS

Background Information
-------------------------------
The Elsa Leo-Rhynie Hall Domestic Affairs Automation Software
The Elsa Leo-Rhynie Towers Hall, also known as the ELR Towers, is a prominent student facility located at the heart of the University of the West Indies (UWI) Mona Campus. The hall comprises five distinct towers: The Tower of Olympus, The Tower of Phoenix, The Tower of Apollo, The Tower of Orion, and The Tower of the Mighty Dragons. Each academic year, it accommodates over 600 students.
Despite its grandeur, there is an urgent need for a transformative software solution. Currently, the hall lacks a real-time tracking system for resident concerns and the laundry system is disorganized and inefficient. Additionally, there is no central repository for hall maintenance information.
Our comprehensive automation efforts aim to seamlessly integrate every facet of the hall’s operations, including laundry and resident concerns, to address these issues. This software solution is intended to enhance the living experience of the residents, providing them with greater control and transparency in managing their domestic affairs. It will also assist the administrative personnel in managing operations and providing support and guidance to the residents. This approach ensures that the software remains student-centric, prioritizing the needs of the students and key hall personnel.


Connecting to ELRDAAS
-----------------------------

Github link:

https://github.com/iammichaelbryan/ELRDAAS


VS Code Interactive Development Environment(IDE)

Navigate to the go live icon on the bottom right hand of the page.
A picture of the go live icon is in the uploads folder called go-live pic


You will need a web server (e.g. Apache or Nginx) and of 
course you need to install PHP. 

For Windows you can install WAMP or XAMP and for Mac you can 
install MAMP. These come with Apache, MySQL (database) 
and PHP.

The link is for the xampp website. 

https://www.apachefriends.org/download.html



Connecting via Windows
_______________________________

Upon downloading xampp you can agree to all settings and allow it to download to your local machine.
When xampp has loaded it should look something similar to xampp_pic in the uploads folder 

If you Apache and MYSQL servers start without errors, you can import the "elrdaas.sql" file in phpMyAdmin and test the functionality of the system.

if attempting to start the MYSQL server gives you an error about port number similar to the "phpMyAdmin_port error.jpg" file, Please do the following steps:

1) Navigate to the configs icon for MYSQL
2) select the "my.ini" file 
3) search for port in the file ->  ctr kel +  f "port"
4) the default port is 3306.  change the two instances of the default port number to any value between 1024 - 65535
5) save the file and close


6) Navigate to the phpMyAdmin folder in the root directory of xampp 
7) select the "config.inc" PHP source file and open in a text file or in your preferred IDE
8) After the config value that says " $cfg['Servers'][$i]['AllowNoPassword'] = true;" enter the following line:
9) $cfg['Servers'][$i]['port'] = <port#>;
the vlaue for "port#" should be the value you entered in step 4
See "phpMyAdmin_port.png" file in the uploads folder for reference

10) save the file and close 

Restart both servers and you should be able to connect to phpMyAdmin

11) Once you have connected to phpMyAdmin, you can now navigate to the import icon and upload the "elrdaas.sql" file
see the "import.png" file in the uploads folder

12) Navigate to your broswer and type: localhost/ELRDAAS
13) Register a user(resident or admin) and login in with said user



Connecting via Linux 
______________________________


1) please watch this video for setting up LAMP on your local machine 

https://www.youtube.com/watch?v=NjQsozxW5Ow&t=944s


2) Log in to phpMyadmin with the credentials created in number 1

Follow steps 11 - 13 above to test the ELRDAAS system


If you encounter an error similar to the "mysql_error.png" file in the uploads folder, follow these steps:


The following command provided is for importing a SQL file. It  would look something like this after replacing USERNAME and SERVERNAME with actual values:

mysql -u [USERNAME] -p -h [SERVERNAME] [DATABASE_NAME] < [FILENAME].sql


Here’s what you would replace:
- [USERNAME]: Your MySQL username.
- [SERVERNAME]: The hostname or IP address of your MySQL server.
- [DATABASE_NAME]: The name of your database, which seems to be elrdaas in this case.
- [FILENAME].sql: The name of the SQL file you want to import, which appears to be elrdaas.sql.


3) mysql -u phpmyadmin -p -h localhost elrdaas < elrdaas.sql

When you run this command, you will be prompted to enter the password for the MySQL user.

If you get an error that is similar to the "database_error.png" in the uploads folder, complete the following steps:
see the "fixed_datab_error.png" file for evidence.

 navigate to terminal and type: mysql -u <username> -p. of course, replace "<username>" with your actual username 
 Enter the password for the user 
 run this command: CREATE DATABASE elrdaas


4) Try reloading phpMyadmin and logging in again.




Connection issues in "db_connect.php"
___________________________________________


if you expereince an error similarly to the "access_denied.png" file in the uploads folder, complete the following steps:

1) Navigate to the "db_connect.php" file and change the vlaues for username and password to the credentails set in number 1 for "connecting via Linux"


sample data

$username = 'phpmyadmin';
$password = 'helloworld12';



Issues with git commands restricting permission
________________________________________________


you might have to use sudo before git commands if you are getting an error similarly to the "git_perm_error.png" file in the uploads folder


sample data

1) sudo git commmit -m "updated some files"

2) A possible solution for this error is setting your git configuration variables. navigate to "Issues with git configuration"




Issues with git configuration
__________________________________


watch this video for all issues with git configuration:

https://www.youtube.com/watch?v=bc3_FL9zWWs





Issues editing files in the VAR folder 

____________________________________________

Watch this video for all issues re permisssion only for root user 


https://www.youtube.com/watch?v=K4eP83ij3Co







