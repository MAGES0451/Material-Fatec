import java.util.Scanner;

/**
 * @since agosto 2024
 * @author Lucas
 * Jogo da advinhação
 */


public class AppJogo {
    public static void main(String[] args) {

        Scanner leitor = new Scanner(System.in);
        int magico, palpite;
        int i = 0;

        magico = (int) (Math.random() * 1000) + 1;
       // System.out.println(magico);


        do {
            System.out.println("Digite o palpite " +(i+1)+ " entre [1...1000]:");
            palpite = Integer.parseInt(leitor.nextLine());
            i++;


        if (palpite == magico) {
            System.out.println("Parabéns... Você ganhou");
            break;
        } else if (palpite > magico) {
            System.out.println("Seu palpite foi alto");
        } else {
            System.out.println("Seu palpite foi baixo");
        }
        if(i == 10){
            System.out.println("A banca venceu. O número era: " + magico);
            return;
        }
    }
    while (true);
    }
}
