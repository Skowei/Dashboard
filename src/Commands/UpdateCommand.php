<?php

namespace Skowei\Dashboard\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class UpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "sk/dashboard:update {ver=blade} {--force=false}";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "update skowei dashboard package";

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
     * @return int
     */
    public function handle()
    {
        switch($this->argument('ver'))
        {
            case 'blade':
                $this->UpdateBlade();
            break;
            case 'vue':
                $this->UpdateVue();
            break;
            case 'react':
                $this->UpdateReact();
            break;
            default:
                $this->errorInfo();
            break;
        }
    }
    private function UpdateBlade()
    {
        $forced = $this->option("force") ? '' : '--force';
        $bar = $this->output->createProgressBar(1);

        $this->StartInfo();
        $bar->start();
        $this->info("");

            Artisan::call('vendor:publish --tag=sk-dashboard-blade '.$forced);

        $this->EndInfo();
        $bar->advance();
        $bar->finish();
    }
    private function UpdateVue()
    {
        $this->info("<fg=red>======================================");
        $this->info("<bg=red>       <bg=red;fg=green>VUE<bg=red> ISN'T SUPPORTED YET        ");
        $this->info("<fg=red>======================================");
    }
    private function UpdateReact()
    {
        $this->info("<fg=red>======================================");
        $this->info("<bg=red>      <bg=red;fg=cyan>REACT<bg=red> ISN'T SUPPORTED YET       ");
        $this->info("<fg=red>======================================");
    }

    private function StartInfo()
    {
        if($this->option("force")){
            $this->info("<fg=magenta>======================================");
            $this->info("<bg=magenta>  UPDATING SKOWEI DASHBOARD PACKAGE   ");
            $this->info("<fg=magenta>======================================");
        }else{
            $this->info("<fg=magenta>======================================");
            $this->info("<bg=magenta>  <bg=magenta;fg=red>FORCED<bg=magenta> UPDATING SKOWEI UI PACKAGE   ");
            $this->info("<fg=magenta>======================================");
        }
    }

    private function EndInfo()
    {
        $this->info("");
        $this->info("<fg=green>======================================");
        $this->info("<bg=green>     SUCCESSFULLY UPDATED PACKAGE     ");
        $this->info("<fg=green>======================================");
    }
    private function ErrorInfo()
    {
        $var = $this->argument("ver");
        $this->info("");
        $this->info("<fg=red>======================================");
        $this->info("<bg=red>     NOT SUPPORTED LAYOUT ".$var.'    ');
        $this->info("<fg=red>======================================");
    }
    private function ShowInfo($tmp, $color)
    {
        $this->info("");
        $this->info("<fg=".$color.">======================================");
        $this->info("<bg=".$color.">  ".$tmp."  ");
        $this->info("<fg=".$color.">======================================");
    }
}