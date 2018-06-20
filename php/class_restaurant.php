    <?php
class menuDuJour {

        /* INT */
        public $dw;

        CONST DAYWEEK = [
            1 => "Lundi",
            2 => "Mardi",
            3 => "Mercredi",
            4 => "Jeudi",
            5 => "Vendredi",
            6 => "Plats" //Exception pour la fin de semaine chez La Petite Pause
        ];

    public function getDayOfTheWeek($dw){
        return self::DAYWEEK[$dw];
    }

    /* return INT */
    private function getIntDay(){
        $timestamp = time();
        $dw = date( "w", $timestamp);
        return $dw;
    }

    /* return STR */
    public function getDay(){
        $timestamp = time();
        $dw = date("w", $timestamp);
        $dw = self::DAYWEEK[$dw];
        return $dw;
    }
    /* return STR */
    private function getUrlInfo($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Hi ! We\'re some guys around here...');
        $curlResult = curl_exec($ch);
        curl_close($ch);
        return $curlResult;
    }


    public function marcheBiot(){
        $url = 'http://sbiot.fr/accueil/plats-jour-de-semaine/';
        $curlResult = self::getUrlInfo($url);
        $dw = self::getDay();

        switch ($dw){
            case "Lundi":
                preg_match_all("/(?<=<li class='odd'><div><p class='item-text'>)(.*?)(<\/p><p class='desc'>)/", $curlResult, $menu);
                return(array($menu[1][0], $curlResult));
                break;
            case "Mardi":
                preg_match_all("/(?<=Lundi<\/div><\/div><\/li><li class='odd'><div><p class='item-text'>)(.*?)(<\/p>)/", $curlResult, $menu);
                return(array($menu[1][0], $curlResult));
                break;
            case "Mercredi":
                preg_match_all("/(?<=Mardi<\/div><\/div><\/li><li class='odd'><div><p class='item-text'>)(.*?)(<\/p>)/", $curlResult, $menu);
                return(array($menu[1][0], $curlResult));
                break;
            case "Jeudi":
                preg_match_all("/(?<=Mercredi<\/div><\/div><\/li><li class='odd'><div><p class='item-text'>)(.*?)(<\/p>)/", $curlResult, $menu);
                return(array($menu[1][0], $curlResult));
                break;
            case "Vendredi":
                preg_match_all("/(?<=Jeudi<\/div><\/div><\/li><li class='odd'><div><p class='item-text'>)(.*?)(<\/p>)/", $curlResult, $menu);
                return(array($menu[1][0], $curlResult));
                break;
        }
    }

    public function marcheBiotVege(){
        $curlResult = self::marcheBiot()[1];
        $dw = self::getDay();

        $trim = ":" . self::getDay() . "</div></div></li><li class='even'><div><p class='item-text'>";
        switch ($dw){
            case "Lundi":
            preg_match_all(
            "/(?=Lundi<\/div><\/div><\/li><li class='even'><div><p class='item-text'>).+?(?=<\/p><p class='desc'><img src=)/",
            $curlResult, $menu);
                return(trim($menu[0][0], $trim));
                break;
            case "Mardi":
            preg_match_all(
            "/(?=Mardi<\/div><\/div><\/li><li class='even'><div><p class='item-text'>).+?(?=<\/p><p class='desc'><img src=)/",
            $curlResult, $menu);
                return(trim($menu[0][0], $trim));
                break;
            case "Mercredi":
            preg_match_all(
            "/(?=Mercredi<\/div><\/div><\/li><li class='even'><div><p class='item-text'>).+?(?=<\/p><p class='desc'><img src=)/",
            $curlResult, $menu);
                return(trim($menu[0][0], $trim));
                break;
            case "Jeudi":
            preg_match_all(
            "/(?=Jeudi<\/div><\/div><\/li><li class='even'><div><p class='item-text'>).+?(?=<\/p><p class='desc'><img src=)/",
            $curlResult, $menu);
                return(trim($menu[0][0], $trim));
                break;
            case "Vendredi":
            preg_match_all(
            "/(?=Vendredi<\/div><\/div><\/li><li class='even'><div><p class='item-text'>).+?(?=<\/p><p class='desc'><img src=)/",
            $curlResult, $menu);
                return(trim($menu[0][0], $trim));
                break;
        }
    }

    public function marcheBiotPrice(){
        $curlResult = self::marcheBiot()[1];
        $dw = self::getDay();
        preg_match_all(
        "/(?<=div class='value-col value-1'>)(.*?)(?=<\/div><div class='value-col value-2'>)/",
        $curlResult, $menu);
            return($menu[0][0]);
    }

    public function leK(){
        $url = 'https://www.restaurant-le-k.com/a-table/';
        $curlResult = self::getUrlInfo($url);
        $dw = self::getIntDay();
        $thisDay = self::getDayOfTheWeek($dw);
        $end = self::getDayOfTheWeek($dw+1);

        preg_match_all("/(?<=<meta name=\"twitter:description\" content=\")(.*?)(?=\/>)/", $curlResult, $menu);
        $weekMenuArray = explode(" ", $menu[0][0]);

        /* On parse le résultat du pregmatch avec comme critère le jour de la semaine afin de récupérer le nom du plat indiqué
        entre les deux jours*/
        $newArray = [];
        $i = 0;
        $start = false;
        foreach ($weekMenuArray as $element) {
            if($start){
                $newArray[$i] = $element;
                $i++;
            }
            if($element == $thisDay){
                $start = true;
            }
            if($element == $end){
                $start = false;
            }
        }
        $totalElemInArray = count($newArray);
        unset($newArray[$totalElemInArray-1]);
        return implode($newArray, " ");

    }

    public function laPetitePause(){

        $url = 'http://www.lapetitepause.fr/';
        $curlResult = self::getUrlInfo($url);
        $dw = self::getIntDay();
        $thisDay = self::getDayOfTheWeek($dw);
        $end = self::getDayOfTheWeek($dw+1);

        preg_match_all("/([A-Za-zàéèêœùïî\-\,]+)/", $curlResult, $menu);

        //reformatage du tableau $menu
        $j =0;
        foreach($menu[$j] as $key=>$value){
            $tabMenu[] = $value;
            $j++;
        }

        /*liste d'exclusion après le pregmatch*/
        $badWords = ["li", "ul", "span", "lpp-made-by", "class", "href", "main-nav",
            "janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "décembre"];

        /* On parse le résultat du pregmatch avec comme critère le jour de la semaine afin de récupérer le nom du plat indiqué
        entre les deux jours*/
        $newArray = [];
        $i = 0;
        $start = false;
        foreach ($tabMenu as $element) {
            if($start == true && !in_array($element, $badWords)){
                $newArray[$i] = $element;
                $i++;
            }
            if($element == $thisDay || $element == strtolower($thisDay)){
                    $start = true;
            }
            if($element == $end || $element == strtolower($end)){
                $start = false;
            }
        }
        $totalElemInArray = count($newArray);
        unset($newArray[$totalElemInArray-1]);
        return implode($newArray, " ");

    }
}

//san angelo
