import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
//Elementos y eventos de la ventana alta alumno
public class interfazAltaAlumno extends JFrame implements ActionListener {
    JLabel textotitulo, textonombre, textoapellido, textodni,textoemail,textocomision;
    JTextField insertnombre, insertapellido, insertdni, insertemail, insertcomision;
    JButton botoncargar;

    public interfazAltaAlumno() {
        setLayout(null);

        textotitulo=new JLabel("Ingrese los datos del alumno:");
        textotitulo.setBounds(10, 20, 200, 20);
        add(textotitulo);

        textonombre=new JLabel("Nombre:");
        textonombre.setBounds(10,50 , 200, 20);
        add(textonombre);

        insertnombre = new JTextField();
        insertnombre.setBounds(100, 50, 450, 20);
        add(insertnombre);

        textoapellido=new JLabel("Apellido:");
        textoapellido.setBounds(10,80 , 200, 20);
        add(textoapellido);

        insertapellido = new JTextField();
        insertapellido.setBounds(100, 80, 450, 20);
        add(insertapellido);

        textodni=new JLabel("DNI:");
        textodni.setBounds(10,110 , 200, 20);
        add(textodni);

        insertdni = new JTextField();
        insertdni.setBounds(100, 110, 450, 20);
        add(insertdni);

        textoemail=new JLabel("Email:");
        textoemail.setBounds(10,140 , 200, 20);
        add(textoemail);

        insertemail = new JTextField();
        insertemail.setBounds(100, 140, 450, 20);
        add(insertemail);

        textocomision=new JLabel("Comision:");
        textocomision.setBounds(10,170 , 200, 20);
        add(textocomision);

        insertcomision = new JTextField();
        insertcomision.setBounds(100, 170, 450, 20);
        add(insertcomision);

        botoncargar=new JButton("Cargar");
        botoncargar.setBounds(460, 230, 100, 20);
        add(botoncargar);
        botoncargar.addActionListener(this);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if(e.getSource()==botoncargar){
            String nombre= insertnombre.getText();
            String apellido = insertapellido.getText();
            String dni = insertdni.getText();
            String email = insertemail.getText();
            String comision = insertcomision.getText();
            //gestionDeAlumno.validarAlta(nombre,apellido,dni,email,comision);

            JOptionPane.showMessageDialog(null,gestionDeAlumno.altaAlumno(nombre,apellido,dni,email,comision));
        }

    }
}
