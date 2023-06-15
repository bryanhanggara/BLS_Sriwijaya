function store(){

    var myName = document.getElementById('myName')

    var name = document.getElementById('name');
    var pw = document.getElementById('pw');
    var lowerCaseLetters = /[a-z]/g;
    var upperCaseLetters = /[A-Z]/g;
    var numbers = /[0-9]/g;

    if(name.value.length == 0){
        alert('Silakan isi e-mail');

    }else if(pw.value.length == 0){
        alert('Silakan isi kata sandi');

    }else if(name.value.length == 0 && pw.value.length == 0){
        alert('Silahkan isi e-mail dan password');
    
    }else if(pw.value.length > 8){
        alert('Lebih dari 8 huruf');

    }else if(!pw.value.match(numbers)){
        alert('Tambahkan 1 nomor');

    }else if(!pw.value.match(upperCaseLetters)){
        alert('Tambahkan 1 huruf besar');

    }else if(!pw.value.match(lowerCaseLetters)){
        alert('Tambahkan 1 huruf kecil');

    }else{
        localStorage.setItem('myName', myName.value)
        localStorage.setItem('name', name.value);
        localStorage.setItem('pw', pw.value);
        alert('Akun Anda berhasil dibuat');
    }
}

//checking
    
function check() {
    var userName = document.getElementById('userName');
    var userPw = document.getElementById('userPw');

    var storedName = localStorage.getItem('name');
    var storedPw = localStorage.getItem('pw');

    if(userName.value == storedName && userPw.value == storedPw){            
        localStorage.setItem('userName', userName.value);
        localStorage.setItem('userPw', userPw.value);
        
        alert('Berhasil masuk!');
        return location.href = "dashboard.html";

    } else {
        return alert('E-mail/kata sandi yang Anda masukkan salah!'); 
    } 
}
