<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessBatchJob;
use Illuminate\Support\Facades\Bus;

class JobBatchController extends Controller
{
    public function dispatchBatch()
    {
        $data = [1, 2, 3, 4, 5];

        foreach ($data as $item) {
            //Dispatch(new ProcessBatchJob(($item));
            ProcessBatchJob::dispatch($item);
        }
    }
}
