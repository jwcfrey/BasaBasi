        // Membuat elemen lingkaran
        const cursor = document.createElement('div');
        Object.assign(cursor.style, {
            width: '25px',
            height: '25px',
            borderRadius: '50%',
            backgroundColor: '#8c4df7',
            position: 'fixed',
            pointerEvents: 'none',
            zIndex: '1000',
            mixBlendMode: 'normal',
            transition: 'width 0.7s ease, height 0.7s ease, transform 0.7s ease, opacity 0.2s ease',
        });
        
        // Membuat elemen teks di dalam lingkaran
        const cursorText = document.createElement('span');
        Object.assign(cursorText.style, {
            position: 'absolute',
            top: '50%',
            left: '50%',
            transform: 'translate(-50%, -50%)',
            color: '#ffffff',
            fontFamily: '"Nunito Sans", sans-serif',
            fontSize: '12px',
            opacity: '0',
            transition: 'opacity 0.2s ease',
        });
        cursorText.textContent = 'CLICK';
        cursor.appendChild(cursorText);
        
        document.body.appendChild(cursor);
        
        let cursorSize = 30;
        const enlargedSize = 56.5;
        
        // Fungsi untuk memindahkan kursor
        const moveCursor = (e) => {
            const cursorOffset = cursorSize / 2;
            cursor.style.left = `${e.clientX - cursorOffset}px`;
            cursor.style.top = `${e.clientY - cursorOffset}px`;
        };
        
        // Fungsi untuk memperbesar kursor
        const enlargeCursor = (text) => {
            cursorSize = enlargedSize;
            cursor.style.width = `${cursorSize}px`;
            cursor.style.height = `${cursorSize}px`;
            cursorText.style.opacity = '1';
            cursor.style.opacity = '0.7';
            cursorText.textContent = text;
        };
        
        // Fungsi untuk mengecilkan kursor
        const shrinkCursor = () => {
            cursorSize = 25;
            cursor.style.width = `${cursorSize}px`;
            cursor.style.height = `${cursorSize}px`;
            cursorText.style.opacity = '0';
            cursor.style.opacity = '1';
        };
        
        // Event listener untuk pergerakan mouse
        window.addEventListener('mousemove', moveCursor);
        
        // Menambahkan efek hover pada elemen tertentu
        const elements = document.querySelectorAll('button, i, a, .custom-file-label');
        elements.forEach((element) => {
            element.addEventListener('mouseenter', () => enlargeCursor('KLIK'));
            element.addEventListener('mouseleave', shrinkCursor);
        });
        
        // Menangani elemen dengan kelas khusus
        const cursorTarget = document.querySelector('.cursor-target');
        if (cursorTarget) {
            cursorTarget.addEventListener('mouseenter', () => enlargeCursor(''));
            cursorTarget.addEventListener('mouseleave', shrinkCursor);
        }