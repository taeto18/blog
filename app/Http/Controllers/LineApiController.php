<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineApiController extends Controller
{
    public function webhook(Request $request)
    {
        $type = $request['events'][0]['type'] ?? '';
        $userId = $request['events'][0]['source']['userId'];
        $replyToken = $request['events'][0]['replyToken'] ?? '';
        $message = $request['events']['message']['text'] ?? 'Hello';

//        if ($type == 'message') {
//            $this->replyfunction($replyToken, $message);
//        }

        return response()->json(['success'], 200);
    }

    public function replyfunction($replyToken, $message)
    {
        $accessToken = 'LHRTu0vJ5vkMRL+SSp3i2zPioJe8FRavHEB0h6gJnHL+AvmzBChUd2c3mc6rFTTXQdl5COpkxFSyqPfJBvOD03x0apVBvI2z9BfgUN/y0fqW+omUOFyHOM6wNZ5CaOeYwUe0KB0SY8ysd9iqc1qwigdB04t89/1O/w1cDnyilFU=';
        $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($accessToken);
        $bot = new \LINE\LINEBot($httpClient, ['b2eb356d2c894187569868645146c85c' => ($httpClient)]);

        $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($message);
        $response = $bot->replyMessage($replyToken, $textMessageBuilder);

        return $response->getHTTPStatus() . ' ' . $response->getRawBody();

    }
}