function sendEmail() {
    var comment = document.getElementById("comment").value;
    Email.send({
    Host: "smtp.gmail.com",
    Username : "newleafdei@gmail.com",
    Password : "nnfalgbqimsviwid",
    To : 'newleafdei@gmail.com',
    From : "newleafdei@gmail.com",
    Subject : "Resposta newleaf",
    Body : comment,
    });
    alert("Obrigado pelo seu feedback");
}

