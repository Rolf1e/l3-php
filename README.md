### Mes projets de php pour Monsieur A. Daudenthum seront stockés sur ce repo

## PHP Version 7.0.33-0+deb9u3

J'ai choisi de construire l'architecture de mes pages autour de Composants.

Celle ci permet à l'utilisateur de pouvoir facilement créer / modifier ses propres composants sans interférer 
avec le fonctionnement effectif du site. L' utilisateur n'a plus qu'a hériter l'interface et le comportement des controleurs ne sera pas altérer.

Il faut modifier le config.php pour les différents paramètres de la base de données.

## Create Table :

``create table contact (
	id int auto_increment unsigned primary key,
	nom varchar(30) not null,
	prenom varchar(30) not null
);
``




 