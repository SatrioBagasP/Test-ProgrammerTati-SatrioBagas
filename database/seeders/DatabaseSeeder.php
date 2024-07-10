<?php

namespace Database\Seeders;

use App\Models\DivisiModel;
use App\Models\LogModel;
use App\Models\RoleModel;
use App\Models\StatusModel;
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


        // Membuat database role
        RoleModel::create([
            'role' => 'Staff'
        ]);
        RoleModel::create([
            'role' => 'Kepala Devisi'
        ]);
        RoleModel::create([
            'role' => 'Ketua Dinas'
        ]);

        // Membuat database divisi
        DivisiModel::create([
            'divisi' => 'Divisi 1',
        ]);
        DivisiModel::create([
            'divisi' => 'Divisi 2',
        ]);
        DivisiModel::create([
            'divisi' => 'Divisi 3',
        ]);
        DivisiModel::create([
            'divisi' => 'Kepala Dinas',
        ]);


        // Membuat database status
        StatusModel::create([
            'status' => 'Pending'
        ]);
        StatusModel::create([
            'status' => 'Accepted'
        ]);
        StatusModel::create([
            'status' => 'Rejected'
        ]);

        // Membuat user
        User::factory()->create([
            'name' => 'Staff Devisi 1',
            'email' => 'staff1@gmail.com',
            'role_id' => 1,
            'divisi_id' => 1
        ]);
        User::factory()->create([
            'name' => 'Staff Devisi 2',
            'email' => 'staff2@gmail.com',
            'role_id' => 1,
            'divisi_id' => 2
        ]);
        User::factory()->create([
            'name' => 'Kepala Devisi 1',
            'email' => 'kepala1@gmail.com',
            'role_id' => 2,
            'divisi_id' => 1
        ]);
        User::factory()->create([
            'name' => 'Kepala Devisi 2',
            'email' => 'kepala2@gmail.com',
            'role_id' => 2,
            'divisi_id' => 2
        ]);
        User::factory()->create([
            'name' => 'Kepala Dinas',
            'email' => 'dinas@gmail.com',
            'role_id' => 3,
            'divisi_id' => 4,
        ]);

        // Membuat test log
        LogModel::create([
            'user_id' => '1',
            'judul' => 'Membuat Jembatan',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis harum aspernatur magni est quis repellat possimus vel reprehenderit, veniam unde deserunt maxime ullam corporis architecto, quo, neque voluptatibus? Cum, doloremque!',
            'isAccBidang' => '1',
            'isAccDinas' => '1'
        ]);
    }
}
