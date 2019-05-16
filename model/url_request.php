
<?php
<<<<<<< HEAD




    function get_req($url,$post="") {
=======
    function get_req($url) {
>>>>>>> a30feac6c88a1a32a336ae09f9f60e7ed1a46176
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, True);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1');
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        #Vamos mandar os dados via POST
        curl_setopt($curl, CURLOPT_POST, true);

#Agora vamos passar o array ($POST) vão ser passador pelo POST
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);


        //  $result = curl_exec($curl);
        $return = curl_exec($curl);
        curl_close($curl);
        return $return;
    }



