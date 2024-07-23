# Análise dos Resultados do Teste A/B

## A Importância dos Resultados de um Teste A/B

Os testes A/B são uma ferramenta essencial para entender a relevância de qualquer tipo de mudança e considerar quais mudanças em uma página ou aplicação podem levar a melhores resultados, como neste caso, o aumento das taxas de conversão. 

Ao comparar duas versões (controle e teste) com uma variável alterada, até mesmo mais de uma, é possível identificar quais modificações têm um impacto positivo, negativo ou neutro nos objetivos da empresa.

Neste caso, mapeamos as mudanças de acordo com mudanças na arquitetura da informação e principalmente o design da interface. 

### Comparação Final

A análise realizada permitiu a interpretação das diferentes versões da landing page para avaliar o impacto das mudanças propostas. Tudo isso para aumentar na conversão de leads e outras métricas. 

## Resultados dos Grupos

**Taxas de Conversão Observadas:**
- **Grupo 1:** 5.1%
- **Grupo 2:** 5.0%
- **Grupo 3:** 3.7%
- **Grupo 4:** 5.1%
- **Grupo 5:** 3.2%
- **Página A (Controle):** 3.5%

Os resultados indicam que os grupos 1, 2 e 4 apresentaram taxas de conversão superiores à da página controle (3.5%), enquanto os grupos 3 e 5 tiveram taxas de conversão inferiores.

## Ferramentas Utilizadas

Para a análise dos dados, foram utilizadas as seguintes ferramentas:

- **Looker:** Coleta e análise de dados de sessões. As conversões foram passadas a partir de contato com o pessoal de marketing da Wizard.

A seguir, apresentamos uma comparação detalhada entre as versões A (controle) e B (variável), destacando as diferenças nas métricas definidas.

### Versão A (Controle)

A versão A da landing page representa o layout e a estrutura originalmente implementados, sem as modificações propostas. As principais características dessa versão incluem:

- **Botão "Ligue Agora":** Posicionado no topo da página, visível logo ao acessar o site.
- **Header:** Composto por links para Home, FAQ, Regulamento, e Participe.
- **Formulário:** Inclui campos padrão, com ênfase no botão “Ligue Agora”.
- **Botão do WhatsApp:** Tamanho grande, posicionado de forma a ser facilmente acessado, mas podendo competir com o botão de envio do formulário.
- **Layout Geral:** Inclui elementos visuais e de texto que competem com o formulário.

### Versão B (Variável)

A versão B da landing page incorpora várias mudanças, com o objetivo de melhorar a taxa de conversão de leads e otimizar a experiência do usuário. As principais modificações incluem:

- **Botão "Ligue Agora":** Realocado para o rodapé do site, permitindo maior foco em outras áreas da página.
- **Header:** Home renomeado para Início. FAQ alterado para Sobre Wizard On. Regulamento movido para FAQ. Participe renomeado para Mais Informações.
- **Formulário:** Enfatizou a marca ao substituir o botão "Ligue Agora" por um logotipo. Ajustes nos textos para engajar mais o usuário. Botão "Aproveite" alterado para "Enviar". Adição de preenchimento automático dos campos com dados do navegador.
- **Botão do WhatsApp:** Reduzido para diminuir a poluição visual e facilitar o acesso ao formulário.
- **Logo Wizard On:** Adicionado acima do formulário para melhor identificação da marca.

## Comparação das Métricas entre as Versões A e B

### Taxa de Conversão de Leads

A taxa de conversão de leads é a métrica principal avaliada. Na versão B, buscamos melhorar essa taxa isolando o formulário de elementos que competem pela atenção do usuário. A expectativa era que a visibilidade e a clareza do formulário resultassem em um maior número de envios.

## Análise Estatística

Utilizando a estatística t para comparar a taxa de conversão dos grupos com a página controle (Página A), podemos verificar a significância das diferenças observadas: https://github.com/Inteli-College/2024-1B-T04-SI10-G04/blob/main/src/analise_final_resultados_grupo4.ipynb  

- **Grupo 1 vs Página A:**
  - **t-statistic:** Valor alto (indica diferença significativa)
  - **p-value:** ≤ 0.05 (indica rejeição da hipótese nula)

