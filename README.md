# Les factories

Les factories sont en réalité des classes dans une application laravel qui permet de remplir notre base de données en vue de pouvoir travailler notre backend de manière rapide. Cela nous empeche de remplir de manière manuelle notre base de données depuis un gestionnaire de de BD. 

## Comment créer une factory ?

Executer la commande ci-dessous pour créer une factory pour notre model Role:

```shell
php artisan make:factory Role
```
#### Commentaire

Cette commande permettra de créer une classe dans database/factories/rolefactory.php
vous pouvez le constater dans ce projet même.

NB: Il faut noter que les factories disposes d'un package qui permet de generer des données fictives (Nom, prenoms, boolean etc...). - **faker** https://github.com/fzaninotto/Faker


### Observez le ficher RoleFactory.php

Voici le contenu de notre factory qui va nous permettre de generer des rôles pour notre application

```
  public function definition()
    {
        return [
            'nom' => $this->faker->name,
        ];
    }
```

#### Commentaire

Il existe une fonction la function definition() de la classe factory qui permet de préciser les attributs de notre modèle puis en valeur on utilise la librairie faker pour remplir ces attributs. Ici faker génère  des noms de manières aléatoires après exécutions de notre factory.


### Ou executer les factories ?
Les factories sont exécutés dans le DatabaseSeeder.php qui se trouve au niveau de database/seeders après exécutions de la commande suivantes : 


```shell
php artisan db:seeder
```

Nb :  Il faut au préalable appèles la/la factory au sein de la classe DatabaseSeeder.php en lui précisant le nombre d'instance qu'on veut créer pour un modele donné.

```
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::factory(10)->create();
    }
}

```

#### Commentaire

On dit qu'on veut créer 10 instances de Rôle donc après exécuter de la commande la Laravel va exécuter le code au sein de la fonction run de la classe DatabaseSeeder.Php

### Tp

Veuillez ecrire la factory pour le model Contrat.
