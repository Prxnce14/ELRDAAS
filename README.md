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











