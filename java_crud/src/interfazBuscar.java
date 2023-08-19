import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class interfazBuscar extends JFrame implements ActionListener {

    JButton botonBuscar,botonCerrar;
    JTextField dni;
    JTextArea encontrado;
    JLabel dato;

    public interfazBuscar() {
        setLayout(null);
        dato = new JLabel("Ingrese el numero de DNI que desea buscar:");
        dato.setBounds(10, 20, 450, 20);
        add(dato);

        dni = new JTextField();
        dni.setBounds(10, 50, 230, 20);
        add(dni);

        encontrado = new JTextArea();
        encontrado.setBounds(10, 100, 550, 20);
        add(encontrado);

        botonBuscar = new JButton("Buscar");
        botonBuscar.setBounds(250, 50, 100, 20);
        add(botonBuscar);
        botonBuscar.addActionListener(this);

        botonCerrar = new JButton("Cerrar");
        botonCerrar.setBounds(460, 125, 100,20);
        add(botonCerrar);
        botonCerrar.addActionListener(this);

    }

    @Override
    public void actionPerformed(ActionEvent e) {

        if (e.getSource() == botonBuscar) {
            String docu = dni.getText();
            encontrado.append(gestionDeAlumno.buscarAlumno(docu));
        }
        if (e.getSource() == botonCerrar) {
            System.exit(0);

        }
    }
}
