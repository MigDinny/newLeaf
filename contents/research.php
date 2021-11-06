<?php

//$courses = DB::query();

?>

<div class="text">Research Grants</div>
<div id="research" class="page-content">

<!-- Filters -->
<!--Current filters: type (obligatory), course id, salary, location, remoteness(?) and graduation requirements.-->
<div>
    <label for="course">Área:</label>
    <select name="course" id="course">
        <?php

            /*foreach ($courses as $course) {
                echo "<option value=\"". $course['id'] ."\" >Engenharia Informática</option>";
            }*/
        ?>
        <option value="software-engineer">Engenharia Informática</option>
        <option value="medicine">Medicina</option>
        <option value="international-relationships">Relações Internacionais</option>
        <option value="law">Direito</option>
    </select>

    <label for="salary">Salário:</label>
    <input name="salary" id="salary" style="margin-left: 0px" type="text" placeholder="Introduzir valor" required>

    <label for="location">Localização:</label>
    <input name="location" id="location" style="margin-left: 0px" type="text" placeholder="Introduzir cidade" required>

    <label for="remote">Remoto:</label>
    <select name="remote" id="remote">
        <option value="" selected>Não importa</option>
        <option value="full" >Completamente remoto</option>
        <option value="hybrid">Híbrido</option>
        <option value="non-remote">Não</option>
    </select>

    <label for="grad-req">Grau Escolaridade:</label>
    <select name="grad-req" id="grad-req">
        <option value="doctorate">Doutouramento</option>
        <option value="master">Mestrado</option>
        <option value="bashelor">Licenciatura</option>    
        <option value="highschool">10º - 12º Ano</option>
        <option value="basic-school">5º - 9º Ano</option>
        <option value="primary-school">1º - 4º ano</option>
        <option value="none">Nenhum</option>
    </select>

    <input style="margin-left: 20px" type="submit" value="Filtrar" onClick="fetchData('research');">
</div>

<!-- lista com as rows das cenas -->

<ul id="entry-list">
    <li class="entry-row">
        <h3>Back-end PHP + PostgreSQL</h3>
        <span><b>Localização: </b>Portugal</span><br>
        <span><b>Empresa: </b>Critical Software</span><br>
        <span><b>Salário bruto:</b> 1500€/mês</span><br>
        <span><b>Requisitos Académicos:</b> Licenciatura</span><br>
        <span><b>Remote:</b> FULL</span><br>
    </li>

    <li class="entry-row">
        <h3>Front-end React.js</h3>
        <span><b>Localização: </b>Portugal</span><br>
        <span><b>Empresa: </b>Web Dev Company</span><br>
        <span><b>Salário bruto:</b> 1300€/mês</span><br>
        <span><b>Requisitos Académicos:</b> Licenciatura</span><br>
        <span><b>Remote:</b> HYBRID</span><br>
    </li>
</ul>

</div>

<script type="text/javascript" src="static/fetch.js"></script>
<script>

// call for the first time
fetchData("research",3,300,null,null,null);

</script>
