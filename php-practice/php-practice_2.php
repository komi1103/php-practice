<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します。' . "\n";

for ($num = 1; $num <= 100; $num++){
  if ($num % 20 === 0){echo 'tic-tac' . "\n";}
  elseif ($num % 4 === 0){echo 'tic' . "\n";}
  elseif ($num % 5 === 0){echo 'tac' . "\n";}
  else {echo $num . "\n";}
}

// Q2 多次元連想配列
var_dump($personalInfos);

array(3) {
  [0]=>
  array(3) {
    ["name"]=>
    string(7) "Aさん"
    ["mail"]=>
    string(12) "aaa@mail.com"
    ["tel"]=>
    string(11) "09011112222"
  }
  [1]=>
  array(3) {
    ["name"]=>
    string(7) "Bさん"
    ["mail"]=>
    string(12) "bbb@mail.com"
    ["tel"]=>
    string(11) "08033334444"
  }
  [2]=>
  array(3) {
    ["name"]=>
    string(7) "Cさん"
    ["mail"]=>
    string(12) "ccc@mail.com"
    ["tel"]=>
    string(11) "09055556666"
  }
}

//問題１
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

//問題２
foreach($personalInfos as $num => $value){
  echo $num+1 . '番目の' . $value['name'] . 
'のメールアドレスは' . $value['mail'] . 
'で、電話番号は' . $value['tel'] . 'です。' . "\n";
}


//問題３
$ageList = [25, 30, 18];

foreach($personalInfos as $num => $value){
    $value["age"] = $ageList[$num];
    $personalInfos[$num] = $value;
}

foreach($ageList as $num => $Value){
    $personal = $personalInfos[$num];
    $personal['age'] = $Value;
    $personalInfos[$num] = $personal;
}

var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
  public $studentId;
  public $studentName;

  public function __construct($id, $name)
  {
    $this -> studentId = $id;
    $this -> studentName = $name;
  }

  public function attend()
  {
    echo '学籍番号' . $this -> studentId . '番の生徒は' . $this -> studentName . 'です。' . "\n";  
  }
}

$yamada120 = new Student(120, '山田');
$yamada120->attend();


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

  public function attend($lesson)
  {
    echo $this -> studentName . 'は' . $lesson . 'の授業に参加しました。学籍番号：' . $this->studentId . "\n";
  }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
//問題１
$date = new DateTime('now');
$date -> modify('-1 month');
echo $date -> format('Y-m-d');


//問題２
$now = new DateTime('now');
$past = new DateTime('1992-04-25');
$days = $now -> diff($past);
echo 'あの日から' . $days -> days . '日経過しました。';

?>