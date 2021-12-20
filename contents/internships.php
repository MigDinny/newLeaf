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
    <input name="salary" id="salary" style="margin-left: 0px" type="number" placeholder="Introduzir valor">

    <!--<label for="filters">Localização:</label>
    <input name="duration" style="margin-left: 0px" type="text" placeholder="Introduzir cidade" required>-->

    <label for="filters">Remoto:</label>
    <select name="filters" id="remote">
    <option value="all">Qualquer um</option>
    <option value="full" >Completamente remoto</option>
    <option value="hybrid">Híbrido</option>
    <option value="none">Não</option>

    </select>

    <label for="filters">Grau Escolaridade:</label>
    <select name="filters" id="grad-req">
    <option value="none">Qualquer um</option>
    <?php
    foreach ($graduations as $graduation) {
        echo "<option value=" . $graduation['id'] . " >" . $graduation['name'] . "</option>";
    }
    ?>
    </select>

    <input style="margin-left: 20px" type="submit" value="Submeter" onclick="fetchData('internship', course.value, null)">
</div>


<!-- lista com as rows das cenas -->

<ul id="entry-list">

</ul>

</div>

<script type="text/javascript" src="static/fetch.js"></script>
<script>
// call for the first time

fetchData("internship", course.value, null);

</script>
