<html>
<body>
    <h1>
        Introduzca una ciudad o pueblo:
    </h1>
    <?php
        echo form_open('Welcome/extraer');
        echo form_label('Lugar', 'direccion');
        echo form_input('direccion');
        echo '<br>';
        echo form_submit('botonSubmit', 'Enviar');
        echo form_close();
    ?>
</body>
</html>