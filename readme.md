# Projeto: e-commerce DAbM

## Propósito:

O propósito deste trabalho é apresentar um propósito de Loja Virtual para a MB distribuir seus Uniformes pela Internet, gerando a GRU em nome do militar e o mesmo retirar sua andaina em um PDU próximo a sua residência.

## Tecnologia Utilizada no Projeto

Para produção do sistema de **E-commerce MB**, estão sendo utilizadas ferramentas reconhecidas no mercado:
* **PHP** - Linguagem de programação veloz e robusta muito utilizada em aplicações relacionadas à internet. É uma linguagem gratuita (open source), multi-plataforma, roda em inúmeros sistemas operacionais diferentes, possui muitas funções e funciona com várias tecnologias (BD, XML, etc.). Sua sintaxe é familiar, isto é, grande parte é aproveitada do C, C++, JAVA e Perl, com um pequeno conjunto de funcionalidades específicas.
* **Laravel 5.4** - O [Laravel](https://laravel.com/) é um Framework PHP extremamente produtivo, utilizado para o desenvolvimento web, que utiliza a [arquitetura MVC](http://www.andershost.com.br/wordpress/entendendo-o-padrao-mvc/) e tem como principal característica ajudar a desenvolver aplicações seguras e performáticas de forma rápida, com código limpo e simples, já que ele incentiva o uso de boas práticas de programação e utiliza o padrão [PSR-2](http://br.phptherightway.com/#guia_de_estilo_de_codigo) como guia para estilo de escrita do código, além de ser [cada vez mais popular e utilizado pelo mercado](https://www.sitepoint.com/best-php-framework-2015-sitepoint-survey-results/).
* **Blade Template Engine do Laravel** - Para a criação de interface gráfica, o Laravel utiliza uma Engine de template chamada **Blade**, que traz uma gama de ferramentas que ajudam a criar interfaces bonitas e funcionais de forma rápida e evitar a duplicação de código, vide [link da documentação oficial](https://laravel.com/docs/5.4/blade).
* **Bootstrap** - O [Bootstrap](http://getbootstrap.com.br/) é um *framework front-end* que facilita a vida dos desenvolvedores web a criar sites com tecnologia mobile (responsivo) sem ter que digitar uma linha de CSS para “fazer e acontecer”. O termo “Bootstrap” em inglês significa “inicialização”, algo que possui um ponto de partida. Além disso, o Bootstrap possui uma diversidade de componentes (plugins) em JavaScript (jQuery) que auxiliam o designer a implementar: tootlip, menu-dropdown, modal, carousel, slideshow, entre outros sem a menor dificuldade, apenas acrescentando algumas configurações no código, sem a necessidade de criar scripts e mais scripts.
* **jQuery** - O [jQuery](http://jquery.com/) é uma biblioteca de Javascript super leve, muito fácil de usar e com uma curva de aprendizagem relativamente curta. Substitui as maiores e maiores complicadas tarefas do Javascript por funções mais directas, rápidas e compatíveis com a generalidade dos browsers. O objectivo do jQuery é tornar o Javascript muito mais fácil de utilizar nos projetos e websites. Esta biblioteca facilita as tarefas mais comuns que necessitam de muitas linhas de código Javascript e empacota-as em métodos que produzem o mesmo resultado, com muito menos código. Às vezes numa única e simples linha de código. O jQuery simplifica também o que é mais complicado no Javascript como o AJAX e a manipulação do DOM.


## Arquitetura utilizada no Projeto

Colar Figura...

### Model-View-Control (MVC)

O padrão **model-view-controller (MVC)** permite que você separe o código em diferentes objetos lógicos que servem para tarefas bastante específicas. 
* **Models (Modelos)** - Servem como uma camada de acesso aos dados onde esses dados são requisitados e retornados em formatos nos quais possam ser usados no decorrer de sua aplicação. 
* **Controllers (Controladores)** - Tratam as requisições, processam os dados retornados dos Models e carregam as views (Visões) para enviar a resposta. 
* **Views (Visões)** - São templates de saída (marcação, xml, tpl, html, etc) que são enviadas como resposta ao navegador.

...

## Clonando o Projeto para o desenvolvimento colabortivo

Estes passos foram disponibilizados para que você entenda de um modo geral o que foi feito neste trabalho. Você não precisa fazê-lo, basta você clonar esse projeto para usá-lo.

```bash	
# Clonando o projeto do site http://www.github.com
$ git clone git@github.com:carlosanders/ecommerce-dabm.git
# Para que usa proxy clone conforme abaixo
$ git clone https://github.com/carlosanders/ecommerce-dabm.git

# ou se desejar baixar do site http://www.gitlab.com
$ git clone git@gitlab.com:dabm-singra/ecommerce.git
# Para que usa proxy clone conforme abaixo
$ git clone https://gitlab.com/dabm-singra/ecommerce.git

# Após baixar tem que executar o composer update
# para baixar as dependências do projeto 
$ composer update
# ou install para instalar, caso seja a primeira vez
$ composer install 

```

### Iniciando o Git Flow no projeto
Este projeto está trabalhando com o Git Flow, portanto para que tenha um melhor aproveitamento favor executar os procedimentos abaixo.

```bash	
# verficar os branches trazidos do repositório com os commits
$ git branch -a –v
	
# criando e alternando para o branch develop – usado como referência de desenv.
$ git checkout -b develop origin/develop
	
# Iniciando de fato o git flow no projeto clonado. Nessa etapa deixa com as opções default
$ git flow init

# será necessário dar permissão de escrita nas seguintes pastas
# do projeto

$ sudo chmod -R 777 path_to_project/ecommerce/storage
$ sudo chmod -R 777 path_to_project/ecommerce/bootstrap/cache
```

### Usando o Gulp para otimizar CSS, JS e Libs de Frontend
...

Caso não queira instalar o gulp para o projeto baixe a versão full do projeto com todas as dependências já instaladas. Clique em releases do git e baixe a versão full. [Versão Full projeto]

[Versão Full projeto](./releases/v0.7.1-full.zip)


[Versão Full projeto]: (./releases/v0.7.1-full.zip)
 
[migrator]: https://packagist.org/packages/artesaos/migrator
[github-migrator]: https://github.com/artesaos/migrator
[packalyst-migrator]: http://packalyst.com/packages/package/artesaos/migrator
[codecasts]: https://codecasts.com.br/
[github-codcasts]: https://github.com/codecasts/codecasts


[GitLab]: http://www.gitlab.com
[fluxo]: https://gitlab.com/dagoba/dagoba_code/wikis/fluxo-do-git-flow
[comandos-git-flow]: https://github.com/nvie/gitflow/wiki/Command-Line-Arguments