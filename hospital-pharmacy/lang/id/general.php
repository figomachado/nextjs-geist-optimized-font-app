<?php

return [
    // Navigasi & Menu
    'dashboard' => 'Dasbor',
    'inventory' => 'Inventaris',
    'medicines' => 'Obat-obatan',
    'suppliers' => 'Pemasok',
    'purchases' => 'Pembelian',
    'prescriptions' => 'Resep',
    'reports' => 'Laporan',
    'settings' => 'Pengaturan',

    // Aksi
    'create' => 'Buat',
    'edit' => 'Ubah',
    'delete' => 'Hapus',
    'save' => 'Simpan',
    'cancel' => 'Batal',
    'confirm' => 'Konfirmasi',
    'back' => 'Kembali',
    'search' => 'Cari',
    'filter' => 'Filter',
    'print' => 'Cetak',
    'export' => 'Ekspor',

    // Status
    'status' => 'Status',
    'active' => 'Aktif',
    'inactive' => 'Tidak Aktif',
    'pending' => 'Menunggu',
    'approved' => 'Disetujui',
    'rejected' => 'Ditolak',
    'completed' => 'Selesai',
    'cancelled' => 'Dibatalkan',

    // Istilah Umum
    'name' => 'Nama',
    'code' => 'Kode',
    'description' => 'Deskripsi',
    'quantity' => 'Jumlah',
    'price' => 'Harga',
    'date' => 'Tanggal',
    'notes' => 'Catatan',
    'created_at' => 'Dibuat Pada',
    'updated_at' => 'Diperbarui Pada',
    'created_by' => 'Dibuat Oleh',
    'updated_by' => 'Diperbarui Oleh',

    // Pesan
    'success_create' => 'Data berhasil dibuat',
    'success_update' => 'Data berhasil diperbarui',
    'success_delete' => 'Data berhasil dihapus',
    'confirm_delete' => 'Apakah Anda yakin ingin menghapus data ini?',
    'error_occurred' => 'Terjadi kesalahan',
    'not_found' => 'Data tidak ditemukan',
    'access_denied' => 'Akses ditolak',

    // Pengaturan Bahasa
    'language_switcher' => 'Pilih Bahasa',
    'language_changed' => 'Bahasa berhasil diubah',
    'language' => [
        'id' => 'Bahasa Indonesia',
        'en' => 'Bahasa Inggris',
        'tet' => 'Bahasa Tetun',
        'pt' => 'Bahasa Portugis',
    ],

    // Khusus Obat
    'medicine' => [
        'label' => 'Obat',
        'plural_label' => 'Obat-obatan',
        'navigation_label' => 'Obat-obatan',
        'name' => 'Nama Obat',
        'description' => 'Deskripsi',
        'instructions' => 'Petunjuk Penggunaan',
        'side_effects' => 'Efek Samping',
        'generic_name' => 'Nama Generik',
        'category' => 'Kategori',
        'unit' => 'Satuan',
        'min_stock' => 'Stok Minimum',
        'max_stock' => 'Stok Maksimum',
        'reorder_point' => 'Titik Pemesanan Ulang',
        'current_stock' => 'Stok Saat Ini',
        'manufacturer' => 'Produsen',
        'storage_location' => 'Lokasi Penyimpanan',
        'expiry_date' => 'Tanggal Kadaluarsa',
        'batch_number' => 'Nomor Batch',
        'registration_number' => 'Nomor Registrasi',
        'purchase_price' => 'Harga Beli',
        'selling_price' => 'Harga Jual',
        'code' => 'Kode',
        'categories' => [
            'otc' => 'Obat Bebas',
            'prescription' => 'Obat Resep',
            'controlled' => 'Obat Terkontrol',
            'narcotic' => 'Narkotika',
            'psychotropic' => 'Psikotropika',
        ],
        'filters' => [
            'low_stock' => 'Stok Menipis',
            'expiring_soon' => 'Segera Kadaluarsa',
        ],
        'image' => 'Gambar Obat',
    ],

    'navigation' => [
        'inventory_management' => 'Manajemen Inventaris',
    ],

    // Khusus Resep
    'prescription' => [
        'number' => 'Nomor Resep',
        'date' => 'Tanggal Resep',
        'patient_name' => 'Nama Pasien',
        'patient_id' => 'ID Pasien',
        'doctor_name' => 'Nama Dokter',
        'diagnosis' => 'Diagnosis',
        'instructions' => 'Instruksi',
        'total_amount' => 'Total Biaya',
        'insurance_coverage' => 'Tanggungan Asuransi',
        'patient_payment' => 'Pembayaran Pasien',
    ],

    // Khusus Inventaris
    'inventory' => [
        'stock_level' => 'Level Stok',
        'minimum_stock' => 'Stok Minimum',
        'maximum_stock' => 'Stok Maksimum',
        'reorder_point' => 'Titik Pemesanan Ulang',
        'batch_number' => 'Nomor Batch',
        'expiry_date' => 'Tanggal Kadaluarsa',
        'location' => 'Lokasi Penyimpanan',
    ],
];
