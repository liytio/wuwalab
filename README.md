# WuwaLab - Wuthering Waves Wiki & Guide

WuwaLab adalah pusat informasi berbasis web untuk game Wuthering Waves. Menyediakan panduan pemula, tier list karakter berdasarkan mode *endgame* (Tower of Adversity & Whimpering Wastes), daftar senjata, hingga sistem Echo.

## 🔗 Tautan Akses
- **Source Code (GitHub):** [https://github.com/liytio/wuwalab.git]
- **Link Publish Web:** [[http://wuwalabepizy.gamer.gd](http://wuwalabepizy.gamer.gd)]

## 🧪 Pengujian Aplikasi (Berdasarkan Daily Project 6)
Berikut adalah hasil pengujian aplikasi berdasarkan aspek kualitas yang telah ditentukan pada fase desain:

| No | Aspek Kualitas | Skenario Pengujian | Hasil yang Diharapkan | Status | Keterangan |
|:--:|:---|:---|:---|:---:|:---|
| 1 | **Functionality** | Membuka detail "Lihat Build" pada daftar Resonator. | Menampilkan halaman detail karakter, senjata, dan rekomendasi tim tanpa error database. | ✅ Pass | Fitur berjalan sesuai desain. |
| 2 | **Usability** | Berpindah tab antara Tower of Adversity dan Whimpering Wastes pada halaman Tier List. | Tab berganti secara instan beserta konten di bawahnya, dan tombol aktif berubah warna. | ✅ Pass | Transisi lancar tanpa *reload* halaman. |

## 🛠️ Teknologi yang Digunakan
- Framework: Laravel (PHP)
- Styling: Tailwind CSS
- Database: MySQL
