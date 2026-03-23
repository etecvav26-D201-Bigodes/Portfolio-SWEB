## exercício 1

   A diferença entre cookies e sessions no PHP é que os cookies são armazenados na máquina do usuário, eles são um mecanismo para armazenar dados no navegador remoto e
  assim rastrear ou identificar usuários que retornam, como por exemplo um vídeo assistido, links já acessados, qual o idioma de preferência, um carrinho de com em um
  e-commerce, entre outros. Eles tem um tempo de vida limitado que pode variar, o lado bom dos cookies são que o seu sistema pode recuperar informações que podem ser
  utilizados durante a vida útil do cookie, já o lado ruim é que os dados correm risco de segurança já que ficam amarzenados na máquina do usuário, dito isso sessions
  são mais seguros por ficar armazenados no servidor, que existem enquanto o usuário interagir com seu sistema. As sessões permitem que os desenvolvedores armazenem
  grandes volumes de dados sem as limitações de tamanho que os cookies impõem, além de serem mais fácil de gerenciar.
   Os cookies são mais adequados para guardar informações do lado do usuário, como preferências ou itens selecionados, porém os sessions são usados para informações 
  que necessitam de segurança, como login autoático, ou quando é preciso armazenar muitos dados, por não ter limite.

## exercício 3

   1. Na primeira execução o aparece a mensagem Cookie ainda não está disponivel, pois o Cookie foi criado, mas ainda não pode ser lido.
   2. Atualizando a página o navegador ja salvou o Cookie, e ele manda de volta o valor 1.
   3. Na vizualização dos Cookies do navegador, o Cookie contador aparece com valor e com um tempo de expiração de 1 hora.
   4. Após limpar os Cookies e atualizar o navegador a mensagemm volta a ser Cookies ainda não disponivel, pois o Cookie foi apagado e precisa ser criado novamente.
   
   O motivo do Cookie não aparecer na primeira execução é porque ele é enviado pelo servidor na resposta HHTP, mas só fica disponivel para o PHP na próxima requisição, ou seja só depois da página ser atualizada que o navegador devolve o Cookie ao servidor, ai sim ele pode ser acessado.

## exercício 4 

   As sessões (sessions) sao geralmente preferidas para autenticaçao sem sistemas web tradicionais, principalmente aplicaçoes renderizadas no sertvidor por oferecerem
   um alto vivel de segurança, controle centralizado e facilidade de implementação. A autenticação baseada em sessão é "stateful" (com estado), o que significa que o
   servidor lembra de cada usuário logado, armazenando os dados da sessão no lado do servidor
   SEGURANÇA E REVOGAÇÃO IMEDIATA: A maior vantagem é a capacidade de revogar o acesso de um usuário instantaneamente. Se uma conta for comprometida ou um usuário fizer logout,
   os dados da sessão podem ser apagados imeidatamente no servidor, invalidando o acesso de forma instantânea.
   CONTROLE CENTRALIZADO: Como os dados da sessão são armazenados no servidor, a aplicação tem controle total sobre quem está logado, facilitando a gestão de sessões ativas 
   e a segurança da informação.
   
