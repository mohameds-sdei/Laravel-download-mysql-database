<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use ZipArchive;
use Illuminate\Support\Facades\URL;

class DatabaseController extends Controller {

    // Fetching backup files list from storage 
    function read_backup_files() {
        $backup_files = Storage::disk('local')->allFiles('backups');
        return view('welcome', ['backup_files' => array_reverse($backup_files)]);
    }
    
    // download backup file from storage 
    function download_database($dump_file) {
        $dump_file = decrypt($dump_file);
        return response()->download(storage_path("app/$dump_file"));
    }

    // Creating database backup file
    function create_backup() {
        Artisan::call('backup:mysql-dump');
        return redirect('/');
    }

}
