<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\JsonResponse;
use Laravel\Lumen\Routing\Controller as BaseController;

class DeleteController extends BaseController
{
    /**
     * Files remove.
     *
     * @param string $client
     * @param string $fileName
     *
     * @return JsonResponse
     */
    public function delete(string $client, string $fileName): JsonResponse
    {
        $file = File::findOrFail($client, $fileName);

        $file->delete();

        return response()->json(null, 204);
    }
}
