# test_technique_colbr
création d'un système de connexion avec Laravel pour un test technique.

Vous aviez demandé de faire un système d'inscription et de connexion ce que j'ai fais, et pour que ce soit plus simple à vérifié, j'ai fais un minimum de front juste en créant un formulaire d'inscription et de connexion pour vérifié que mon code fontionne bien. Je n'ai pas du tout fait de style mais les vues sont présentes.

## Fonctionnalités 

- Inscription (création d'un users)
- Connexion pour les users
- Déconnexion
- affichage des users


## Lancement du server

Pour lancer le serveur laravel il suffit de faire la commande:

```ssh
php artisan serve
```

## Les différentes pages

- La page d'accueil (page d'acceuil de base de laravel, '/')
- La page d'inscription (route: '/incscription')
- La page de connexion (route: '/connexion')
- La page pour voir la liste des users (route: '/users')
- La page 'mon compte' qui correspond à la page de redirection après qu'un user se soit connecter (route: 'mon compte')

## Gestion d'erreurs et sécurité

Pour l'inscription et la connexion, un système d'erreurs et mis en place lorsque il manque des informations lors de la connexion ou de l'inscription.

Le mot de passe est sécurisé lors de l'inscription. Pour le sécurisé j'ai utilisé bcrypt.
