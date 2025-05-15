import './bootstrap';
// app.js or custom.js
document.querySelector('.btn-info').addEventListener('click', function() {
    document.body.classList.toggle('sidebar-collapsed');
});
