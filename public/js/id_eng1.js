function translateTo(language) {
    // Get all elements that contain text you want to translate
    const elementsToTranslate = document.querySelectorAll('li, #registration h2, #registration p, #registration label, #registration option, #registration button');
    
    // Example translation mappings
    const translations = {
      'id': {
        'Registration': 'Registrasi',
        'Fill in the registration data. It will take a couple of minutes.': 'Isi detail pendaftaran Anda. Ini akan membutuhkan waktu beberapa menit.',
        'Please select the category you want first.': 'Silahkan pilih terlebih dahulu kategori yang anda inginkan.',
        'Category': 'Kategori',
        'Select your Category': 'Pilih Kategori Anda',
        'Gender': 'Jenis Kelamin',
        'Select Your Gender': 'Pilih Jenis Kelamin Anda',
        'Male': 'Pria',
        'Female': 'Wanita',
        'Phone Number': 'Nomor Telepon',
        'Email': 'Email',
        'Address': 'Alamat',
        'Job': 'Pekerjaan',
        'Organization/Company/Institution': 'Organisasi/Perusahaan/Institusi',
        'Next': 'Selanjutnya',
        'We take privacy issues seriously. You can be sure that your personal data is securely protected.': 'Kami menangani masalah privasi dengan serius. Anda dapat yakin bahwa data pribadi Anda terlindungi dengan aman.',
        // Add more translations as needed
      },
      'en': {
        'Registrasi': 'Registration',
        'Isi detail pendaftaran Anda. Ini akan membutuhkan waktu beberapa menit.': 'Fill in the registration data. It will take a couple of minutes.',
        'Silahkan pilih terlebih dahulu kategori yang anda inginkan.': 'Please select the category you want first.',
        'Kategori': 'Category',
        'Pilih Kategori Anda': 'Select your Category',
        'Nama Lengkap': 'Full Name',
        'Jenis Kelamin': 'Gender',
        'Pilih Jenis Kelamin Anda': 'Select Your Gender',
        'Pria': 'Male',
        'Wanita': 'Female',
        'Nomor Telepon': 'Phone Number',
        'Email': 'Email',
        'Alamat': 'Address',
        'Pekerjaan': 'job',
        'Organisasi/Perusahaan/Institusi': 'Organization/Company/Institution',
        'Selanjutnya': 'Next',
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
  