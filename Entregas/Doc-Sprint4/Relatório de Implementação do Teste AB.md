# Relatório de Implementação do Teste AB

## Objetivos e Resultados Esperados do Projeto

O objetivo deste teste A/B é aumentar a conversão de leads na landing page da empresa Wizard, em sua modalidade de aulas online síncronas, Wizard On. Assim, serão realizadas comparações entre duas versões distintas da página: a versão atual da empresa, representando o grupo controle (Grupo A), e a versão com mudanças propostas por este projeto (Grupo B). Este teste visa avaliar a eficácia das alterações implementadas em elementos da página, como botões, formulário e navegação entre os elementos, na geração de novos leads. A estratégia proposta é a de isolar o formulários de elementos que podem sobrecarregar o usuário de informação, e tornar o fomulário mais limpo, reorganizando elementos que podem competir com a atenção do usuário, como o botão de Whatsapp, que fica sobreposto ao botão de envio de formulário, dependendo da posição de rolagem da página.


### Métricas de Interesse

A análise do teste A/B focará principalmente na Taxa de Conversão de Leads, que será medida através da quantidade de formulários enviados, uma métrica importante para medir o sucesso do teste, considerando que isso indica a eficácia da landing page em transformar visitantes em leads qualificados, refletindo diretamente no sucesso das estratégias de marketing e na geração de novos clientes potenciais. 

Além da taxa de conversão de leads, outras métricas a serem analisadas durante o teste A/B incluem a quantidade de visitantes nas páginas A e B, bem como a quantidade de cliques no botão do WhatsApp versus cliques no envio de informações pelo formulário.

A quantidade de cliques no botão do WhatsApp comparada aos cliques no envio de informações pelo formulário permite avaliar a preferência dos usuários entre um contato mais imediato via WhatsApp e o preenchimento do formulário. A estratégia da proposta B de reduzir a visibilidade do botão do WhatsApp e destacar o formulário visa aumentar a qualidade dos leads, já que o formulário requer mais informações detalhadas, enquanto o WhatsApp pode não garantir que os dados sejam enviados ou que a mensagem seja enviada.


### Resultados Esperados do Projeto

A análise dos resultados do teste A/B permitirá entender melhor se o isolamento do formulário realmente contribui para uma maior conversão de leads. Se for observado um aumento significativo na quantidade de formulários enviados, isso indicará que as mudanças estruturais na página foram eficazes em guiar os usuários diretamente para a ação desejada.

Por outro lado, se os números não melhorarem ou até piorarem, isso pode sugerir que o problema não reside na estrutura da página, mas na própria campanha. Neste caso, seria necessário reavaliar as mensagens de marketing, os apelos visuais e promoções apresentadas na landing page. 

É importante ressaltar que independente do resultado final do teste, os dados coletados permitirão identificar quais alterações contribuíram efetivamente para a melhoria das métricas, ou não, e fornecerão uma base para decisões futuras sobre otimizações da landing page, para a equipe de marketing da empresa.

## **Introdução**

Este relatório documenta o processo de implementação, sobre das ações realizadas e dos desafios enfrentados. Abordando tanto os aspectos técnicos quanto operacionais da implementação da versão B do teste, este relatório busca garantir transparência no seu processo de implementação, e também contempla uma reflexão sobre as estratégias de mitigação levantadas pelos desenvolvedores do projeto na sprint anterior, confrontando o processo real de implementação em um ambiente da empresa.

Além disso, este relatório serve como um registro oficial das ações realizadas, facilitando a comunicação entre as equipes envolvidas e garantindo que todos os stakeholders estejam cientes das etapas do processo, contribuindo para futuras implementações de testes A/B, e desafios de configuração de ambientes da empresa.

A proteção da propriedade intelectual é fundamental para manter a vantagem competitiva e evitar possíveis vulnerabilidades. Portanto, ao elaborar o Relatório de Implementação do Teste A/B, é importante focar nos aspectos técnicos e operacionais do processo de implementação e coleta de dados, sem revelar o código fonte ou a estrutura interna do sistema.

## **Procedimentos de Implementação**

O ambiente da empresa para a landing page é desenvolvido utilizando PHP, sendo uma linguagem de script usada para desenvolvimento web. Embora PHP tenha sido uma escolha popular durante muitos anos, ele enfrenta certos desafios que podem ser considerados um pouco obsoletos em comparação com tecnologias mais modernas. Por exemplo, a manutenção de grandes bases de código em PHP pode ser complexa, e a falta de algumas funcionalidades modernas integradas na linguagem pode exigir o uso de bibliotecas externas ou frameworks adicionais.

