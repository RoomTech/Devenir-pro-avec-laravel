# Les factories

Les factories sont en réalité des classes dans une application laravel qui permettent de remplir notre base de données en vue de pouvoir travailler notre backend de manière rapide. Cela nous empeche de remplir de manière manuelle notre base de données depuis un gestionnaire de de BD. 

## Comment créer une factory ?

Executer la commande ci-dessous pour créer une factory:

```shell
php artisan make:factory Role
```
#### Commentaire

Cette commaande permettra de créer une classe dans database/factories/RoleFactory.php
vos pouvez le constater dans ce projet meme.

NB: Il faut noter que les factories disposes d'un package qui permet de generer des données fictives (Nom, prenoms, boolean etc...). - **faker** https://github.com/fzaninotto/Faker


### Observez le ficher RoleFactory.php

Installer les dépendences avec les commandes suivantes:

```
  public function definition()
    {
        return [
            'nom' => $this->faker->name,
        ];
    }
```

#### Commentaire

Il existe une fonction au sein de la classe factory. Ou on precise les attributs de notre model puis en valeur on utilise faker pour remplir cet attribut. Ici faker genrer  des noms de maniere aleatoire apres executions de notre factory.


### Ou executer les factories ?
Les factories sont executés dans le DatabaseSeeder.php qui se trouve au niveau de database/seeders apres executions de la commande suivantes : 


```shell
php artisan db:seeder
```

Nb :  Il faut au prealable appéles les/la factory au sein de la classe DatabaseSeeder.php en lui precisant le nombre d'instance qu'on veut créer pour un modele donné.

´´´
  public function run()
    {
        \App\Models\Role::factory(10)->create();
    }
´´´

#### Commentaire

On dit qu'on veut créer 10 instance de Role donc apres executer de la commande la Laravel va executer le code au sein de la function run de la classe DatabaseSeeder.php
