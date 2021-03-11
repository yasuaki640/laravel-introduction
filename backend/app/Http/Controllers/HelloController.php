<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request, Response $response): Response
    {
        $html = <<<EOF
<html>
<head>
<title>req res</title>
</head>
<body>
<h3>Request</h3>
<pre>{$request}</pre>
<h3>Response</h3>
<pre>{$response}</pre>
</body>
</html>
EOF;

        $response->setContent($html);
        return $response;
    }
}
