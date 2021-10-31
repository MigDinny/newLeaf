<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Informação da oferta</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Título</span>
            <input type="text" placeholder="Título da oferta" required>
          </div>
          <div class="input-box">
            <span class="details">Empresa</span>
            <input type="text" placeholder="Nome da empresa" required>
          </div>
          <div class="input-box">
            <span class="details">Salário</span>
            <input type="text" placeholder="Introduza o valor mensal" required>
          </div>
          <div class="input-box">
            <span class="details">Descrição da oferta:</span>
            <input type="text" placeholder="Introduza a descrição completa da oferta" required>
          </div>
          <div class="input-box">
            <span class="details">Requesitos</span>
            <input type="text" placeholder="Requesitos necessários para os aplicantes" required>
          </div>
          <div class="input-box">
            <span class="details">Benefícios</span>
            <input type="text" placeholder="Benefícios que dispõe" required>
          </div>
        </div>
        <div class="contract-details">
          <input type="radio" name="contract" id="dot-1">
          <input type="radio" name="contract" id="dot-2">
          <span class="contract-title">Contrato</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="contract">Sim</span>
            <input style="margin-left: 20px" type="text" placeholder="Duração">
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="contract">Não</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submeter">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
