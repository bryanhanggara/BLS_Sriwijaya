const name = document.getElementById('name');
const pw = document.getElementById('pw');
const reg_btn = document.getElementById('register_btn');


const reg_name = localStorage.getItem('name')
const reg_pw = localStorage.getItem('pw')
const cek_log_email = localStorage.getItem('login_email')
const cek_log_pw = localStorage.getItem('login_pw')

if (reg_name, reg_pw, cek_log_email, cek_log_pw != null) {
    window.location = 'dashboard_mulai.html'
}
reg_name.value = localStorage.getItem('reg_name')
reg_pw.value = localStorage.getItem('reg_pw')

register_button.addEventListener('click', function () {

    const valid_email = localStorage.getItem('reg_name')
    const valid_pw = localStorage.getItem('reg_pw')

    if (reg_name.value === valid_email || reg_pw.value === valid_pw) {
        alert('Akun telah dibuat! Masuk sekarang!')
        return false
    }

    if (reg_name.value, reg_pw.value === '') {
        alert('Data tidak valid!')
        localStorage.removeItem('reg_email')
        localStorage.removeItem('reg_pw')
        return false
    } 
    
    else {
        localStorage.setItem('reg_email', reg_name.value)
        localStorage.setItem('reg_pw', reg_pw.value)
        alert('Daftar berhasil!')
    }

})