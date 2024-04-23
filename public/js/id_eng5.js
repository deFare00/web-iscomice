function translateTo(language) {
    // Get all elements that contain text you want to translate
    const elementsToTranslate = document.querySelectorAll('h1, li');
    
    // Example translation mappings
    const translations = {
      'id': {
        'Registration Procedure': 'Tata Cara Pendaftaran',
        'Open the inamice.id website': 'Membuka website inamice.id',
        'Click the three lines on the top right': 'Klik garis tiga di kanan atas',
        'Click the "Registration" section': 'Klik bagian "Registration"',
        'Choose the type of attendance': 'Memilih jenis kehadiran',
        'Participants can attend onsite and online': 'Peserta dapat hadir secara Onsite dan Online',
        'When participants choose Onsite, they will continue with the data filling process including :': 'Ketika peserta memilih Onsite maka akan dilanjutkan dengan proses pengisian data diantaranya :',
        'Filling in personal data': 'Mengisi data diri',
        'Fill in CHSE data': 'Mengisi data CHSE',
        'Choose a payment method': 'Pilih metode pembayaran',
        'Upload proof of payment': 'Unggah bukti pembayaran',
        'Click “register”': 'Klik "daftar"',
        'Get confirmation email.': 'Mendapatkan konfirmasi email.',
        'For participants who have the type of attendance Online, it will continue with the data filling process including :': 'Untuk peserta yang memiliki jenis attendance Online, maka akan dilanjutkan dengan proses pengisian data diantaranya :',
        'Zoom meetings will be provided H-7 of the INAMICE event.': 'Zoom meeting akan diberikan H-7 acara INAMICE.',
                // Add more translations as needed
      },
      'en': {
        'Tata Cara Pendaftaran': 'Registration Procedure',
        'Membuka website inamice.id': 'Open the inamice.id website',
        'Klik garis tiga di kanan atas': 'Click the three lines on the top right',
        'Klik bagian "Registration"': 'Click the "Registration" section',
        'Memilih jenis kehadiran': 'Choose the type of attendance',
        'Peserta dapat hadir secara Onsite dan Online': 'Participants can attend onsite and online',
        'Ketika peserta memilih Onsite maka akan dilanjutkan dengan proses pengisian data diantaranya :': 'When participants choose Onsite, they will continue with the data filling process including :',
        'Mengisi data diri': 'Filling in personal data',
        'Mengisi data CHSE': 'Fill in CHSE data',
        'Pilih metode pembayaran': 'Choose a payment method',
        'Unggah bukti pembayaran': 'Upload proof of payment',
        'Klik "daftar"': 'Click “register”',
        'Mendapatkan konfirmasi email.': 'Get confirmation email.',
        'Untuk peserta yang memiliki jenis attendance Online, maka akan dilanjutkan dengan proses pengisian data diantaranya :': 'For participants who have the type of attendance Online, it will continue with the data filling process including :',
        'Zoom meeting akan diberikan H-7 acara INAMICE.': 'Zoom meetings will be provided H-7 of the INAMICE event.',
    },
    };
    
    // Loop through each element and translate its text content
    elementsToTranslate.forEach(element => {
      const currentText = element.innerHTML.trim(); // Gunakan innerHTML untuk mempertahankan tag <strong>
      if (translations[language][currentText]) {
        element.innerHTML = translations[language][currentText]; // Gunakan innerHTML untuk mempertahankan tag <strong>
      }
    });
  }
  