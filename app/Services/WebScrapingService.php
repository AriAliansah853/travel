<?php

namespace App\Services;

class WebScrapingService
{
    /**
     * Scrape data from a URL based on class name.
     *
     * @param string $url
     * @param string $className
     * @return array
     */
    public function scrapeData($url, $className)
    {
        // Ambil konten HTML dari URL menggunakan cURL
        $htmlContent = $this->getHtmlContent($url);

        // Muat HTML ke DOMDocument
        $dom = new \DOMDocument();
        @$dom->loadHTML($htmlContent); // @ digunakan untuk menonaktifkan peringatan HTML yang tidak valid

        // Gunakan XPath untuk mengekstrak elemen berdasarkan class name
        $xpath = new \DOMXPath($dom);
        $query = "//div[contains(@class, '$className')]"; // Menggunakan XPath untuk mencari elemen berdasarkan class name
        $nodes = $xpath->query($query);

        // Simpan data yang diambil ke dalam array
        $data = [];
        foreach ($nodes as $node) {
            $data[] = $node->textContent;  // Ambil teks dari elemen
        }

        return $data;
    }

    /**
     * Ambil konten HTML dari URL menggunakan cURL.
     *
     * @param string $url
     * @return string
     */
    private function getHtmlContent($url)
    {
        // Inisialisasi cURL
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36");

        // Eksekusi cURL dan ambil konten HTML
        $htmlContent = curl_exec($ch);
        curl_close($ch);

        return $htmlContent;
    }
}
