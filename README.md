# codeigniter-avance

## installation
### CodeIgniter 3
* Télécharger la dernière version sur le site [CodeIgniter](https://www.codeigniter.com/)
* Mettre toute l'archive dans votre dossier courant de développement

### Configuration
* autoload.php (Rien à modifier pour le moment)
* config.php
    * $config['base_url'] = 'http://local.codeigniter-avance/';
* routes.php (Rien à modifier pour le moment)

### Enlever le index.php de l'URL
* modifier le fichier 'config.php'
    * $config['index_page'] = '';
    * $config['uri_protocol']	= 'AUTO';
* créer un fichier .htaccess
```
RewriteEngine on
RewriteBase /
# Hide the application and system directories by redirecting the request to index.php
RewriteRule ^(application|system|\.svn) index.php/$1 [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ ./index.php/$1 [L]
```

## HMVC
### Installation
* Télécharger l'archive du module spécifique [codeigniter-modular-extensions-hmvc](https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc)
* Copier les fichiers dans le dossier application (fichiers à mettre dans les sous-dossiers CORE et THIRD_PARTY)

### Création d'un sous-module
* Dans le dossier 'application' : créer un sous-dossier 'modules'
* Dans ce dossier 'modules', créer autant de dossier que de modules. (dans mon exemple 'home').
* Dans les dossiers de modules, il suffit de créer des dossiers comme pour un projet spécifique à CodeIgniter.
Exemple : controllers, helpers, models, views ...

## Twig
### Installation
* Suivre la procédure sur la page [CodeIgniter Simple and Secure Twig](https://github.com/kenjis/codeigniter-ss-twig)
* Faire marcher Twig avec les sous-modules :
    * Etendre chaques constructeurs avec MX_Controller
    * Ajouter une classe __construct() avec le code suivant

```
parent::__construct();

$config = [
    'paths' => ['application/modules/home/views', VIEWPATH],
    'cache' => 'application/cache',
];
$this->load->library('twig', $config);
```