function translateTo(language) {
    // Get all elements that contain text you want to translate
    const elementsToTranslate = document.querySelectorAll('#registration h2, #registration p, #registration label, #registration option, #registration button');
    
    // Example translation mappings
    const translations = {
      'id': {
        'Fill in the registration data. It will take a couple of minutes.': 'Isi detail pendaftaran Anda. Ini akan membutuhkan waktu beberapa menit.',
        'Do you have allergies to certain foods?': 'Apakah Anda memiliki alergi terhadap makanan tertentu?',
        'Yes': 'Ya',
        'No': 'Tidak',
        'If yes, what foods trigger your allergies?': 'Jika ya, makanan apa yang memicu alergi Anda?',
        'Are you allergic to certain food additives or preservatives?': 'Apakah Anda alergi terhadap bahan tambahan atau pengawet makanan tertentu?',
        'Yes': 'Ya',
        'No': 'Tidak',
        'If yes, which preservative triggers your allergy?': 'Jika ya, pengawet apa yang memicu alergi Anda?',
        'Is there a history of allergic reactions or health issues related to certain foods?': 'Apakah ada riwayat reaksi alergi atau masalah kesehatan yang berkaitan dengan makanan tertentu?',
        'Yes': 'Ya',
        'No': 'Tidak',
        'If yes, what is the history of reactions or health issues related to specific foods?': 'Jika ya, riwayat reaksi atau masalah kesehatan apa yang berkaitan dengan makanan tertentu?',
        'Are there any special instructions you would like to share regarding the preparation or handling of your food?': 'Apakah ada instruksi khusus yang ingin Anda bagikan mengenai persiapan atau penanganan makanan Anda?',
        'Are you a vegetarian or vegan?': 'Apakah Anda seorang vegetarian atau vegan?',
        'Next': 'Selanjutnya',
        'We take privacy issues seriously. You can be sure that your personal data is securely protected.': 'Kami menangani masalah privasi dengan serius. Anda dapat yakin bahwa data pribadi Anda terlindungi dengan aman.',
        // Add more translations as needed
      },
      'en': {
        'Isi detail pendaftaran Anda. Ini akan membutuhkan waktu beberapa menit.': 'Fill in the registration data. It will take a couple of minutes.',
        'Apakah Anda memiliki alergi terhadap makanan tertentu?': 'Do you have allergies to certain foods?',
        'Ya': 'Yes',
        'Tidak': 'No',
        'Jika ya, makanan apa yang memicu alergi Anda?': 'If yes, what foods trigger your allergies?',
        'Apakah Anda alergi terhadap bahan tambahan atau pengawet makanan tertentu?': 'Are you allergic to certain food additives or preservatives?',
        'Ya': 'Yes',
        'Tidak': 'No',
        'Jika ya, pengawet apa yang memicu alergi Anda?': 'If yes, which preservative triggers your allergy?',
        'Apakah ada riwayat reaksi alergi atau masalah kesehatan yang berkaitan dengan makanan tertentu?': 'Is there a history of allergic reactions or health issues related to certain foods?',
        'Ya': 'Yes',
        'Tidak': 'No',
        'Jika ya, riwayat reaksi atau masalah kesehatan apa yang berkaitan dengan makanan tertentu?': 'If yes, what is the history of reactions or health issues related to specific foods?',
        'Apakah ada instruksi khusus yang ingin Anda bagikan mengenai persiapan atau penanganan makanan Anda?': 'Are there any special instructions you would like to share regarding the preparation or handling of your food?',
        'Apakah Anda seorang vegetarian atau vegan?': 'Are you a vegetarian or vegan?',
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
  