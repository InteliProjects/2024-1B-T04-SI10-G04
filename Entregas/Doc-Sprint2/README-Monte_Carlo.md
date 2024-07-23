# Simulação de Monte Carlo
Este documento têm a finalidade de explicar um pouco mais sobre o método estatístico utilizado pelo grupo dentro do projeto.
## O que é? 

A simulação de Monte Carlo é uma técnica matemática que permite entender o impacto do risco e da incerteza em modelos de previsão e estimativa. Utilizando a aleatoriedade para resolver problemas que podem ser determinísticos em princípio, esta abordagem usa amostras aleatórias para obter resultados numéricos. O método é aplicável a uma vasta gama de campos, incluindo física, finanças, engenharia, e ciências sociais, entre outros.

### Importância da Simulação de Monte Carlo
A principal importância da simulação de Monte Carlo reside na sua capacidade de modelar cenários complexos que envolvem múltiplos fatores incertos ou distribuições probabilísticas que são difíceis de modelar de outra forma. Por meio de repetições de simulações (normalmente definidas em parâmetros de função-em código), a técnica proporciona uma distribuição de resultados possíveis, e pode ser usada para: avaliar o risco e a incerteza em processos de tomada de decisão, otimizar processos e sistemas em condições incertas e prever o impacto de variáveis aleatórias em sistemas complexos.

## Embasamento Matemático
A base da simulação de Monte Carlo é a teoria da probabilidade, que permite a modelagem de eventos incertos. Utiliza-se amostragem aleatória para representar eventos probabilísticos e para calcular probabilidades e outras métricas estatísticas. No entanto, ele também se apoia na Lei dos Grandes Números. Este teorema estabelece que, à medida que o número de experiências aumenta, a média dos resultados obtidos tende para a média esperada teoricamente. Portanto, quanto mais simulações são realizadas, mais os resultados da simulação de Monte Carlo convergem para o valor esperado real.

### Visualização das distribuições
A simulação pode envolver qualquer tipo de distribuição estatística que melhor descreva os dados sendo modelados, como normal, log-normal, uniforme, binomial, etc. A escolha da distribuição depende do conhecimento ou das suposições sobre os processos subjacentes aos dados. 

Na aplicação realizada pelo grupo, conforme a disposição dos dados, foi utilizada a distribuição normal para visualização dos resultados da simulação.

## Aplicações da Simulação de Monte Carlo
- **Finanças:**
    - Avaliação de Riscos: Usada para modelar e prever a volatilidade dos preços de ativos, movimentos de mercado, e para testar estratégias de investimento em cenários variados.
    - Precificação de Opções: Aplicações como o modelo de Black-Scholes para opções europeias utilizam simulação de Monte Carlo para estimar os preços das opções sob incerteza.
- **Engenharia:**
    - Análise de Confiabilidade: Avaliar a confiabilidade e a falha de sistemas complexos, como redes de energia ou sistemas mecânicos.
    - Otimização de Processos: Ajudar no design de sistemas complexos, como circuitos integrados e grandes estruturas, considerando variáveis aleatórias.

- **Ciências da Saúde:**
    - Epidemiologia: Simular a propagação de doenças em populações para entender possíveis cenários de epidemias e eficácia de intervenções médicas.

- **Ciências Ambientais:**
    - Modelagem Climática: Simular diferentes cenários climáticos e seus efeitos sobre o ambiente para ajudar na tomada de decisões políticas e ambientais.

## Aplicação da Simulação de Monte Carlo no Projeto 
A simulação de Monte Carlo, aplicada pelo grupo em termos acadêmicos, pode ser diretamente adaptada para auxiliar no processo de otimização da landing page da Wizard ON e oferecer embasamento para as mudanças visando rodar os testes A/B. 

A partir da aplicação da simulação, há a possibilidade de prever e entender o impacto de diferentes alterações na landing page sobre o aumento da conversão.

### Contextualização do Projeto
O projeto visa aumentar a taxa de conversão de leads utilizando testes A/B para variar elementos de design, conteúdo e estrutura da landing page. O objetivo é determinar quais mudanças resultam no maior aumento das inscrições, oferecendo uma base de dados sólida para decisões de marketing.

#### Implementação da Simulação
A aplicação da simulação oferece uma metodologia poderosa para direcionar decisões de mudanças de conteúdo com base em dados estatísticos robustos. Isso não apenas maximiza as chances de aumentar as taxas de conversão de estudantes potenciais, mas também otimiza a experiência do usuário, contribuindo para uma estratégia de campanhas mais eficazes.

### Links para as Simulações realizadas pelo grupo:

https://github.com/Inteli-College/2024-1B-T04-SI10-G04/blob/main/src/montecarlo_simulation_conversion_rate.ipynb
