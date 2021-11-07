<div id="homepage-centered">
    <h1 style="font-weight: 300; font-size: 40px;">EstagIO</h1>
    <br>
    
    <div style="width: 25%; min-width: 250px;">
        <select id="select-search-course">
            <option value="" disabled selected hidden>Escolhe o teu curso</option>
            <option value="1">Engenharia Informática</option>
            <option value="2">Medicina</option>
        </select>
    </div>
</div>

<script>
  $(document).ready(function () {
      $('#select-search-course').selectize({
          sortField: 'text'
      });
  });
</script>