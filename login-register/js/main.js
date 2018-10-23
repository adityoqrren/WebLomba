function validasi(){
    var username = document.getElementById("username").Value;
    var password = document.getElementById("password").Value;
    if (username != "" && password!="") {
        return true;
    }else{
        alert('Username dan Password harus di isi !');
        return false;
    }
}