/******************************************************************************
6.
A jornada de trabalho semanal de um funcionário é de 40 horas. 
O funcionário que trabalhar mais de 40 horas receberá hora extra, cujo cálculo é o valor da hora 
regular com um acréscimo de 50%. Escreva um algoritmo que leia o número de horas trabalhadas em um mês, 
o salário por hora e escreva o salário total do funcionário, que deverá ser acrescido das horas extras, 
caso tenham sido trabalhadas (considere que o mês possua 4 semanas exatas). 

*******************************************************************************/
#include <stdio.h>

int main()
{
    float salH, horaT,horaEx;
    
    horaEx = 0;
    
    printf("Digite a quantidade de horas trabalhadas no mês: ");
    scanf("%f",&horaT);
    
    printf("\nDigte o salário por hora: ");
    scanf("%f",&salH);
    
    printf("\nO salário base do funcionário é: %f",salH*160);
    
    if(horaT > 160){
        horaEx = (horaT - 160)*(salH *1.5);
        printf("\nO valor a ser recebido por hora extra é: R$ %f", horaEx);
    }
    
    printf("\nO salário final desse funcionário é: R$ %f",salH*160+horaEx);
    
    

    return 0;
}
