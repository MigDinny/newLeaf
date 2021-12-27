<div class="text">Send a message</div>
<br><br>
    <div class="container">
    <br>
    <form method="post" action = "/" onsubmit="send_message();">
        <div class="input-box">
            <span class="comment">Deixe aqui o seu comentário</span><br>
            <textarea rows="10" cols="100" id="comment" name="comment"></textarea>
        </div>
        <input type="submit" name="submit" value="Enviar"/>
    </form>
    </div>


<script>
    function send_message() { 
        var comment = document.getElementById("comment").value;
        alert('Obrigado pelo seu feedback ' + comment);
    }



</script>
