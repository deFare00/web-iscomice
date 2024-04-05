function translateTo(language) {
    // Get all elements that contain text you want to translate
    const elementsToTranslate = document.querySelectorAll('#registration h2, #registration p, #registration label, #registration option, #registration button');
    
    // Example translation mappings
    const translations = {
      'id': {
        'Fill in the registration data. It will take a couple of minutes.': 'Isi detail pendaftaran Anda. Ini akan membutuhkan waktu beberapa menit.',
        'Do you have any specific health conditions that may need to be considered?': 'Apakah Anda memiliki kondisi kesehatan tertentu yang mungkin perlu dipertimbangkan?',
        'Are you currently taking any medications for your health condition?': 'Apakah Anda saat ini sedang mengonsumsi obat untuk kondisi kesehatan Anda?',
        'Are there any special prescription medications that you need to carry or give to the medical team in an emergency situation?': 'Apakah ada resep obat khusus yang perlu Anda bawa atau berikan kepada tim medis dalam situasi darurat?',
        'Do you have any allergies to certain medications that need to be noted?': 'Apakah Anda memiliki alergi terhadap obat tertentu yang perlu diperhatikan?',
        'Next': 'Selanjutnya',
        'We take privacy issues seriously. You can be sure that your personal data is securely protected.': 'Kami menangani masalah privasi dengan serius. Anda dapat yakin bahwa data pribadi Anda terlindungi dengan aman.',
        // Add more translations as needed
      },
      'en': {
        'Isi detail pendaftaran Anda. Ini akan membutuhkan waktu beberapa menit.': 'Fill in the registration data. It will take a couple of minutes.',
        'Apakah Anda memiliki kondisi kesehatan tertentu yang mungkin perlu dipertimbangkan?': 'Do you have any specific health conditions that may need to be considered?',
        'Apakah Anda saat ini sedang mengonsumsi obat untuk kondisi kesehatan Anda?': 'Are you currently taking any medications for your health condition?',
        'Apakah ada resep obat khusus yang perlu Anda bawa atau berikan kepada tim medis dalam situasi darurat?': 'Are there any special prescription medications that you need to carry or give to the medical team in an emergency situation?',
        'Apakah Anda memiliki alergi terhadap obat tertentu yang perlu diperhatikan?': 'Do you have any allergies to certain medications that need to be noted?',
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
  