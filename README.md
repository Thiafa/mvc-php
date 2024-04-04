# mvc-php

## Recursos

https://fkrihnif.medium.com/understanding-the-mvc-architecture-in-laravel-a-comprehensive-guide-8f620cc139b6


CREATE TABLE `cadastros` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(254) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `senha` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `cadastros` (`nome`, `email`, `telefone`, `senha`) VALUES
('João', 'joao@example.com', '1234567890', 'senha123'),
('Maria', 'maria@example.com', '9876543210', 'senha456'),
('Pedro', 'pedro@example.com', '5555555555', 'senha789'),
('Ana', 'ana@example.com', '9999999999', 'senhaabc'),
('José', 'jose@example.com', '7777777777', 'senhadef'),
('Carla', 'carla@example.com', '8888888888', 'senhaghi'),
('Fernando', 'fernando@example.com', '6666666666', 'senhajkl'),
('Mariana', 'mariana@example.com', '3333333333', 'senhamno'),
('Paulo', 'paulo@example.com', '2222222222', 'senhapqr'),
('Laura', 'laura@example.com', '1111111111', 'senhastu')
;