- **Grupo 2 vs Página A:**
  - **t-statistic:** Valor alto (indica diferença significativa)
  - **p-value:** ≤ 0.05 (indica rejeição da hipótese nula)

- **Grupo 3 vs Página A:**
  - **t-statistic:** Valor próximo de zero (diferença não significativa)
  - **p-value:** > 0.05 (não rejeitamos a hipótese nula)

- **Grupo 4 vs Página A:**
  - **t-statistic:** Valor alto (indica diferença significativa)
  - **p-value:** ≤ 0.05 (indica rejeição da hipótese nula)

  A compravação da análise está no nootebook com a análise estatística feita pelo grupo com base nas propostas de mudança realizadas

- **Grupo 5 vs Página A:**
  - **t-statistic:** Valor negativo (indica taxa de conversão menor)
  - **p-value:** > 0.05 (não rejeitamos a hipótese nula)

Os testes de significância mostram que os grupos 1, 2 e 4 apresentaram diferenças significativas em comparação com a página controle, indicando que suas taxas de conversão são significativamente maiores.

## Tamanho do Efeito (Cohen's d)

- **Cohen's d:** 1.58 (muito grande)

O tamanho do efeito é considerado muito grande, sugerindo que a nova interface proposta pelo grupo tem um impacto substancial na taxa de conversão, mas um fator de corroboração ao que foi feito no processo de Teste A/B.

## Resultados vs Mudanças

**Foco nos Grupos 1, 2 e 4:** As taxas de conversão significativamente maiores nestes grupos sugerem que elementos testados neles são eficazes e devem ser considerados para implementação.

# Mudanças Atribuidas pelo Grupo 4 

## Como a Pesquisa Qualitativa Ajudou no Processo de Realização das Mudanças?

A pesquisa qualitativa desempenhou um papel muito importante no processo de realização das mudanças na landing page da Wizard On. Através de testes de usabilidade e feedback direto dos usuários, conseguimos obter insights valiosos que orientaram a implementação de melhorias significativas, visando otimizar a experiência do usuário e aumentar a taxa de conversão.

### Captura de Insights e Percepções

#### Testes de Usabilidade

Realizamos testes de usabilidade presenciais moderados, onde usuários executaram tarefas comuns dentro do sistema. Este processo permitiu-nos avaliar o desempenho dos usuários e identificar pontos de frustração, satisfação e áreas de melhoria. Durante essas sessões, observamos interações diretas dos usuários com a landing page, registrando movimentos, cliques e expressões verbais.

#### Feedback Direto

Os usuários forneceram alguns feedbacks diretos sobre suas experiências e percepções em relação à landing page. Este feedback incluiu comentários sobre a clareza das informações, a atratividade visual e a facilidade de navegação. Identificamos que uma apresentação mais clara e atrativa das informações, assim como uma navegação simplificada, são cruciais para melhorar a experiência do usuário.

Com base nos insights qualitativos, formulamos várias hipóteses e recomendações para melhorar a landing page:

1. **Botão do WhatsApp:**
   - Um botão mais simplificado do WhatsApp, incentivando os usuários a entrar em contato ou a fornecer seus dados, que não atrapalhe ou desfoque a atenção ao formulário propriamente dito.

2. **Simplificação da Navegação:**
   - Simplificar a navegação e a experiência do usuário, eliminando obstáculos e confusões, pode levar a uma melhoria na taxa de conversão de leads.

3. **Destaque do Formulário de Contato:**
   - Destacar visualmente o formulário de contato e torná-lo mais visível e acessível.

4. **Simplificação do Formulário:**
   - Reduzir o número de campos necessários no formulário pode resultar em mais leads gerados.

## Resultados Esperados

Com estas mudanças, nosso principal objetivo sempre foi aumentar a taxa de conversão, tornando a landing page mais atraente e funcional para os usuários. 

A pesquisa qualitativa foi fundamental para identificar os pontos críticos e orientar as melhorias, assegurando que as mudanças implementadas fossem alinhadas com as necessidades e expectativas dos usuários. Ela nos forneceu uma base sólida para entender as experiências e percepções dos usuários. As informações detalhadas e os insights comportamentais coletados permitiram-nos fazer mudanças direcionadas e eficazes, resultando em uma landing page otimizada que atende melhor às expectativas dos usuários e, potencialmente, aumenta a taxa de conversão.

