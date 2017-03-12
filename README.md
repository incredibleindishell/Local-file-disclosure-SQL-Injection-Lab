# Local-file-disclosure-SQL-Injection-Lab
This is sample code to demonstrate how one can use SQL Injection vulnerability to download local file from server in specific condition

exploit SQL Injection vulnerability in file download function which download file from server on the basis of output 
returned by vulnerable SQL query. 
Let’s consider scenario in which, there is one user supplied parameter which is getting process in SQL query and after processing, SQL query is returning location of the file. Now, let’s suppose that value returned by SQL query is getting pass to a function which download local file from server. In this case if user input is not getting check by web application, in that case attacker can easily manipulate SQL query to download any file from server with known location (file must have read permission on it).

To setup this lab on your machine, create database with name dsqli
grant all privileges on that database for user with 
username = dsqli
and 
password = icadsqli

To create database and user which will be having read permission on the 
database, just follow given below process: --> Login to MySQL console with root account 
Command to create new database: -Create database dsqli;
Command to create user dsqli with password icadsqli which will be 
having read/write permission on database dsqli: -grant all on dsqli.* to dsqli@localhost IDENTIFIED BY 'icadsqli';
Once you have setup database and user account, just import the database 
dump file (dsqli.sql which is available with the sample code) to database dsqli.

Introdunction page

<img src="https://github.com/incredibleindishell/Local-file-disclosure-SQL-Injection-Lab/blob/master/hom.png">

Vulnerable page

<img src="https://github.com/incredibleindishell/Local-file-disclosure-SQL-Injection-Lab/blob/master/download.png">
--==[[ With Love from Team IndiShell ]]==--

--==[[ Greetz To ]]==--
Zero cool, code breaker ICA, root_devil, google_warrior, INX_r0ot, Darkwolf indishell,
Baba, Silent poison India, Magnum sniper, ethicalnoob Indishell, Local root indishell, Irfninja 
indishell, Reborn India,L0rd Crus4d3r,cool toad, Hackuin, Alicks,Gujjar PCP,Bikash,Di nelson 
Amine,Th3 D3str0yer, SKSking, rad paul,Godzila,mike waals,zoo zoo,cyber warrior,shafoon, 
Rehan manzoor, cyber gladiator,7he Cre4t0r,Cyber Ace, Golden boy INDIA,Ketan Singh,  D2
Yash, Aneesh Dogra, AR AR, saad abbasi, hero, Minhal Mehdi, Raj bhai ji, Hacking queen,
lovetherisk, D3.
--==[[ Love to To ]]==--
My Father, my Ex Teacher, cold fire hacker, Mannu, ViKi, Ashu bhai ji, Soldier Of God, Bhuppi,
Rafay Baloch, Mohit, Ffe, Ashish, Shardhanand, Budhaoo, Jagriti, Salty, Hacker fantastic, 
Jennifer Arcuri and Don(Deepika kaushik), Govind
