import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class interfazEliminarAlumno extends JFrame implements ActionListener  {

    JButton botonConfirmar, botonEliminar;
    JTextField dni;
    JTextArea encontrado;
    JLabel dato;

    public interfazEliminarAlumno() {
        setLayout(null);
        dato = new JLabel("Ingrese el numero de DNI que desea eliminar:");
        dato.setBounds(10, 20, 450, 20);
        add(dato);

        dni = new JTextField();
        dni.setBounds(10, 50, 230, 20);
        add(dni);

        botonEliminar = new JButton("Eliminar");
        botonEliminar.setBounds(250, 50, 100, 20);
        add(botonEliminar);
        botonEliminar.addActionListener(this);

        encontrado = new JTextArea();
        encontrado.setBounds(10, 100, 230, 20);
        add(encontrado);

        botonConfirmar = new JButton("Confirmar");
        botonConfirmar.setBounds(250, 100, 100, 20);
        add(botonConfirmar);
        botonConfirmar.addActionListener(this);


    }

    @Override
    public void actionPerformed(ActionEvent e) {

        if (e.getSource() == botonEliminar) {
            String docu = dni.getText();
            encontrado.append(gestionDeAlumno.buscarAlumno(docu));
        }
        if (e.getSource() == botonConfirmar) {
            String docu = dni.getText();
            JOptionPane.showMessageDialog(null,gestionDeAlumno.eliminarAlumno(docu));
            //ejecuta y se trae el resultado
        }
    }
}
