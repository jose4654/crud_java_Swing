import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

//Elementos y eventos de la ventana modificar alumno
public class interfazModificarAlumno extends JFrame implements ActionListener {
    JButton botonModificar, botonBuscar;
    JTextField dni;
    JTextArea encontrado;
    JLabel dato;

    public interfazModificarAlumno() {
        setLayout(null);
        dato = new JLabel("Ingrese el numero de DNI que desea modificar:");
        dato.setBounds(10, 20, 450, 20);
        add(dato);

        dni = new JTextField();
        dni.setBounds(10, 50, 230, 20);
        add(dni);

        botonBuscar = new JButton("Buscar");
        botonBuscar.setBounds(250, 50, 100, 20);
        add(botonBuscar);
        botonBuscar.addActionListener(this);

        encontrado = new JTextArea();
        encontrado.setBounds(10, 100, 230, 20);
        add(encontrado);

        botonModificar = new JButton("Modificar");
        botonModificar.setBounds(250, 100, 100, 20);
        add(botonModificar);
        botonModificar.addActionListener(this);


    }

    @Override
    public void actionPerformed(ActionEvent e) {

        if (e.getSource() == botonBuscar) {
            String docu = dni.getText();
            encontrado.append(gestionDeAlumno.buscarAlumno(docu));
        }
        if (e.getSource() == botonModificar) {
            String docu = dni.getText();
            interfazModYAlta ventana6 = new interfazModYAlta(gestionDeAlumno.obtenerAlumno(docu));

            //Le doy parametros a la ventana
            ventana6.setBounds(0,0,650,300);//Parametros de ubicacion
            ventana6.setTitle("Alta de alumno");
            ventana6.setVisible(true);//TRUE hace que la ventana SI se vea- FALSE hace que NO se vea
            ventana6.setLocationRelativeTo(null);//hace que se vea en el medio de la pantalla
            ventana6.setResizable(true);


        }

        //String docu = dni.getText();
            //JOptionPane.showMessageDialog(null,gestionDeAlumno.eliminarAlumno(docu));
            //ejecuta y se trae el resultado
        }


    }


