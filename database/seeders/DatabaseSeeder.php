<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Pelanggan;

use RouterOS\Client;
use RouterOS\Query;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $client = new Client([
            'host' => env('ROUTEROS_HOST', '127.0.0.1'),
            'user' => env('ROUTEROS_USER', 'admin'),
            'pass' => env('ROUTEROS_PASS', 'admin'),
            'port' => env('ROUTEROS_PORT', 8728)
        ]);

        $query = new Query('/ppp/active/print');
        $response = $client->query($query)->read();

        foreach ($response as $r) {
            Pelanggan::create([
                'idpel' => $r['.id'],
                'name' => $r['name'],
                'uptime' => $r['uptime']
            ]);
        }
    }
}
