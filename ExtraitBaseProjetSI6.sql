
--
-- table `clientconnu`
--

CREATE TABLE clientconnu (
  clt_code varchar(10) NOT NULL default '',
  clt_nom varchar(30) NOT NULL default '',
  clt_adresse_rue varchar(50) NOT NULL default '',
  ...
  clt_tel varchar(20) NOT NULL default '',
  clt_email varchar(50) NOT NULL default '',
  clt_motPasse varchar(10) NOT NULL default '',
  PRIMARY KEY  (clt_code)
) TYPE=InnoDB;

--

INSERT INTO clientconnu VALUES ('c0001','Dupont','12 rue haute', '75001', 'Paris','01 05 22 35 97','dupont@wanadoo.fr','aaa');
INSERT INTO clientconnu VALUES ('c0002','Dubois','4 bld d\'Alsace', '75002', 'Paris','01 44 97 62 54','dubois@club-internet.fr','bbb');
INSERT INTO clientconnu VALUES ('c0003','Durand','5 allée des Ifs', '80000', 'Amiens','03 22 79 64 56','durand@free.fr','ccc');

--
-- table `commande`
--

CREATE TABLE commande (
  cde_moment varchar(20) NOT NULL default '',
  cde_client varchar(10) NOT NULL default '',
  cde_date varchar(10) NOT NULL default '0000-00-00',
  PRIMARY KEY  (cde_moment,cde_client)
) TYPE=InnoDB;

--
--

INSERT INTO commande VALUES ('1101461660','c0001','2004-11-26');

--
-- table `contenir`
--

CREATE TABLE contenir (
  cde_moment varchar(20) NOT NULL default '',
  cde_client varchar(10) NOT NULL default '',
  produit char(3) NOT NULL default '',
  quantite int(11) NOT NULL default '0',
  PRIMARY KEY  (cde_moment,cde_client,produit)
) TYPE=InnoDB;


--
-- table `produit`
--

CREATE TABLE produit (
  pdt_ref char(3) NOT NULL default '',
  pdt_designation varchar(50) NOT NULL default '',
  pdt_prix decimal(5,2) NOT NULL default '0.00',
  pdt_image varchar(50) NOT NULL default '',
  PRIMARY KEY  (pdt_ref)
) TYPE=InnoDB;


