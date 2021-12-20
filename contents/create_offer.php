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
            <input name="salary" type="number" placeholder="Introduza o valor mensal em euros" required>
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
            <span class="details">Requisitos</span>
            <textarea rows="5" cols="10000" placeholder="Requisitos necessários para os aplicantes" required style="
              width: 100%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding: 15px;
              border: 1px solid #ccc;
              border-bottom-width: 2px;
              transition: all 0.3s ease;"></textarea>
          </div>
        </div>
          <div class="textarea">
            <span class="details">Benefícios</span>
            <textarea name = "benefits"   rows="5" cols="10000" placeholder="Benefícios que dispõe" required style="
              width: 100%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding: 15px;
              border: 1px solid #ccc;
              border-bottom-width: 2px;
              transition: all 0.3s ease;"></textarea>
          </div>
          <div class="textarea1">
            <span class="details">Descrição da oferta:</span>
            <textarea name = "description" rows="5" cols="10000" placeholder="Introduza a descrição completa da oferta" required style="
              width: 100%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding: 15px;
              border: 1px solid #ccc;
              border-bottom-width: 2px;
              transition: all 0.3s ease;"></textarea>
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

  switch($_GET['result']){
    case 0:
      echo "<script>alert('Oferta criada com sucesso!');</script>";
      break;

    case 1:
      echo "<script>alert('Por favor ponha inteiros no campo do salário.');</script>";
      break;

    default:
      echo "<script>alert('Um erro inesperado ocorreu. Contacte o administrador.');</script>";
      break;
  }
}


?>