# MediT

## Description

MediT est un projet de site web de debug pour une société fictive spécialisée dans la transformation digitale dans le secteur médical. Ce site web vise à présenter les services offerts par l'entreprise ainsi que ses réalisations.

[![Aperçu de MediT](https://github.com/Antoine-Thomas/medit/blob/main/medit.png)](https://www.canva.com/design/DAGFGtmJJjI/NTf-ykokpPiHxKyLygoeag/view?utm_content=DAGFGtmJJjI&utm_campaign=designshare&utm_medium=link&utm_source=editor)

## Fonctionnalités

- Présentation des services de MediT.
- Section dédiée aux événements à venir, tels que les salons et les conférences.
- Utilisation de WPForms pour la gestion des formulaires de contact.
- Intégration de Hide My WP pour la sécurité en masquant les chemins standard de WordPress.

## Installation

1. Clonez ce dépôt sur votre machine locale en utilisant la commande suivante :
   git clone https://github.com/Antoine-Thomas/medit.git

   2. Configurez un environnement de développement compatible avec WordPress sur votre machine.
3. Importez la base de données fournie dans le dossier `database`.
4. Installez les dépendances en exécutant `Xampp`.
5. Configurez les paramètres de connexion à la base de données dans le fichier `wp-config.php`.
6. Accédez au site en visitant l'URL de votre serveur local dans votre navigateur.

## Configuration supplémentaire

- Pour activer/désactiver les plugins, modifiez le fichier `wp-config.php` en conséquence.
- Pour ajuster les paramètres de sécurité du plugin Hide My WP, consultez sa documentation officielle.
- Pour accéder à la page de connexion sécurisée Hide My WP, visitez : [http://localhost/medit/newlogin](http://localhost/medit/newlogin).

## Contributeurs

- Antoine Thomas

## License

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

## Test Unitaires et Fonctionnels

Consultez le document de test unitaire et fonctionnel : [test unitaire et fonctionnel](https://github.com/Antoine-Thomas/medit/blob/main/Debugtestunitaireetfonctionnel.pdf)

Pour les tests unitaires, le framework utilisé est PHPUnit pour PHP et Jest pour JavaScript.
Pour les tests fonctionnels, Postman est utilisé pour effectuer des tests d'API.

   

