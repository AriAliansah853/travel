<?php

namespace App\Http\Controllers;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\Element\TextRun;

use PhpOffice\PhpWord\Element\Text;



class DocumentController extends Controller
{

    function convertToPdf(Request $request)
    {
        $file = $request->file('docx_file'); // Pastikan name input-nya "docx_file"

        if (!$file) {
            return response()->json(['error' => 'File tidak ditemukan'], 400);
        }
        // return $file;
        $inputPath = $file->getRealPath();

        // $outputPath = storage_path('app/documents/' . pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '.pdf');
        $outputDir = storage_path('app/documents/');
        $outputFileName = 'microRenewalWA1739927842158.pdf'; 
        $outputPath = $outputDir . $outputFileName;
        // return $outputPath;
        if (!file_exists(dirname($outputPath))) {
            mkdir(dirname($outputPath), 0777, true);
        }
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

        // return $command;
        exec($command, $output, $return_var);


        if ($return_var !== 0) {
            throw new \Exception('Gagal mengonversi file ke PDF: ' . implode("\n", $output));
        }

        return $outputPath;
    }

    public function generate1()
    {
        // Path file input
        $inputPath = storage_path('file/template/micro/renewalviawhatsapp/input/COI_CS.docx');
    
        // Path folder output
        $outputDir = storage_path('file/template/micro/renewalviawhatsapp/output/');
        $outputFileName = "microRenewalWA" . floor(microtime(true) * 1000);
        $outputPath = $outputDir . $outputFileName . '.docx';
    
        // Pastikan folder output ada
        if (!file_exists($outputDir)) {
            mkdir($outputDir, 0777, true);
        }
    
        $replacements = [
            'PolicyNumberCP' => '123456789',
            'InsuranceNameCP' => 'Ari Aliansah',
            'StartDateCP' => '2025-01-22',
            'EndDateCP' => '2025-02-20',
        ];
    
        // Proses penggantian teks menggunakan PHPWord
        if ($this->modifyDocxWithPhpWord($inputPath, $outputPath, $replacements)) {
            $downloadUrl = asset('storage/file/template/micro/renewalviawhatsapp/output/' . $outputFileName . '.docx');
    
            return response()->json(['message' => 'File berhasil diproses', 'download_url' => $downloadUrl]);
        } else {
            return response()->json(['message' => 'Gagal memproses DOCX'], 500);
        }
    }
    
    private function modifyDocxWithPhpWord($inputPath, $outputPath, $replacements)
    {
        try {
            $phpWord = IOFactory::load($inputPath);
    
            // Ambil bagian pertama (biasanya halaman pertama)
            $sections = $phpWord->getSections();
            if (!empty($sections)) {
                $firstSection = $sections[0];
    
                // Loop setiap elemen di halaman pertama dan ganti teksnya
                foreach ($firstSection->getElements() as $element) {
                    // Jika elemen adalah TextRun (paragraf berisi beberapa teks)
                    if ($element instanceof TextRun) {
                        foreach ($element->getElements() as $textElement) {
                            if ($textElement instanceof Text) {
                                $text = $textElement->getText();
                                foreach ($replacements as $search => $replace) {
                                    if (strpos($text, $search) !== false) {
                                        $newText = str_replace($search, $replace, $text);
                                        $textElement->setText($newText);
                                    }
                                }
                            }
                        }
                    }
    
                    // Jika elemen langsung berupa Text
                    if ($element instanceof Text) {
                        $text = $element->getText();
                        foreach ($replacements as $search => $replace) {
                            if (strpos($text, $search) !== false) {
                                $newText = str_replace($search, $replace, $text);
                                $element->setText($newText);
                            }
                        }
                    }
                }
            }
    
            // Simpan hasil edit ke DOCX
            $writer = IOFactory::createWriter($phpWord, 'Word2007');
            $writer->save($outputPath);
    
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

}
