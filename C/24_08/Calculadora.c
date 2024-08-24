/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, OCaml, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
#include <stdio.h>

int main()
{
   float n1, n2, res;
   int op;
   
   printf("\nCalculadora");
   printf("\nDigite 1 para Somar");
   printf("\nDigite 2 para Subtrair");
   printf("\nDigite 3 para Multiplicar");
   printf("\nDigite 4 para Dividir");
   printf("\nEntre com a opção: ");
   scanf("%i",&op);
   
   
   if(op == 1 || op == 2 || op == 3 || op == 4){
    printf("\nVamos entrar com os valores!");
    printf("\nEntre com o n1: ");
    scanf("%f",&n1);
    printf("\nEntre com o n2: ");
    scanf("%f",&n2);
   }
   switch(op)
   {
       case 1:
       printf("\nSoma");
       res = n1 + n2;
       printf("\nResultado da Soma: %f",res);
       break;
       
        case 2:
       printf("\nSubtração");
       res = n1 - n2;
       printf("\nResultado da Subtração: %f",res);
       break;
       
        case 3:
       printf("\nMultiplicação");
       res = n1 * n2;
       printf("\nResultado da Multiplicação: %f",res);
       break;
       
        case 4:
       printf("\nDivisão");
       res = n1 / n2;
       printf("\nResultado da Divisão: %f",res);
       break;
       
       default:
       printf("\nOpção invalida!");
       break;
   }

    return 0;
}
