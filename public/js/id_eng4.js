function translateTo(language) {
    // Get all elements that contain text you want to translate
    const elementsToTranslate = document.querySelectorAll('#registration h2, #registration p, #registration label, #registration option, #registration button');
    
    // Example translation mappings
    const translations = {
      'id': {
        'Fill in the registration data. It will take a couple of minutes.': 'Isi detail pendaftaran Anda. Ini akan membutuhkan waktu beberapa menit.',
        'Payment Method': 'Metode Pembayaran',
        'Select Your Payment Methods': 'Pilih Metode Pembayaran Anda',
        'Bank Transfer': 'Transfer Antar Bank',
        'Upload Payment Proof': 'Unggah Bukti Pembayaran',
        'Register': 'Daftar',
        'We take privacy issues seriously. You can be sure that your personal data is securely protected.': 'Kami menangani masalah privasi dengan serius. Anda dapat yakin bahwa data pribadi Anda terlindungi dengan aman.',
        // Add more translations as needed
      },
      'en': {
        'Isi detail pendaftaran Anda. Ini akan membutuhkan waktu beberapa menit.': 'Fill in the registration data. It will take a couple of minutes.',
        'Metode Pembayaran': 'Payment Method',
        'Pilih Metode Pembayaran Anda': 'Select Your Payment Methods',
        'Transfer Antar Bank': 'Bank Transfer',
        'Unggah Bukti Pembayaran': 'Upload Payment Proof',
        'Daftar': 'Register',
        'Kami menangani masalah privasi dengan serius. Anda dapat yakin bahwa data pribadi Anda terlindungi dengan aman.': 'We take privacy issues seriously. You can be sure that your personal data is securely protected.'
        // Add more translations as needed
      }
    };
    
    // Loop through each element and translate its text content
    elementsToTranslate.forEach(element => {
      const originalText = element.textContent.trim();
      if (translations[language][originalText]) {
        element.textContent = translations[language][originalText];
      }
    });
  }
  