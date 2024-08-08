<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
    <?php
    class Staff {
        protected $name;
        protected $age;
        protected $sex;
        protected $id;
        private static $count = 0;
        
        public function __construct($name, $age, $sex) {
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }
        
        public function number(){
            self::$count++;
            $this->id = self::$count;
        }

        public function show() {
            printf('(S%04d) %s %d歳 %s<br>', $this->id, $this->name, $this->age, $this->sex);
        }
    }

    class PartStaff extends Staff {
        private $wage;

        public function __construct($name, $age, $sex, $wage) {
            parent::__construct($name, $age, $sex);
            $this->wage = $wage;
        }


        public function show() {
            printf('(P%04d) %s %d歳 %s 時給：%d円<br>', $this->id, $this->name, $this->age, $this->sex, $this->wage);
        }
    }

    $staffs = [];
    $staffs[0] = new Staff('佐藤 一郎', '31', '男性');
    $staffs[1] = new Staff('山田 花子', '25', '女性');
    $staffs[2] = new Staff('鈴木 次郎', '27', '男性');
    $staffs[3] = new PartStaff('田中友子', '24', '女性', 900);
    $staffs[4] = new Staff('中村三郎', '27', '男性');

    foreach ($staffs as $staff){
        $staff->number();
        $staff->show();
    }

    //$staffs[0]->number();
    //$staffs[1]->number();
    //$staffs[2]->number();
    //$staffs[3]->number();
    //$staffs[4]->number();

    //$staffs[0]->show();
    //$staffs[1]->show();
    //$staffs[2]->show();
    //$staffs[3]->show();  
    //$staffs[4]->show();  
    ?>
</body>


</html>