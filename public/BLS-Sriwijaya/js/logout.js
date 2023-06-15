const valid_email = localStorage.getItem('reg_name')
const valid_pw = localStorage.getItem('reg_pw')

const login_email = document.getElementById ('userName');
const login_pw = document.getElementById ('userPw');

const user_login = document.getElementById('user-login')
const logout_button = document.getElementById('logout-btn')

window.onload = function () {
    if (login_email, login_pw === null) {
        alert('Silakan masuk terlebih dulu!')
        window.location = 'index.html'
        return false
    } else {
        logout_button.classList.remove('hidden')
        user_login.innerHTML =
            `
        <center class="font-sans text-md font-bold mt-20">
        <h1 class="text-2xl mb-4">Kamu Berhasil Login <span class="animate-pulse">👋🏻</span></h1><br>
        <span class="hover:shadow-inner bg-slate-200 text-yellow-700 text-md font-mono px-1 shadow-lg py-0.5 rounded-md inline-block mb-3">Username : <span class="text-green-700">${valid_name}</span></span><br>
        <span class="hover:shadow-inner bg-slate-200 text-yellow-700 text-md font-mono px-1 shadow-lg py-0.5 rounded-md inline-block mb-3">Email : <span class="text-green-700">${valid_email}</span></span><br>
        <span class="hover:shadow-inner bg-slate-200 text-yellow-700 text-md font-mono px-1 shadow-lg py-0.5 rounded-md inline-block mb-3">Sandi : <span class="text-green-700">${valid_sandi}</span></span><br>
        </center>
        `
    }
}

logout_button.addEventListener('click', function () {
    localStorage.removeItem('login_email')
    localStorage.removeItem('login_pw')
    window.location = 'index.html'
})