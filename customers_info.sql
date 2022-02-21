create database if not exists grip;
CREATE TABLE customers (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NAME` VARCHAR(45) NOT NULL,
  `EMAIL` VARCHAR(45) NOT NULL,
  `Amount_limit` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE INDEX `idnew_table_UNIQUE` (`ID` ASC),
  UNIQUE INDEX `EMAIL_UNIQUE` (`EMAIL` ASC));
select * from customers;

 INSERT INTO customers (NAME, EMAIL, Amount_Limit) 
VALUES ('Aml Elgebaly','elgebalyaml@gmail.com','7120479'),
 ('Erika Semenza','ErikaSemenzaExciting@gmail.com','54796'),
 ('Rudy Pullen','Rudy PullenAshamed@gmail.com','1457935'),
 ('Rosalinde Farber','RosalindeFarberDysfunctionalGamer@gmail.com','10606615'),
 ('Kenyon Hammond','KenyonHammondPlastic@gmail.com','6367869'),
 ('Marcel Pratap','MarcelPratapPlante@gmail.com','16573657'),
 ('Luella Halpert','Luella__HalpertVarious@gmail.com','7999702'),
 ('Gerick Krueger','GerickKruegerSassy@gmail.com','4861885'),
 ('Matelda Hertzmark','MateldaHertzmarkAcceptableGer@gmail.com','12655940'),
 ('Colman Gleykin','Colman_GleykinCautiousmer@gmail.com','2445804'),
 ('Phaedra Brophy','Phaedra-BrophyWanting@gmail.com','3067454'),
 ('Carmela Ehrenfreund','CarmelaEhrenfreundIndustrious@gmail.com','6036208'),
 ('August Thomas-yusuf','August_Thomas-yusufTacky@gmail.com','12176862'),
 ('Zita Spier','ZitaSpierDiligent@gmail.com','7042955'),
 ('Moshe Howel','MosheHowelSpiffyer@gmail.com','4540901'),
 ('Calli Orviati','CalliOrviatiLackadaisical@gmail.com','308702');
 select * from customers;