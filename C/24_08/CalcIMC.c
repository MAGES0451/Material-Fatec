/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
#include <stdio.h>
#include <locale.h>

int main()
{
    setlocale(LC_ALL, "Portuguese");
    
    float peso, altura, imc;
    int x, quant;
    x = 0;
    
    printf("Cálculo de IMC");
    printf("\nQuantos IMCs deseja calcular? ");
    scanf("%i", &quant);
    
    do{
        printf("\nEntre com o peso: ");
        scanf("%f",&peso);
        printf("\nEntre com a altura: ");
        scanf("%f",&altura);
        
        imc = peso/(altura*altura);
        
        printf("IMC: %f", imc);
        
        if (imc <= 18.5){
            printf("\nAbaixo do peso ideal");
        }
        else if (imc > 18.5 && imc <= 24.99){
            printf("\nPeso ideal");
        }
        if (imc > 24.99 && imc <= 29.99){
            printf("\nSobrepeso");
        }
       
        x++;
        }while(x < quant);

        
        
    

    return 0;
}
