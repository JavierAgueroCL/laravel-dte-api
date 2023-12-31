<?php

namespace App\Console\Commands;

use App\Jobs\UpdateDteInformationWithWs;
use App\Models\Documento;
use App\Models\Empresa;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateTicketInformationWs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sii:update-ticket-information-ws';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to update the ticket (dte 39 and dte 41) information from sii-ws';

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
        if(config('dte.server_provider') !== 'vapor'){
            $companies = Empresa::all();

            $bar = $this->output->createProgressBar(count($companies));
            $bar->start();
            echo "\n";

            foreach ($companies as $company) {
                $this->info('Obteniendo documentos de la empresa [' . $company->rut . ']' . $company->razonSocial);
                $documentos = Documento::getTicketsCreatedInLastFiveMins($company->id);
                foreach($documentos as $documento){
                    /* @var Documento $documento */
                    if(Carbon::now()->gte('2021-01-01 00:00:00') && $documento->idDoc->FchEmis->gte('2021-01-01 00:00:00') ){
                        $this->info('Enviando Job a la queue UpdateDteInformationWithWs del documento boleta id' . $documento->id);
                        UpdateDteInformationWithWs::dispatch($documento);
                    }
                }
                echo "\n";
                $bar->advance();
            }
        }
    }
}
