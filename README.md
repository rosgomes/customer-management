# customer-management
Dado o teste: <br>
<strong>1</strong> Criar uma área administrativa onde o(s) usuário(s) devem acessar através de login e senha.<br>

<strong>2</strong> Criar um gerenciador de clientes (Listar, Incluir, Editar e Excluir)<br>

  <strong>2.1</strong> O cadastro do Cliente deve conter: <br>
    <strong>a.</strong> Nome; <br>
    <strong>b.</strong> Data Nascimento; <br>
    <strong>c.</strong> CPF; <br>
    <strong>d.</strong> RG; <br>
    <strong>e.</strong> Telefone. <br>
    
  <strong>2.2</strong> O Cliente pode ter 1 ou N endereços.<br>
------------------------------------------------------------------------------------------------------------------<br>

Criei as seguintes tabelas no banco:

<br>

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `passaword` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
)

<br>

CREATE TABLE IF NOT EXISTS `customer` ( 
  `id` int(11) NOT NULL AUTO_INCREMENT, 
  `nome` varchar(220) NOT NULL, 
  `datanasc` TIMESTAMP NOT NULL, 
  `cpf` varchar(11) NOT NULL, 
  `rg` varchar(10) NOT NULL, 
  `telefone` varchar(11) NOT NULL, 
  PRIMARY KEY (`id`),
  UNIQUE (`cpf`), 
  UNIQUE (`rg`) 
)

<br>

CREATE TABLE IF NOT EXISTS `address` ( 
  `id_address` int(11) NOT NULL AUTO_INCREMENT, 
  `id_customer` int NULL, 
  `street` varchar(50) NOT NULL, 
  `number` int(11) NOT NULL, 
  `neighborhood` varchar(50) NOT NULL, 
  `city` varchar(50) NOT NULL, 
  PRIMARY KEY (`id_address`), 
  FOREIGN KEY (id_customer) REFERENCES customer (id) on delete cascade 
)<br>
------------------------------------------------------------------------------------------------------------------<br>

Foi usado Bootstrap para algumas funções de estilo no projeto.
