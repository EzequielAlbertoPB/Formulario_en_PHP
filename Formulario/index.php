<?php
include "head.php"
?>

<body>
  <form class="col s12" action="form.php" method="post">

    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" name="txtnombre" type="text" class="validate" required>
        <label for="icon_prefix">Nombre</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <input id="icon_prefix" name="txtedad" type="number" class="validate" required>
        <label for="icon_prefix2">Edad</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <input id="icon_prefix" name="txtcorreo" type="email" class="validate" required>
        <label for="icon_prefix2">Correo</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <input id="icon_prefix" name="txtpassword" type="text" class="validate" required>
        <label for="icon_prefix2">Contraseña</label>
      </div>
    </div>

    <button>Enviar Datos</button>
  </form>

</body>
<?php
include "footeer.php";
?>