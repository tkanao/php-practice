<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if($i % 4 === 0 && $i % 5 === 0){
      echo 'tic-tac'."\n";
  } elseif ($i % 4 === 0) {
      echo 'tic'."\n";
  } elseif ($i % 5 === 0) {
      echo 'tac'."\n";
  } else {
      echo $i."\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

// 問題1
echo 'Bさんの電話番号は'.$personalInfos[1]['tel'].'です。'."\n";

// 問題2
foreach ($personalInfos as $key => $value) {
  $num = $key + 1;
  echo $num.'番目の'.$value['name'].
  'のメールアドレスは'.$value['mail'].
  'で、電話番号は'.$value['tel'].'です。'."\n";
}

// 問題３
$ageList = [25, 30, 18];
foreach ($personalInfos as $key => $value) {
  $personalInfos[$key]['age'] = $ageList[$key];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, '山田');

echo '学籍番号'.$student->studentId.'番の生徒は'.$student->studentName.'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($language)
    {
        echo $this->studentName.'は'.$language.'の授業に出席しました。';
    }
}

$student = new Student(120, '山田');

echo '学籍番号'.$student->studentId.'番の生徒は'.$student->studentName.'です。'."\n";

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
$oneMonthAgo = new DateTime('2024-11-12');
echo $oneMonthAgo->format('Y-m-d');

$origin = new DateTime();
$target = new DateTime('1992-04-25');

$diff = $origin->diff($target);
echo $diff->format('あの日から%a日経過しました');

?>