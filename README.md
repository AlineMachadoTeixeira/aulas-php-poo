# PHO com Orientação a objeto

Utilização do PHP para aplicação de recursos usando os pilares da orientação a pobjetos.


### Exemplo 10 
https://getcomposer.org/
Download do Composer-Setup.exe 

Estudar sobre PHO https://www.php-fig.org/psr/psr-4/



Na pasta composer.json  escreve o de baixo 
{
    "name" : "aline/aulas-php-poo",
    "description" : "Exemplo de projeto PHP com Orientação a Objeto e com classes gerenciadas pelo Composer",
    "autoload" : {
        "psr-4" : {
            "Tabajara\\" : "src/",
            "Fornecedor\\" : "src/fornecedores",
            "Prestador\\" : "src/prestadores"

        }
    }
}

Abrir CMD (Vai na pasta que você quer abrir o CMD vai no lugar que está o caminho da pasta e escreve cmd e entre)
CMD para saber ser se estavamos com composer -  depois do nome da pasta C:\xampp\htdocs\aulas-php-poo>composer -V
digite composer -V


Na pasta composer.json  escreve o de baixo 
{
    "name" : "aline/aulas-php-poo",
    "description" : "Exemplo de projeto PHP com Orientação a Objeto e com classes gerenciadas pelo Composer",
    "autoload" : {
        "psr-4" : {
            "Tabajara\\" : "src/",
            "Fornecedor\\" : "src/fornecedores",
            "Prestador\\" : "src/prestadores"

        }
    }
}
Dihite o de cima na pasta composer.json e no cmd  C:\xampp\htdocs\aulas-php-poo> digite composer dumpautoload e entre
composer dumpautoload

Na pasta index não precisa de todos require_once que fizemos nos outro exemplo 
só fazer um   require_once "vendor/autoload.php";  que está no exemplo 10  

OBS para fazer isso precisa ter feito  Download  desse site https://getcomposer.org/ e baixar o Composer-Setup.exe 
Cuidado para está na pasta xampp os passo a passo da instalação