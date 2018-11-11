
$("form input[type=text],form input[type=password]").on("change invalid", function() {
    var textfield = $(this).get(0);
    
    // hapus dulu pesan yang sudah ada
    textfield.setCustomValidity("");
    
    if (!textfield.validity.valid) {
      textfield.setCustomValidity("Please fill out this field!");  
    }
});