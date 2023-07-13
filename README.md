# **Projeto Laravel**

Este é um projeto Laravel que implementa uma API de categorias e subcategorias. Também inclui um exemplo de solução para um problema de lógica.

## Configuração

Siga as etapas abaixo para configurar e executar o projeto em seu ambiente local:

## Pré-requisitos

* PHP (versão 7.4 ou superior) instalado em seu ambiente.
* Composer instalado em seu ambiente.
* Servidor de banco de dados (por exemplo, MySQL) configurado e em execução.
* Docker instalado em seu ambiente.


## Clonar o repositório

git clone https://github.com/DropeHenrique/teste-lojacorr.git`

`cd teste-lojacorr`

## Configurar o ambiente Docker


*Renomeie o arquivo .env.example para .env.

*Abra o arquivo .env e configure as seguintes variáveis de ambiente para corresponder às suas configurações desejadas:

`DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=nome_de_usuário_do_banco_de_dados
DB_PASSWORD=senha_do_banco_de_dados`

Substitua nome_do_banco_de_dados, nome_de_usuário_do_banco_de_dados e senha_do_banco_de_dados pelos seus valores de configuração.

## Iniciar o ambiente Docker

`docker-compose up -d --build`

Isso criará e iniciará os containers Docker necessários para o projeto Laravel, incluindo o servidor web, o banco de dados e outros serviços.


## Instalar dependências do Laravel(Em caso de uso do Docker)

`docker-compose exec app composer install`

## Executar migrações(Em caso de uso do Docker)

`docker-compose exec app php artisan migrate`

##Gerar chave de aplicativo(Em caso de uso do Docker)

`docker-compose exec app php artisan key:generate`



# Em caso de uso banco Local:

## Instalar dependências


`composer install`


## Configurar o ambiente

* Renomeie o arquivo .env.example para .env.
* Abra o arquivo `.env` e configure as informações de conexão com o banco de dados de acordo com a sua configuração local.

## Gerar chave de aplicativo

`php artisan key:generate`


## Executar migrações

`php artisan migrate`


## Iniciar o servidor local

`php artisan serve`

Isso iniciará o servidor de desenvolvimento local em http://localhost:8000.

# Uso

Após configurar e executar o projeto, você pode interagir com a API de categorias usando um cliente REST (por exemplo, o Postman).

## Criar uma categoria

* Método: POST
* URL: http://localhost:8000/api/categorias
* Corpo da requisição (JSON):

`{
"nome": "Nome da Categoria"
}`

## Selecionar todas as categorias cadastradas

* Método: GET
* URL: http://localhost:8000/api/categorias

## Selecionar uma categoria através do identificador
* Método: GET
* URL: http://localhost:8000/api/categorias/{id}

Substitua {id} pelo identificador da categoria desejada.

## Excluir uma categoria através do identificador

* Método: DELETE

* URL: http://localhost:8000/api/categorias/{id}
Substitua {id} pelo identificador da categoria que deseja excluir.



# Problema de lógica

O projeto também inclui um exemplo de resolução de um problema de lógica. Para executar o exemplo, siga as etapas abaixo:

Abra um terminal ou prompt de comando.
Navegue até o diretório raiz do projeto.
Execute o seguinte comando:
bash
Copy code

`php artisan tinker`

Isso abrirá o ambiente de linha de comando do Laravel.

Cole o código abaixo e pressione Enter para executá-lo:
```
$valorTotal = 1000000; // Valor total das casas
$orcamento = 500000; // Seu orçamento
$precoPorCasa = $valorTotal / $orcamento;
$numeroDeCasas = floor($orcamento / $precoPorCasa);
$valorGasto = $numeroDeCasas * $precoPorCasa;
echo "Número de casas compradas: " . $numeroDeCasas . "\n";
echo "Valor total gasto: " . $valorGasto . "\n"; 
```
Isso calculará o número máximo de casas que você pode comprar com base no valor total das casas e no seu orçamento, e mostrará o resultado no terminal.
