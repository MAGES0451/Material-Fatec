/******************************************************************************
3.
Um posto está vendendo combustíveis com a seguinte tabela de descontos: Álcool: até 20 litros, 
desconto de 3% por litro e acima de 20 litros, desconto de 5% por litro;  Gasolina: até 20 litros, 
desconto de 4% por litro e acima de 20 litros, desconto de 6% por litro. Escreva um algoritmo que leia 
o número de litros vendidos, o tipo de combustível (A-álcool, G-gasolina) e imprima o valor a ser pago 
pelo cliente. Considere que o preço do litro da gasolina é R$ 5,39 e o preço do litro do álcool é R$ 3,39. 
*******************************************************************************/
#include <stdio.h>

int main()
{
   float litroV, valorF;
   char tipoC;
   
   
   printf("Digite o tipo de combustível(A-álcool/ G-gasolina): ");
   scanf("%c",&tipoC);
   printf("\nDigite a quantidade de combustível vendido: ");
   scanf("%f",&litroV);
   
   
   
   if (tipoC == 'A' || tipoC == 'a'){
       if (litroV <= 20){
          valorF = (litroV*3.39)*0.97;
       }else{
            valorF = (litroV*3.39)*0.95;
       }
       
       
   }
    if (tipoC == 'G' || tipoC == 'g'){
        if (litroV <= 20){
          valorF = (litroV*5.39)*0.96;
       }else{
            valorF = (litroV*5.39)*0.94;
       }
       
       
   }
 
   printf("\nO valor final é: R$ %f",valorF);
   

    return 0;
}
