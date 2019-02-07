-- Create by Bradley Latreille
two DemoApps named 'DemoApp' and 'phpDemo' 

'DemoApp' : insert data into a database and view it 
Database: phpmyadmin 
DemoAPPDatabasename: testdb 

'phpDemo' : insert, view or delete info from a database. 
Database: phpmyadmin 
DemoAPPDatabasename: users 

IMPORTANT INFORMATION:
I am using a localhost to run this applicaiton. 
username: 'root'; 
password: ''; 

HOW TO DEPLOY APP: 
1. Create a database named testdb, or users depending on which application you are loading.
2.1. 'DemoApp' Create a table named items with the following columns: 
  - id(auto-increment) 
  - name(char)
  - value(char)
  - count(char)
  - date(timestamp)
 2.2. 'phpDemo' Create a table named users with the following columns: 
  - id(auto) 
  - username
3. copy the folder to xampp/htdocs if using XAMPP
4. Run the following url in your browser 
  - localhost/DemoApp/index.php for 'DemoAPp' 
  - localhost/phpDemo/

