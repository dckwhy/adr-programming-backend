<?php

namespace Database\Seeders;

use App\Models\BusinessFaq;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessFaq::insert([
            [
                'faqb_id' => 'FQB-00001',
                'question' => 'Apa saja jasa yang disediakan?',
                'answer' => '<div><ul><li>Aplikasi berbasis website</li><li>Aplikasi berbasis desktop</li><li>Aplikasi berbasis mobile</li><li>Aplikasi gabungan dari website, desktop dan atau mobile</li></ul></div>',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00002',
                'question' => 'Apa saja aplikasi yang pernah dibuat?',
                'answer' => null,
                'link' => 'https://bit.ly/adr_demo',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00003',
                'question' => 'Untuk biayanya bagaimana?',
                'answer' => 'Silahkan kirim detail program yang ingin dibangun, nanti akan kami analisa dan harganya akan keluar. Kalau ada aplikasi yang sudah pernah dibuat orang lain, juga boleh dikirimkan.',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00004',
                'question' => 'Pembayaran lewat apa?',
                'answer' => 'Silakan kunjungi halaman metode pembayaran untuk mengetahui informasi terkait pembayaran',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00005',
                'question' => 'Saya belum terlalu terbayang fitur, alur, dan kebutuhan sistemnya, jika seperti itu bagaimana?',
                'answer' => 'Yuk diskusi di meet, nanti kami bantu.',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00006',
                'question' => 'Alur pengerjaan bagaimana?',
                'answer' => '-- INISIALISASI --
                    <ul>
                        <li>Client mengirim detail tugas (tugas) atau spesifikasi system yang ingin dibangun (KP/skripsi)</li>
                        <li>Kami baca dan menganalisa</li>
                        <li>Kami buatkan rangkuman terkait apa yang akan dibuat</li>
                        <li>Kami konfirmasikan hasil analisa</li>
                        <li>Client oke</li>
                    </ul>
                    -- BIAYA --
                    <ul>
                        <li>Kami tawarkan harga ke clien</li>
                        <li>Client setuju dengan harga yang ditawarkan</li>
                        <li>Client membayar DP sebagai tanda jadi (DEAL) / langsung pelunasan. 
                    Sistem DP dapat dilihat pada <b>FAQ poin 15</b></li>.
                    </ul>
                    -- PENGERJAAN TAHAP AWAL --
                    <ul>
                        <li>Kami mulai mengerjakan</li>
                        <li>Kami deliver progress berupa screenshot / video demo / diskusi di Google Meet</li>
                        <li>Client setuju</li>
                    </ul>
                    -- PENGERJAAN TAHAP FINAL --
                    <ul>
                        <li>Kami melanjutkan pembuatan sampai selesai</li>
                        <li>Program beres, Kami kembali kirimkan progress berupa screenshot / video demo / diskusi di Google Meet</li>
                        <li>Client setuju</li>
                        <li>Client mengirim pelunasan (jika menggunakan sistem DP)</li>
                    </ul>
                    -- MASA FREE REVISI --
                    <ul>
                        <li>Program / source code / hasil pengerjaan Kami kirim ke clien</li>
                        <li>Masa free revisi. <b>Lihat FAQ poin 19</b></li>
                    </ul>
                    -- SELESAI --
                    <ul>
                        <li>DONE</li>
                    </ul>
                    ',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00007',
                'question' => 'Apakah bisa dikerjakan terlebih dahulu baru membayar?',
                'answer' => 'Maaf, tidak bisa. Silahkan baca kembali poin 5!',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00008',
                'question' => 'Saya ragu, saya takut dibohongi',
                'answer' => 'Untuk menghilangkan keraguan clien, kami menyediakan beberapa opsi: <ul>
                <li>Menyediakan media untuk bertemu secara offline dengan admin. Alamat admin ada di FAQ poin 11.</li>
                <li>Bisa melalui Google Meet, Zoom atau media lain. Kemudian kami melakukan oncam.</li>
                </ul>',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00009',
                'question' => 'Saya ingin melihat proses pembuatan program (direkam dari 0 sampai jadi), apakah bisa?',
                'answer' => 'Bisa, tapi ada penambahan biaya. Silahkan bertanya (Contoh: <b>Saya menginginkan opsi record, biaya tambahannya berapa.?</b>)',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00010',
                'question' => 'Sosial media ADR Programming?',
                'answer' => 'Bisa cek sosial media admin Agus Darmawan :<p>https://web.facebook.com/Ghuss.Ciblex</p><p>https://www.instagram.com/adr_programming/</p><p>https://github.com/adarmawan117</p><p>https://www.youtube.com/channel/UCt7AYZOwAJL80ClEcHX8HPA</p><p>Link testimoni: https://www.facebook.com/adrprogramming atau di instagram.</p><p>Demo aplikasi yang pernah dibuat: https://bit.ly/adr_demo <b>(ON GOING)</b></p>',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00011',
                'question' => 'Alamat ADR Programming',
                'answer' => '<p>Admin beralamat di KP Mekarsari (Cisela), Desa Linggalaksana, Kecamatan Cikatomas, Kabupaten Tasikmalaya, RT/RW 02/07, Kode Pos 46193.</p><p>Sedangkan Dev ADRP tersebar di banyak tempat di Indonesia.</p>',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00012',
                'question' => 'Saya sering mendengar kata dev, maksudnya apa?',
                'answer' => '<p>Tidak semua project dikerjakan oleh admin. Terkadang admin membutuhkan orang lain untuk menyelesaikannya. 
Oleh karena itu admin mengajak orang yang kompeten untuk bergabung dengan ADR Programming.
Orang orang tersebut disebut Dev, yaitu orang orang yang membantu pengerjaan project di ADR Programming.</p>',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00013',
                'question' => 'Apa saja spesialis dari dev?',
                'answer' => '<ul><li>Android (JAVA, Kotlin, Flutter)</li><li>Web Native (HTML, CSS, JS, PHP)</li><li> Web Framework (Bootstrap, CI 3 dan 4, Laravel 7 dan 8, Vue JS, JQuery, React JS, dan masih banyak lagi <silahkan dikomunikasikan saja>)</li><li>UI UX</li></ul>',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00014',
                'question' => 'Admin spesialis di bagian apa?',
                'answer' => 'Admin Agus Darmawan spesialis di desktop programming, database, perancangan system menggunakan UML, dan pembuatan laporan skripsi.',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00015',
                'question' => 'Sistem DPnya bagaimana?',
                'answer' => 'Ketentuan DP ada 2:
                <p>1) Jika total harga yang disepakati diatas 2 juta, maka DP minimal 1.000.000.
                Contoh : 
                    <ul>
                    <li>Disepakati harga 3.500.000, maka DP 1.000.000.
                    <li>Disepakati harga 2.500.000, maka DP sama 1.000.000</li>
                    <li>Dsb</li></li>
                    </ul>
                </p>
                <p>
                2) Jika total harga yang disepakati kurang atau sama dengan 2 juta, maka DP minimal 50%.
                Contoh: 
                    <ul>
                        <li>Disepakati harga 1.500.000, maka DP 750.000</li>
                        <li>Disepakati harga 2.000.000, maka DP 1.000.000</li>
                        <li>Disepakati harga 1.000.000, maka DP 500.000</li>
                        <li>Dsb</li>
                    </ul>
                    Rumus : TotalHarga * 0.5 = DP
                </p>
                ',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00016',
                'question' => 'Uang yang saya kirimkan ke admin langsung diberikan kepada Dev ya?',
                'answer' => '<b>Tidak</b>. Pembayaran DP atau pelunasan semuanya disimpan di rekening atau akun DANA admin. Dev akan diberikan uangnya jika project sudah selesai.
                Jadi kalau Dev tiba tiba menghilang tanpa memberikan hasil, uangnya masih disimpan admin dan bisa dikembalikan kembali kepada client sesuai kesepakatan di awal.Atau bisa memanggil dev lain yang masih ready.',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00017',
                'question' => 'Kalau admin tidak bisa dihubungi saya harus kemana dan bagaimana?',
                'answer' => 'Kalau admin off (Ceklis 1), silahkan lakukan beberapa hal ini:
	            <ul>
                    <li> Cek Status Whatsapp admin. Admin akan memberikan informasi secara berkala tentang semua hal di Status Whatsapp. Jadi silahkan save kontak ini untuk mendapatkan informasi lebih lanjut.</li>
                    <li>Jika di SW tidak ditemukan informasi, silahkan telepon dengan call by number ke nomer admin. Kalau keluar rumah, hp admin tidak ada koneksi internet.</li>
                    <li>Silahkan kunjungi alamat admin. Alamat lengkap admin ada di poin 11.</li>
                </ul>',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00018',
                'question' => 'Kalau ada ketidak sesuaian program bagaimana?',
                'answer' => '<p>Revisi gratis jika ada bug, error, atau ketidaksesuaian system dengan fitur yang disepakati di awal. Dengan catatan masih dalam masa free revisi. Detail tentang free revisi bisa lihat FAQ poin 19.</p><p>Revisi berbayar jika:
                    <ul>
                        <li>Diluar batas free revisi</li>
                        <li>Diluar fitur yang disepakati di awal</li>
                    </ul>
                </p>',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00019',
                'question' => 'Apa itu free revisi, dan bagaimana systemnya?',
                'answer' => '<p>Free revisi adalah waktu yang diberikan kepada client untuk melakukan perbaikan program.</p><p>Free revisi akan hangus ketika melewati batas waktu yang diberikan. OLEH KARENA ITU, KETIKA PROGRAM DIKIRIM OLEH DEV, SEGERA LAKUKAN PENGECEKAN!.</p>',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'faqb_id' => 'FQB-00020',
                'question' => 'Saya ingin bayar dengan nyicil, apakah bisa?',
                'answer' => '<b>BISA</b>. Tapi tetap, pengerjaan dimulai setelah minimal DP, sesuai <b>poin 15</b>.',
                'link' => null,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
