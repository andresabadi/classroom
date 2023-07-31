<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class TestDatabaseController extends Controller
{
    public function testConnection()
    {
        try {
            DB::connection()->getPdo();
            echo "Connected successfully to the database!";
        } catch (\Exception $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

