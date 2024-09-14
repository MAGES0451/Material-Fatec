/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
#include <stdio.h>

int main()
{
    int vetorA[5], vetorB[5], vetorC[5], i; 
    
    for(i=0;i<5;i++){
        printf("Digite o valor de A para a posição %i \n",i);
        scanf("%i",&vetorA[i]);
        
        printf("Digite o valor de B para a posição %i \n",i);
        scanf("%i",&vetorB[i]);
        vetorC[i] = vetorA[i] + vetorB[i];
        printf("A:%i + B:%i = C:%i \n",vetorA[i],vetorB[i],vetorC[i]);
    }
    
    
    

    return 0;
}
