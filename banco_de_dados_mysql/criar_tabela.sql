CREATE TABLE `agenda`.`contatos` (
`id_contato` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`nome_contato` VARCHAR(255) NULL,
`telefone_contato` VARCHAR(20) NULL,
`email_contato` VARCHAR(255) NULL,
`nota_contato` BLOB NULL COMMENT 'Anotação referente ao contato',
PRIMARY KEY (`id_contato`))
ENGINE = InnoDB;