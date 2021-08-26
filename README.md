# Calculadora
Implementação de uma simples calculadora em PHP usando os 4 Pilares da OOP. </br>

A calculadora realiza operações como: </br>
Adição </br>
Subtrair </br>
Dividir </br>
Multiplicar </br>

### Funcionalidade principal:</br>
.Execute 4 operações aritméticas em</br>
dois valores especificados pelo usuário</br>

.Mostra o resultado do cálculo realizado.</br>

A imagem abaixo mostra os objetos criados e como eles são implementados no sistema. </br>
![Calculator](https://user-images.githubusercontent.com/22649602/130883827-693a5d88-1ace-46ab-866b-5ef2edb0bc23.png)

### Implementação 
Implementei os princípios OOP e SOLID neste programa.</br>
O sistemá é representado por uma classe abstracta Calculadora(), que define um metódo abstracto que recebe 2 argumentos.</br>
Este metódo é implementado pelas classes Multiplication(),Subtract(),Division(),Addition() que estendem (herdam) da classe abstracta calculadora().</br>
As classes implementam o metódo execute(), contudo cada uma apresenta um comportamento diferente (Polimorfismo). <br>




