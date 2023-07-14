-- Para criar a base de dados execute o seguinte comando:

CREATE DATABASE `to-do-list`;


-- Para criar as duas tabelas de dados necessárias para o funcionamento da aplicação execute o seguinte comando:

CREATE TABLE `demo` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `txt` VARCHAR(255) NOT NULL,
  `id_usuario` INT(11) NOT NULL,
  `status` INT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
);

CREATE TABLE `usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `senha` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);


-- Para criar as ligação entre as duas tabelas execute o seguinte comando:

ALTER TABLE `demo`
ADD CONSTRAINT `fk_demo_usuarios`
FOREIGN KEY (`id_usuario`)
REFERENCES `usuarios` (`id`)
ON DELETE CASCADE
ON UPDATE CASCADE;


-- Para criar o primeiro usuário teste via sql execute o seguinte comando:

INSERT INTO `usuarios` (`email`, `senha`)
VALUES ('teste@teste.com', 'teste');
