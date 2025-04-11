<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Exception;

class Salo2Mpesa
{
    protected $baseUrl;
    protected $apiKey;
    protected $secretKey;
    protected $userId;

    public function __construct()
    {
        $this->baseUrl = "http://ussd.techbanc.co.ke:";
        $this->apiKey = "a1b2c3d4e5f67890abcd1234abcd5678";
        $this->secretKey = "90abcdef1234567890abcdef1234567890abcdef1234567890abcdef12345678";
        $this->userId = "GoK";
    }

    /**
     * Fetch a new session key
     * @return string Session key
     * @throws Exception if unable to fetch session key
     */
    public function getSessionKey()
    {
        try {
            $url = $this->baseUrl . "/session";

            $headers = [
                "apiKey" => $this->apiKey,
                "secretKey" => $this->secretKey,
                "userID" => $this->userId,
                "Content-Type" => "application/json"
            ];

            $response = Http::withHeaders($headers)->post($url);

            if ($response->successful()) {
                $data = $response->json();
                return $data['sessionKey'] ?? throw new Exception("Session key not found in response");
            }

            throw new Exception("Failed to retrieve session key: " . $response->body());
        } catch (Exception $e) {
            Log::error("Session Key Retrieval Error: " . $e->getMessage());
            throw $e;
        }
    }

    /**
     * Upload Biproduct file
     * @param string $filePath The path to the file
     * @param string $signature A unique signature for verification
     * @return array Response from API
     */
    public function postByproduct($filePath, $signature)
    {
        try {
            // Retrieve a valid session key
            $sessionKey = $this->getSessionKey();

            if (!file_exists($filePath)) {
                throw new Exception("File not found at: $filePath");
            }

            // Read file and encode in Base64
            $fileContent = base64_encode(file_get_contents($filePath));

            // API Endpoint
            $url = $this->baseUrl . "/biproduct/upload";

            // Headers
            $headers = [
                "Authorization" => "Bearer " . $sessionKey,
                "apiKey" => $this->apiKey,
                "secretKey" => $this->secretKey,
                "userID" => $this->userId,
                "sessionKey" => $sessionKey,
                "Content-Type" => "application/json"
            ];

            // Request body
            $payload = [
                "file" => $fileContent,
                "signature" => $signature
            ];

            // Send POST request
            $response = Http::withHeaders($headers)->post($url, $payload);

            // Handle response
            if ($response->successful()) {
                return [
                    "success" => true,
                    "message" => "File uploaded successfully",
                    "response" => $response->json()
                ];
            }

            // Handle errors
            $statusCode = $response->status();
            $errorMessage = $response->json()['message'] ?? 'Unknown error';

            throw new Exception("Error ($statusCode): $errorMessage");
        } catch (Exception $e) {
            Log::error("Biproduct Upload Error: " . $e->getMessage());
            return [
                "success" => false,
                "message" => $e->getMessage()
            ];
        }
    }
}
