<?php
namespace App\Http\Middleware;

class CORSMiddleware {
    public static function handle(): void {
        header(header: "Access-Control-Allow-Origin: *");
        header(header: "Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header(header: "Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, Accept, Cache-Control");
        header(header: "Access-Control-Allow-Credentials: true");
        header(header: "Content-Type: application/json; charset=UTF-8");

        // Se for uma requisição OPTIONS, responder com 200 OK e sair
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            http_response_code(response_code: 200);
            exit();
        }
    }
}