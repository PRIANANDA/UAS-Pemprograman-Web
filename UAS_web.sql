CREATE DATABASE UAS_Web 

CREATE TABLE motor (
  no_motor INT          (10) NOT NULL,
  id_motor INT          (10) NOT NULL AUTO_INCREMENT,
  role VARCHAR          (255) DEFAULT NULL,
  nama_motor VARCHAR    (25) NOT NULL,
  bahan_bakar VARCHAR   (25) NOT NULL,
  harga_motor VARCHAR   (100) NOT NULL,
  PRIMARY KEY 		(id_motor)
);

INSERT INTO motor (no_motor, id_motor, nama_motor, bahan_bakar, harga_motor) VALUES
('1', '10021', 'Scoopy Tipe 1', 'Pertalite', '20.000.000'),
('2', '10022', 'Scoopy Tipe 2', 'Pertalite', '22.000.000'),
('3', '10023', 'Scoopy Tipe 3', 'Pertalite', '24.000.000'),
('4', '10024', 'Beat Tipe 1',   'Pertalite', '14.000.000'),
('5', '10025', 'Beat Tipe 2',   'Pertalite', '16.000.000'),
('6', '10026', 'Beat Tipe 3',   'Pertalite', '18.000.000'),
('7', '10027', 'Vario Tipe 1',  'Pertalite', '17.000.000'),
('8', '10028', 'Vario Tipe 2',  'Pertalite', '19.000.000'),
('9', '10029', 'Vario Tipe 3',  'Pertalite', '21.000.000'),
('10','10030', 'Nmax Tipe 1',   'Pertamax',  '28.000.000'),
('11','10031', 'Nmax Tipe 2',   'Pertamax',  '30.000.000'),
('12','10032', 'Nmax Tipe 3',   'Pertamax',  '32.000.000'),
('13','10033', 'Vespa Tipe 1',  'Pertamax',  '43.000.000'),
('14','10034', 'Vespa Tipe 2',  'Pertamax',  '54.000.000'),
('15','10035', 'Vespa Tipe 3',  'Pertamax',  '65.000.000');


CREATE TABLE penjualan_perhari ( 
  id_penjualan_perhari INT        (10) NOT NULL AUTO_INCREMENT,
  penjualan_motor_perhari VARCHAR (50) NOT NULL,
  jumlah_motor_terjual VARCHAR    (50) NOT NULL,
  harga_motor VARCHAR             (50) NOT NULL,
  PRIMARY KEY 			  (id_penjualan_perhari)
);

INSERT INTO penjualan_perhari (id_penjualan_perhari, penjualan_motor_perhari, jumlah_motor_terjual, harga_motor) VALUES
('1009',  'Penjualan Hari ke 1', '3', '76,416.000'),
('10010', 'Penjualan Hari ke 2', '4', '106.416.000'),
('10011', 'Penjualan Hari ke 3', '7', '196.416.000'),
('10012', 'Penjualan Hari ke 4', '8', '199,427.000');

CREATE TABLE penjualan_perminggu (
  id_penjualan_perminggu INT 	    (10) NOT NULL AUTO_INCREMENT,
  penjualan_motor_perminggu VARCHAR (50) NOT NULL,
  jumlah_motor_terjual VARCHAR      (50) NOT NULL,
  harga_motor VARCHAR               (50) NOT NULL,
  PRIMARY KEY                       (id_penjualan_perminggu)
);

INSERT INTO penjualan_perminggu (id_penjualan_perminggu, penjualan_motor_perminggu, jumlah_motor_terjual, harga_motor) VALUES
('1005', 'Penjualan Minggu ke 1', '10', '229.248.000'),
('1006', 'Penjualan Minggu ke 2', '13', '294.748.000'),
('1007', 'Penjualan Minggu ke 3', '17', '454.078.000'),
('1008', 'Penjualan Minggu ke 4', '20', '548.079.000');

CREATE TABLE `user` (
  id_user INT	     (15) NOT NULL AUTO_INCREMENT,
  role VARCHAR       (266) DEFAULT NULL,
  username VARCHAR   (266) DEFAULT NULL,
  `password` VARCHAR (266) DEFAULT NULL,
  PRIMARY KEY        (id_user)
);

INSERT INTO `user` (id_user, role, username, `password`) VALUES
(1, 'Customer', 'Priananda1', 'e306763eab0b039ad697d934baf3d51de72852e2bbd5ea2a4f442a851f2e467c'),
(2, 'Admin', 	'Priananda2', 'e306763eab0b039ad697d934baf3d51de72852e2bbd5ea2a4f442a851f2e467c');
