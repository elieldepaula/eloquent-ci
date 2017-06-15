# Eloquent CodeIgniter

Este projeto contém uma implementação do CodeIgniter 3.1.4 com Eloquent 5.* ORM do Laravel.

Existem várias bibliotecas de ORM muito boas mas o Eloquent é de longe a mais simples de integrar com o CodeIgniter.

Você pode usar este repositório ou pode usar uma instalação nova do CodeIgniter, para isto você terá que usar o composer para instalar o Eloquent e copiar a classe Eloquent (/application/libraries/Eloquent.php) deste projeto no seu.

Saiba mais sobre o CodeIgniter no [Site Oficial](http://codeigniter.com)

## Instalação

A biblioteca deverá ser instalada usando o [composer](https://packagist.org/packages/illuminate/database):

```
"require": {
    "illuminate/database": "5.*"
}
```

## Cofiguração

1- Certifique-se de ter adicionado a biblioteca Eloquent.php à pasta /application/libraries do seu projeto e adicionado no autoload.php.

``$autoload['libraries'] = array('eloquent');``

2- Configure os dados de acesso do banco de dados na biblioteca Eloquent.php.

```php
$config['db'] = array(
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'databasename',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
);
```

## Model

```php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{

    public $table = "posts";

}
```

## Exemplo de uso

```php
$this->load->model('post');

$query = Post::all('title');

foreach ($query as $row) {
    echo '<p>'.$row->title.'</p>';
}
```