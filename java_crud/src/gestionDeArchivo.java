import java.io.*;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class gestionDeArchivo {
    //Crear una constante que va a ser un archivo
    static final String ARCHIVO_ALUMNOS = "alumnos.txt";

    public static Scanner sc = new Scanner(System.in);


    //METODOS DE ALTA,BAJA,MODIFICAR,ELIMINAR,BUSCAR EN ARCHIVO

    //Cargar datos al archivo

    public static void altaRegistoArchivo(String nombre, String apellido, String email, String dni, String comision) {
        //try buffer hace una carga de datos intermedia antes de llegar al archivo

        try (BufferedWriter buffer = new BufferedWriter(new FileWriter(ARCHIVO_ALUMNOS, true))) {
            buffer.write(nombre + "," + apellido + "," + dni + "," + email + "," + comision);
            buffer.newLine();

        } catch (IOException e) {
            System.out.println("No se pudo trabajar con Archivo" + e.getMessage());
        }
    }


    //Leer archivo
    public static ArrayList<Alumno> recuperarRegistros() {
        ArrayList<Alumno> alumnosEnArchivo = new ArrayList<Alumno>();
        try (BufferedReader leer = new BufferedReader(new FileReader(ARCHIVO_ALUMNOS))) {
            String lineaArchivo;
            while ((lineaArchivo = leer.readLine()) != null) {
                String[] parte = lineaArchivo.split(",");
                String parteNombre = parte[0].trim();
                String parteApellido = parte[1].trim();
                String parteEmail = parte[2].trim();
                String parteDni = parte[3].trim();
                String parteComision = parte[4].trim();
                Alumno miAlumno = new Alumno(parteNombre, parteApellido, parteDni, parteEmail, parteComision);
                alumnosEnArchivo.add(miAlumno);

            }
        } catch (IOException e) {
            System.out.println("No se pudo recuperar los datos del archivo" + e.getMessage());
        }

        return alumnosEnArchivo;
    }

    public static List<String> leerArchivo() {
        List<String> alumnosArchivo = new ArrayList<>();
        try (BufferedReader leer = new BufferedReader(new FileReader(ARCHIVO_ALUMNOS))) {
            String lineaArchivo;
            while ((lineaArchivo = leer.readLine()) != null) {
                alumnosArchivo.add(lineaArchivo);
            }
        } catch (IOException e) {
            System.out.println(" No se pudo leer el archivo" + e.getMessage());
        }
        return alumnosArchivo;
    }

    //Modificar el Archivo

    public static void actualizarAlumnoArchivo(Alumno alumno) {
        //recibe al alumno por parametro y lo actualiza en el archivo usando el dni como indice
        String nombre = alumno.getNombre();//extrae los datos y los convierte en String
        String apellido = alumno.getApellido();
        String email = alumno.getEmail();
        String dni = alumno.getDni();
        String comision = alumno.getComision();
        List<String> alumnosArchivo = leerArchivo(); //lee el archivo txt para buscar el alumno por su dni
        for (String registro : leerArchivo()) {
            if (registro.contains(alumno.getDni())) { //una vez que lo encuentra reemplaza sus datos
                int index = alumnosArchivo.indexOf(registro);
                alumnosArchivo.set(index, nombre + "," + apellido + "," + email + "," + dni + "," + comision);
                reescribirArrayListTxt(alumnosArchivo);
            }
        }
    }

    //Eliminar en el Archivo

    public static void eliminarRegistros(Alumno alumno) {
        List<String> alumnosArchivo = leerArchivo();
        for (String registro : leerArchivo()) {
            if (registro.contains(alumno.getDni())) {
                alumnosArchivo.remove(registro);
                reescribirArrayListTxt(alumnosArchivo);
            }
        }
    }


    public static void reescribirArrayListTxt(List<String> alumnosArchivo) {
        try (BufferedWriter escribir = new BufferedWriter(new FileWriter(ARCHIVO_ALUMNOS))) {
            for (String registro : alumnosArchivo) {
                escribir.write(registro);
                escribir.newLine();
            }
        } catch (IOException e) {
            System.out.println("No se pudo escribir el archivo");
        }
    }
}