<?php
include_once("cabecalho.php");
?>
<script src="js/data.js"></script>

<script>
var inicial = voltarDias(7, "nenhum", "-");
var final = voltarDias(7, "nenhum", "+");
window.location.href = "consultar.php?inicial=" + inicial + "&final=" + final;
</script>

<?php
include_once("footer");
?>
