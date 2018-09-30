Considere, como exemplo, o arquivo funcionarios.json em anexo a este email
Feito isto, utilize a linguagem de programação de sua preferência (e quaisquer bibliotecas que sejam necessárias) e escreva um programa que leia o nome de um arquivo JSON como parâmetro – que seguirá os mesmos moldes do arquivo funcionarios.json listado acima – e imprima as informações solicitadas a seguir, baseado no conteúdo do arquivo lido.


Condições 
Em todos os casos abaixo, assuma:

Todos os cálculos envolvendo salários (mínimo, máximo, média) são feitos em ponto flutuante.
Todas as impressões de salário feitas em duas casas decimais, sem formatação (ex: 1234.56)
“Nome completo” == Nome + espaço + Sobrenome (Ex: João Silva)
“Nome da área” é o nome da área, não o código.
A listagem não precisa estar ordenada.


Questões
1. Quem mais recebe e quem menos recebe na empresa e a média salarial da empresa. 
Calcular e imprimir o nome completo do(s) funcionário(s) com o(s) maior(es) e menor(res) salário(s) na empresa inteira, bem como o salário médio. Em caso de empate (mais de um funcionário nas posições de maior ou menor salário), imprimir todos os funcionários nessas posições que tem o mesmo salário.
Exemplo de Saída Esperada
global_min|José Ruela|800.00
global_min|José Mané|800.00
global_max|Bernardo Costa|3700.00
global_avg|1400.23

2. Quem mais recebe e quem menos recebe em cada área e a média salarial em cada área.
Calcular e imprimir o nome completo do(s) funcionário(s) com o(s) maior(es) e menor(res) salário(s) por área da empresa empresa, bem como o salário médio (também por área). Em caso de empate (mais de um funcionário nas posições de maior ou menor salário em uma determinada área), imprimir todos os funcionários nessas posições que tem o mesmo salário, em cada área.
Exemplo de Saída Esperada
area_max|Gerenciamento de Software|Bernardo Costa|3700.00
area_max|Gerenciamento de Software|Richie Rich|3700.00
area_max|Recrutamento|Hugh Hefner|3700.00
area_min|Gerenciamento de Software|Marcelo Souza|1200.00
area_min|Gerenciamento de Software|João Lenão|1200.00
area_avg|Gerenciamento de Software|3450.00
area_avg|Recrutamento|3000.00

3. Área(s) com o maior e menor número de funcionários
Calcular a imprimir as áreas com o maior e menor número de funcionários. Em caso de empate (mais de uma área com o mesmo número máximo ou mínimo de funcionários), todas as áreas dentro daquele critério devem ser impressas.
Exemplo de Saída Esperada
least_employees|Gerenciamento de Software|2
least_employees|Limpeza|2
most_employees|Recursos Humanos|10
most_employees|Engenharia|30


4. Maiores salários para funcionários com o mesmo sobrenome 
Para cada sobrenome com mais de um funcionário, listar o(s) funcionário(s) que recebem o maior salário. Assim como nos itens anteriores, se mais de um funcionário com o mesmo sobrenome tiver o maior salário, listar todos estes.
last_name_max|Farias|Cleverton Farias|2750.00
last_name_max|Farias|Paulo César|2750.00


Exemplo de saída esperada para o arquivo funcionarios.json dado acima como exemplo: 
global_max|Bernardo Costa|3700.00
global_min|Sergio Pinheiro|2450.00
global_min|Letícia Farias|2450.00
global_min|Fernando Ramos|2450.00
global_avg|2731.82
area_max|Gerenciamento de Software|Bernardo Costa|3700.00
area_min|Gerenciamento de Software|Marcelo Silva|3200.00
area_avg|Gerenciamento de Software|3450.00
area_max|Designer de UI/UX|Washington Ramos|2700.00
area_min|Designer de UI/UX|Letícia Farias|2450.00
area_avg|Designer de UI/UX|2566.67
area_max|Desenvolvimento de Software|Cleverton Farias|2750.00
area_max|Desenvolvimento de Software|Fabio Souza|2750.00
area_min|Desenvolvimento de Software|Sergio Pinheiro|2450.00
area_min|Desenvolvimento de Software|Fernando Ramos|2450.00
area_avg|Desenvolvimento de Software|2575.00
most_employees|Desenvolvimento de Software|6
least_employees|Gerenciamento de Software|2
last_name_max|Ramos|Washington Ramos|2700.00
last_name_max|Farias|Cleverton Farias|2750.00