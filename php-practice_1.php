<?php
// Q1 変数と文字列
$name = 'kanao';
echo '私の名前は' . $name . 'です。';

// Q2 四則演算
$num = 5 * 4;
echo $num."\n";

$num /= 2;
echo $num;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

echo '現在時刻は'.date("Y年m月d日 h時i分s秒") . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは' . $device . 'です。';
} else {
    echo 'どちらでもありません';
}

// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
$kanto = ['茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県'];
echo $kanto[3].'と'.$kanto[4].'は関東地方の都道府県です。';

// Q7 連想配列-1
$kanto = [
  '茨城県' => '水戸市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '東京都' => '新宿区', 
  '神奈川県' => '横浜市'
];
  
foreach ($kanto as $key=>$vals){
  echo $vals."\n";
};

// Q8 連想配列-2
foreach ($kanto as $key=>$vals){
  if ($key === '埼玉県') {
      echo $key.'の県庁所在地は、'.$vals.'です。';
  }
};

// Q9 連想配列-3
$kanto +=
    array(
        '広島県' => '広島市',
        '岡山県' => '岡山市');

foreach ($kanto as $key=>$vals){
    if($key === '広島県' || $key === '岡山県') {
        echo $key.'は関東地方ではありません'."\n";
    } else {
      echo $key.'の県庁所在地は、'.$vals.'です。'."\n";
    }
};

// Q10 関数-1
function hello($name)
{
    echo $name.'さん、こんにちは。'."\n";
}

hello('金谷');
hello('安藤');

// Q11 関数-2
$price = 1000;

function calcTaxInPrice($price)
{
    return $price * 1.10;
}

$taxInPrice = calcTaxInPrice($price);

echo $price.'円の商品の税込価格は'.$taxInPrice.'円です。';

// Q12 関数とif文
function distinguishNum($num)
{
    $message = ($num % 2 === 0) ? '偶数' : '奇数';
    return $num.'は'.$message.'です。'."\n";
}

echo distinguishNum(100);
echo distinguishNum(101);

// Q13 関数とswitch文
function evaluateGrade($point)
{
    switch ($point) {
        case 'A':
        case 'B':
            // code...
            echo '合格です。'."\n";
            break;
            
        case 'C':
            // code...
            echo '合格ですが追加課題があります。'."\n";
            break;
        
        case 'D':
            // code...
            echo '不合格です。'."\n";
            break;
        
        default:
            // code...
            echo '判定不明です。講師に問い合わせてください。';
            break;
    }
}

evaluateGrade('B');
evaluateGrade('不明');

?>