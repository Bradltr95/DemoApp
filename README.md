phpDemo is a website I created to demonstrate my ability to create information from a form 
and submit it to the server using the post method and query commands. Delete information if the data exists, and report to the user letting them know if the data was deleted or not as well as view the database that we are working with so you can quickly view entires and add/delete more. I have also added the functionality to check if the user has entered nothing in the create/delete forms so they cant add random entries and the ability to create the database/username before using the application so you don't have to do it manually. 
Simply run application on server, press the create database button then go back and press the create table button. 

*** PLEASE RUN THE RAW FILE TO VIEW FORMAT CORRECTLY ***
-- Create by Bradley Latreille

Database: phpmyadmin 
DemoAPPDatabasename: users 

IMPORTANT INFORMATION:
I am using a localhost to run this applicaiton. 
username: 'root'; 
password: ''; 

HOW TO DEPLOY APP: 
1. Create a database named userdb

2. Create a table named users with the following columns: 
  - id(auto) 
  - username
  
3. Clone the phpDemo folder to your server directory

4. Run the following url in your browser  
  - localhost/phpDemo/

