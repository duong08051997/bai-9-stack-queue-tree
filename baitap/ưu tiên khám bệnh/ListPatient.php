<?php
include_once ('Patient.php');
class ListPatient{
    protected $list;
    protected $limit;

    public function __construct()
    {
        $this->list = [];
        $this->limit = 100;
    }
    public function addPatient($patient)
    {
        if (count($this->list) > $this->limit) {
            echo 'full patient';
        }else{
            array_push($this->list,$patient);
          usort($this->list, function($a,$b){
              if ($a->code == $b->code) {
                  return 1;
              }
              return ($a->code > $b->code) ? -1 : 1;
          });

        }
        return $this->list;
    }
    public function delPatient()
    {
        $delList = [];
       $a = array_shift($this->list);
        array_push($delList,$a);
        return $delList;
    }

    public function getList()
    {
        return $this->list;

    }

}
$patient1 = new Patient('duong',1);
$patient2 = new Patient('dung',3);
$patient3 = new Patient('luc',2);
$patient4 = new Patient('luc2',5);
$patient5 = new Patient('luc3',10);

$list = new ListPatient();
$list->addPatient($patient1);
$list->addPatient($patient2);
$list->addPatient($patient3);
$list->addPatient($patient4);
$list->addPatient($patient5);
echo '<pre>';
print_r($list->delPatient());

echo '<pre>';
print_r($list->getList());

