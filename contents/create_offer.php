<?php
$course_list = DB::query("SELECT * FROM course;");
$graduation_list = DB::query("SELECT * FROM graduation_level;")
?>
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

          <div class="input-box">
            <span class="details">Localização</span>
            <input name="location" type="text" placeholder="Coimbra" required>
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

          <div class="input-box2">
            <span class="details">Inicio</span>
            <input name="start_date" type="month" placeholder="Data de inicio">
            <span class="details">Fim</span>
            <input name="end_date" type="month" placeholder="Data de fim">
          </div>

          
          <!-- ??????????????
	        
          <div class="contract-details input-box">

            <input type="radio" name="contract" id="dot-1">
            <input type="radio" name="contract" id="dot-2">
            <span class="contract-title">Contrato</span>
            
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="contract">Não</span>
            </label>
            </div>
          </div>
          -->

          <div class = "input-box">
          <div class="textarea" >

            <span class="details">Tipo de Oferta</span>
              <select name="type" required style="
              width: 50%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding: 3px;
              border: 1px solid #ccc;
              border-bottom-width: 2px;
              transition: all 0.3s ease;">
                <option value="0"></option>
                <option value="1">Emprego</option>
                <option value="2">Estágio</option>
                <option value="3">Bolsa</option>
            </select>
            </div>
          <div class="textarea" >
          <span class="details">Área</span>
            <select name="course_id" required style="
              width: 50%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding: 3px;
              border: 1px solid #ccc;
              border-bottom-width: 2px;
              transition: all 0.3s ease;">
              <?php
               foreach ($course_list as $course) {

                echo "<option value='" . $course['id']  . "' selected>" . $course['name'] . "</option>";
                    

              }
              ?>
            </select>
            </div>

            <div class="textarea" >
            <span class="details">Modo</span>
              <select name="remote" required style="
              width: 50%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding: 3px;
              border: 1px solid #ccc;
              border-bottom-width: 2px;
              transition: all 0.3s ease;">
                <option value="0"></option>
                <option value="1">Remoto</option>
                <option value="2">Presencial</option>
                <option value="3">Híbrido</option>
            </select>
            </div>

            <div class="textarea" >
            <span class="details">Requisitos</span>
              <select name="requisites" required style="
              width: 50%;
              outline: none;
              font-size: 16px;
              border-radius: 5px;
              padding: 3px;
              border: 1px solid #ccc;
              border-bottom-width: 2px;
              transition: all 0.3s ease;">
                <?php
               foreach ($graduation_list as $grad) {

                echo "<option value='" . $grad['id']  . "' selected>" . $grad['name'] . "</option>";
        
              }
              ?>
            </select>
            </div>

            
            
            
            <!-- Catré modi apagada
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
            -->

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
      echo "<script>alert('Por favor coloque inteiros no campo do salário.');</script>";
      break;

    case 2:
      echo "<script>alert('Por preencha o campo \"Requisitos\".');</script>";
      break;

    case 3:
      echo "<script>alert('Por preencha o campo \"Tipo de Oferta\".');</script>";
      break;

    case 4:
      echo "<script>alert('Por preencha o campo \"Modo\".');</script>";
      break;
    
    case 5:
      echo "<script>alert('Por preencha o campo \"Area\".');</script>";
      break;
    

    default:
      echo "<script>alert('Um erro inesperado ocorreu. Contacte o administrador.');</script>";
      break;
  }
}


?>