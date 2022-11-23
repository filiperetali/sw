--
-- Banco de dados: `listagemphp`
--
create database IF NOT EXISTS listagemphp;
-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS categorias (
  id int(11) NOT NULL AUTO_INCREMENT,
  categoria varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO categorias (id, categoria) VALUES
(1, 'ThinkVision200'),
(2, 'ThinkVision300'),
(3, 'ThinkVision202'),
(4, 'ThinkVision205'),
(5, 'ThinkVision100v'),
(6, 'ThinkVision100a');
COMMIT;