<?php
/**
 * 文本测试
 * User: foolgry
 * Date: 2018/8/7
 * Time: 17:17
 */

header("Content-type: text/html; charset=utf-8");

$str = 'sd12aadfjkdeol4588ghf';
echo $str . "<br>";
reverse_str($str);
count_vowel($str);
count_vowel_num($str);
is_palindrome($str);
is_palindrome('12344321');
is_palindrome('123e321');

/**
 * 是否是回文串
 * @param $str
 */
function is_palindrome($str){
    echo_func_info();
    $i = 0;
    $len = strlen($str);
    $is_pal = 'yes';
    while ($i <= $len/2) {
        if ($str[$i] !== $str[$len - $i - 1]) {
            $is_pal = 'no';
            break;
        }
        $i++;
    }
    echo "$is_pal<br>";
}


/**
 * 统计每一个元音字符数量
 * @param $str
 */
function count_vowel_num($str){
    echo_func_info();
    $vowel = ['a'=>0,'e'=>0,'i'=>0,'o'=>0,'u'=>0];
    $i = 0;
    while($str[$i]) {
        if (array_key_exists($str[$i], $vowel))
            ++$vowel[$str[$i]];
        ++$i;
    }

    foreach ($vowel as $key => $item) {
        echo "$key: $item <br>";
    }
}

/**
 * 统计元音字符数量
 * @param $str
 */
function count_vowel($str){
    echo_func_info();
    $vowel = ['a','e','i','o','u'];
    $i = 0;
    $count = 0;
    while($str[$i]) {
        if (in_array($str[$i], $vowel))
            ++$count;
        ++$i;
    }
    echo $count . '<br>';
}

/**
 * 反转字符串
 * @param $str
 */
function reverse_str($str) {
    echo_func_info();
    $len = strlen($str);
    while($str[--$len]) {
        echo $str[$len];
    }
    echo '<br>';
}

/**
 * 执行方法信息
 */
function echo_func_info(){
    $temp_exception = new Exception();
    $info = $temp_exception->getTrace()[1];
    $function = $info['function'];
    $arg = $info['args'][0];
    echo "------------------------------------------------------------------<br>执行方法$function($arg)<br>";
}
