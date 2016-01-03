# Teste - Backend - 2015
O objetivo do teste é conhecer as habilidades em:
- Programação
- Organização (código/arquivos)
- Controle de versão
- Análise/Entendimento de requisitos
- Capricho (atenção com urls, metatags, validações, modelagem, nomenclatura, ...)

## Importante
Tudo que for desenvolvido não será utilizado comercialmente e a única intenção é de avaliar o conhecimento atual do interessado.

### Qual é o teste ?
Imagine que a empresa foi contratada para participar de um projeto. Este projeto consiste na elaboração de um site.

O site será para um consultório médico e o principal objetivo é armazenar leeds de possíveis clientes.

A equipe de criação já fez o layout (fake, este foi comprado), a equipe de frontend fez a montagem (fake, a compra foi do template montado) e agora teremos a programação backend para fechar este projeto.

### O que deve ser feito ?
- [x] Modelagem de banco de dados para formulário. Os campos do formulário são: Nome, E-mail, Telefone
- [x] Modelagem de banco de dados para médicos. Os campos são: Nome, Especialidade, Celular, Descrição, Foto
- [x] Utilizando o padrão MVC, exibir as páginas do projeto (index.html, appontment_success.html, doctor.html) com rotas
- [x] Persistir os dados do formulário no banco de dados modelado. Os 3 campos são obrigatórios
- [x] Após a persistência dos dados do formulário, enviar um e-mail para o administrador do sistema
- [x] Após o envio do e-mail, direcionar usuário para tela de sucesso (appontment_success.html)
- [x] Exibir a lista de doutores cadastrados no banco de dados na index, temos uma área chamada "Meet the Wealth.life Specialists Doctors" **OBS: Não é necessário criar um painel de controle para cadastros dos médicos, o objetivo é visualizar a integração com a view e não os cadastros**
- [x] Ao clicar em um médico, exibir as informações deste médico na página doctor.html

### O que devo utilizar ?
- PHP - Orientação a Objeetos
- MVC
- Template Engine
- Banco de Dados MySQL
- Composer
- Sinta-se a vontade para utilização de frameworks/microframeworks

### Como participar ?
- Fazer um fork deste repositório
- Programar para atender os requisitos
- Fazer um merge request quando finalizar. É importante que conste no merge request as instruções para execultar a aplicação desenolvida (preferencialmente usando markdown).


### Instruções para executar a aplicação desenvolvida

##### Pré Requisitos

Para que possa executar a aplcação, você vai precisar dos seguintes componentes instalados.
- PHP >= 5.3.7
- MySQL
- Apache (ou outro servidor)
	- mod_rewrite habilitado
- Composer

##### Para criar as tabelas do banco de dados:
```bat
php artisan migrate
```

##### Para criar as cargas frias:
```bat
php artisan db:seed
```

#### Para rodar a aplicação:
```bat
php artisan serve
```


Nota: **Para mais informação acessar a documentação do framework lavavel: https://laravel.com/docs/5.2**

# Boa sorte
## Muito obrigado pelo interesse em participar
