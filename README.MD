**********``GETTING_DATA_FROM_A_FORM``**********

Para isso, podemos usar a função 

``filter_input()`` => que recebe dois parâmentros obrigatoriamento, o method de envio (GET OU POST) neste formato: ``INPUT_GET/POST``, e o name do nosso input.

A própria função já se encarrega de verificar se o campo foi preenchido ou não.

No entando, se nosso formulário for enviado sem nada, ele irá para nossa página de action;
para previnir isso, podemo fazer um redirect, no php, fazemos isso da seguinte forma:

````
header("Location: aPaginaQueQueremosRedirecionar.php");
exit();

````

``Note``: Só podemos fazer troca de header, quando não enviamos nenhuma informação pra tela seguinte.

``Note1.1``: Usamo o ``exit()`` pra previnir que ninguem consiga ter acesso ao que seria enviado ou pra onde seria o nosso forumário, pos ele irá para o quanto antes. Alguma pessoa pode ter acesso usando um lazing connection para acessar a página ou colocar links inesperados com aplicações como o burp.

<hr/>

<h2>Validando as informações do formulário</h2>
1. Para validar o E-mail, dentro da função ``filter_input()`` podemos passar a opção ``FILTER_VALIDATE_EMAIL``. Nesse caso, se o e-mail não for passado corretamente, ele nem será exibido

2. Para validar um campo de números, por exemplo, podemos usar o ``FILTER_SANITIZE_NUMBER_INT`` que irá remover qualquer coisa que não seja número e irá exibir apenas o que é inteiro (INT). Outra forma de validar é usando o ``FILTER_VALIDADE_INT`` que se for enviado qualquer coisa que não seja número inteiro ele não ira exibir.

3. Também precisamos validar nossos campos para que o usuário não tente inserir códigos maliciosos. Para isso, vamos usar o ``FILTER_SANITIZE_SPECIAL_CHARS`` que irá tornar qualuqer coisa em texto, inclusive código maliciosos;
********************************************

**********``SHOWING_OFF_THE_FORM``**********

![Form Validation - GIF](/formValidation.gif)

********************************************

<hr/>

**********SESSION_PHP**********
Quando fizemos o redirecionamento para a página index, caso o nosso formulário fosse enviado vazio, usamos um header``('Location route.php')``
e um ``exit()``; Porém, a página simplesmente era recarregada, agora, com o session, podemos mostrar um aviso caso o usuário tente enviar com formulários vazios.

Para começar:
Chamar o ``session_start()``  em cada página que vai ser usado, no nosso caso no index e em received, após iss onde nos fizemos a rota que mostra o usuário q foi adiciondo e para onde a pagina vai mandar caso o formulário venha vazio, devemos inserir `` $_SESSION['title'] = "e inserir um aviso";``. Para acessar em outra página, podes fazer o seguinte código: 

````
if($_SESSION['warn']) {
    echo $_SESSION['warn'];
    echo $_SESSION['warn'] = '';
}
````


*******************************