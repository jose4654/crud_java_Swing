import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
//Elementos y eventos de la ventana alta alumno
public class interfazModYAlta extends JFrame implements ActionListener {

    JLabel textotitulo, textonombre, textoapellido, textodni,textoemail,textocomision,textodnivalor;
    JTextField insertnombre, insertapellido, insertemail, insertcomision;
    JButton botonActualizar;

    public interfazModYAlta(Alumno a1){
        setLayout(null);

        textotitulo=new JLabel("Ingrese los datos del alumno:");
        textotitulo.setBounds(10, 20, 200, 20);
        add(textotitulo);

        textonombre=new JLabel("Nombre:");//indica que dato ingresar
        textonombre.setBounds(10,50 , 200, 20);
        add(textonombre);

        insertnombre = new JTextField();//area donde ingresa el dato
        insertnombre.setBounds(100, 50, 450, 20);
        add(insertnombre);
        insertnombre.setText(a1.getNombre());//al alumno que recibe por parametro le saca el nombre y lo muestra en el cuadro

        textoapellido=new JLabel("Apellido:");
        textoapellido.setBounds(10,80 , 200, 20);
        add(textoapellido);

        insertapellido = new JTextField();
        insertapellido.setBounds(100, 80, 450, 20);
        add(insertapellido);
        insertapellido.setText(a1.getApellido());

        textodni=new JLabel("DNI:" );
        textodni.setBounds(10,110 , 200, 20);
        add(textodni);

        textodnivalor = new JLabel();
        textodnivalor.setBounds(100, 110, 450, 20);
        add(textodnivalor);
        textodnivalor.setText(a1.getDni());

        textoemail=new JLabel("Email:");
        textoemail.setBounds(10,140 , 200, 20);
        add(textoemail);

        insertemail = new JTextField();
        insertemail.setBounds(100, 140, 450, 20);
        add(insertemail);
        insertemail.setText(a1.getEmail());

        textocomision=new JLabel("Comision:");
        textocomision.setBounds(10,170 , 200, 20);
        add(textocomision);

        insertcomision = new JTextField();
        insertcomision.setBounds(100, 170, 450, 20);
        add(insertcomision);
        insertcomision.setText(a1.getComision());

        botonActualizar=new JButton("Actualizar");
        botonActualizar.setBounds(460, 230, 100, 20);
        add(botonActualizar);
        botonActualizar.addActionListener(this);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==botonActualizar){
            String nombre= insertnombre.getText();
            String apellido = insertapellido.getText();
            String dni = textodnivalor.getText();
            String email = insertemail.getText();
            String comision = insertcomision.getText();
            //convierte los campos ingresados a string y pasa los datos al metodo modificar alumno
            JOptionPane.showMessageDialog(null,gestionDeAlumno.modificarAlumno(nombre,apellido,dni,email,comision));
        }

    }
}