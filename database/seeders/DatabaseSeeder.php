<?php

namespace Database\Seeders;

use App\Models\CategoryJobVacancy;
use App\Models\Package;
use App\Models\Partner;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Partner::create([
            'package_id' => 1,
            'partner_unique' => 123,
            'company_name' => 'Test Company',
            'slug' => 'test_company',
            'type_partner' => 'umkm',
            'phone_number' => '1232345743',
            'email' => 'asdwd@example.com',
            'address' => 'surabaya',
            'status' => 'active',
        ]);

        Partner::create([
            'package_id' => 1,
            'partner_unique' => 1231234,
            'company_name' => 'Test Company Again',
            'slug' => 'test_company-again',
            'type_partner' => 'umkm',
            'phone_number' => '123234571233',
            'email' => 'aaeresdwd@example.com',
            'address' => 'malang',
            'status' => 'active',
        ]);

        Package::create([
            'name_package' => 'Basic',
            'max_administrator' => 1,
            'max_posting' => 3,
            'max_highlight' => 0,
            'day_duration' => 15,
            'price' => 0,
            'discount' => 0
        ]);

        Package::create([
            'name_package' => 'Standard',
            'max_administrator' => 3,
            'max_posting' => 10,
            'max_highlight' => 3,
            'day_duration' => 30,
            'price' => 89000,
            'discount' => 0
        ]);

        Package::create([
            'name_package' => 'Premium',
            'max_administrator' => 8,
            'max_posting' => 0,
            'max_highlight' => 7,
            'day_duration' => 30,
            'price' => 139000,
            'discount' => 0
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'Logistik dan Produksi',
            'slug' => 'logistik_dan_produksi',
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'Sales dan Marketing',
            'slug' => 'sales_dan_marketing',
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'Administrasi dan Pegawai Kantor',
            'slug' => 'administrasi_dan_pegawawai_kantor',
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'Operasional dan IT',
            'slug' => 'operasional_dan_it',
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'Teknik dan Pengembangan Energi',
            'slug' => 'teknik_dan_pengembangan_energi',
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'Layanan Sosial dan Kesehatan',
            'slug' => 'layanan_sosial_dan_kesehatan',
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'Pendidikan dan Penelitian',
            'slug' => 'pendidikan_dan_penelitian',
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'FnB dan Pekerja Ritel',
            'slug' => 'fnb_dan_pekerja_ritel',
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'FnB dan Pekerja Ritel',
            'slug' => 'fnb_dan_pekerja_ritel',
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'Multimedia Kreatif dan Seni',
            'slug' => 'multimedia_kreatif_dan_seni',
        ]);

        CategoryJobVacancy::create([
            'name_category' => 'Kebersihan dan Keamanan',
            'slug' => 'kebersihan_dan_keamanan',
        ]);
    }
}
