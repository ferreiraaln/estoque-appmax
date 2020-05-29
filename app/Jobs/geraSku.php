<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Produtos;

class geraSku implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $produto;
    public function __construct($produto)
    {
        $this->produto = $produto;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $prod = Produtos::orderBy('produtos_id', 'desc')->first();
        $id = $prod->getAttributes()['sku'];
        $id = (int) $id;
        $id++;
        $produto['sku'] = $id ;
        Produtos::create($produto);
    }
}
