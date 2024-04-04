function translateTo(language) {
    // Get all elements that contain text you want to translate
    const elementsToTranslate = document.querySelectorAll('#about p');
    
    // Example translation mappings
    const translations = {
      'id': {
        'History of INAMICE': 'Sejarah INAMICE',
        'About INAMICE 2024': 'Tentang INAMICE 2024',
        'INAMICE is an official brand convention that was first promoted by Mrs. Christina L. Rudatin, Chairperson of the MICE Study Program Forum (FPS) who is also a lecturer in MICE at Politeknik Negeri Jakarta.': 'INAMICE adalah official brand convention yang diusung pertama kali oleh Ibu Christina L. Rudatin, Ketua Forum Program Studi (FPS) MICE Yang sekaligus dosen MICE Politeknik Negeri Jakarta.',
        'Successfully organized by PNJ MICE students class of 2011, INAMICE has become a biennial event with different themes and topics.': 'Sukses diselenggarakan oleh mahasiswa MICE PNJ angkatan 2011, INAMICE menjadi acara yang wajib dua tahun sekali dengan tema dan topik yang berbeda.',
        'In collaboration with the Indonesian MICE Study Program Forum (FPS), the Indonesia Congress and Convention Association (INCCA) and the MICE Professional Certification Institute (LSP), Politeknik Negeri Jakarta has organized a national convention that contributes to determining the future of Indonesian human resources engaged in the MICE sector in facing the ASEAN economic community.': 'Bekerjasama dengan Forum Program Studi (FPS) MICE Indonesia, Indonesia Congress and Convention Association (INCCA) dan Lembaga Sertifikasi Profesi (LSP) MICE, Politeknik Negeri Jakarta telah menyelenggarakan sebuah konvensi nasional yang ikut andil menjadi penentu masa depan sumber daya manusia negara Indonesia yang bergerak di bidang MICE dalam menghadapi masyarakat ekonomi ASEAN.',
        'About INAMICE 2024': 'Tentang INAMICE 2024',
        'INAMICE is an activity that is regularly scheduled and carried out by Politeknik Negeri Jakarta as a meeting forum between industry, academics, government, and various MICE Industry stakeholders to discuss actual issues or developments in the MICE industry every year. INAMICE has been held since 2014 and in 2024 this is the 7th organization with a big theme discussing the repositioning of Jakarta.': 'INAMICE merupakan kegiatan yang diagendakan secara rutin dan dilaksanakan oleh Politeknik Negeri Jakarta sebagai sebuah forum pertemuan antara dunia industri, akademisi, pemerintah, dan berbagai lingkup stakeholder Industri MICE untuk membahas isu-isu aktual ataupun perkembangan industri MICE ditiap tahunnya. INAMICE telah diselenggarakan sejak tahun 2014 dan di tahun 2024 ini merupakan penyelenggaraan ke-7 dengan tema besar membahas mengenai reposisi Jakarta.'
        // Add more translations as needed
      },
      'en': {
        'Sejarah INAMICE': 'History of INAMICE',
        'Tentang INAMICE 2024': 'About INAMICE 2024',
        'INAMICE adalah official brand convention yang diusung pertama kali oleh Ibu Christina L. Rudatin, Ketua Forum Program Studi (FPS) MICE Yang sekaligus dosen MICE Politeknik Negeri Jakarta.': 'INAMICE is an official brand convention that was first promoted by Mrs. Christina L. Rudatin, Chairperson of the MICE Study Program Forum (FPS) who is also a lecturer in MICE at Politeknik Negeri Jakarta.',
        'Sukses diselenggarakan oleh mahasiswa MICE PNJ angkatan 2011, INAMICE menjadi acara yang wajib dua tahun sekali dengan tema dan topik yang berbeda.': 'Successfully organized by PNJ MICE students class of 2011, INAMICE has become a biennial event with different themes and topics.',
        'Bekerjasama dengan Forum Program Studi (FPS) MICE Indonesia, Indonesia Congress and Convention Association (INCCA) dan Lembaga Sertifikasi Profesi (LSP) MICE, Politeknik Negeri Jakarta telah menyelenggarakan sebuah konvensi nasional yang ikut andil menjadi penentu masa depan sumber daya manusia negara Indonesia yang bergerak di bidang MICE dalam menghadapi masyarakat ekonomi ASEAN.': 'In collaboration with the Indonesian MICE Study Program Forum (FPS), the Indonesia Congress and Convention Association (INCCA) and the MICE Professional Certification Institute (LSP), Politeknik Negeri Jakarta has organized a national convention that contributes to determining the future of Indonesian human resources engaged in the MICE sector in facing the ASEAN economic community.',
        'Tentang INAMICE 2024': 'About INAMICE 2024',
        'INAMICE merupakan kegiatan yang diagendakan secara rutin dan dilaksanakan oleh Politeknik Negeri Jakarta sebagai sebuah forum pertemuan antara dunia industri, akademisi, pemerintah, dan berbagai lingkup stakeholder Industri MICE untuk membahas isu-isu aktual ataupun perkembangan industri MICE ditiap tahunnya. INAMICE telah diselenggarakan sejak tahun 2014 dan di tahun 2024 ini merupakan penyelenggaraan ke-7 dengan tema besar membahas mengenai reposisi Jakarta.': 'INAMICE is an activity that is regularly scheduled and carried out by Politeknik Negeri Jakarta as a meeting forum between industry, academics, government, and various MICE Industry stakeholders to discuss actual issues or developments in the MICE industry every year. INAMICE has been held since 2014 and in 2024 this is the 7th organization with a big theme discussing the repositioning of Jakarta.'
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
  