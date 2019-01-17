# o que é o projeto
projeto feito para o teste da feegow

# funcionalidades
essa é a tela inicial, nela temos a lista de especialidades
![01](https://user-images.githubusercontent.com/6231475/51333374-b8bda980-1a64-11e9-85ae-ed0a2f42fba3.png)

apos escolher uma especialidade e clicar em agendar
![02](https://user-images.githubusercontent.com/6231475/51333375-b8bda980-1a64-11e9-893b-dd72802092a4.png)

serão exibdos todos os profissionais daquela especialidade
![03](https://user-images.githubusercontent.com/6231475/51333376-b9564000-1a64-11e9-9b25-b5e2d9438fc4.png)

ao clicar em agendar em um dos profissionais a tela de "preencha seus dados" aparecerá
![04](https://user-images.githubusercontent.com/6231475/51333379-b9564000-1a64-11e9-98c4-69682cceca7b.png)

nessa tela  é carregada a lista de origem de como conheceu
![05](https://user-images.githubusercontent.com/6231475/51333382-b9eed680-1a64-11e9-9a55-a118ee4cce2a.png)

clicando em solicitar horario, caso dê tudo certo, mensagem irá aparecer
![06](https://user-images.githubusercontent.com/6231475/51333387-ba876d00-1a64-11e9-829f-a19f1649c52c.png)

no banco o registro salvo
![07](https://user-images.githubusercontent.com/6231475/51333391-ba876d00-1a64-11e9-8230-36107b498a9b.png)

# como rodar

você vai precisar do 
- php
- mysql (Use Legacy Authentication Method)
- composer
- laravel (composer global require laravel/installer)

1- Digite o commando "composer install". Ele vai instalar todos os pacotes php necessários.

2- Digite o commando "php artisan key:generate". Esse vai gerar uma chave para a aplicação.

- no my sql crie um database chamado "dbfeegow"
- no arquivo .env coloque as credenciais do seu banco
- rode o camndo php artisan migrate
- depois o monando php artisan serve

pronto!
