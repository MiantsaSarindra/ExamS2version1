create database emprunt;
use emprunt;
create table emprunt_membre  (
    id_membre int AUTO_INCREMENT primary key,
    nom VARCHAR (100),
    date_de_naissance DATE,
    genre VARCHAR(50),
    email VARCHAR(100),
    ville VARCHAR(100),
    mdp VARCHAR(100),
    image_profil VARCHAR(100)
);

create table emprunt_categorie_objet (
    id_categorie int AUTO_INCREMENT primary key,
    nom_categorie VARCHAR(100)
);

create table emprunt_objet (
    id_objet int AUTO_INCREMENT primary key,
    nom_objet VARCHAR(100),
    id_categorie int,
    id_membre int
);
ALTER TABLE emprunt_objet
ADD CONSTRAINT fk_categorie
FOREIGN KEY (id_categorie)
REFERENCES emprunt_categorie_objet(id_categorie);

ALTER TABLE emprunt_objet
ADD CONSTRAINT fk_membre
FOREIGN KEY (id_membre)
REFERENCES emprunt_membre(id_membre);

create table emprunt_images_objet (
    id_image int AUTO_INCREMENT primary key,
    id_objet int,
    nom_image VARCHAR(100)
);

ALTER TABLE emprunt_images_objet
ADD CONSTRAINT fk_objet
FOREIGN KEY (id_objet)
REFERENCES emprunt_objet(id_objet);

create table emprunt_emprunt (
    id_emprunt int AUTO_INCREMENT primary key,
    id_objet int,
    id_membre int,
    date_emprunt DATE,
    date_retour DATE
);

ALTER TABLE emprunt_emprunt
ADD CONSTRAINT fk_objet1
FOREIGN KEY (id_objet)
REFERENCES emprunt_objet(id_objet);

ALTER TABLE emprunt_emprunt
ADD CONSTRAINT fk_membre1
FOREIGN KEY (id_membre)
REFERENCES emprunt_membre(id_membre);


insert into emprunt_membre (nom, date_de_naissance, genre, email, ville, mdp, image_profil) values
("Alex", "2000-08-11", "M", "alex@gmail.com", "Antananarivo", "alex", "alex.jpg"),
("Sophie", "1999-05-19", "F", "sophie@gmail.com", "Toamasina", "sophie", "sophie.jpg"),
("Lydia", "1996-03-24", "F", "lydia@gmail.com", "Antananarivo", "lydia", "lydia.jpg"),
("Romeo", "2001-02-15", "M", "romeo@gmail.com", "Toamasina", "romeo", "romeo.jpg");

insert into emprunt_categorie_objet (nom_categorie) values
("Esthetique"),
("Bricolage"),
("Mecanique"),
("Cuisine");

insert into emprunt_objet (nom_objet, id_categorie, id_membre) values
("Miroir", 1, 1),
("Marteau", 2, 1),
("Cle dynamometrique", 3, 1),
("Poele", 4, 1),
("Vase en ceramique", 1, 1),
("Tournevis", 2, 1),
("Crique", 3, 1),
("Casserole", 4, 1),
("Cadre photo design", 1, 1),
("Scie", 2, 1),
("Jeu de douilles", 3, 2),
("Planche", 4, 2),
("Guirlande lumineuse", 1, 2),
("Perceuse electrique", 2, 2),
("Compresseur d' air", 3, 2),
("Fouet", 4, 2),
("Statue", 1, 2),
("Niveau à bulle", 2, 2),
("Pompe à huile", 3, 2),
("Passoire", 4, 2),
("Plante artificielle", 1, 2),
("Mètre ruban", 2, 2),
("Manomètre", 3, 3),
("Cuillère en bois", 4, 3),
("Bougie parfumée", 1, 3),
("Pince multiprise", 2, 3),
("Extracteur de roulements", 3, 3),
("Rape à fromage", 4, 3),
("Horloge murale", 1, 3),
("Clé à molette", 2, 3),
("Graisseuse", 3, 3),
("Balance de cuisine", 4, 3),
("Tapis à motif géométrique", 1, 4),
("Papier de verre", 2, 4),
("Testeur de batterie", 3, 4),
("Louche", 4, 4),
("Lampe d'ambiance", 1, 4),
("Pistolet à colle", 2, 4),
("Boite de joints toriques", 3, 4),
("Mixeur plongeant", 4, 4),
("Tableau abstrait", 1, 4),
("Agrafeuse murale", 2, 4);

INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES
(1, 2, '2025-07-01 ', '2025-07-08 '),
(5, 3, '2025-07-03 ', '2025-07-10 '),
(10, 4, '2025-07-04 ', '2025-09-01 '),
(15, 1, '2025-07-05 ', '2025-07-12 '),
(20, 3, '2025-07-06 ', '2025-07-13 '),
(25, 4, '2025-07-07 ', '2025-09-01 '),
(30, 2, '2025-07-08 ', '2025-07-15 '),
(35, 1, '2025-07-09 ', '2025-09-01 '),
(38, 3, '2025-07-10 ', '2025-07-17 '),
(40, 2, '2025-07-11 ', '2025-09-01 ');

create or replace view v_objet_emprunt as select o.id_objet, o.nom_objet, o.id_categorie, o.id_membre, e.date_emprunt, e.date_retour 
from emprunt_objet o join emprunt_emprunt e on e.id_membre=o.id_membre;

create or replace view v_objet_emprunt_courant as select * from v_objet_emprunt where date_retour>=now();
