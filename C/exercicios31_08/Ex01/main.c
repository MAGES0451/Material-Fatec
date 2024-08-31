/******************************************************************************

Welcome to GDB Online.
  GDB online is an online compiler and debugger tool for C, C++, Python, PHP, Ruby, 
  C#, OCaml, VB, Perl, Swift, Prolog, Javascript, Pascal, COBOL, HTML, CSS, JS
  Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/
#include <stdio.h>

int main()
{
    #include <stdio.h>



   
    
    float altura, pesoI;
    int sexo;
    
    
    
    
    printf("Cálculo de peso ideal");
    
    printf("\nEntre com a altura: ");
        scanf("%f",&altura);
        
    printf("\nEntre com o sexo (1 = Masculino / 2 = Feminino): ");    
        scanf("%i",&sexo);
    
        
       switch(sexo){
           
           case 1:
            pesoI =(72.7*altura)-58.0;
            printf("O peso ideal é: %f",pesoI);
            break;
            
            case 2:
            pesoI =(62.1*altura)-44.7;
            printf("O peso ideal é: %f",pesoI);
            break;
            
            default:
            printf("Opção invalida");
            break;
           
       }

        
        

    return 0;
}