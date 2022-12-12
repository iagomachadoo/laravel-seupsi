<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\jsonDecode;
use Illuminate\Support\Facades\Request;

class Recaptcha implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $client = new Client();
        try {
            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => config('recaptcha.secret_key'),
                    'response' => $value,
                    'remoteip' => Request::ip(),
                ],
            ]);
        } catch (BadResponseException $e) {
            return false;
        }
        return $this->getScore($response) >= config('recaptcha.minimum_score');
    }

    private function getScore($response)
    {
        if ($response->getStatusCode() !== 200) {
            return 0;
        }

        $arrayResposta = json_decode($response->getBody()->getContents(), 1);

        if (!$arrayResposta['success'] || !isset($arrayResposta['score'])) {
            return 0;
        }
        return $arrayResposta['score'];
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Falha na validação do reCAPTCHA.';
    }
}
