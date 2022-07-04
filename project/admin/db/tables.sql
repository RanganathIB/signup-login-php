MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| login              |
| mysql              |
| news-site          |
| performance_schema |
| phpmyadmin         |
| test               |
| user_db            |
+--------------------+
8 rows in set (0.001 sec)

MariaDB [(none)]> CREATE DATABASE elearn;
Query OK, 1 row affected (0.001 sec)

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| elearn             |
| information_schema |
| login              |
| mysql              |
| news-site          |
| performance_schema |
| phpmyadmin         |
| test               |
| user_db            |
+--------------------+
9 rows in set (0.001 sec)

MariaDB [(none)]> use elearn;
Database changed


MariaDB [elearn]> CREATE TABLE IF NOT EXISTS admin (
    admin_id INT PRIMARY KEY ,
    admin_name VARCHAR(20) NOT NULL ,
    admin_email VARCHAR(64) NOT NULL ,
    admin_password VARCHAR(15) NOT NULL ,
    UNIQUE (admin_email) ,
    dob varchar(20)
    );
Query OK, 0 rows affected (0.037 sec)



MariaDB [elearn]> INSERT INTO admin ( admin_id , admin_name , admin_email , admin_password , dob )
    VALUES
    ( '341512' , 'admin341512' , 'admin341512@gmail.com' , MD5('a3d4m1i5n12') , '01102001' );
Query OK, 1 row affected, 1 warning (0.000 sec)



MariaDB [elearn]> select * from admin;
+----------+-------------+-----------------------+-----------------+-----------------+
| admin_id | admin_name  | admin_email           | admin_password  | dob 	         |
+----------+-------------+-----------------------+-----------------+-----------------+
|   341512 | admin341512 | admin341512@gmail.com | 2e28f32b011cfd3 | 01102001	     |
+----------+-------------+-----------------------+-----------------+-----------------+


1 row in set (0.008 sec)