import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

//Elementos y eventos de la ventana principal
public class interfazMenu extends JFrame implements ActionListener {
    JButton botonAgregar, botonLista, botonModificar, botonEliminar, botonBuscar, botonCerrar;
    JTextArea areaTexto;
    JScrollPane scrollPane;

    public interfazMenu() { //inicializo los elementos
        setLayout(null);

        botonAgregar = new JButton("Agregar");
        botonAgregar.setBounds(10, 15, 100, 20);
        add(botonAgregar);
        botonAgregar.addActionListener(this);

        botonLista = new JButton("Listado");
        botonLista.setBounds(120, 15, 100, 20);
        add(botonLista);
        botonLista.addActionListener(this);

        botonModificar = new JButton("Modificar");
        botonModificar.setBounds(230, 15, 100, 20);
        add(botonModificar);
        botonModificar.addActionListener(this);

        botonEliminar = new JButton("Eliminar");
        botonEliminar.setBounds(340, 15, 100, 20);
        add(botonEliminar);
        botonEliminar.addActionListener(this);

        botonBuscar = new JButton("Buscar");
        botonBuscar.setBounds(450, 15, 100, 20);
        add(botonBuscar);
        botonBuscar.addActionListener(this);

        botonCerrar = new JButton("Cerrar");
        botonCerrar.setBounds(460, 425, 100, 20);
        add(botonCerrar);
        botonCerrar.addActionListener(this);

        areaTexto = new JTextArea();
        areaTexto.setEditable(false);
        areaTexto.setLineWrap(true);
        add(areaTexto);

        scrollPane = new JScrollPane(areaTexto);
        scrollPane.setBounds(10,50,550,300);
        add(scrollPane);

        areaTexto.append(gestionDeAlumno.mostrarAlumnos()); // agrega el listado de alumnos en area texto

    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if (e.getSource() == botonAgregar) { //evento del boton agregar
            //Inicializo la ventana de la interfaz alta alumno
            interfazAltaAlumno ventana2 = new interfazAltaAlumno();
            //Le doy parametros a la ventana
            ventana2.setBounds(0,0,650,300);//Parametros de ubicacion
            ventana2.setTitle("Alta de alumno");
            ventana2.setVisible(true);//TRUE hace que la ventana SI se vea- FALSE hace que NO se vea
            ventana2.setLocationRelativeTo(null);//hace que se vea en el medio de la pantalla
            ventana2.setResizable(true);//FALSE no le permite modificar el tamaño de la venta al usuario

        }
        if (e.getSource() == botonLista) {//evento del boton "mostrar lista"
            areaTexto.setText("");//crea un area de texto vacia
            areaTexto.append(gestionDeAlumno.mostrarAlumnos());//agrega el listado de alumnos en area texto
        }
        if (e.getSource() == botonModificar) {//evento del boton modificar
            //Inicializo la ventana de la interfaz modificar alumno
            interfazModificarAlumno ventana3 = new interfazModificarAlumno();
            //Le doy parametros a la ventana
            ventana3.setBounds(0,0,400,200);//Parametros de ubicacion
            ventana3.setTitle("Modificar Alumno");
            ventana3.setVisible(true);//TRUE hace que la ventana SI se vea- FALSE hace que NO se vea
            ventana3.setLocationRelativeTo(null);//hace que se vea en el medio de la pantalla
            ventana3.setResizable(true);//FALSE no le permite modificar el tamaño de la venta al usuario

        }
        if (e.getSource() == botonEliminar) {//evento del boton eliminar
            //Inicializo la ventana de la interfaz eliminar alumno
            interfazEliminarAlumno ventana5 = new interfazEliminarAlumno();
            //Le doy parametros a la ventana
            ventana5.setBounds(0,0,400,200);//Parametros de ubicacion
            ventana5.setTitle("Eliminar alumno");
            ventana5.setVisible(true);//TRUE hace que la ventana SI se vea- FALSE hace que NO se vea
            ventana5.setLocationRelativeTo(null);//hace que se vea en el medio de la pantalla
            ventana5.setResizable(true);//FALSE no le permite modificar el tamaño de la venta al usuario

        }
        if (e.getSource() == botonBuscar) { //evento del boton buscar
            //Inicializo la ventana de la interfaz buscar
            interfazBuscar ventana4 = new interfazBuscar();
            //Le doy parametros a la ventana
            ventana4.setBounds(0,0,600,200);//Parametros de ubicacion
            ventana4.setTitle("Buscar alumno");
            ventana4.setVisible(true);//TRUE hace que la ventana SI se vea- FALSE hace que NO se vea
            ventana4.setLocationRelativeTo(null);//hace que se vea en el medio de la pantalla
            ventana4.setResizable(true);//FALSE no le permite modificar el tamaño de la venta al usuario
        }
        if (e.getSource() == botonCerrar) {//evento del boton cerrar
            System.exit(0);//metodo para finalizar el programa
        }
    }
}