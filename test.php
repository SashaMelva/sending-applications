<?php
//    public function getSettings($subdomain, $client_secret, $client_id, $code)
//    {
//        $link = "https://". $subdomain . ".amocrm.ru/oauth2/access_token";
//
//        $data = [
//            'client_id'     => $client_id,
//            'client_secret' => $client_secret,
//            'grant_type'    => 'authorization_code',
//            'code'          => $code,
//            'redirect_uri'  => "https://localhost/lead",
//        ];
//
//
//
//        $curl = curl_init(); //Сохраняем дескриптор сеанса cURL
//        /** Устанавливаем необходимые опции для сеанса cURL  */
//        curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
//        curl_setopt($curl,CURLOPT_URL, $link);
//        curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type:application/json']);
//        curl_setopt($curl,CURLOPT_HEADER, false);
//        curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
//        curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
//        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
//        curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
//        $out = curl_exec($curl); //Инициируем запрос к API и сохраняем ответ в переменную
//        $code = (int)curl_getinfo($curl, CURLINFO_HTTP_CODE);
//        curl_close($curl);
//
//        $errors = [
//            400 => 'Bad request',
//            401 => 'Unauthorized',
//            403 => 'Forbidden',
//            404 => 'Not found',
//            500 => 'Internal server error',
//            502 => 'Bad gateway',
//            503 => 'Service unavailable',
//        ];
//
//        try
//        {
//            if ($code < 200 || $code > 204) {
//                throw new Exception($errors[$code] ?? 'Undefined error', $code);
//            }
//        }
//        catch(\Exception $e)
//        {
//            die('Ошибка: ' . $e->getMessage() . PHP_EOL . 'Код ошибки: ' . $e->getCode());
//        }
//
//        return json_decode($out, true);
//    }

//
//    public static function getSettings($request, $method = 'GET', $data = '', $headers = ['Content-Type:application/json'])
//    {
//        global $amocrm_domain;
//        $curl = curl_init();
//        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-oAuth-client/1.0');
//        curl_setopt($curl, CURLOPT_URL, 'https://' . $amocrm_domain . $request);
//        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//        curl_setopt($curl, CURLOPT_HEADER, false);
//        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
//        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
//        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
//        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
//        $out = curl_exec($curl);
//        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
//        curl_close($curl);
//        $code = (int)$code;
//        $errors = [
//            400 => 'Bad request',
//            401 => 'Unauthorized',
//            403 => 'Forbidden',
//            404 => 'Not found',
//            500 => 'Internal server error',
//            502 => 'Bad gateway',
//            503 => 'Service unavailable',
//        ];
//
//        try {
//            if ($code < 200 || $code > 204) {
//                throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undefined error', $code);
//            }
//        } catch (Exception $e) {
//            die('Ошибка: ' . $e->getMessage() . PHP_EOL . 'Код ошибки: ' . $e->getCode());
//        }
//
//        return json_decode($out);
//    }