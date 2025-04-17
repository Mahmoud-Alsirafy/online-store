<script>
$("._form").submit(function(e) {
    e.preventDefault(); 
    var name = $("._name").val();
    var email = $("._email").val();
    var phone = $("._phone").val();
    var message = $("._message").val();

    console.log(name);
    


    if (!name) {
        $("._name").attr("placeholder", "enter your name");
    }
    if (!email) {
        $("._email").attr("placeholder", "enter your email");
    }
    if (!phone) {
        $("._phone").attr("placeholder", "enter your phone");
    }
    if (!message) {
        $("._message").attr("placeholder", "enter your message");
    }

    if (name && email && phone && message) {
        $.post("addMessage.php", {
            name: name,
            email: email,
            phone: phone,
            message: message
        }, function(data) {
            $(".call").html(data);

            setTimeout(() => {
                $("._name").val("");
                $("._email").val("");
                $("._phone").val("");
                $("._message").val("");
                $(".call").css("display", "none");
            }, 2000);
        })
    }
})
</script>