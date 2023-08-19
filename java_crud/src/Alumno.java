public class Alumno {

    //Creo la clase alumno
    String nombre;
    String apellido;
    String dni;
    String email;
    String comision;

    public Alumno(String nombre, String apellido, String dni, String email, String comision) {
        this.nombre = nombre;
        this.apellido = apellido;
        this.dni = dni;
        this.email = email;
        this.comision = comision;
    }

    public Alumno (String dni){
        this.dni = dni;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getApellido() {
        return apellido;
    }

    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    public String getDni() {
        return dni;
    }

    public void setDni(String dni) {
        this.dni = dni;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getComision() {
        return comision;
    }

    public void setComision(String comision) {
        this.comision = comision;
    }


    @Override
    public String toString() {
        return "Alumno:" + nombre +" " + apellido + "("+ "Dni=" + dni+", Email=" + email +", Comision=" + comision + ")";
    }
}




