CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `message` text,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO chat VALUES("1","dukcapil","Mohon info. Perkara 1/Pdt.G/2021/PA.Ngb apa sudah keluar anta cerainya?","2021-08-20 09:11:14");
INSERT INTO chat VALUES("2","pa","Sudah","2021-08-20 09:11:42");
INSERT INTO chat VALUES("3","dukcapil","Tapi di data belum di input. Karena ada pihak yang mau membikin KK. Mohon info pastinya","2021-08-20 09:13:13");
INSERT INTO chat VALUES("4","pa","O iya. Maaf, belum kami input","2021-08-20 09:14:00");
INSERT INTO chat VALUES("5","dukcapil","Mohon di cek kembali","2021-08-20 09:14:16");



CREATE TABLE `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `user_nama` varchar(25) NOT NULL,
  `level` int(5) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO user VALUES("1","admin","21232f297a57a5a743894a0e4a801fc3","admin@yahoo.com","Benny","1","Admin PA Nanga Bulik");
INSERT INTO user VALUES("2","dukcapil","21232f297a57a5a743894a0e4a801fc3","dukcapil@gmail.com","Zamrony","2","Admin Dukcapil");
INSERT INTO user VALUES("3","kua","21232f297a57a5a743894a0e4a801fc3","kua@gmail.com","Nirwan","3","Admin KUA");



