<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Config;

class DatabaseMakeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:database 
                            {name? : The Name for Database}
                            {--d|driver= : The Driver Name}
                            {--t|host= : The Host Name or IP Server}
                            {--u|user= : The user name of the connection}
                            {--p|pass= : The connection password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a database based on environment variables or passing the data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $database = ($this->argument('name') != "")
            ? $this->argument('name')
            : env('DB_DATABASE');
        $host = ($this->option('host') != "")
            ? $this->option('host')
            : env('DB_HOST');
        $username = ($this->option('user') != "")
            ? $this->option('user')
            : env('DB_USERNAME');
        $password = ($this->option('pass') != "")
            ? $this->option('pass')
            : env('DB_PASSWORD');
        $driver = ($this->option('driver') != "")
            ? $this->option('driver')
            : Config::get('database.default');


//        $database = env('DB_DATABASE');
//        $host = env('DB_HOST');
//        $username = env('DB_USERNAME');
        //$password = env('DB_PASSWORD');
        //$driver = Config::get('database.default');
        //$c = Config::g

        //$this->info('Name is: ' . $password);

        switch ($driver){
            case 'mysql':
            case 'pgsql':
                $dsn = "{$driver}:host={$host};";
                break;
            case 'sqlsrv':
                $dsn = "{$driver}:Server={$host};";
                break;
            case 'sqlite':
                if(file_exists(database_path('database.sqlite'))){
                    unlink(database_path('database.sqlite'));
                }
                $handle = fopen(database_path('database.sqlite'), 'w');
                fclose($handle);
                $this->info('SQLite Database created sucessfully');
                break;
            default:
                $this->error("Invalid database driver: {$driver}");
                $sqlite = 'sqlite';
        }

        if($driver !== 'sqlite'){

            try {
                $conn = new \PDO($dsn, $username, $password, [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]);
                $conn->exec('DROP DATABASE IF EXISTS ' . $database);
                $conn->exec('CREATE DATABASE ' . $database);
                $this->info("Database {$driver}:{$database} created sucessfully");
            }catch (\PDOException $ex){
                $this->error($ex->getMessage());
            }
        }


    }
}
