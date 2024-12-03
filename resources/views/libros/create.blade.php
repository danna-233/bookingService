
<form action="{{ url('/libros') }}" mothod="post" enctype="multipart/form-data">
@csrf

    <label for="nombre"> Nombre </label>
    <input type="text" name="nombre" id="nombre">
    <br>

    <label for="descripcion"> descripción </label>
    <input type="text" name="descripcion" id="descripcion">
    <br>

    <label for="valor"> Valor </label>
    <input type="text" name="valor" id="valor">
    <br>

    <label for="foto"> Foto </label>
    <input type="file" name="foto" id="foto">
    <br>

    <input type="submit" value="Guardar Libro">
    <br>

</form>
