<?php
if ( ! function_exists('getInfo')) {

    function getInfo($name)
    {
        return \App\Models\Configsite::getInfo($name);
    }
}

if ( ! function_exists('formatDate')) {

    function formatDate($date, $as_array = 0, $months = "")
    {
        if ($date != "") {
            $months = array(
                "",
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            );
            if (strpos($date, " ")) {
                $time = explode(" ", $date);
                $date = $time[0];
            }

            $dat   = explode("-", $date);
            $month = (int)$dat[1];
            $day   = $dat[2];
            $year  = $dat[0];

            return $as_array ? [$day, $months[$month], $year] : $months[$month] . " " . $day . " de " . $year;
        }

        return '';
    }
}


if ( ! function_exists('formatDateshort')) {

    function formatDateshort($date, $as_array = 0, $months = "")
    {
        if ($date != "") {
            $months = array(
                "",
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            );
            if (strpos($date, " ")) {
                $time = explode(" ", $date);
                $date = $time[0];
            }

            $dat   = explode("-", $date);
            $month = (int)$dat[1];
            $day   = $dat[2];
            $year  = $dat[0];

            return $as_array ? [$day, $months[$month], $year] : $months[$month] . " ".$year;
        }

        return '';
    }
}




if ( ! function_exists('getMonthName')) {

    function getMonthName($month)
    {
        $months = array(
            "Jan" => "ENE",
            "Feb" => "FEB",
            "Mar" => "MAR",
            "Apr" => "ABR",
            "May" => "MAY",
            "Jun" => "JUN",
            "Jul" => "JUL",
            "Aug" => "AGO",
            "Sep" => "SEP",
            "Oct" => "OCT",
            "Nov" => "NOV",
            "Dec" => "DIC"
        );

        return $months[$month];

    }
}


if ( ! function_exists('chstr')) {
    function chstr($str)
    {
        $code  = array('á', 'é', 'í', 'ó', 'ú', 'ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ');
        $code2 = array('a', 'e', 'i', 'o', 'u', 'n', 'A', 'E', 'I', 'O', 'U', 'N');
        $str   = str_replace($code, $code2, $str);

        $search  = '-';
        $replace = '-';

        $trans = array(
            $search                     => $replace,
            "\s+"                       => $replace,
            "[^a-z0-9" . $replace . "]" => '',
            $replace . "+"              => $replace,
            $replace . "$"              => '',
            "^" . $replace              => ''
        );

        $str = strip_tags(strtolower($str));

        foreach ($trans as $key => $val) {
            $str = preg_replace("#" . $key . "#", $val, $str);
        }

        return trim(stripslashes($str));
    }
}

if ( ! function_exists('getMyCountryLocation')) {
    function getMyCountryLocation($myIp){

        if (!isset($myIp) or empty($myip)){
            $myIp = $_SERVER['REMOTE_ADDR'];
        }
       // $localization = Location::get($myIp);
       $localization = '';

        \Log::info('*** Helper.php getMyCountryLocation-> Step 1 -> print_r ' . print_r($localization, true));

        try {
            if(!is_object($localization)) {
                $myCountry = 'co';
            }else{
                if (!isset($localization->countryCode) or empty($localization->countryCode)){
                    $myCountry = 'co';
                }else{
                    $myCountry = $localization->countryCode;
                }
            }
        } catch (Exception $e)  {
            $myCountry = 'co';
        }

        $myCountry = strtolower($myCountry);

        \Log::info('*** Helper.php getMyCountryLocation-> Step 2 -> $myCountry ' . $myCountry);

        return $myCountry;
    }
}
if ( ! function_exists('featured_text')) {
    function featured_text($text, $position)
    {
        $arr      = explode(' ', $text);
        if (is_numeric($position) && isset($arr[$position - 1])) {
            $arr[$position - 1] = '<span class="span-border-b">' . $arr[$position - 1] . '</span><br/>';
            $text               = implode(' ', $arr);
        }

        return $text;
    }
}

if ( ! function_exists('featured_text2')) {
    function featured_text2($text)
    {
        $arr    = explode(' ', $text);
        $arr[0] = '<span class="span-border-b">' . $arr[0] . ' ' . ($arr[1] ?? '') . '</span>';
        unset($arr[1]);
        $text = implode(' ', $arr);

        return $text;
    }
}


if ( ! function_exists('faq_box_question ')) {
    function faq_box_question($text)
    {
        $arr    = explode(' ', $text);
        $arr[0] = '<i class="fa fa-circle item-feature" aria-hidden="true"></i>  ' .$text . '</span>';
        unset($arr[1]);
        $text = implode(' ', $arr);

        return $text;
    }
}

if ( ! function_exists('country_text')) {
    function country_text($text, $country)
    {
        return str_replace('{country}', $country, $text);
    }
}


if ( ! function_exists('country_text_strong')) {
    function country_text_strong($text, $country)
    {
        return str_replace('{country}', '<strong>'.$country.'</strong>', $text);
    }
}




if ( ! function_exists('get_lang_cms')) {
    function get_lang_cms()
    {
        return session()->get('applocale') ?? 'es';
    }
}

if ( ! function_exists('get_lang')) {
    function get_lang()
    {
        return session()->get('locale') ?? 'es';
    }
}

if ( ! function_exists('features_list')) {
    function features_list($features, $icon = 'check',$color='txt-gray')
    {
        $list = explode(',', $features);
        $html = '';
        foreach ($list as $item) {
            $html .= '<li class=" typ-os-regular mb-1 '.$color.'"> <i class="fa fa-'.$icon.' item-feature" aria-hidden="true"></i> ' . $item . '</li>';
        }

        return $html;
    }
}

if ( ! function_exists('check_item_active')) {
    function check_item_active($type, $seg1, $seg2 = '', $exclude_new = 1)
    {
        $menu = explode(',', $seg1);
        if (in_array(request()->segment(2), $menu)) {
            $class = '';
            switch ($type) {
                case 'main_li':
                    $class = 'active current';
                    break;
                case 'main_li_id':
                    $segs  = explode(',', $seg2);
                    $seg3  = is_null(request()->segment(4)) || request()->segment(4) > 0 && $exclude_new || ! $exclude_new;
                    $class = in_array(request()->segment(4), $segs) && $seg3 ? 'active current' : '';
                    break;
                case 'inner_li_add':
                    $segs  = explode(',', $seg2);
                    $class = (in_array(request()->segment(3), $segs) && empty(request()->segment(4))) ? 'active current' : '';
                    break;
                case 'inner_li':
                    $segs  = explode(',', $seg2);
                    $class = (in_array(request()->segment(3), $segs) && empty(request()->segment(4))) ? 'active current' : '';
                    break;
                case 'inner_li_list':
                    $segs  = explode(',', $seg2);
                    $class =  (in_array(request()->segment(3),$segs) && (is_null(request()->segment(4)) || request()->segment(4) != '0')) ? 'active current' : '';
                    break;
            }

            return $class;
        } else {
            return '';
        }
    }
}






