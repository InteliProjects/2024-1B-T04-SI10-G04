## Introdução
O artefato "Proposta B para Teste A/B" consiste na nova página refatorada de acordo com as modificações propostas pelo grupo com base na página original, sintetizando o resultado de um processo colaborativo e incremental, integrando insights e feedbacks de várias etapas do desenvolvimento do projeto, incluindo a elaboração de um blueprint de serviço a partir da metodologia HEART, os resultados da Simulação de Monte Carlo e a formulação do Teste A/B a partir do entendimento do negócio do parceiro e dores que devem ser tratadas.

### Premissas de Avaliação das Mudanças
Realizar pequenas mudanças durante o processo de teste A/B permite um controle mais preciso sobre os efeitos de cada alteração específica na experiência do usuário. Ao implementar modificações incrementais, como ajustes na navegação, otimização de processos da página ou mudanças sutis na identidade visual, é possível isolar e medir o impacto de cada variável com maior precisão. Esse método não apenas facilita a identificação das melhorias mais eficazes, mas também minimiza o risco de impactos negativos significativos na funcionalidade ou na experiência do usuário, assegurando que o site continue operando de maneira eficiente enquanto se busca continuamente sua otimização.

## Alterações Realizadas

<img width="1512" alt="LP - indicando mudancas" src="https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/845b4425-a7ac-4ee7-8503-30b4abe5dda3">


**1. Navegação e Menu**

Foi realizada uma modificação na barra de navegação superior da página, especificamente na seção anteriormente intitulada “Regulamento”. Com o objetivo de otimizar a página para leads, essa seção foi substituída por “SOBRE WIZARD ON”, que fornece informações sobre a Wizard On. Essa alteração busca direcionar melhor a atenção dos visitantes e proporcionar um foco maior na captação de leads.

Além disso, essa modificação visa reduzir a taxa de dispersão dos visitantes ao acessar a página, alinhando-se à teoria de manter apenas as informações relevantes para a conversão de um lead.



- Antes:
![image](https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/5149d6b5-c4df-4b31-9169-22f49ef6f302)

- Depois:
```html
<ul class="navbar-nav">
  <li class="nav-item">
    <a data-scroll="" class="nav-link" href="#banner">INÍCIO</a>
  </li>
  <li class="nav-item">
    <a data-scroll="" class="nav-link" href="#rtb">SOBRE WIZARD ON</a>
  </li>
  <li class="nav-item">
    <a data-scroll="" class="nav-link" href="#faq">FAQ</a>
  </li>
  <li class="nav-item">
    <a data-scroll="" class="nav-link" href="#form">CONTATO</a>
  </li>
  <li class="nav-item d-lg-none">
    <a data-scroll="" href="#form" class="w-100 btn btn-red">PARTICIPE!</a>
  </li>
</ul>
```
![image](https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/67ff7ed6-21d7-4920-9864-3f0a2cf2ad87)

  **2. Formulário de Contato**

Foi feita a mudança de autocomplete para o formulário para facilitar o envio do formulário em si. Anteriormente, o autocomplete não estava configurado para todos os campos, o que podia tornar o processo de preenchimento mais demorado e suscetível a erros. Com a nova configuração de autocomplete, os campos de nome, e-mail e telefone agora utilizam sugestões automáticas do navegador, facilitando e agilizando o preenchimento do formulário. Essa mudança visa melhorar a experiência do usuário, tornando o envio do formulário mais rápido e eficiente.

<img width="1512" alt="LP-autocomplete-email" src="https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/95caf345-2001-4c84-8bab-fb75395bed7f">

<img width="1512" alt="LP-autocomplete-telefone" src="https://github.com/Inteli-College/2024-1B-T04-SI10-G04/assets/99264567/95f0f742-ed24-4497-8eab-beb07bdd56f3">

- Depois:
```html
<div id="form-content">
  <div class="text-center">
    <h2 class="form-title fw-bold text-red mb-3 h3">
      APRENDA INGLÊS ONLINE
      <span class="bg-red px-2 text-white d-inline-block"> COM AULAS AO VIVO</span>
    </h2>
    <small>Preencha agora o formulário e entraremos em contato para mais informações.</small>
  </div>
  <form id="formCta" name="formCta" class="formCta" novalidate="novalidate">
    <!-- Form fields -->
    <div class="form-group">
      <label for="additional_info">Informações Adicionais</label>
      <textarea class="form-control" name="additional_info" id="additional_info" rows="3" placeholder="Insira mais detalhes aqui"></textarea>
    </div>
    <button class="btn btn-red text-white btn-lg cursor-pointer" id="submitFormCta" type="submit">
      ENVIAR
    </button>
  </form>
</div>
```

  **3. Botão de Envio**
  Foi identificado que o Call-to-Action (CTA) precisava ser mais claro e apelativo. Inicialmente, o CTA continha o texto “Aproveite”, mas foi concluído que essa mensagem não deixava claro que se referia a uma promoção específica. Para melhorar a compreensão e a efetividade do CTA, ele foi modificado para “Aproveitar Promoção”. Essa mudança visa tornar a chamada para ação mais específica e atraente, facilitando o entendimento dos usuários e aumentando a taxa de conversão.
  
- Antes:
  
```html
<button class="btn btn-red text-white btn-lg cursor-pointer" id="submitFormCta" disabled="true" type="submit">
  APROVEITAR! </button>
```
- Depois:

```html
<button class="btn btn-red text-white btn-lg cursor-pointer" id="submitFormCta" type="submit">
  APROVEITAR PROMOÇÃO!
</button>
```
A mudança no Call-to-Action (CTA) de "Aproveite" para "Aproveitar Promoção" apresenta as seguintes vantagens, com base na nossa hipótese:

