<?php

$course_list = DB::query("SELECT * FROM course;");

?>

<div id="homepage-centered">
    <h1 style="font-weight: 300; font-size: 40px;">EstagIO</h1>
    <br>
    
    <div style="width: 25%; min-width: 250px;">
        <select id="select-search-course" onchange="selectCourse(this);">
            <?php
                $alreadySelected = false;

                if (!isset($_COOKIE['selected_course'])) {
                    echo "<option value='' disabled selected hidden>Escolhe um curso</option>";
                    $alreadySelected = true;
                }

                foreach ($course_list as $course) {
                    if ($alreadySelected == false && $course['id'] == $_COOKIE['selected_course']) {
                        echo "<option value='" . $course['id']  . "' selected>" . $course['name'] . "</option>";
                        $alreadySelected = true;
                    } else echo "<option value='" . $course['id']  . "'>" . $course['name'] . "</option>";
                }
                
                if ($alreadySelected == false) echo "<option value='' disabled selected hidden>Escolhe um curso</option>";
            ?>
        </select>


       
    </div>
    <br>
    <div class="card-row">
            <div class="card-column">
                
                <a href="?section=jobs">
                    <div class="card">
                        <h3>Empregos</h3>
                        <p>93 Propostas</p>
                        <p>Some text</p>
                    </div>
                </a>
            </div>

            <div class="card-column">

                <a href="?section=internships">
                    <div class="card">
                        <h3>Estágios</h3>
                        <p>159 Propostas</p>
                        <p>Some text</p>
                    </div>
                </a>
            </div>
            
            <div class="card-column">
                <a href="?section=research">
                    <div class="card">
                        <h3>Investigação</h3>
                        <p>65 Propostas</p>
                        <p>Some text</p>
                    </div>
                </a>
            </div>
            
        </div>
</div>

<script>
  $(document).ready(function () {
      $('#select-search-course').selectize({
          sortField: 'text'
      });
  });
</script>