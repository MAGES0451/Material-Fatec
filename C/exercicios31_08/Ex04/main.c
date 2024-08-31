/******************************************************************************
4.
Escreva um algoritmo para ler uma temperatura em graus Celsius, calcular e escrever o valor 
correspondente em graus Fahrenheit Celsius (baseado na fórmula abaixo): F = C*1.8+32

*******************************************************************************/
#include <stdio.h>

int main()
{
    float C,F;
    
    
    printf("Digite a temperatura em graus Celsius: ");
    scanf("%f",&C);
    
    F = C*1.8+32;
    
    printf("\nA temperatura em Fahrenheit é: %fº",F);

    return 0;
}