## Redesign e Consideração dos Resultados

O redesign baseado em resultados de testes A/B permite otimizar a experiência do usuário e maximizar os objetivos do negócio, como conversões e retenção. Com base nos resultados positivos dos testes, as seguintes mudanças podem ser implementadas de forma segura:

- **Elementos Visuais:** Melhorar a estética e a clareza visual com base no que mais atraiu os usuários.
- **Call to Actions (CTAs):** Ajustar textos e posicionamentos para maximizar a ação desejada.
- **Ofertas e Benefícios:** Implementar promoções ou benefícios que mostraram maior aceitação e conversão.

## Mudanças Implementadas pelo Grupo 4

### Elementos Destacados:

1. Navegação e Menu

Foi realizada uma modificação na barra de navegação superior da página, especificamente na seção anteriormente intitulada “Regulamento”. Com o objetivo de otimizar a página para leads, essa seção foi substituída por “SOBRE WIZARD ON”, que fornece informações sobre a Wizard On. Essa alteração busca direcionar melhor a atenção dos visitantes e proporcionar um foco maior na captação de leads.

2. Formulário de Contato

Foi feita a mudança de autocomplete para o formulário para facilitar o envio do formulário em si. Anteriormente, o autocomplete não estava configurado para todos os campos, o que podia tornar o processo de preenchimento mais demorado e suscetível a erros. Com a nova configuração de autocomplete, os campos de nome, e-mail e telefone agora utilizam sugestões automáticas do navegador, facilitando e agilizando o preenchimento do formulário. Essa mudança visa melhorar a experiência do usuário, tornando o envio do formulário mais rápido e eficiente.

3. Botão de Envio

Foi identificado que o Call-to-Action (CTA) precisava ser mais claro e apelativo. Inicialmente, o CTA continha o texto “Aproveite”, mas foi concluído que essa mensagem não deixava claro que se referia a uma promoção específica. Para melhorar a compreensão e a efetividade do CTA, ele foi modificado para “Aproveitar Promoção”. Essa mudança visa tornar a chamada para ação mais específica e atraente, facilitando o entendimento dos usuários e aumentando a taxa de conversão.

**Antes:**
- Botão com o texto “APROVEITE!”

**Depois:**
- Botão com o texto “APROVEITAR PROMOÇÃO!”

### Vantagens da Mudança no Call To Action:

- **Clareza:** O texto "Aproveitar Promoção" torna o propósito do CTA imediatamente claro para o usuário, eliminando qualquer ambiguidade.
- **Relevância:** Especificar que se trata de uma promoção específica pode aumentar o interesse dos usuários, levando-os a agir com mais rapidez.
- **Efetividade:** Um CTA mais específico é mais provável de captar a atenção e gerar conversões, melhorando a eficácia das campanhas de marketing.
- **Atração:** Tornar o CTA mais apelativo pode aumentar a taxa de cliques, já que a promoção parece mais atraente e urgente.
- **Experiência do Usuário:** Melhorar a clareza e a especificidade do CTA contribui para uma experiência do usuário mais positiva e fluida, potencialmente aumentando a satisfação geral com a página.

5. Mudança no Botão do WhatsApp

####  Análise da Mudança de Estilo do Botão do WhatsApp e Impacto na Conversão

### Proposta A - Botão Original

O botão inclui um ícone do WhatsApp seguido pelo texto "CLIQUE AQUI E FALE CONOSCO". Cores predominantes: verde e branco, com um fundo azul. Design mais informativo, chamando diretamente à ação com texto.

### Proposta B - Novo Estilo

Apenas o ícone do WhatsApp em verde e branco, sobre um fundo azul. Design minimalista e mais limpo, sem texto.

### Impacto da Mudança

