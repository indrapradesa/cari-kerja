<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryJobVacancy;
use App\Models\CompanyJob;
use App\Models\Invoice;
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

        // $this->call([
        //     JobSeekerSeeder::class,
        // ]);

        User::create([
            'name' => 'Super Admin',
            'occupation' => 'super-admin',
            'email' => 'super@admin.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Test',
            'occupation' => 'partner',
            'email' => 'test.company@example.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Test Again',
            'occupation' => 'job-sekker',
            'email' => 'test.company.again@example.com',
            'password' => bcrypt('password')
        ]);

        Partner::create([
            'package_id' => 1,
            'partner_uniques' => 123,
            'employeer_id' => 2,
            'company_name' => 'Test Company',
            'slug' => 'test_company',
            'type_partner' => 'umkm',
            'phone_number' => '1232345743',
            'address' => 'surabaya',
            'status' => 'active',
        ]);

        Partner::create([
            'package_id' => 1,
            'partner_uniques' => 1231234,
            'employeer_id' => 3,
            'company_name' => 'Test Company Again',
            'slug' => 'test_company-again',
            'type_partner' => 'umkm',
            'phone_number' => '123234571233',
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

        Category::create([
            'name_category' => 'Logistik dan Produksi',
            'slug' => 'logistik_dan_produksi',
        ]);

        Category::create([
            'name_category' => 'Sales dan Marketing',
            'slug' => 'sales_dan_marketing',
        ]);

        Category::create([
            'name_category' => 'Administrasi dan Pegawai Kantor',
            'slug' => 'administrasi_dan_pegawawai_kantor',
        ]);

        Category::create([
            'name_category' => 'Operasional dan IT',
            'slug' => 'operasional_dan_it',
        ]);

        Category::create([
            'name_category' => 'Teknik dan Pengembangan Energi',
            'slug' => 'teknik_dan_pengembangan_energi',
        ]);

        Category::create([
            'name_category' => 'Layanan Sosial dan Kesehatan',
            'slug' => 'layanan_sosial_dan_kesehatan',
        ]);

        Category::create([
            'name_category' => 'Pendidikan dan Penelitian',
            'slug' => 'pendidikan_dan_penelitian',
        ]);

        Category::create([
            'name_category' => 'FnB dan Pekerja Ritel',
            'slug' => 'fnb_dan_pekerja_ritel',
        ]);

        Category::create([
            'name_category' => 'FnB dan Pekerja Ritel',
            'slug' => 'fnb_dan_pekerja_ritel',
        ]);

        Category::create([
            'name_category' => 'Multimedia Kreatif dan Seni',
            'slug' => 'multimedia_kreatif_dan_seni',
        ]);

        Category::create([
            'name_category' => 'Kebersihan dan Keamanan',
            'slug' => 'kebersihan_dan_keamanan',
        ]);

        Invoice::create([
            'partner_id' => 1,
            'nomor_reff' => 345,
            'channel' => 'Bank BCA',
            'periode' => '2024-04-01',
            'paid_date' => '2024-05-01',
            'amount' => 130000,
            'status' => 'paid'
        ]);

        Invoice::create([
            'partner_id' => 1,
            'nomor_reff' => 123242876,
            'channel' => 'Bank BCA',
            'periode' => '2024-05-01',
            'paid_date' => '2024-06-01',
            'amount' => 130000,
            'status' => 'paid'
        ]);

        Invoice::create([
            'partner_id' => 1,
            'nomor_reff' => 123247545,
            'channel' => null,
            'periode' => '2024-06-01',
            'paid_date' => null,
            'amount' => 130000,
            'status' => 'unpaid'
        ]);

        CompanyJob::create([
            'job_title' => 'Back-End',
            'slug' => 'back_end',
            'type_job' => 'WFH',
            'location' => 'Malang',
            'job_description' => 'test description',
            'salary_min' => 3000000,
            'salary_max' => 4000000,
            'date_posted' => null,
            'date_closing' => null,
            'is_open' => false,
            'partner_id' => 1,
            'category_id' => 4
        ]);

        CompanyJob::create([
            'job_title' => 'Front-End',
            'slug' => 'front_end',
            'type_job' => 'WFH',
            'location' => 'Malang',
            'job_description' => 'test description',
            'salary_min' => 2500000,
            'salary_max' => 3500000,
            'date_posted' => null,
            'date_closing' => null,
            'is_open' => false,
            'partner_id' => 1,
            'category_id' => 4
        ]);

        CompanyJob::create([
            'job_title' => 'UI/UX',
            'slug' => 'ui_ux',
            'type_job' => 'WFH',
            'location' => 'Malang',
            'job_description' => 'test description',
            'salary_min' => 2300000,
            'salary_max' => 3200000,
            'date_posted' => null,
            'date_closing' => null,
            'is_open' => false,
            'partner_id' => 1,
            'category_id' => 4
        ]);
    }
}
