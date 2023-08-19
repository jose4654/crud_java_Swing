import java.util.List;
import java.util.Scanner;

public class Main {
   /* //inicializo el Scanner Para ingresar datos por teclado
    public static Scanner teclado = new Scanner(System.in);*/

    public static void main(String[] args){

        //Inicializo la ventana del menu principal

        interfazMenu ventana1 = new interfazMenu();

        //Le doy parametros a la ventana
        ventana1.setBounds(0,0,650,500);//Parametros de ubicacion
        ventana1.setTitle("Gestion de Alumnos");
        ventana1.setVisible(true);//TRUE hace que la ventana SI se vea- FALSE hace que NO se vea
        ventana1.setLocationRelativeTo(null);//hace que se vea en el medio de la pantalla
        ventana1.setResizable(true);//FALSE no le permite modificar el tamaño de la venta al usuario

        gestionDeAlumno misAlumnos = new gestionDeAlumno();
        Scanner teclado = new Scanner(System.in);
        //carga los alumnos del archivo
        gestionDeAlumno.cargarAlumnosInicio();


        //Menú que muestra las opciones

       int opcion = 1;
        do {
            System.out.println("Ingrese una opcion:");
            System.out.println("1.- Alta del alumno");
            System.out.println("2.- Mostrar lista de alumnos");
            System.out.println("3.- Modificar alumno");
            System.out.println("4.- Eliminar alumno de la lista");
            System.out.println("5.- Buscar alumno en la lista");
            System.out.println("100.- Salir");
            opcion = teclado.nextInt();

           /* //Selecciona la opcion a realizar y llama a los metodos correspondientes.

           //switch (opcion){
                //case 1 :gestionDeAlumno.altaAlumno();break;
                //case 2:gestionDeAlumno.mostrarAlumnos();break;
                       //  gestionDeAlumno.mostrarAlumnos();break;
                //case 3: gestionDeAlumno.modificarAlumno(); break;
                //case 4 :gestionDeAlumno.eliminarAlumno(); break;
                //case 5 :
                    //String dni="";
                    //dni = teclado.next();
                    //gestionDeAlumno.buscarAlumno(dni);break;
               // case 100:
                    //System.out.println("Fin de la carga y modificacion de datos");break;
           // }*/

        }
        while (opcion != 100);


    }

}