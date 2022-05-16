CREATE DATABASE `estoque`;

CREATE TABLE `produtos` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `cor` varchar(200),
  `peso` varchar(200),
  `tamanho` varchar(200),
  `preco` varchar(200),
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=2;
