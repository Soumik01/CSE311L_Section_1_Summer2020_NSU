<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VS_CODE_TEST";

//connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

if(!$connection){
    die("Failed!..." .mysqli_connect_error);
}

$sql = 

"INSERT INTO Employee_Data VALUES
(100, 'Steven','King','SKING','515.123.4567','17-05-87','AD_PRES',24000,,,90),
(101,'Neena','Kocchar','NKOCHAR','515.123.4568','21-09-89','AD_VP',17000,,100,90),
(102, 'Lex','De Haan','LDEHAAN','515.123.4569','13-01-93','AD_VP',17000,,100,90),
(103, 'Alexander','Hunold','AHUNOLD','590.423.4567','03-01-90','IT_PROG',9000,,102,60),
(104, 'Bruce','Ernst','BERNST','590.423.4568','21-04-91','IT_PROG',6000,,103,60),
(107,'Diana','Lorentz','DLORENTZ','590.423.5567','07-02-99','IT_PROG',4200,,103,60),
(124,'Kevin','Mourgos','KMOURGOS','650.123.5234','16-11-99','ST_MAN',5800,,103,60),
(141,'Trenna','Rajs','TRAJS','650.121.8009','17-09-95','ST_CLERK',3500,,124,50),
(142,'Curtis','Davies','CDAVIES','650.121.2994','29-01-97','ST_CLERK',3100,,124,50),
(143,'Randall','Matos','RMATOS','650.121.2074','15-03-90','ST_CLERK',2600,,124,50),
(144,'Peter','Vargas','PVARGAS','650.121.2004','09-06-98','ST_CLERK',2500,,124,50),
(149,'Eleni','Zlotkey','EZOLTKEY','011.44.1344.429018','29-01-00','SA_MAN',10500,0.2,100,80)
(174,'Ellen','Abel','EABEL','011.44.1644.429265','11-05-95','SA_REP',11000,0.3,149,80),
(176,'Jonathon','Taylor','JTAYLOR','011.44.1644.42267','24-05-98','SA_REP',8600,0.2,149,80),
(178,'Kimberely','Grant','KGRANT','011.44.1644.429263','24-05-99','SA_REP',7000,0.15,149,),
(200,'Jennifer','Whalen','JWHALEN','515.123.4444','17-09-87','AD_ASST',4400,,101,10),
(201,'Michael','Hartstein','MHARTSTE','515.123.5555','17-02-96','MK_MAN',13000,,100,20),
(202,'Pat','Fay','PFAY','603.123.666','17-08-97','MK_REP',6000,,201,20),
(205,'Shelley','Higgins','SHIGGINGS','515.123.6060','07-06-94','AC_MGR',12000,,101,110),
(206,'William','Gietz','WGIETZ','515.123.8181','07-06-94','AC-ACCOUNT',8300,,205,110)";

if(mysqli_query($connection, $sql)){
    echo "Data inserted ";
}else{
    echo "Oops! failed to insert...\n" .mysqli_error($connection);
}
mysqli_close($connection);
?>