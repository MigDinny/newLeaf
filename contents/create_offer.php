<div class="text">Criar Oferta</div>
<div id="create-offer" class="page-content">


  <div class="container">
    <div class="title">Informação da oferta</div>
    <div class="content">
      <form action="api/create-offer.php" method = "post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Título</span>
            <input name="title" type="text" placeholder="Título da oferta" required>
          </div>
          <div class="input-box">
            <span class="details">Empresa</span>
            <input name="company" type="text" placeholder="Nome da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Salário</span>
            <input name="salary" type="text" placeholder="Introduza o valor mensal" required>
          </div>
          <div class="contract-details input-box">
            <input type="radio" name="contract" id="dot-1">
            <input type="radio" name="contract" id="dot-2">
            <span class="contract-title">Contrato</span>
            <div class="category">
              <label for="dot-1">
              <span class="dot one"></span>
              <span class="contract">Sim</span>
              <input name="duration" style="margin-left: 20px" type="text" placeholder="Duração" required>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="contract">Não</span>
            </label>
            </div>
          </div>
        <div class = "input-box">
          <div class="textarea" >
          <span class="details">Requisitos</span>
            <select name="requisites">
              <option value="0" ></option>
              <option value="1" >A fazer licenciatura</option>
              <option value="2">Licenciatura</option>
              <option value="3">A fazer mestrado</option>
              <option value="4">Mestrado</option>
              <option value="5">A fazer doutoramento</option>
              <option value="5">Doutoramento</option>
          </select>
          </div>
        </div>
          <div class="textarea">
            <span class="details">Benefícios</span>
            <textarea name = "benefits" rows="4" cols="100" placeholder="Benefícios que dispõe" required></textarea>
          </div>
          <div class="textarea1">
            <span class="details">Descrição da oferta:</span>
            <textarea name = "description" rows="4" cols="220" placeholder="Introduza a descrição completa da oferta" required></textarea>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Submeter">
        </div>
      </form>
    </div>
  </div>
</div>

<?php

if (isset($_GET['result'])) {
  if ($_GET['result'] == 'success') {
    echo "<script>alert('Oferta criada com sucesso!');</script>";
  } else {
    echo "<script>alert('Um erro inesperado ocorreu. Contacte o administrador.');</script>";
  }
}

?>