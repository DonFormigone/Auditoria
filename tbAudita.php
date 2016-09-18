<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/estilao.css"/>
        <title></title>
    </head>
    <body>
              
</body>
<h1>Bem vindo ao sistema de Auditoria</h1>        
<form method="POST" class="table" action="index.php">
    <!--<label>Auditado:</label><input type="text" name="auditado" id="auditado"><br>
    <label>Nota:</label><input type="text" name="nota" id="nota"><br>
    <label>Nota1:</label><input type="text" name="nota1" id="nota1"><br>
   --> <!--Abrindo a parte de Seleção de Funcionário-->
    <label>Funcionário: </label>
    <select name = "auditado">
        <option value="Luis">Luis</option>
  <option value="Suzana">Suzana</option>
  <option value="Miguel">Miguel</option>
  <option value="Luiza" selected>Luiza</option></select>
    <!--Encerrando a parte de Seleção de Funcionário-->
    <!--Iniciando Select de Notas-->
    <label>Nota (Peso): </label>
   <select name = "nota">
  <option value="-10" selected>10</option>
  <option value="-20">20</option>
  <option value="-30">30</option>
  <option value="-40">40</option>
  <option value="-50">50</option>
  <option value="-60">60</option>
  <option value="-70">70</option>
  <option value="-80">80</option>
  <option value="-90">90</option>
  <option value="-100">100</option>
    </select>
    
    <label>Nota 2 (Peso): </label>
   <select name = "nota1">
  <option value="-10" selected>10</option>
  <option value="-20">20</option>
  <option value="-30">30</option>
  <option value="-40">40</option>
  <option value="-50">50</option>
  <option value="-60">60</option>
  <option value="-70">70</option>
  <option value="-80">80</option>
  <option value="-90">90</option>
  <option value="-100">100</option>
    </select>
    
    
    
        
        </br>
        <input type="submit" class="button" value="Cadastrar">
</form>        

    </body>
</html>
