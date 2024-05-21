## Essentia Customer Management System (ECMS)

## Sobre
&nbsp;&nbsp; Este é um projeto desafio, onde fiz um pequeno sistema de cadastro de clientes, com uma tela de visualização, edição e exclusão dos registros.

![essentia_cms](https://github.com/erik-ymmt/essentia-cms/assets/92269952/9f1ce28d-0f9e-4187-966c-7c5ef784fc71)

## Tecnologias
&nbsp;&nbsp; Tecnologias utilizadas neste projeto:
- WAMP;
- PHP;
- MySQL;
- HTML;
- CSS;

## Como rodar o projeto
- Tenha a última versão do WAMP instalada na sua máquina;
- Clone o repositório na pasta WWW do WAMP (o diretório será algo similar a `C:/wamp64/www/`);
- Com o PhpMyAdmin ou com preferir, crie um banco de dados MySQL com o nome `ecms`, sem senha, usuário `root`
- Crie uma tabela neste banco de dados com o código:
```
CREATE TABLE `customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `company` enum('pharma','nutrition','tech','noorskin') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci	
```
- Abra em seu navegador: [http://localhost/essentia-cms/](http://localhost/essentia-cms/)
- Pronto! Agora é só testar.

----
----

### Pontos de melhoria:
- Adicionar validações de campos;
- Maior segurança no acesso ao banco de dados;
- Melhorar experiência do usuário: CSS, paginação da lista, confirmação de exclusão, etc.

### Referências:
Por se tratar do meu primeiro contato com a linguagem php, além das documentações oficiais, algumas referências de estudo foram de grande importância: 
- [@zerobugs](https://www.youtube.com/@zerobugs-tutorial)
- [@wdevoficial](https://www.youtube.com/@wdevoficial)
