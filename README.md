# small-framework
Mini Framework para desenvolvimento php

# Sobre controllers
- Todo Controller deve extender da classe Front
- Todo controller deve implementar o método construct da classe pai, passando os parametros
# Sobre Models
- Todo model deve ter o nome Model_NomeDoModel
# Sobre arquivo small.php
- O arquivo small.php contem diversas functions que irão auxiliar no desenvolvimento de seu projeto
- Por padrão o arquivo small tem as funções topo() e rodape() essas funções vem por padrão com links para css e javascript, chamada da barra de navegação e tratamento dos arquivos css e javascript que podem ser passados na view(veja exemplo no arquivo views/index/index.php), o uso dessas funções são de escolha do usuario
- O arquivo contem também as funções start() que serve para startar o serviços do framework, a função getPost e getSession a qual é passado como parametro o nome desejado do parametro que foi passado na sessao ou no post, formatDate() para formatar a data em padrão Brasileiro ou Americando, emailValidate() para validação de emails, senha() para fazer hashs de senhas, my_autoload() Para fazer a destinção de models e controllers
- Os arquivos de view devem ser requiridos diretamente no metodo do controller a qual deseja ter uma view
- Todas variaveis do métodos ficam visiveis na view a qual foi requirida
# Utilização
- Nos arquivos do repositório contém exemplo de controllers, models e views.
- O acesso aos métodos dos controllers é feito da seguinte forma(url/CONTROLLER/METODO(ACTION)/PARAMETRO1=VALOR&PARAMETRO2=VALOR)


