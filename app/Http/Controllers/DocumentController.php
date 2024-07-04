<?php

namespace App\Http\Controllers;

use App\Services\DocxpressoService;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    protected $docxpressoService;

    public function __construct(DocxpressoService $docxpressoService)
    {
        $this->docxpressoService = $docxpressoService;
    }

    public function createDocument(Request $request)
    {
        $data = $request->all();

        try {
            $document = $this->docxpressoService->generateDocument($data);
            return response()->json(['document' => $document], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
