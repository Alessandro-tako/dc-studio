import './bootstrap';
import 'bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';


document.addEventListener("DOMContentLoaded", function () {
    const text = "Benvenuto nel tuo Barber Shop di fiducia";
    const speed = 80; // velocità in ms
    let i = 0;

    function typeWriter() {
        if (i < text.length) {
            document.getElementById("typewriter").innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }

    typeWriter();
});