<div class="text">Criar Oferta</div>
<div id="create-offer" class="content">


  <div class="container">
    <div class="title">Informação da oferta</div>
    <div class="content">
      <form action="#">
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
            <input style="margin-left: 20px" type="text" placeholder="Duração" required>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="contract">Não</span>
          </label>
          </div>
        </div>
          <div class="textarea">
            <span class="details">Requisitos</span>
            <textarea rows="4" cols="100" placeholder="Requesitos necessários para os aplicantes" required></textarea>
          </div>
          <div class="textarea">
            <span class="details">Benefícios</span>
            <textarea rows="4" cols="100" placeholder="Benefícios que dispõe" required></textarea>
          </div>
          <div class="textarea1">
            <span class="details">Descrição da oferta:</span>
            <textarea rows="4" cols="220" placeholder="Introduza a descrição completa da oferta" required></textarea>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Submeter">
        </div>
      </form>
    </div>
  </div>
</div>