A mudança de estilo do botão de WhatsApp na plataforma pode trazer diferentes impactos no processo de conversão e envio dos formulários. Seguimos com a premissa e a partir de informações tiradas das pesquisas, acreditamos na premissa que o design minimalista da Proposta B é mais "atraente" e moderno, podendo garantir uma maior taxa de conversão, especialmente em um público diversificado. A Proposta A (do botão original) é informativa e clara, indicando diretamente ao usuário que ele deve clicar para falar conosco. No entanto, pode ser considerado visualmente carregado. A Proposta B é mais limpa e minimalista, o que pode ser mais agradável visualmente e menos intrusivo para o usuário.

## Considerações para Implementação em Produção (Olhar específico para nosso grupo)

**Significância Estatística:**
   - **Estatística t e Valor p:** Resultados significativos indicam que a diferença observada é improvável de ser devida ao acaso. Isso dá confiança para implementar mudanças com base nesses resultados.
   - **Cohen's d:** Tamanho do efeito ajuda a entender a magnitude da mudança e sua importância prática, que neste se provou muito alta.

**Mapear se os Resultados são Consistentes:**
   - É crucial que os resultados sejam consistentes ao longo de diferentes testes e períodos. Implementar mudanças baseadas em resultados consistentes garante maior confiabilidade.
   - Neste caso é importante salientar que o período de duas semanas foi atribuído à que as campanhas pudessem rodar com as mudanças que foram propostas

**Feedback Qualitativo:**
   - Para embasar ainda mais o resultado, algo que poderia ser interessante rodar mais uma pesquisa qualitativa para colher o feedback dos usuários sobre as mudanças propostas. Isso pode fornecer insights sobre a usabilidade e aceitação das mudanças, auxiliando no refinamento das implementações.

**Monitoramento Pós-Implementação:**
   - Após a implementação, é importante continuar monitorando a performance para garantir que os resultados positivos se mantenham em um ambiente de produção real.

# Considerações e Recomendações de Negócio

## Apresentação Abrangente dos Dados Acumulados Durante o Teste

Durante o teste A/B, acumulamos alguns dados tanto quantitativos quanto qualitativos. Estes dados incluem taxas de conversão, cliques no formulário, e feedback direto dos usuários através de testes de usabilidade. 

### Dados Quantitativos: 
A maioiria dos nosso dados quantitativos foram provenientes dos dados providenciados pela Pearson, tanto no Looker, como agora de forma manual pelo Excel.

### Dados Qualitativos:
- Feedback dos usuários sobre clareza das informações, atratividade visual e facilidade de navegação.
- Observações durante os testes de usabilidade, incluindo pontos de frustração, satisfação e áreas de melhoria.

Para mais informações é possível acessar o processo de coletas dos dados: https://github.com/Inteli-College/2024-1B-T04-SI10-G04/blob/main/Entregas/Doc-Sprint1/README-Sprint1.md

## Principais Metodologias Utilizadas:

### Teste A/B
Comparação de duas versões da landing page (A e B) para avaliar o impacto das mudanças propostas. Esta metodologia permite identificar quais modificações têm um impacto positivo, negativo ou neutro nos objetivos da empresa.

### Análise Estatística
- **Estatística t:** Utilizada para comparar a taxa de conversão dos grupos com a página controle, verificando a significância das diferenças observadas.
- **Cohen's d:** Medida do tamanho do efeito, ajuda a entender a magnitude da mudança e sua importância prática.
- **p-valor:** Utilizado para determinar a significância estatística dos resultados. Um p-valor ≤ 0.05 indica uma diferença significativa.
- **Variáveis Confundidoras:** Consideração de fatores que podem influenciar os resultados e não estão relacionados diretamente às mudanças testadas.
- **Poder do Teste:** A probabilidade de detectar um efeito se ele realmente existir. Um poder de teste alto (> 0.8) é desejável para garantir a robustez dos resultados.

### Pesquisa Qualitativa
Testes de usabilidade presenciais moderados para capturar insights sobre a experiência do usuário. Os participantes realizam tarefas comuns dentro do sistema, permitindo avaliar desempenho e identificar pontos de frustração e satisfação.

### Framework HEART
Utilizado para medir a experiência do usuário através de cinco dimensões:
- **Happiness (Felicidade):** Satisfação do usuário.
- **Engagement (Engajamento):** Interação com a aplicação.
- **Adoption (Adoção):** Adoção de novos recursos ou serviços.
- **Retention (Retenção):** Manutenção dos usuários ao longo do tempo.
- **Task Success (Sucesso da Tarefa):** Eficiência e eficácia na realização de tarefas.

