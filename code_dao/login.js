// Xử lý đăng ký
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Ngăn chặn gửi form mặc định

    var formData = new FormData(this);

    fetch('register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data); // In thông báo từ máy chủ
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// Xử lý đăng nhập
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// Xử lý đăng xuất
function logout() {
    fetch('logout.php')
    .then(response => response.text())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
console.log(1234);