Swiss Student Code CMS – Apercu des fonctionalités
Lucas Bovet – WBD0919
09 janvier 2021

FONCTIONNALITÉS PHP :

Inscription : 

Les utilisateurs peuvent, grâce à un formulaire, s'inscrire sur la plateforme afin de pouvoir poster des messages sur le forum. 
Les informations entrées sont stockées dans une base de donnée. Un premier système de vérification en JavaScript prévient visuellement l'utilisateur si les données sont correctes. 
Un deuxième système, cette fois en PHP, empêche l'envoi du formulaire si tout les champs ne sont pas remplis.
Un troisième demande à l'utilisateur de confirmer son mot de passe, afin d'éviter tout erreur. 

Connexion : 

Une fois l'utilisateur inscrit sur la plateforme, il peut se connecter quand il le souhaite afin d'avoir accès à l'intégralité du site. 
Il lui suffit d'entrer son adresse mail et son mot de passe pour activer une session. 
Les données stockées dans la table users de la base de donnée sont récupérées et comparées avec celles entrées pour la connexion.
Le formulaire ne sera envoyé que si tout les champs ont été remplis. Par sécurité, le message d'erreur ne précise pas quel champ est mal rempli.

Forum :

Si l'utilisateur est connecté à une session, il pourra poster des messages sur le forum. 
Il devra entrer le titre de son sujet de discutions et le message.
S'il essaye d’accéder à cette partie sans être connecté, il sera automatiquement redirigé vers le formulaire de connexion.
L'utilisateur pourra ensuite consulter ses messages ainsi que ceux des autres sur une autre page qui est automatiquement mis à jour depuis la base de donnée avec le titre et le nom et prénom de celui qui l'a posté.  

Profil : Depuis cette page, l'utilisateur qui est connecté à la session pourra voir toutes les informations qu'il a rentrées lors de l'inscription. 
Ces informations sont mises à jour directement depuis la base de donné.

BASE DE DONÉE :

La base de donnée appelée 2scode est divisée en 2 tables :

	users : qui répertorie toutes les informations des utilisateurs qui s’inscrivent sur la plateforme. Cette table est divisée en 7 colonnes, à savoir :

		1. id : ou est stocké l'id de l'utilisateur, avec auto-incrémentation et fait office de clé primaire.

		2. firstname : ou est stocké le prénom de l'utilisateur

		3. lastname : ou est stocké le nom de famille de l'utilisateur

		4. date_of _birth : ou est stocké la date de naissance de l'utilisateur

		5. mail : ou est stocké l'adresse E-Mail de l'utilisateur

		6. password : ou est stocké le mot de passe de l'utilisateur, après cryptage et hachage.

		7. City : ou est stocké la ville de l'utilisateur

	forum : qui répertorie toutes les informations des messages que l'utilisateur poste sur le forum. Cette table est divisée en 5 colonnes, à savoir :

		1. id : ou est stocké l'id de l'utilisateur, avec auto-incrémentation et fait office de clé primaire.

		2. title : ou est stocké le titre du message posté par l'utilisateur

		3. message : ou est stocké le contenu du message posté par l'utilisateur

		4. date : ou est stocké la date et l'heure à laquelle l'utilisateur à posté son message

		5. user : ou est stocké l'id de l'utilisateur qui s'est inscrit et est stocké dans la table users
