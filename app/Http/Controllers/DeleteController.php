<?php

namespace App\Http\Controllers;

use App\File;
use Laravel\Lumen\Routing\Controller as BaseController;

class DeleteController extends BaseController
{
    /**
     * Files remove.
     *
     * @param mixed $client
     * @param mixed $fileId
     *
     * @return Response
     */
    public function delete($client, $fileId)
    {
        $file = File::find($client, $fileId);

        // File not found
        if (! $file) {
            return abort(404);
        }

        $file->delete();

        return response()->json(null, 204);
    }
}
