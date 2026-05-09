// ==========================
// DARK MODE
// ==========================

const body = document.body;

// Load dark mode preference saat pertama kali
if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
}
document.addEventListener('DOMContentLoaded', function() {
    const btnTheme = document.getElementById('btn-theme');
    
    if (btnTheme) {
        if (body.classList.contains('dark-mode')) {
            btnTheme.innerText = "Mode Terang";
        } else {
            btnTheme.innerText = "Mode Gelap";
        }
        btnTheme.addEventListener('click', function () {
            body.classList.toggle('dark-mode');

            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('theme', 'dark');
                btnTheme.innerText = "Mode Terang";
            } else {
                localStorage.removeItem('theme');
                btnTheme.innerText = "Mode Gelap";
            }
        });
    }
    const navbar = document.querySelector('.navbar');
    if (navbar && !document.getElementById('btn-theme')) {
        const themeBtn = document.createElement('button');
        themeBtn.id = 'btn-theme';
        themeBtn.className = 'btn btn-outline-light btn-sm ms-auto';
        themeBtn.textContent = body.classList.contains('dark-mode') ? 'Mode Terang' : 'Mode Gelap';
        themeBtn.addEventListener('click', function() {
            body.classList.toggle('dark-mode');
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('theme', 'dark');
                themeBtn.textContent = 'Mode Terang';
            } else {
                localStorage.removeItem('theme');
                themeBtn.textContent = 'Mode Gelap';
            }
        });
        navbar.querySelector('.container').appendChild(themeBtn);
    }
});

// ==========================
// SHOW/HIDE PASSWORD
// ==========================

document.addEventListener('DOMContentLoaded', function() {
    const showPasswordCheckbox = document.getElementById('showPassword');
    const passwordInput = document.getElementById('password');

    if (showPasswordCheckbox && passwordInput) {
        showPasswordCheckbox.addEventListener('change', function() {
            if (this.checked) {
                passwordInput.setAttribute('type', 'text');
            } else {
                passwordInput.setAttribute('type', 'password');
            }
        });
    }
});

// ==========================
// FITUR BELI
// ==========================

document.addEventListener('DOMContentLoaded', function() {
    const tombolBeli = document.querySelectorAll('.btn-detail');

    tombolBeli.forEach(function (button) {
        button.addEventListener('click', function (e) {
            const cardBody = e.target.closest('.card-body');
            const stokElement = cardBody.querySelector('.stok-text');
            let stok = parseInt(stokElement.innerText.replace("Stok: ", ""));

            if (stok > 0) {
                stok--;
                stokElement.innerText = "Stok: " + stok;
                alert("Berhasil membeli: " + cardBody.querySelector('.card-title').innerText);
            } else {
                alert("Stok habis!");
                button.disabled = true;
                button.innerText = "Habis";
            }
        });
    });
});
