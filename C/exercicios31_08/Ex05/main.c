/******************************************************************************
5.
Faça um algoritmo que leia três notas de um aluno, calcule e escreva a média final deste aluno. 
Considerar que a média é ponderada e que o peso das notas é 2, 3 e 5. Fórmula para o cálculo da 
média final é: mediafinal = (n1*2 + n2*3 + n3*5)/10 

*******************************************************************************/
#include <stdio.h>

int main()
{
    float n1,n2,n3,media;
    
    
    printf("Digite o valor da 1ª nota: ");
    scanf("%f",&n1);
    printf("\nDigite o valor da 2ª nota: ");
    scanf("%f",&n2);
    printf("\nDigite o valor da 3ª nota: ");
    scanf("%f",&n3);
    
    media = (n1*2 + n2*3 + n3*5)/10;
    
    printf("A media final desse aluno é: %f",media);
    

    return 0;
}
