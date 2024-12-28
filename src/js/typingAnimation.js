// Menunggu sampai halaman dimuat
window.onload = () => {
    const basiSpan = document.getElementById("basiSpan");

    // Pastikan elemen dengan id 'basiSpan' ada di DOM
    if (!basiSpan) {
        console.error('Element with id "basiSpan" not found.');
        return; // Jika elemen tidak ada, hentikan eksekusi
    }

    // Text to animate
    const text = "Basi";
    let index = 0;
    let isDeleting = false;

    // Create a blinking cursor
    const cursor = document.createElement("span");
    cursor.textContent = "|";
    cursor.style.display = "inline-block";
    cursor.style.animation = "blink 0.7s steps(2, start) infinite";
    cursor.style.color = "#8C4DF7";
    cursor.style.background = "#8C4DF7";
    cursor.style.zIndex = -1;
    basiSpan.parentNode.appendChild(cursor);

    // Add blinking animation style
    const style = document.createElement("style");
    style.textContent = `
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
    `;
    document.head.appendChild(style);

    function animateTyping() {
        if (!isDeleting) {
            // Mengetik
            if (index < text.length) {
                basiSpan.textContent += text[index];
                index++;
                setTimeout(animateTyping, 300); // Kecepatan mengetik
            } else {
                isDeleting = true;
                setTimeout(animateTyping, 1000); // Tunggu sebelum menghapus
            }
        } else {
            // Menghapus
            if (index > 0) {
                basiSpan.textContent = text.substring(0, index - 1);
                index--;
                setTimeout(animateTyping, 300); // Kecepatan menghapus
            } else {
                isDeleting = false;
                setTimeout(animateTyping, 800); // Tunggu sebelum mengetik lagi
            }
        }
    }

    // Mulai animasi typing
    animateTyping();
};
