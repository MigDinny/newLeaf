<div class="text">Trabalhos</div>
<div id="jobs" class="page-content">

<!-- Filters -->
<!--Current filters: type (obligatory), course id, salary, location, remoteness(?) and graduation requirements.-->
<label for="filters">Área:</label>
<select name="filters" id="course">
<option value="software-engineer" >Engenharia Informática</option>
<option value="medicine">Medicina</option>
<option value="international-relationships">Relações Internacionais</option>
<option value="law">Direito</option>
</select>

<label for="filters">Salário:</label>
<input name="duration" style="margin-left: 0px" type="text" placeholder="Introduzir valor" required>

<label for="filters">Localização:</label>
<input name="duration" style="margin-left: 0px" type="text" placeholder="Introduzir cidade" required>

<label for="filters">Remoto:</label>
<select name="filters" id="remote">
<option value="full" >Completamente remoto</option>
<option value="hybrid">Híbrido</option>
<option value="non-remote">Não</option>
</select>

<label for="filters">Grau Escolaridade:</label>
<select name="filters" id="grad-req">
<option value="doctorate">Doutouramento</option>
<option value="master">Mestrado</option>
<option value="bashelor">Licenciatura</option>    
<option value="highschool">10º - 12º Ano</option>
<option value="basic-school">5º - 9º Ano</option>
<option value="primary-school">1º - 4º ano</option>
<option value="none">Nenhum</option>
</select>

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
fetchData("job",2,30,null,null,null);

</script>
