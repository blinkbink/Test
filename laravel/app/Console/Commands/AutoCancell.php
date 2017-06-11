<?php

namespace App\Console\Commands;

use App\PrepaidModel;
use App\ProductModel;
use Illuminate\Console\Command;

class AutoCancell extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automated Cancell Payment prepaid after 5 minute';

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
        //
        $prepaid = PrepaidModel::where('information', 'Pending');
        $product = ProductModel::where('information', 'Pending');
        $prepaid -> information = "Failed";
        $product -> information = "Failed";
        $prepaid->save();
        $product->save();

    }
}
