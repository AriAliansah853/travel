<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    
     function convertToPdf(Request $request)
    {
        // format word ke pdf cepet
        $file = $request->file('docx_file'); 
        
        if (!$file) {
            return response()->json(['error' => 'File tidak ditemukan'], 400);
        }
        // return $file;
        $inputPath = $file->getRealPath();
        
        $outputPath = storage_path('app/documents/' . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.pdf');
       
        try {
            
            $pdfPath = $this->convertWordTosPdf($inputPath, $outputPath);
            // return $pdfPath;
            
            return response()->download($pdfPath);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    
    function convertWordTosPdf($inputPath, $outputPath)
{
    if (!file_exists($inputPath)) {
        throw new \Exception("File input tidak ditemukan: " . $inputPath);
    }

    if (!file_exists(dirname($outputPath))) {
        mkdir(dirname($outputPath), 0777, true);
    }

    $command = "soffice --headless --convert-to pdf --outdir " . escapeshellarg(dirname($outputPath)) . " " . escapeshellarg($inputPath);
    exec($command, $output, $return_var);

    if ($return_var !== 0) {
        throw new \Exception('Gagal mengonversi file ke PDF: ' . implode("\n", $output));
    }

    $outputDir = dirname($outputPath);
    $convertedFiles = glob($outputDir . '/*.pdf');

    if (empty($convertedFiles)) {
        throw new \Exception("File hasil konversi tidak ditemukan.");
    }

    
    $convertedFilePath = $convertedFiles[0];

    $finalPath = 'ALIANSAH';
    rename($convertedFilePath, $finalPath);

    return $finalPath;
}

    
}