- **Clareza**: O texto "Aproveitar Promoção" torna o propósito do CTA imediatamente claro para o usuário, eliminando qualquer ambiguidade.
- **Relevância**: Especificar que se trata de uma promoção específica pode aumentar o interesse dos usuários, levando-os a agir com mais rapidez.
- **Efetividade**: Um CTA mais específico é mais provável de captar a atenção e gerar conversões, melhorando a eficácia das campanhas de marketing.
- **Atração**: Tornar o CTA mais apelativo pode aumentar a taxa de cliques, já que a promoção parece mais atraente e urgente.
- **Experiência do Usuário**: Melhorar a clareza e a especificidade do CTA contribui para uma experiência do usuário mais positiva e fluida, potencialmente aumentando a satisfação geral com a página.

Essas mudanças são projetadas para aumentar o engajamento e a conversão, alinhando-se aos objetivos de otimização da página.

**4. Identidade Visual**

#### Alterações na Paleta de Cores
Mantivemos a paleta de cores original da marca Wizard, utilizando vermelho, branco e azul para consistência com a identidade visual da marca. Isso vai de acordo também com uma das diretrizes estabelecidas junto ao parceiro. Neste caso, não há mudanças realizadas.

#### Fontes e Tipografia
Utilizamos fontes padrão da marca, garantindo a legibilidade e a consistência com o restante do site.

**5. Mudança no Botão do WhatsApp**

### Análise da Mudança de Estilo do Botão do WhatsApp e Impacto na Conversão

#### Proposta A - Botão Original

O botão inclui um ícone do WhatsApp seguido pelo texto "CLIQUE AQUI E FALE CONOSCO". Cores predominantes: verde e branco, com um fundo azul. Design mais informativo, chamando diretamente à ação com texto.

#### Proposta B - Novo Estilo

Apenas o ícone do WhatsApp em verde e branco, sobre um fundo azul. Design minimalista e mais limpo, sem texto.

A mudança de estilo do botão de WhatsApp na plataforma pode trazer diferentes impactos no processo de conversão e envio dos formulários. Seguimos com a premissa e a partir de informações tiradas das pesquisas, acreditamos na premissa que o design minimalista da Proposta B é mais "atraente" e moderno, podendo garantir uma maior taxa de conversão, especialmente em um público diversificado. A Proposta A (do botão original) é informativa e clara, indicando diretamente ao usuário que ele deve clicar para falar conosco. No entanto, pode ser considerado visualmente carregado. A Proposta B é mais limpa e minimalista, o que pode ser mais agradável visualmente e menos intrusivo para o usuário. 

## Evidências de Implementação

![gif-mudancas](https://github.com/Inteli-College/2024-1B-T04-SI10-G04/blob/main/imgs/LP-sobre-gif-feature.gif)

- Mudanças no HTML: https://github.com/Inteli-College/2024-1B-T04-SI10-G04/blob/main/src/html/mudancas.html
- Mudanças no CSS: https://github.com/Inteli-College/2024-1B-T04-SI10-G04/blob/main/src/html/style.css

## Guia para Homologação

### Configuração do projeto em ambiente de Homologação

De acordo com o que foi proposto e visando as mudanças realizadas, precisamos publicar a proposta B em homologação, ou seja, num servidor para que as outras pessoas possam acessá-lo. Para esta etapa, precisamos seguir um passo a passo direcionado para se adequar com o ambiente da Wizard e garantir que esteja tudo certinho para que eles possam subir a campanha conforme mencionado. Segue o passo a passo:

**1 - Instalação do FileZilla**
  - Faça o download da versão mais recente do FileZilla em https://filezilla-project.org/download.php?platform=win64. Esse programa é necessário para enviar os arquivos ao servidor na nuvem.
  - Execute o instalador baixado e siga as instruções na tela para finalizar a instalação.


**2 - Configuração do FileZilla e envio de arquivos para o servidor remoto**
  - Execute o programa FileZilla instalado anteriormente.
  - Clique no ícone do Gerenciador de Sites.
  - Na janela que se abrir, insira as informações correspondentes ao servidor de homologação:

    **Configurações:**
      - Host: g4.intelli-wizard-on.mmserver.com.br
      - Porta: 28
      - Usuário: ftp_inteli_g4
      - Senha: *inserir senha correspondente* (aqui não colocamos a senha por termos de segurança em relação ao projeto)

  - Assim que informar esses dados, no lado esquerdo, clique em Renomear para renomear o novo site e atribuir um nome amigável de fácil identificação.
  - Quando tudo estiver corretamente configurado, clique em Conectar para salvar as informações e estabelecer uma conexão com o servidor.
  - Assim que o FileZilla concluir a conexão, você verá do lado esquerdo da tela a árvore de arquivos local e do lado direito a árvore de arquivos remota. Na árvore local, navegue até a pasta da aplicação em seu computador. Você verá que a organização das pastas é igual.
  - Para enviar os arquivos ao servidor, selecione os desejados na árvore local e arraste para a árvore remota. Aguarde a conclusão do envio dos arquivos. Se houver necessidade, você pode confirmar a operação de substituir os arquivos.

Acesse o domínio correspondente para visualizar as atualizações publicadas: **https://g4.intelli-wizard-on.mmserver.com.br/**

**3 - Acesso ao Código-Fonte**

  - Para acesso ao código-fonte do projeto (Bitbucket - Intelli-Wizard Grupo 4), utilize o seguinte link: (https://bitbucket.org/marketmediadev/inteli-wizard-on-g4/src/main/)
