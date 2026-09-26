# Lista de Amigos

Projeto desenvolvido para a disciplina de Programação WEB II - Aula 08 da ETEC.

## Sobre o projeto

O projeto consiste em um sistema de cadastro e gerenciamento de uma lista de amigos.

O sistema permite realizar as operações básicas de CRUD:

- Cadastrar amigos
- Listar amigos
- Editar amigos
- Excluir amigos

Além do CRUD, foi desenvolvido um sistema de login utilizando sessões para proteger o acesso às páginas do sistema.

## Tecnologias utilizadas

- PHP
- MySQL
- HTML
- XAMPP
- MySQL Workbench

## Banco de dados

O projeto utiliza o banco de dados `lista_amigos`.

A tabela `amigos` possui os seguintes campos:

- `id` - identificador do amigo
- `nome` - nome do amigo
- `telefone` - telefone do amigo
- `email` - e-mail do amigo

Também existe a tabela `usuario`, utilizada para o sistema de login.

## Sistema de login

O usuário realiza o login através da página inicial.

Após o login, uma sessão é criada para controlar o acesso às páginas protegidas.

As páginas do CRUD verificam se o usuário está logado antes de permitir o acesso.

Também foi implementado o logout, que encerra a sessão do usuário.

## Estrutura do projeto

- `index.php` - página de login
- `loginAction.php` - verifica o login
- `logout.php` - encerra a sessão
- `verificarAcesso.php` - verifica se o usuário está logado
- `conexaoBD.php` - conexão com o banco de dados
- `cadastro.php` - cadastro de amigos
- `listar.php` - listagem dos amigos
- `editar.php` - edição de amigos
- `excluir.php` - exclusão de amigos

## Objetivo

O objetivo do projeto é aplicar na prática os conhecimentos de PHP, banco de dados, CRUD, conexão com MySQL e controle de acesso por sessão.

## Apresentação

A apresentação utilizada para explicar o projeto está disponível neste repositório no arquivo:

`Apresentacao_Aula_08_Lista_de_Amigos_Aluno.pptx`
