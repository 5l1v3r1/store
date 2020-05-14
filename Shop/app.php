<?php

return [
    'invalid_vat_format' => 'Nomor tong yang diberikan memiliki format yang salah',
    'security-warning' => 'Aktivitas mencurigakan ditemukan !!!',
    'nothing-to-delete' => 'Tidak ada yang dihapus',

    'layouts' => [
        'my-account' => 'Akun saya',
        'profile' => 'Profil',
        'address' => 'Alamat',
        'reviews' => 'Ulasan',
        'wishlist' => 'Daftar Keinginan',
        'orders' => 'Pesanan',
        'downloadable-products' => 'Produk yang bisa di unduh'
    ],

    'common' => [
        'error' => 'Kesalahan tidak diketahui, silahkan mengulang lagi nanti.',
        'no-result-found' => 'Kami tidak dapat menemukan itu.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Halaman Beranda',
        'featured-products' => 'Produk Pilihan',
        'new-products' => 'Produk Baru',
        'verify-email' => 'Verifikasi Alamat Email',
        'resend-verify-email' => 'Kirim ulang Verifikasi Alamat Email'
    ],

    'header' => [
        'title' => 'Akun',
        'dropdown-text' => 'Kelola keranjang, Pesanan & Daftar List',
        'sign-in' => 'Mendaftar',
        'sign-up' => 'Masuk',
        'account' => 'Akun',
        'cart' => 'Keranjang',
        'profile' => 'Profil',
        'wishlist' => 'Daftar Keinginan',
        'cart' => 'Keranjang',
        'logout' => 'Keluar',
        'search-text' => 'Cari produk'
    ],

    'minicart' => [
        'view-cart' => 'Lihat Daftar Belanja',
        'checkout' => 'Checkout',
        'cart' => 'Keranjang',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Berlangganan bersama kami',
        'subscribe' => 'Berlangganan',
        'locale' => 'Lokal',
        'currency' => 'Mata uang',
    ],

    'subscription' => [
        'unsubscribe' => 'Batal Berlangganan',
        'subscribe' => 'Berlangganan',
        'subscribed' => 'Anda sekarang berlangganan email.',
        'not-subscribed' => 'Anda tidak dapat berlangganan email, silakan coba lagi nanti.',
        'already' => 'Anda sudah berlangganan saat ini.',
        'unsubscribed' => 'Anda berhenti berlangganan email.',
        'already-unsub' => 'Anda sudah berhenti berlangganan.',
        'not-subscribed' => 'Error! Email tidak dapat dikirim saat ini, silakan coba lagi nanti.'
    ],

    'search' => [
        'no-results' => 'Tidak dapat menemukan apapun.',
        'page-title' => config('app.name') . ' - Pencarian',
        'found-results' => 'Pencarian ditemukan',
        'found-result' => 'Pencarian ditemukan'
    ],

    'reviews' => [
        'title' => 'Judul',
        'add-review-page-title' => 'Tambah Ulasan',
        'write-review' => 'Tulis Ulasan',
        'review-title' => 'Harap isikan judul Ulasan',
        'product-review-page-title' => 'Ulasan Produk',
        'rating-reviews' => 'Peringkat & Ulasan',
        'submit' => 'KIRIM',
        'delete-all' => 'Seluruh Ulasan Berhasil Dihapus',
        'ratingreviews' => ':rating Peringkat & :review Ulasan',
        'star' => 'Bintang',
        'percentage' => ':percentage %',
        'id-star' => 'star',
        'name' => 'Nama',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Akun sudah ada!',
            'title' => 'Masuk'
        ],

        'signup-form' => [
            'page-title' => 'Buat akun baru',
            'title' => 'Mendaftar',
            'firstname' => 'Nama',
            'lastname' => 'Nama terakhir',
            'email' => 'Alamat Email',
            'password' => 'Kata sandi',
            'confirm_pass' => 'Konfirmasi Kata sandi',
            'button_title' => 'Mendaftar',
            'agree' => 'Terima',
            'terms' => 'Syarat',
            'conditions' => 'Kondisi',
            'using' => 'Dengan mendaftar',
            'agreement' => 'Penyetujui',
            'success' => 'Berhasil membuat akun baru, silahkan Masuk',
            'success-verify' => 'Berhasil membuat akun, Cek email sekarang.',
            'success-verify-email-unsent' => 'Akun berhasil dibuat, tapi Verifikasi email tidak terkirim.',
            'failed' => 'Error! Tidak dapat membuat akun anda, coba lagi nanti.',
            'already-verified' => 'Akun Anda sudah diverifikasi Atau coba mengirim verifikasi email baru lagi.',
            'verification-not-sent' => 'Error! Kesalahan saat mengirim Verifikasi Email.',
            'verification-sent' => 'Verifikasi Email Dikirim',
            'verified' => 'Akun anda sudah berhasil diverifikasi, Coba masuk sekarang.',
            'verify-failed' => 'Kami tidak dapat memverifikasi akun anda sekarang.',
            'dont-have-account' => 'Anda tidak membuat akun bersama kami.',
            'customer-registration' => 'Pendaftaran Akun berhasil!'
        ],

        'login-text' => [
            'no_account' => 'Tidak memiliki akun?',
            'title' => 'Mendaftar',
        ],

        'login-form' => [
            'page-title' => 'Masuk',
            'title' => 'Masuk',
            'email' => 'Email',
            'password' => 'Kata Sandi',
            'forgot_pass' => 'Lupa kata sandi?',
            'button_title' => 'Masuk',
            'remember' => 'Tetap masuk',
            'footer' => '© Copyright :year Mama Sayur, All rights reserved',
            'invalid-creds' => 'Coba periksa kolom kosong, lalu coba lagi.',
            'verify-first' => 'Verifikasi alamat email terlebih dahulu.',
            'not-activated' => 'Aktivasi anda menunggu persetujuan admin',
            'resend-verification' => 'Kirim ulang Verifikasi Email'
        ],

        'forgot-password' => [
            'title' => 'Lupa kata sandi',
            'email' => 'Alamt Email',
            'submit' => 'Kirim',
            'page_title' => 'Lupa kata sandi ?'
        ],

        'reset-password' => [
            'title' => 'Setel ulang kata sandi',
            'email' => 'Email terdaftar',
            'password' => 'Kata sandi',
            'confirm-password' => 'Konfirmasi Kata sandi',
            'back-link-title' => 'Kembali ke halaman masuk',
            'submit-btn-title' => 'Setel ulang kata sandi'
        ],

        'account' => [
            'dashboard' => 'Ubah Profil',
            'menu' => 'Menu',

            'profile' => [
                'index' => [
                    'page-title' => 'Profil',
                    'title' => 'Profil',
                    'edit' => 'Ubah',
                ],

                'edit-success' => 'Sukses mengubah profil.',
                'edit-fail' => 'Error! Profil tidak dapat di ubah, silahkan coba lagi.',
                'unmatch' => 'Kata sandi lama tidak cocok.',

                'fname' => 'Nama',
                'lname' => 'Nama akhir',
                'gender' => 'Jenis kelamin',
                'other' => 'Lain',
                'male' => 'Laki-Laki',
                'female' => 'Perempuan',
                'dob' => 'Tanggal lahir',
                'phone' => 'Nomor ponsel',
                'email' => 'Email',
                'opassword' => 'Kata sandi lama',
                'password' => 'Kata sandi',
                'cpassword' => 'Konfirmasi Kata sandi ',
                'submit' => 'Mengubah Profil',

                'edit-profile' => [
                    'title' => 'Ubah Profil',
                    'page-title' => 'Form Ubah Profil'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Alamat',
                    'title' => 'Alamat',
                    'add' => 'Tambah Alamat',
                    'edit' => 'Ubah',
                    'empty' => 'Anda tidak memiliki alamat tersimpan di sini, cobalah membuatnya dengan mengeklik tautan di bawah',
                    'create' => 'Buat Alamat',
                    'delete' => 'Hapus',
                    'make-default' => 'Atur Ulang',
                    'default' => 'Ulang',
                    'contact' => 'Kontak',
                    'confirm-delete' =>  'Apakah anda yakin menghapus alamat?',
                    'default-delete' => 'Alamat default tidak dapat diubah.',
                    'enter-password' => 'Isikan kata sandi anda',
                ],

                'create' => [
                    'page-title' => 'Tambah form alamat',
                    'company_name' => 'Nama Perusahaan',
                    'first_name' => 'Nama',
                    'last_name' => 'Nama akhir',
                    'vat_id' => 'ID Pajak',
                    'vat_help_note' => '[Catatan: Gunakan Kode Negara dengan Nomor PPN. Misalnya. INV01234567891]',
                    'title' => 'Tambah Alamat',
                    'street-address' => 'Alamat Jalan',
                    'country' => 'Negara',
                    'state' => 'Wilayan',
                    'select-state' => 'Pilih wilayah, negara bagian atau provinsi',
                    'city' => 'Kota',
                    'postcode' => 'Kode pos',
                    'phone' => 'Nomor ponsel',
                    'submit' => 'Simpan Alamat',
                    'success' => 'Alamat telah berhasil ditambahkan.',
                    'error' => 'Alamat tidak berhasil ditambahkan.'
                ],

                'edit' => [
                    'page-title' => 'Ubah Alamat',
                    'company_name' => 'Nama Perusahaan',
                    'first_name' => 'Nama',
                    'last_name' => 'Nama akhir',
                    'vat_id' => 'ID Pajak',
                    'title' => 'Ubah alamat',
                    'street-address' => 'Alamat jalan',
                    'submit' => 'Simpan alamat',
                    'success' => 'Alamat berhasil diubah.',
                ],
                'delete' => [
                    'success' => 'Alamat berhasil dihapus',
                    'failure' => 'Tidak dapat menghapus alamat',
                    'wrong-password' => 'Kata sandi salah !'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Pesanan',
                    'title' => 'Pesanan',
                    'order_id' => 'ID pesanan',
                    'date' => 'Tanggal',
                    'status' => 'Status',
                    'total' => 'Total',
                    'order_number' => 'Nomor pesanan',
                    'processing' => 'Memproses',
                    'completed' => 'Selesai',
                    'canceled' => 'Dibatalkan',
                    'closed' => 'Tutup',
                    'pending' => 'Ditunda',
                    'pending-payment' => 'Pembayaran Ditunda',
                    'fraud' => 'Penipuan'
                ],

                'view' => [
                    'page-tile' => 'Pesanan #:order_id',
                    'info' => 'Informasi',
                    'placed-on' => 'Tempat',
                    'products-ordered' => 'Produk Dipesan',
                    'invoices' => 'Oleh',
                    'shipments' => 'Pengirim',
                    'SKU' => 'SKU',
                    'product-name' => 'Nama',
                    'qty' => 'Jumlah',
                    'item-status' => 'Status',
                    'item-ordered' => 'Dipesan (:qty_ordered)',
                    'item-invoice' => 'Tagihan (:qty_invoiced)',
                    'item-shipped' => 'Dikirim (:qty_shipped)',
                    'item-canceled' => 'Dibatalkan (:qty_canceled)',
                    'item-refunded' => 'Dikembalikan (:qty_refunded)',
                    'price' => 'Harga',
                    'total' => 'Total',
                    'subtotal' => 'Subtotal',
                    'shipping-handling' => 'Pengiriman & Penanganan',
                    'tax' => 'Pajak',
                    'discount' => 'Diskon',
                    'tax-percent' => 'Persen pajak',
                    'tax-amount' => 'Jumlah Pajak',
                    'discount-amount' => 'Jumlah diskon',
                    'grand-total' => 'Total keseluruhan',
                    'total-paid' => 'Total dibayar',
                    'total-refunded' => 'Total dikembalikan',
                    'total-due' => 'Total Hutang',
                    'shipping-address' => 'Alamat Pengiriman',
                    'billing-address' => 'alamat tagihan',
                    'shipping-method' => 'metode pengiriman',
                    'payment-method' => 'metode pembayaran',
                    'individual-invoice' => 'Tagihan #:invoice_id',
                    'individual-shipment' => 'Pengiriman #:shipment_id',
                    'print' => 'Cetak',
                    'invoice-id' => 'ID Penagihan',
                    'order-id' => 'ID Pesanan',
                    'order-date' => 'Tanggal Pesanan',
                    'bill-to' => 'Pembayaran kepada',
                    'ship-to' => 'Dikirim ke',
                    'contact' => 'Kontak',
                    'refunds' => 'Kembalikan dana',
                    'individual-refund' => 'Pengembalian dana #:refund_id',
                    'adjustment-refund' => 'Pengaturan pengambilan dana',
                    'adjustment-fee' => 'Biaya Penyesuaian',
                    'cancel-btn-title' => 'Batalkan',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Daftar Keinginan',
                'title' => 'Daftar Keinginan',
                'deleteall' => 'Hapus semua',
                'moveall' => 'Pindahkan semua ke keranjang',
                'move-to-cart' => 'Pindahkan ke keranjang',
                'error' => 'Tidak dapat menambahkan produk ke Daftar Keinginan karena masalah yang tidak diketahui, silakan periksa kembali nanti',
                'add' => 'Item berhasil ditambahkan ke Daftar Keinginan',
                'remove' => 'Item berhasil dihapus dari Daftar Keinginan',
                'moved' => 'Item Berhasil Dipindahkan Ke Daftar Keinginan',
                'option-missing' => 'Opsi produk tidak ada, sehingga barang tidak dapat dipindahkan ke daftar Daftar Keinginan.',
                'move-error' => 'Item tidak dapat dipindahkan ke Daftar Keinginan, Silakan coba lagi nanti',
                'success' => 'Item berhasil ditambahkan ke Daftar Keinginan',
                'failure' => 'Item tidak dapat ditambahkan ke Daftar Keinginan, Silakan coba lagi nanti',
                'already' => 'Item sudah ada di Daftar Keinginan Anda',
                'removed' => 'Item berhasil dihapus dari Daftar Keinginan',
                'remove-fail' => 'Item tidak dapat dihapus dari Daftar Keinginan, Silakan coba lagi nanti',
                'empty' => 'Anda tidak memiliki barang apa pun di daftar keinginan Anda',
                'remove-all-success' => 'Semua item dari Daftar Keinginan Anda telah dihapus',
            ],

            'downloadable_products' => [
                'title' => 'Produk yang Dapat Diunduh',
                'order-id' => 'ID Pesanan',
                'date' => 'Tanggal',
                'name' => 'Judul',
                'status' => 'Status',
                'pending' => 'Tertunda',
                'available' => 'Tersedia',
                'expired' => 'Berakhir',
                'remaining-downloads' => 'Unduhan Tersisa',
                'unlimited' => 'Unlimited',
                'download-error' => 'Alamat url untuk download sudah kadaluarsa.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Reviews',
                    'page-title' => 'Reviews'
                ],

                'view' => [
                    'page-tile' => 'Review #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Belanja',
        'price-label' => 'Paling rendah',
        'remove-filter-link-title' => 'Bersihkan semua',
        'sort-by' => 'Sortir',
        'from-a-z' => 'Dari A-Z',
        'from-z-a' => 'Dari Z-A',
        'newest-first' => 'Terbaru',
        'oldest-first' => 'Lama',
        'cheapest-first' => 'Termurah',
        'expensive-first' => 'Termahal',
        'show' => 'Lihat',
        'pager-info' => 'Melihat :showing of :total Items',
        'description' => 'Deskripsi',
        'specification' => 'Spesifikasi',
        'total-reviews' => ':total Reviews',
        'total-rating' => ':total_rating Ratings & :total_reviews Reviews',
        'by' => 'By :name',
        'up-sell-title' => 'Kami menemukan produk yang mungkin anda suka!',
        'related-product-title' => 'Produk-produk terkait',
        'cross-sell-title' => 'Lebih banyak produk',
        'reviews-title' => 'Peringkat & Ulasan',
        'write-review-btn' => 'Menulis Ulasan',
        'choose-option' => 'Pilih opsi',
        'sale' => 'Jual',
        'new' => 'Baru',
        'empty' => 'Tidak ada produk yang tersedia di kategori ini',
        'add-to-cart' => 'Tambah ke keranjang',
        'buy-now' => 'Beli',
        'whoops' => 'Whoops!',
        'quantity' => 'Banyaknya',
        'in-stock' => 'Stock',
        'out-of-stock' => 'Stock Habis',
        'view-all' => 'Lihat semua',
        'select-above-options' => 'silakan pilih opsi di atas terlebih dahulu.',
        'less-quantity' => 'Kuantitas tidak boleh kurang dari satu.',
        'samples' => 'Sampel',
        'links' => 'Alamat url',
        'sample' => 'Sampel',
        'name' => 'Nama',
        'qty' => 'Banyaknya',
        'starting-at' => 'Mulai dari',
        'customize-options' => 'Kustomisasi Opsi',
        'choose-selection' => 'Pilih satu pilihan',
        'your-customization' => 'Kustomisasi Anda',
        'total-amount' => 'Jumlah total',
        'none' => 'None',
        'available' => 'Tersedia'
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Silakan pilih opsi sebelum membeli produk ini.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Beberapa bidang wajib diisi tidak ada untuk produk ini.',
                'missing_options' => 'Opsi untuk produk ini tidak ada.',
                'missing_links' => 'Tautan yang dapat diunduh tidak ada untuk produk ini.',
                'qty_missing' => 'Setidaknya satu produk harus memiliki lebih dari 1 kuantitas.',
                'qty_impossible' => 'Tidak dapat menambahkan lebih dari satu produk ini ke keranjang.'
            ],
            'create-error' => 'Mengalami beberapa masalah saat membuat.',
            'title' => 'Keranjang',
            'empty' => 'Keranjang belanja anda kosong',
            'update-cart' => 'Ubah Keranjang',
            'continue-shopping' => 'Lanjut Berbelanja',
            'proceed-to-checkout' => 'Lanjutkan ke pembayaran',
            'remove' => 'Copot',
            'remove-link' => 'Copot',
            'move-to-wishlist' => 'Pindahkan ke Daftar Keinginan',
            'move-to-wishlist-success' => 'Item berhasil dipindahkan ke Daftar Keinginan.',
            'move-to-wishlist-error' => 'Tidak dapat memindahkan item ke Daftar Keinginan, silakan coba lagi nanti.',
            'add-config-warning' => 'Silakan pilih opsi sebelum menambahkan ke troli.',
            'quantity' => [
                'quantity' => 'Jumlah',
                'success' => 'Kuantitas item berhasil di ubah',
                'illegal' => 'Kuantitas tidak boleh kurang dari satu.',
                'inventory_warning' => 'Kuantitas yang diminta tidak tersedia, silakan coba lagi nanti.',
                'error' => 'Tidak dapat memperbarui item saat ini, silakan coba lagi nanti.'
            ],

            'item' => [
                'error_remove' => 'Tidak ada item untuk dihapus dari keranjang.',
                'success' => 'Item berhasil ditambahkan ke troli.',
                'success-remove' => 'Item berhasil dihapus dari keranjang.',
                'error-add' => 'Item tidak dapat ditambahkan ke troli, silakan coba lagi nanti.',
            ],
            'quantity-error' => 'Kuantitas yang diminta tidak tersedia.',
            'cart-subtotal' => 'Subtotal Keranjang',
            'cart-remove-action' => 'Apakah Anda benar-benar ingin melakukan ini?',
            'partial-cart-update' => 'Hanya beberapa produk yang diperbarui',
            'link-missing' => '',
            'event' => [
                'expired' => 'Event ini telah kedaluwarsa.'
            ]
        ],

        'onepage' => [
            'title' => 'Pembayaran',
            'information' => 'Informasi',
            'shipping' => 'Pengiriman',
            'payment' => 'Metode Pembayaran',
            'complete' => 'Selesai',
            'billing-address' => 'alamat tagihan',
            'sign-in' => 'Masuk',
            'company-name' => 'Nama Perusahaan',
            'first-name' => 'Nama',
            'last-name' => 'Nama Akhir',
            'email' => 'Email',
            'address1' => 'Alamat jalan',
            'city' => 'Kota',
            'state' => 'negara bagian',
            'select-state' => 'Pilih wilayah, negara bagian atau provinsi',
            'postcode' => 'Kode pos',
            'phone' => 'Nomor Ponsel',
            'country' => 'negara',
            'order-summary' => 'Ringkasan Pesanan',
            'shipping-address' => 'Alamat Pengiriman',
            'use_for_shipping' => 'Kirim ke Alamat ini',
            'continue' => 'Selanjutnya',
            'shipping-method' => 'Pilih metode pengiriman',
            'payment-methods' => 'Pilih metode pembayaran',
            'payment-method' => 'Cara Pembayaran',
            'summary' => 'Ringkasan Pesanan',
            'price' => 'Harga',
            'quantity' => 'Jumlah',
            'billing-address' => 'alamat tagihan',
            'shipping-address' => 'Alamat Pengiriman',
            'contact' => 'Kontak',
            'place-order' => 'Alamat Pesanan',
            'new-address' => 'Tambahkan alamat baru',
            'save_as_address' => 'Simpan alamat ini',
            'apply-coupon' => 'Terapkan Kupon',
            'amt-payable' => 'Jumlah Hutang',
            'got' => 'Dapatkan',
            'free' => 'Gratis',
            'coupon-used' => 'Kupon Digunakan',
            'applied' => 'Terapan',
            'back' => 'Kembali',
            'cash-desc' => 'Bayar di tempat',
            'money-desc' => 'Transfer Tunai',
            'paypal-desc' => 'Standar Paypal',
            'free-desc' => 'Ini adalah pengiriman gratis',
            'flat-desc' => 'Ini adalah tarif tetap',
            'password' => 'Kata sandi',
            'login-exist-message' => 'Anda sudah memiliki akun di website kami, Masuk atau lanjutkan sebagai tamu.',
            'enter-coupon-code' => 'Masukkan kode kupon'
        ],

        'total' => [
            'order-summary' => 'Ringkasan Pesanan',
            'sub-total' => 'Item',
            'grand-total' => 'Total keseluruhan',
            'delivery-charges' => 'Ongkos kirim',
            'tax' => 'Pajak',
            'discount' => 'Diskon',
            'price' => 'Harga',
            'disc-amount' => 'Jumlah diskon',
            'new-grand-total' => 'Total Baru',
            'coupon' => 'Kupon',
            'coupon-applied' => 'Terapkan Kupon',
            'remove-coupon' => 'Hapus Kupon',
            'cannot-apply-coupon' => 'Tidak Dapat Menerapkan Kupon',
            'invalid-coupon' => 'Kode kupon tidak valid.',
            'success-coupon' => 'Kode kupon berhasil diterapkan.',
            'coupon-apply-issue' => 'Kode kupon tidak dapat diterapkan.'
        ],

        'success' => [
            'title' => 'Pesanan berhasil diselesaikan',
            'thanks' => 'Terima kasih atas pesanan anda!',
            'order-id-info' => 'Id pesanan Anda adalah #:order_id',
            'info' => 'Kami akan mengirim email kepada Anda, detail pesanan Anda, dan informasi pelacakan'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Konfirmasi Pesanan Baru',
            'heading' => 'Konfirmasi pesanan!',
            'dear' => 'Yang Terhormat :customer_name',
            'dear-admin' => 'Yang Terhormat :admin_name',
            'greeting' => 'Terima kasih atas Pesanan Anda :created_at',
            'greeting-admin' => 'ID Pesanan :order_id placed on :created_at',
            'summary' => 'Ringkasan Pesanan',
            'shipping-address' => 'Alamat Pengiriman',
            'billing-address' => 'alamat tagihan',
            'contact' => 'Kontak',
            'shipping' => 'metode pengiriman',
            'payment' => 'Cara Pembayaran',
            'price' => 'Harga',
            'quantity' => 'Jumlah',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Pengiriman & Penanganan',
            'tax' => 'Pajak',
            'discount' => 'Diskon',
            'grand-total' => 'Total keseluruhan',
            'final-summary' => 'Terima kasih telah menunjukkan minat Anda pada toko kami, kami akan mengirimkan nomor pelacakan setelah dikirim',
            'help' => 'Jika Anda memerlukan bantuan apa pun, silakan hubungi kami di :support_email',
            'thanks' => 'Terima kasih!',
            'cancel' => [
                'subject' => 'Konfirmasi Batalkan Pesanan',
                'heading' => 'Pesanan Dibatalkan',
                'dear' => 'Yang terhormat :customer_name',
                'greeting' => 'Anda Memesan dengan id pesanan #:order_id ditempatkan di :created_at telah dibatalkan',
                'summary' => 'Ringkasan Pesanan',
                'shipping-address' => 'Alamat Pengiriman',
                'billing-address' => 'alamat tagihan',
                'contact' => 'Kontak',
                'shipping' => 'metode pengiriman',
                'payment' => 'Cara Pembayaran',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Pengiriman & Penanganan',
                'tax' => 'Pajak',
                'discount' => 'Diskon',
                'grand-total' => 'Total keseluruhan',
                'final-summary' => 'Terima kasih telah menunjukkan minat Anda pada toko kami',
                'help' => 'Jika Anda memerlukan bantuan apa pun, silakan hubungi kami di :support_email',
                'thanks' => 'Terima kasih!',
            ]
        ],

        'invoice' => [
            'heading' => 'Tagihan anda #:invoice_id Untuk Pembelian #:order_id',
            'subject' => 'Tagihan untuk pesanan Anda #:order_id',
            'summary' => 'Ringkasan Tagihan',
        ],

        'shipment' => [
            'heading' => 'Pengiriman #:shipment_id  telah dibuat untuk Pesanan #:order_id',
            'inventory-heading' => 'Pengiriman baru #:shipment_id telah dibuat untuk Pesanan #:order_id',
            'subject' => 'Pengiriman untuk pesanan Anda #:order_id',
            'inventory-subject' => 'Pengiriman baru telah dibuat untuk Pesanan #:order_id',
            'summary' => 'Ringkasan Pengiriman',
            'carrier' => 'Pembawa',
            'tracking-number' => 'Melacak nomor',
            'greeting' => 'Pesanan :order_id telah ditempatkan di :created_at',
        ],

        'refund' => [
            'heading' => 'Pengembalian Uang Anda #:refund_id untuk Pesanan #:order_id',
            'subject' => 'Pengembalian uang untuk pesanan Anda #:order_id',
            'summary' => 'Ringkasan Pengembalian Uang',
            'adjustment-refund' => 'Pengembalian Uang Penyesuaian',
            'adjustment-fee' => 'Biaya Penyesuaian'
        ],

        'forget-password' => [
            'subject' => 'Reset Kata Sandi Pelanggan',
            'dear' => 'Yang terhormat :name',
            'info' => 'Anda akan menerima email ini karena kami menerima permintaan pengaturan ulang kata sandi untuk akun Anda',
            'reset-password' => 'Setel Ulang Kata Sandi',
            'final-summary' => 'Jika Anda tidak meminta pengaturan ulang kata sandi, tidak ada tindakan lebih lanjut yang diperlukan',
            'thanks' => 'Terima kasih!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Yang terhormat :customer_name',
                'username-email' => 'username/Email',
                'subject' => 'Registrasi Pelanggan Baru',
                'password' => 'Kata sandi',
                'summary' => 'Akun anda telah dibuat.
                 Detail akun Anda di bawah: ',
                'thanks' => 'Terimakasih!',
            ],

            'registration' => [
                'subject' => 'Registrasi Pelanggan Baru',
                'customer-registration' => 'Pelanggan Berhasil Mendaftar',
                'dear' => 'Yang terhormat :customer_name',
                'greeting' => 'Selamat datang dan terima kasih telah mendaftar dengan kami!',
                'summary' => 'Akun Anda sekarang telah berhasil dibuat dan Anda dapat masuk menggunakan alamat email dan kredensial kata sandi Anda. Setelah masuk, Anda akan dapat mengakses layanan lain termasuk meninjau pesanan sebelumnya, daftar harapan dan mengedit informasi akun Anda.',
                'thanks' => 'Thanks!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Verifikasi email',
                'subject' => 'Verifikasi email',
                'verify' => 'Verifikasi akun anda',
                'summary' => 'Ini adalah surat untuk memverifikasi bahwa alamat email yang Anda masukkan adalah milik Anda.
                 Silakan klik tombol Verifikasi Akun Anda di bawah ini untuk memverifikasi akun Anda.'
            ],

            'subscription' => [
                'subject' => 'Email Berlangganan',
                'greeting' => ' Selamat Datang di' . config('app.name') . ' - Berlangganan Email',
                'unsubscribe' => 'Berhenti berlangganan',
                'summary' => 'Terima kasih telah memasukkan saya ke kotak masuk Anda.' . config('app.name') . ' email, dan kami tidak ingin membanjiri kotak masuk Anda. Jika Anda masih tidak ingin menerima
                 berita pemasaran email terbaru maka pasti klik tombol di bawah ini.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Mama Sayur, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name Berhasil dibuat.',
        'update-success' => ':name Berhasil Diubah.',
        'delete-success' => ':name Berhasil Dihapus.',
        'submit-success' => ':name Berhasil dikirimkan.'
    ],
];
