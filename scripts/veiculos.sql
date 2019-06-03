CREATE DATABASE carrosDB;

CREATE TABLE veiculos (
  `carro_id` int PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `marca` varchar(40) NOT NULL,
  `modelo` varchar(40) NOT NULL,
  `descricao` text NOT NULL,
  `portas` int(11) NOT NULL,
  `ano_fab` int(11) NOT NULL,
  `ano_mod` int(11) NOT NULL,
  `cor` varchar(40) NOT NULL,
  `km` DOUBLE NOT NULL,
  `placa` VARCHAR(8) NOT NULL,
  `valor` DECIMAL(7,2) NOT NULL,
  `obs` TEXT NOT NULL,
  `dt_inclusao` date DEFAULT CURRENT_TIMESTAMP,
  `ativo` BOOLEAN,
  `foto1` VARCHAR(50) NOT NULL,
  `foto2` VARCHAR(50),
  `foto3` VARCHAR(50),
  `foto4` VARCHAR(50));

INSERT INTO veiculos(marca,   modelo,      descricao, portas, ano_fab, ano_mod, cor,     km,    placa,      valor,  obs,         ativo, foto1, foto2, foto3, foto4)
VALUES              ('ford', 'fusion 2.0', 'completo', 4,     2010,    2010,   'branca', 50000, 'fad-8523', 58000, 'sem debitos', 1,    './img/fusion1.jpg','./img/fusion2.jpg', './img/fusion3.jpg', './img/fusion4.jpg'), 
                    ('vw', 'Gol 1.6 Flex', 'ar + dir', 4,     2015,    2016,   'preta',  27000, 'jdi-2569', 36000,  'Conservado', 1,  './img/gol1.jpg', './img/gol2.jpg', './img/gol3.jpg', './img/gol4.jpg'),
                    ('fiat', 'Stilo 1.8 Flex', 'completo', 2,     2010,    2011,   'azul',  42000, 'der-2314', 43000,  'Conservado', 1,  './img/stilo1.jpg', './img/stilo2.jpg', './img/stilo3.jpg', './img/stilo4.jpg'),
                    ('toyota', 'Corolla 2.0 Flex', 'completo', 4,     2015,    2015,   'branca',  72000, 'loa-2569', 27000,  'sem debitos', 1,  './img/corolla1.jpg', './img/corolla2.jpg', './img/corolla3.jpg', './img/corolla4.jpg'),
                    ('honda', 'Civic 1.6 Flex', 'completo', 4,     2015,    2015,   'preta',  63000, 'kow-0034', 61000,  'Conservado', 1,  './img/civic1.jpg', './img/civic2.jpg', './img/civic3.jpg', './img/civic4.jpg'),
                    ('gm', 'Onix 1.4 Flex', 'completo', 4,     2018,    2018,   'azul',  98000, 'der-2237', 86000,  'sem debitos', 1,  './img/onix1.jpg', './img/onix2.jpg', './img/onix3.jpg', './img/onix4.jpg'),
                    ('fiat', 'Palio 1.0 Flex', 'ar + dir', 2,     2017,    2018,   'branca',  78000, 'loe-8745', 37500,  'Conservado', 1,  './img/palio1.jpg', './img/palio2.jpg', './img/palio3.jpg', './img/palio4.jpg'),
                    ('vw', 'Voyage 1.6 Flex', 'completo', 4,     2015,    2016,   'prata',  42000, 'yeu-2899', 34800,  'único dono', 1,  './img/voyage1.jpg', './img/voyage2.jpg', './img/voyage3.jpg', './img/voyage4.jpg'),
                    ('ford', 'Ka SE 1.5 Flex', 'completo', 4,     2014,    2014,   'prata',  78500, 'dwe-2365', 25900,  'sem debitos', 1,  './img/ka1.jpg', './img/ka2.jpg', './img/ka3.jpg', './img/ka4.jpg'),
                    ('toyota', 'Hillux 2.4 Flex', 'completo', 2,     2013,    2013,   'preta',  43000, 'lle-2569', 76900,  'sem debitos', 1,  './img/hillux1.jpg', './img/hillux2.jpg', './img/hillux3.jpg', './img/hillux4.jpg'),
                    ('vw', 'Saveiro 1.6 Flex', 'basico', 4,     2011,    2011,   'preta',  142000, 'oiw-4589', 17000,  'Conservado', 1,  './img/saveiro1.jpg', './img/saveiro2.jpg', './img/saveiro3.jpg', './img/saveiro4.jpg'),                    
                    ('fiat', 'Uno 1.4 Flex', 'completo', 4,     2013,    2013,   'prata',  49000, 'der-7745', 37000,  'Conservado', 1,  './img/uno1.jpg', './img/uno2.jpg', './img/uno3.jpg', './img/uno4.jpg'),
                    ('HONDA', 'HRV 1.8 Flex', 'completo', 2,     2018,    2019,   'preta',  42000, 'der-2014', 39000,  'sem debitos', 1,  './img/hrv1.jpg', './img/hrv2.jpg', './img/hrv3.jpg', './img/hrv4.jpg'),
                    ('ford', 'Ecosport 1.6 Flex', 'ar + dir', 2,     2013,    2014,   'preta',  122000, 'der-3025', 56000,  'Conservado', 1,  './img/ecosport1.jpg', './img/ecosport2.jpg', './img/ecosport3.jpg', './img/ecosport4.jpg'),
                    ('fiat', 'strada 1.4 Flex', 'completo', 2,     2011,    2011,   'preta',  42000, 'der-6635', 23000,  'Conservado', 1,  './img/strada1.jpg', './img/strada2.jpg', './img/strada3.jpg', './img/strada4.jpg'),                            
                    ('GM', 'Cruze 2.0 Flex', 'ar + dir', 2,     2012,    2013,   'prata',  42000, 'drd-2277', 63000,  'Conservado', 1,  './img/cruze1.jpg', './img/cruze2.jpg', './img/cruze3.jpg', './img/cruze4.jpg');







                    ('vw', 'Gol 1.6 Flex', 'completo', 4,     2012,    2013,   'preta',  142000, 'etz-2301', 36200,  'Conservado', 1,  './img/gol1.jpg', './img/gol2.jpg', './img/gol3.jpg', './img/gol4.jpg'),
                    ('vw', 'Gol 1.0 Flex', 'completo', 2,     2014,    2015,   'branca',  42000, 'dty-2569', 36000,  'sem debitos', 1,  './img/gol1.jpg', './img/gol2.jpg', './img/gol3.jpg', './img/gol4.jpg'),
                    ('TOYOTA', 'Corolla 1.6 Flex', 'basico',   4,     2011,    2012,   'azul',  42000, 'der-1102', 55900,  'sem debitos', 1,  './img/gol1.jpg', './img/gol2.jpg', './img/gol3.jpg', './img/gol4.jpg'),
                    
                    ('HONDA', 'fit 1.6 Flex', 'completo', 2,     2008,    2009,   'branca',  42000, 'mkl-3321', 21000,  'Conservado', 1,  './img/gol1.jpg', './img/gol2.jpg', './img/gol3.jpg', './img/gol4.jpg'),
                    ('vw', 'Gol 1.0 Flex', 'ar + dir', 4,     2007,    2008,   'prata',  180000, 'kow-2200', 15000,  'sem debitos', 1,  './img/gol1.jpg', './img/gol2.jpg', './img/gol3.jpg', './img/gol4.jpg'),

                    ('GM', 'prisma 1.4 Flex', 'completo', 4,     2016,    2017,   'branca',  75000, 'der-7863', 38000,  'Conservado', 1,  './img/prisma1.jpg', './img/prisma2.jpg', './img/prisma3.jpg', './img/prisma4.jpg');
