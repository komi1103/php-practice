<?php
// Q1 変数と文字列
$name = "秋澤";
echo '私の名前は「' . $name . '」です。';


// Q2 四則演算
$x = 5;
$y = 4;
$num = $x * $y;
echo $num;
echo $num / 2;


// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在の時刻は、' . date("Y年m月d日 H時i分s秒") . 'です。';


// Q4 条件分岐-1 if文
$devise = "windows";

if ($devise === "windows") {
    echo '使用のOSは、windowsです。';
}  else if ($devise === "mac"){
    echo '使用のOSは、macです。';
}   else {
    echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 21;
$message = ($age >= 18) ? "成人です。" : "未成年です。";
echo $message;


// Q6 配列
$kanto = ['東京都', '神奈川県','栃木県', '千葉県', '埼玉県', '茨城県', '群馬県'];
echo $kanto[3] . 'と' . $kanto[4] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$kanto = ['東京都'=>'新宿区', '神奈川県'=>'横浜市', '千葉県'=>'千葉市', '埼玉県'=>'さいたま市', '栃木県'=>'宇都宮市', '群馬県'=>'前橋市', '茨城県'=>'水戸市'];

echo $kanto['東京都']."\n";
echo $kanto['神奈川県']."\n";
echo $kanto['千葉県']."\n";
echo $kanto['埼玉県']."\n";
echo $kanto['栃木県']."\n";
echo $kanto['群馬県']."\n";
echo $kanto['茨城県'];


// Q8 連想配列-2
foreach ($kanto as $key => $value){
    if($key === '埼玉県' && $value === 'さいたま市'){
        echo $key . 'の県庁所在地は、' . $value . 'です。';
    }
}


// Q9 連想配列-3
//追加
$kanto['愛知県'] = '名古屋市';
$kanto['大阪府'] = '大阪市';

foreach ($kanto as $key => $value){
    if($key === '愛知県' || $key === '大阪府'){
        echo $key . 'は関東地方ではありません。' . "\n";
    }
    else {echo $key . 'の県庁所在地は、' . $value . 'です。' . "\n";
    }
}


// Q10 関数-1
function hello($name){echo $name . 'さん、こんにちは。' . "\n";}
hello('佐藤');
hello('鈴木');


// Q11 関数-2
function calcTaxInPrice($price){
    return $price * 1.1;
}

$price = 3000;
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の価格は' . $taxInPrice . '円です。' . "\n";

//最初の回答
$price = 1000;
function calcTaxInPrice($price){return $price * 1.1;}
$taxInPrice = calcTaxInPrice(2000);
echo $price . '円の商品の価格は' . $taxInPrice . '円です。' . "\n";


// Q12 関数とif文
function distinguishNum($num){
    if ($num %2 === 0){echo $num . 'は偶数です。' . "\n";}
    else{echo $num . 'は奇数です。' . "\n";}
}

distinguishNum(11);
distinguishNum(24);


// Q13 関数とswitch文
function evaluateGrande($grade){
    switch($grade){
        case 'A':
        case 'B':
            return '合格です。';
            break;
        case 'C':
            return '合格ですが追加課題があります。';
            break;
        case 'D':
            return '不合格です。';
            break;
        default:
            return '判定不明です。講師に問い合わせてください。';
            break;
    }
}

echo evaluateGrande('A') . "\n";
echo evaluateGrande('F') . "\n";


?>