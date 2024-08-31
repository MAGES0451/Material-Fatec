/******************************************************************************

Crie um algoritmo que leia quatro valores digitados pelo usuário: n, a, b, c. a)
Se n = 1 imprimir os três valores a, b, c em ordem crescente.
b) Se n = 2 escrever os três valores a, b, c em ordem decrescente.  
c) Se n = 3 escrever os três valores a, b, c de forma que o maior fique no meio


*******************************************************************************/
#include <stdio.h>

int main()
{
    int n,a,b,c, p,s,t;
    
    
    printf("Digite uma opção: \n1 = a, b, c em ordem crescente \n2 = a, b, c em ordem decrescente \n3 = a, b, c maior no meio\n");
    scanf("%i",&n);
    
     printf("\nDigite um valor para A: ");
    scanf("%i",&a);
    
     printf("\nDigite um valor para B: ");
    scanf("%i",&b);
    
     printf("\nDigite um valor para C: ");
    scanf("%i",&c);
    
    
    
    switch(n){
        
        case 1:
        if(a < b && a < c ){
            p = a;
            if (b < c){
                s = b;
                t = c;
            }
            else{
            s = c;
            t = b;
            }
        }
        if(b < a && b < c){
            p = b;
            if (a < c){
                s = a;
                t = c;
            }
            else{
            s = c;
            t = a;
            }
        }
          if(c < a && c < b){
            p = c;
            if (a < b){
                s = a;
                t = b;
            }
            else{
            s = b;
            t = a;
            }
        }
        break;
        
        case 2:
        if(a > b && a > c ){
            p = a;
            if (b > c){
                s = b;
                t = c;
            }
            else{
            s = c;
            t = b;
            }
        }
        if(b > a && b > c){
            p = b;
            if (a > c){
                s = a;
                t = c;
            }
            else{
            s = c;
            t = a;
            }
        }
        if(c > a && c > b){
            p = c;
            if (a > b){
                s = a;
                t = b;
            }
            else{
            s = b;
            t = a;
            }
        }
        break;
        
        case 3:
        if(a > b && a > c){
            p = b;
            s = a;
            t = c;
        }
        if(b > a && b > c){
            p = a;
            s = b;
            t = c;
        }
        if(c > a && c > b){
            p = a;
            s = c;
            t = b;
        }
        break;
        
        default:
        printf("\nOpção invalida!!");
        return 0;
        
        
        
        
        
        
        
        
    }
    printf("\nOs valores são: \nA = %i \nB = %i \nC = %i ",a,b,c);
    printf("\nA ordem é: %i / %i / %i",p,s,t);
    
    

    return 0;
}
