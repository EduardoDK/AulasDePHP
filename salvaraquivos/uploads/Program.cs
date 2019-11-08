using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Tabuada
{
    class Program
    {
        static void Main(string[] args)
        {
            Int32 tabuada, limite;

            Console.WriteLine("## Tabuada ##");
            Console.WriteLine();
            Console.Write("Informe a tabuada que deseja consultar: ");
            tabuada = Convert.ToInt32(Console.ReadLine());

            Console.Write("Informe o valor máximo da tabuada: ");
            limite = Convert.ToInt32(Console.ReadLine());

            for (Int32 i = 1; i <= limite; i++)
            {
                Console.WriteLine(tabuada + " X " + i + " = " + tabuada * i);
            }

            Console.WriteLine();
            Console.Write("Pressione qualquer tecla para sair ...");
            Console.ReadKey();
        }
    }
}
