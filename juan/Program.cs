using System;
 
public class juan
{
   public static void Main(string[] args)
   {
   
    Console.WriteLine("ingrese un numero:");
    int numero = Convert.ToInt32(Console.ReadLine());
    int revernumero = 0;
    while (numero > 0)
    {
    int inversa = numero % 10;
    revernumero = revernumero * 10 + inversa;
    numero = numero / 10;
    }
    Console.WriteLine("Número invertido: " + revernumero);
   }



}
    
