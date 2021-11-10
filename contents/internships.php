<?php
$query_courses = "SELECT * FROM course;";
$courses = DB::query($query_courses);

$query_graduations= "SELECT * FROM graduation_level;";
$graduations = DB::query($query_graduations);


?>

<div class="text">Internships</div>
<div id="internships" class="page-content">

<!-- Filters -->
<!--Current filters: type (obligatory), course id, salary, location, remoteness(?) and graduation requirements -->
<div class="button">
    <label for="filters">Área:</label>
    <select name="filters" id="course">
    
    <?php
    foreach ($courses as $course) {
        echo "<option value=" . $course['id'] . " >" . $course['name'] . "</option>";
    }
    ?>

    </select>

    <label for="filters">Salário:</label>
    <input name="duration" style="margin-left: 0px" type="text" placeholder="Introduzir valor" required>

    <!--<label for="filters">Localização:</label>
    <input name="duration" style="margin-left: 0px" type="text" placeholder="Introduzir cidade" required>-->

    <label for="filters">Remoto:</label>
    <select name="filters" id="remote">
    <option value="full" >Completamente remoto</option>
    <option value="hybrid">Híbrido</option>
    <option value="non-remote">Não</option>
    <option value="all">Qualquer um</option>
    </select>

    <label for="filters">Grau Escolaridade:</label>
    <select name="filters" id="grad-req">

    <?php
    foreach ($graduations as $graduation) {
        echo "<option value=" . $graduation['id'] . " >" . $graduation['name'] . "</option>";
    }
    ?>
    <option value="none">Qualquer um</option>
    </select>

    <input style="margin-left: 20px" type="submit" value="Submeter">
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

fetchData("internship",2,300,null,null,null);

</script>