## Processo de implementação

O processo de implementação destaca o processo que foi percorrido para que pudéssemos colocar as mudanças propostas dentro do ambiente de homologação do parceiro. O processo realizado foi feito, seguindo alguns parâmetros já pré estabelecidos. Dentre este parâmetros, temos o tutorial de configuração de ambiente que nos foi disponibilizado para atuar em cima, assim como a documentação técnica.

Tutorial de Configuração de Ambiente: [https://drive.google.com/file/d/1a-qofhjTOLVqieuWH0N0sG20ljjOCICD/view](https://drive.google.com/file/d/1a-qofhjTOLVqieuWH0N0sG20ljjOCICD/view)

 Documentação Técnica:  [https://drive.google.com/file/d/1OiWzZdPZ_NZoccrk--1onxHDH-24cSM3/view](https://drive.google.com/file/d/1OiWzZdPZ_NZoccrk--1onxHDH-24cSM3/view)

## Passos para Implementação

Este passo a passo se refere ao processo de implementação da mudanças já consolidadas no ambiente de homologação do parceiro. É de se esperar que alguns dos passos destacados no tutorial, assim como alguns pontos de destaque na documentação técnica, tenham sido levados em conta. 

### 1 - Instalação do FileZilla

1. Acesse o link [https://filezilla-project.org/download.php?platform=win64](https://filezilla-project.org/download.php?platform=win64) para baixar a versão mais recente do FileZilla. Esse software é necessário para fazer o upload dos arquivos para o servidor na nuvem.
2. Após o download, execute o instalador e siga as instruções na tela para completar a instalação.

### 2 - Configuração do FileZilla e Envio de Arquivos para o Servidor Remoto

1. Abra o programa FileZilla que você instalou.
2. Clique no ícone "Gerenciador de Sites".
3. Na janela que abrir, preencha as informações do servidor de homologação conforme abaixo:
    - **Host:** g4.intelli-wizard-on.mmserver.com.br
    - **Porta:** 28
    - **Usuário:** ftp_inteli_g4
    - **Senha:** [insira a senha correspondente]
    
    *Nota: Por razões de segurança, a senha não é fornecida aqui.*
    
4. Após preencher os dados, clique em "Renomear" no lado esquerdo para atribuir um nome amigável ao site, facilitando a identificação.
5. Clique em "Conectar" para salvar as informações e estabelecer a conexão com o servidor.
6. Depois de conectado, a interface do FileZilla exibirá a árvore de arquivos local à esquerda e a árvore de arquivos remota à direita. Navegue até a pasta da aplicação no seu computador na árvore local.
7. Para enviar os arquivos, selecione os desejados na árvore local e arraste-os para a árvore remota. Aguarde a conclusão do upload. Se necessário, confirme a substituição de arquivos.

É possível acessar o domínio correspondente para visualizar as atualizações, o nosso é o seguinte: [https://g4.intelli-wizard-on.mmserver.com.br/](https://g4.intelli-wizard-on.mmserver.com.br/)

### 3 - Acesso ao Código-Fonte

Para acessar o código-fonte do projeto, utilize o repositório no Bitbucket através do link: [Bitbucket - Intelli-Wizard Grupo 4](https://bitbucket.org/marketmediadev/inteli-wizard-on-g4/src/main/).

## Relatório de Procedimentos de Integração e Deploy das Versões B

### Integração e Deploy das Versões B no Ambiente de Produção

### Controle de Versão

- **Ferramenta:** Bitbucket / Filezilla
- **Branch Principal:** `main` /`homologação`
- **Branches de Desenvolvimento:** Por convenção de mercado cada nova feature ou correção deve ser desenvolvida em branches separadas. Por exemplo, para a versão B, crie uma branch `feature/version-B` . No entanto, as mudanças que realizamos no filezilla não houve controle de branches, neste caso só atualizávamos as pastas junto com os arquivos que foram modificados.
- **Merge:** Após a conclusão do desenvolvimento e testes, realize um pull request (PR) para a branch `main`.

***Obs:*** É importante citar que este versionamento proposto acima, era o que estava previsto dentro do escopo de mudanças que nos foi ensinado. No entanto, por limitações de atuação, acabamos só fazendo as mudanças no filezilla, e não houve **interação direta** com o versionamento no bitbucket.

### “Pipelines de CI/CD” (na prática)

O FileZilla é utilizado para o upload dos arquivos, e no contexto do projeto, foi o que usamos para subir as mudanças que foram feito. No entanto para garantir que das mudanças estavam condizentes e garantir que o código iria de fato subir sem erros seguimos alguns métodos:

- **Algo parecido com um Pipeline de Integração Contínua (CI):**
    - **Build:** Realizavamos o compile do código com as mudanças para verificar se não havia erros.
- **Algo parecido com um Pipeline de Deploy Contínuo (CD):**
    - **Deploy para Ambiente de Homologação:** Deploy “manual” dos arquivos para um ambiente de homologação para propor as mudanças de código. Como foi citado anteriormente o deploy é feito manualmente via FileZilla após validação.
    - **Aprovação Manual:** Após a validação em homologação, uma aprovação manual é necessária para o deploy em produção. (Esta etapa aqui basicamente não teve camada de abstração, já que nós éramos as pessoas que aprovamos cada etapa, tínhamos este nível de acesso na nossa branch)
    - **Deploy para Produção:** É feita a preparação dos arquivos para upload via FileZilla. O upload em si é realizado, como as outas partes, manualmente.

### Planos de Rollback

- **Estratégia de Rollback:** Em caso de falhas críticas, o rollback deve ser realizado revertendo para a versão anterior utilizando as tags ou branches de releases.
- **Automatização:** Não sabemos quão real seria esta possibilidade, mas como estratégias futuras,  scripts no pipeline de CD para automatizar o rollback, se necessário.
- **Monitoramento Pós-Rollback:** Após o rollback, monitore o sistema para garantir que a versão anterior esteja funcionando corretamente.

## Monitoramento Visual e de Consistência

Neste etapa, focamos na inferência da disposição e layout da página (LP) de inscrição da Wizard On, comparando como ela é exibida e funciona em diferentes navegadores (Chrome, Firefox, Edge) e dispositivos (desktop e mobile). Isso é importante, pois é um fator de alta relevância na hora do usuário realizar a interação com o formulário e no final do dia ser convertido em lead. 

Sendo assim, o grupo visualizou as mudanças em alguns navegadores, e realizou algumas inferências de acordo com cada navegador e cada dispositivo.

### Navegadores e Dispositivos Testados

Os testes foram realizados nas seguintes configurações:

- **Navegadores:** Chrome, Firefox, Edge, Brave
- **Dispositivos:** Desktop (Windows) e Mobile (Android).

### Descrição da mudanças na Versão B (Variante)

A versão B apresenta várias mudanças em relação à versão original:

- Layout ajustado para melhor legibilidade.
    - Diminuição do layout do formulário
- Botões e elementos interativos destacados.
    - Mudança na imagem do Botão de clique pro WhatsApp
    - Mudança no texto do botão superior à direita (agora está escrito “Mais Informações”) e seu redirecionamento
    - Novo redirecionamento e novo texto para um dos botões (agora “Sobre Wizard On”)
- Mensagem de call-to-action (CTA) alterada para maior impacto.

### Resultados dos Testes

### Chrome (Desktop)

- Ajustes de layout são visíveis e melhoram a experiência do usuário.
- O botão CTA é mais destacado, aumentando a visibilidade e a interação.
- Botão do WhatsApp aparece um pouco maior na disposição total da tela
    - *Percebemos que neste item, isso varia de dispositivo para dispositivo e de acordo com as configurações de tela do navegador*
- Layout do formulário um pouco maior do que o normal
    - *Neste caso, os dispositivos com tela menor, estão com a aparência do formulário colada junto a outra seção da página*

![image (34)](https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/e62d16ce-05e3-429f-8430-71b5c6e7760f)

### Firefox e Brave (Desktop)

- O layout ajustado é bem representado, mantendo a consistência com a versão Chrome, e visualmente é o que dispõe melhor para experiência do usuário.
- As mudanças no design melhoram a usabilidade e a clareza das informações. E neste navegador, independente do dispositivo (laptop, ou desktop), o design é o mesmo
- Botão de WhatsApp com o melhor tamanho em relação aos navegadores
- Formulário no padrão e tamanho adequado com as mudanças

![image](https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/b278f7f2-4e84-4628-9dae-bdf970556c8b)

### Edge (Desktop)

- Layout ajustado é consistente, com boa performance geral.
- Pequenas diferenças na renderização de alguns elementos CSS, mas sem impacto significativo, só apenas diferente dos outros navegadores.
- O Botão do WhatsApp aparece maior na disposição total da tela, também, mas ele fica um pouco em cima do formulário.
    - *Mais uma vez, como no chrome, percebemos que neste item, isso varia de dispositivo para dispositivo e de acordo com as configurações de tela do navegador*
- Formulário um pouco maior também

![image (25)](https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/21260a9c-81d0-4b36-9f90-87863a840a54)

## Visualização das Mudanças em Mobile

**Aparelho utilizado:** Samsung S22 Ultra

### Chrome (Mobile)

- Melhoria significativa na usabilidade com o layout ajustado (aqui parece mais natural)
- Botões e textos são mais legíveis, facilitando a navegação em telas menores.
- Layout do formulário um pouco mais próximo da seção abaixo (quase colado)
- Botão do WhatsApp ainda um pouco maior, mas não está 100% na frente do formulário

<img src="https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/6e930bd5-43c1-4c81-9ba2-d4741a731a8d" alt="Screenshot_20240603_094906_Chrome" width="300"/>
<img src="https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/22aa569a-81d7-4352-9c09-674f9acf1b9f" alt="Screenshot_20240603_094901_Chrome" width="300"/>

### Firefox (Mobile)

- Ajustes de layout são mais perceptíveis
- O desempenho é consistente, proporcionando uma navegação fluida pela landing page.
- Os elementos aqui estão um pouco mais escuros
- Layout do formulário um pouco mais próximo da seção abaixo (quase colado)
- Botão do WhatsApp ainda um pouco maior, mas não está 100% na frente do formulário

<img src="https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/370c73b0-78f7-446c-953c-bb9dcd8b119d" alt="Screenshot_20240603_095112_Firefox" width="300"/>
<img src="https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/709351e0-9795-4c3c-9e84-c1467102b535" alt="Screenshot_20240603_095105_Firefox" width="300"/>

### Observações do Teste

- **Homologação:** As mudanças na versão B foram implementadas com sucesso em todos os navegadores testados. A versão B mostrou melhorias na usabilidade e clareza das informações, especialmente em dispositivos móveis. Mas a consistência do layout e design é perceptivelmente melhor no desktop.
- **Performance:** O desempenho da página é consistente entre os navegadores, com pequenas variações que não impactam significativamente a experiência do usuário.

### Estratégias de Monitoramento Contínuo (ideias de próximos passos para a Wizard)

- **Ferramenta:** Utilizar ferramentas como Looker, e Grafana para monitoramento de desempenho e logs em relação ao desempenho da campanha a partir das mudanças realizadas.
    - Estas ferramentas juntas, podem trazer insights relevantes
       - Focar no desempenho da campanha pelo Looker
       - Desempenho das mudanças e track dos seus impactos pelo Grafana ou equivalente
- **Alertas:** Configurar alertas para detectar falhas e desempenho anormal.
- **Revisões Periódicas:** Realizar reuniões diárias (stand-ups) para revisar o status do sistema e resolver problemas rapidamente.

### Suporte Operacional

- **Período de Teste:** Manter a equipe de suporte disponível 24/7 durante a primeira semana após o deploy.
- **Documentação:** Fornecer documentação detalhada sobre as mudanças da versão B para a equipe de suporte.
- **Comunicação:** Utilizar ferramentas de comunicação (como Slack) para comunicação rápida entre as equipes em caso de problemas.


## **Desafios técnicos e Planos de ação adotados Durante o Processo de Implementação das Mudanças**

Durante o processo de implementação, foram enfrentadas algumas dificuldades na configuração do ambiente de produção, seguindo as instruções fornecidas pela empresa. Essas dificuldades incluíram problemas de compatibilidade entre versões de software, configurações de servidor que não estavam alinhadas com as necessidades do projeto e restrições de segurança que dificultaram a implementação das mudanças propostas.

Foram realizadas tentativas de configurar o ambiente em computadores diferentes, na tentativa de resolver as dificuldades encontradas durante o processo de implementação. Isso inclui testes para verificar se os problemas persistem em diferentes configurações de hardware e software, visando encontrar uma solução viável para as questões enfrentadas durante a configuração do ambiente de produção.

Durante as tentativas de realizar a configuração em ambientes diferentes, a equipe responsável pela proposta B continuou trabalhando no desenvolvimento através da ferramenta de inspeção do DevTools, como mencionado na sprint anterior. Isso envolveu a modificação e salvamento do código diretamente no navegador, permitindo que, uma vez superadas as etapas de configuração, as modificações pudessem ser facilmente transferidas para o ambiente de produção. Essa abordagem foi adotada para que o progresso no desenvolvimento não fosse interrompido, mesmo diante das dificuldades enfrentadas na configuração inicial do ambiente da empresa.

### Plano de Ação

Após tentar algumas vezes realizar a configuração a partir da documentação que nos foi fornecida, tiramos alguns insights do que estava acontecendo. Na situação, aparentemente, a configuração não era compatível com os computadores padrão do Inteli (que incluem um software anti-vírus, assim como algumas extensões de permissão que não eram compatíveis). Também foi perceptível que alguns itens do tutorial, estavam desatualizados. 

Com estes setbacks iniciais, traçamos um plano de ação, com algumas tentativas específicas para realizar a configuração. 

**Plano De Ação**
- Realizar o procedimento de mudanças e sua validação a partir do "inspecionar elemento" da página
- Com as mudanças anotar e pegar as rotas de regras de negócio no código para a mundança
- A partir da validação das mudanças tentar realizar a configuração com outro dispositivo que não era padrão do Inteli: nossas opções eram os dispositivos Mac de dois integrantes do grupo, ou outro dispositivo de outro aluno da Sala


### Rodando as Mudanças em Homologação

No processo de implementação, foi possível rodar o projeto em homologação sem aplicar nenhuma mudança, o que permitiu verificar o funcionamento básico do sistema. No entanto, ao tentar realizar as mudanças e atualizações conforme planejado, surgiram conflitos em várias pastas do código.

A estratégia inicial de utilização do DevTools para realizar as modificações na página não funcionou como o esperado. A dificuldade principal estava relacionada à conversão automática do PHP para HTML, o que tornou difícil replicar as mudanças observadas no DevTools diretamente na produção.

### Problemas enfrentados 

Os problemas enfrentados incluíram conflitos em diversas pastas do código, impossibilidade de reaproveitar as mudanças realizadas no DevTools, e dificuldade em atualizar e aplicar as modificações sem gerar erros na estrutura da página. Assim, as mudanças propostas anteriormente e as realizadas no DevTools não puderam ser reproduzidas no ambiente de produção de forma direta.

Isso mostra a complexidade envolvida na implementação de mudanças em um ambiente de produção real, especialmente quando há conversões automáticas de código e dependências de outras partes do sistema que podem causar conflitos e impactar a integridade da página.

### "Ajuda dos Universitários"

Diante desses impedimentos, foi necessário o auxílio de outras equipes que já haviam obtido sucesso na implementação da proposta B em seus projetos. A colaboração com essas equipes foi importante para identificar possíveis soluções e estratégias alternativas durante a implementação.

Neste caso, em específico, a partir da conifguração já estabalecida em um computador de outro aluno (integrante que já havia conseguido rodar o projeto em homologação), clonamos nosso projeto no computador dele e ele replicou o processo de configuração no Filezilla apenas atribuindo mais uma nova conexão à estrutura de pastas do nosso grupo (estrutura que foi clonada). A partir disso, foi feito uma espécie de "pair programming" no qual entramos em call e mexemos no código juntos para ajustar as mudanças no código e refleti-las na Versão B da Landing Page. 

A partir disso, conseguimos realizar as mudanças e subi-las em ambiente de homologação.

#### Correções Durante a Implementação

Consequentemente, dentro do tempo que tivemos, e de acordo com o plano de ação, foi também necessário adotar uma estratégia inicial de priorizar mudanças mais simples e diretas, principalmente para que a equipe se familiarizasse com a linguagem de programação, e verificar se as mudanças estavam sendo realizadas com sucesso. Isso se deu em parte pela complexidade dos problemas encontrados ao tentar realizar alterações mais profundas na estrutura da página.

É importante destacar também que a proposta B foi feita de forma de não modificar em excesso a estrutura da página. Essa prática foi adotada, especialmente tendo em consideração a colaboração com outras equipes da empresa parceira, Wizard. Isso porque alterações significativas na estrutura ou no código da página podem causar problemas para os desenvolvedores responsáveis pelo sistema. Dessa forma, não foram propostas alterações que envolvessem a exclusão de informações ou elementos de identificação da marca, nem modificações significativas na estrutura da página em si.

### End Result

Apesar dos desafios enfrentados durante a implementação da proposta B, conseguimos avançar significativamente no entendimento da complexidade do ambiente de produção e das interações entre diferentes sistemas. As dificuldades encontradas nos mostraram a importância de uma abordagem cautelosa e colaborativa ao implementar mudanças em um ambiente real.

Após a implementação da proposta B, realizamos testes através de monitoramento da página em diferentes navegadores. Observamos pequenas diferenças de renderização em alguns browsers, porém, essas diferenças foram consideradas de impacto mínimo e não necessitam de ajustes posteriores. 

É importante destacar que durante a sprint review, recebemos feedback positivo do nosso parceiro de projeto, apontando que sua equipe que gerencia a landing page não enfrentou problemas com as mudanças propostas, por não afetarem tanto a estrutura da página. Isso reforça a importância da abordagem adotada de minimizar alterações na estrutura da página, o que resultou em uma implementação compatível com o ambiente existente.