### Framework GSM (Goals-Signals-Metrics)
Ajuda a definir metas claras, sinais que indicam progresso em direção às metas, e métricas para medir esses sinais. Isso permite alinhar objetivos de negócio com resultados mensuráveis.

### Simulação de Monte Carlo
Utilizada para modelar e entender o impacto de variáveis aleatórias e incertezas no desempenho da landing page. A simulação de Monte Carlo pode prever a distribuição de resultados possíveis, ajudando a identificar riscos e oportunidades.

## Descrição das Observações mais Relevantes

### Tendências e Padrões:
- **Taxas de Conversão Superiores:** Grupos 1, 2 e 4 apresentaram taxas de conversão significativamente superiores em comparação à versão controle (Página A).
- **Melhoria na Visibilidade:** Isolamento do formulário de elementos competidores melhorou a visibilidade e a clareza, resultando em mais envios de formulários.
- **Feedback Positivo sobre Navegação Simplificada:** Usuários relataram uma experiência de navegação mais simples e clara.

### Anomalias de Resultados:
- **Grupo 3:** Taxa de conversão de 3.7%, ligeiramente superior à versão controle, mas não significativa.
- **Grupo 5:** Taxa de conversão de 3.2%, inferior à versão controle.

## Resumo das Conclusões Principais

### Impactos e Implicações para o Negócio:
- **Eficácia das Mudanças:** As mudanças implementadas na versão B resultaram em uma melhoria significativa na taxa de conversão, especialmente nos grupos 1, 2 e 4.
- **Confirmação Estatística:** Os testes de significância estatística confirmam que as taxas de conversão superiores não foram devidas ao acaso.
- **Importância da Simplicidade:** A simplificação da navegação e a clareza das informações são cruciais para melhorar a experiência do usuário e aumentar as conversões.
- **Implementação Completa da Versão B:** Baseado nos resultados positivos, recomenda-se a implementação completa das mudanças propostas na versão B.

A partir dos resultados e da análise dos mesmos, foi possível elaborar as seguintes considerações e recomendações. A Página B apresentou uma taxa de conversão de 5.1%, superior à taxa de conversão de 3.5% da Página A. Isto sugere que a estratégia de isolar o formulário de elementos que competem pela atenção dos visitantes na Página B foi eficaz em aumentar a taxa de conversão.

Além disso, como não foram feitas muitas alterações nas variáveis nem modificações significativas na estrutura da página, tornou-se mais prático avaliar o desempenho da Página B. Pequenas alterações incrementais podem ser testadas para ver seu impacto na taxa de conversão sem comprometer a integridade do site.

Recomenda-se adotar o design de formulário isolado da Página B como base para futuras otimizações. A melhoria na taxa de conversão sugere que focar a atenção dos visitantes no formulário é uma estratégia relevante. No entanto, é válido realizar novos testes com campanhas diferentes para avaliar se o desempenho pode aumentar ainda mais ou se há necessidade de investigar outros elementos da landing page ou de outras etapas do fluxo de usuários.

Embora a Página B tenha uma taxa de conversão mais alta, o número absoluto de conversões (31) é significativamente menor em comparação com a Página A (470). Isso se deve ao menor número de sessões na Página B, que foi intencionalmente direcionada a um fluxo menor de pessoas para mitigar riscos financeiros potenciais. Portanto, é necessário realizar um teste com um maior fluxo de visitantes para validar se o efeito notado com uma pequena quantidade não é enviesado. Um teste em larga escala e por um período maior permitirá avaliar com maior precisão o impacto das alterações propostas.

É importante verificar por onde os usuários estão acessando a landing page para entender onde o fluxo se inicia. Compreender as principais fontes de tráfego permitirá ajustar as estratégias de marketing, direcionando os esforços para canais que tragam visitantes mais propensos a se converterem em leads.

Ressalta-se ainda que a colaboração com outras equipes para realizar testes A/B com elementos diferentes pode fornecer insights sobre possíveis pontos de melhoria. Isso levanta dados  para discussão com a equipe de marketing e determinação de campanhas e otimizações na landing page.
