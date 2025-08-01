document.addEventListener('DOMContentLoaded', function () {
    const msg = document.getElementById('mensagem');
    if (msg) {
        setTimeout(() => {
            msg.style.transition = 'opacity 1s';
            msg.style.opacity = '0';
            setTimeout(() => msg.remove(), 1000); 
        }, 3000);
    }
});
