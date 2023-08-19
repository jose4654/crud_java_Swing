import javax.swing.*;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class gestionDeAlumno {
    //Inicializamos un ArrayLis de Alumnos
    public static List<Alumno> alumnos = new ArrayList<Alumno>();
    public static Scanner teclado = new Scanner(System.in);

    public gestionDeAlumno() { //constructor vacìo

        this.alumnos = new ArrayList<>();
    }


//Realiza el alta del alumno en el Arraylist luego de ser validado
    public static String altaAlumno(String nombre, String apellido, String dni, String email, String comision) {

      /*  boolean bandera = false;
        System.out.println("Ingrese los datos necesarios para dar de alta a un Alumno:");


        while (!bandera) {

            System.out.println("Ingrese nombre:");
            String nombre = teclado.next();
            System.out.println("Ingrese apellido:");
            String apellido = teclado.next();
            System.out.println("Ingrese el dni:");
            String dni = teclado.next();
            System.out.println("Ingrese el email:");
            String email = teclado.next();
            System.out.println("Ingrese la comision:");
            String comision = teclado.next();


            String resultado = validarAlta(nombre, apellido, dni, email, comision);

            if (resultado.length() == 0) {
                bandera = true;
                Alumno a1 = new Alumno(nombre, apellido, dni, email, comision);
                alumnos.add(a1);

                //Dar el alta en archivo si los datos estan correctos
                gestionDeArchivo.altaRegistoArchivo(nombre,apellido,dni,email,comision);

            } else {
                System.out.println(resultado);
            }
        }*/

        String resultado= validarAlta(nombre, apellido, dni, email, comision);
        if (resultado.length() == 0) {
            Alumno a1 = new Alumno(nombre, apellido, dni, email, comision);
            alumnos.add(a1);

            //Dar el alta en archivo si los datos estan correctos
            gestionDeArchivo.altaRegistoArchivo(nombre,apellido,dni,email,comision);
            resultado="Alumno cargado correctamente";
            return resultado;

        } else {
            return resultado;
        }

    }


    //validacion de datos ingresados
    public static String validarAlta(String nombre, String apellido, String dni, String email, String comision) {
        if (nombre.length() < 2 || nombre.length() > 40) {
            return "El nombre ingresado es incorrecto, vuelva a cargar los datos";
        } else {
            if (apellido.length() < 2 || apellido.length() > 40) {
                return "El apellido ingresado es incorrecto, vuelva a ingresar los datos";
            } else {
                if (validarEmail(email)) {
                } else {
                    return "El email ingresado es invalido, vuelva a ingresar los datos";
                }
                if (dni.length() < 6 || dni.length() > 10) {
                    return "El dni ingresado es invalido, vuelva a ingresar los datos";
                } else {
                    if (comision.length() < 2 || comision.length() > 40) {
                        return "La comision ingresada es invalida, vuelva a ingresar los datos";
                    } else {
                        return "";
                    }
                }
            }
        }
    }

    //Validar el email ingresado, que contenga @ y que antes y despues de este tenga
    //caracteres alfanumericos

    public static Boolean validarEmail(String correo) {
        String regex = "^[A-Za-z0-9+_.-]+@[A-Za-z0-9.-]+$";

        Pattern pattern = Pattern.compile(regex);

        Matcher matcher = pattern.matcher(correo);

        return matcher.matches();
    }



    //Ver Array de alumnos
    public static String mostrarAlumnos() {
        String salida = "Lista de alumnos cargados:"+"\n";
        for (Alumno alumno : gestionDeArchivo.recuperarRegistros()) {
            System.out.println(alumno.toString());
            salida += alumno.toString() + "\n";
        }

        return salida;
    }





    //modificar un alumno del arrayList.
    public static String modificarAlumno(String nombre, String apellido, String documento, String email, String comision){

        String resultado="";
        resultado=validarAlta(nombre, apellido, documento, email, comision);//valida los datos que recibio por parametro
        if (resultado.length() == 0) {//si esta bien busca el alumno y actualiza sus datos
            for (Alumno alumno : alumnos) {
                if (alumno.getDni().equals(documento)) {//busca el alumno con un for y un if utilizando el dni

                    alumno.nombre = nombre; //carga los datos sobre el alumno temporal
                    alumno.apellido = apellido;
                    alumno.dni = documento;
                    alumno.email = email;
                    alumno.comision = comision;

                    gestionDeArchivo.actualizarAlumnoArchivo(alumno);//pasa el alumno temporal para actualizar el archivo

                    resultado = "Persona modificada exitosamente.";//retorna el cambio exitoso
                    return resultado;
                    }
                }
            }
            return resultado;
        }

    // Eliminar alumno del arraylist
    public static String eliminarAlumno(String dni) {
        String dniBuscado = dni;
        String resultado = "";

        for (Alumno alumno : alumnos) {
            if (alumno.getDni().equals(dniBuscado)) {
                alumnos.remove(alumno);
                gestionDeArchivo.eliminarRegistros(alumno);
                resultado="El alumno  ha sido eliminado de manera exitosa.";
                return resultado;
            }
        }
       resultado = "";
        return resultado;
    }



    //Busacar Alumno en el ArrayList
   public static String buscarAlumno(String dni) {

        String dniBuscado = dni ;
        String resultado="";

       for (Alumno alumno : alumnos) {
           if (alumno.getDni().equals(dniBuscado)) {
               resultado = alumno.toString();
               return resultado;
           }
       }
       resultado = "No se encontró ningun alumno con DNI " + dniBuscado + ".";
       return resultado;
   }

   //es otro similar al buscar alumno pero este retorna el alumno como objeto
    public static Alumno obtenerAlumno(String dni) {
        String dniBuscado = dni ;
        Alumno a1 = new Alumno("");
        for (Alumno alumno : alumnos) {
            if (alumno.getDni().equals(dniBuscado)) {
                return alumno;
            }
        }
        return a1;
    }


    //cargar alumnos del archivo al iniciar por primera vez el programa
    public static void cargarAlumnosInicio(){
        alumnos = gestionDeArchivo.recuperarRegistros();
    }
}

