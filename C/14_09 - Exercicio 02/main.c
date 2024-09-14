/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
#include <stdio.h>

int main()
{
    int vetor[10], i, menor,maior;
    float media;
    
    for(i=0;i<10;i++){
        printf("Digite um valor para a posição %i: ",i);
        scanf("%i",&vetor[i]);
        

    }
    
    menor = vetor[1];
    maior = vetor[1];
    
     for(i=0;i<10;i++){
         media+=vetor[i];
         
         if(vetor[i] < menor){
             menor = vetor[i];
         }
         
          if(vetor[i] > maior){
             maior = vetor[i];
         }
         
     }
     
     media= media/10;
     
     printf("Menor = %i / Maior = %i  / Media = %f",menor,maior,media);
     
         
         
         
         
         
                   
    
}
