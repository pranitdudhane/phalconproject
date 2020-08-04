<?php

use \Phalcon\Mvc\User\Component,
    \Phalcon\Mvc\View;

class MasterData extends Component{


    /*
     * sends email after register
     * 
     * @param string $to
     * @param string $subject
     * @param string $message
     *
     */
    
    public function getAll($str){
        $TimePeriodResult = Timeperiod::find(array('order' => 'timeperiodname ASC'));
        $MetricsResult = Metrics::find(
            array('metricsid','order' => 'metricsname ASC'));

        $MasterDataArray=array();
        $TimePeriodArray=array();
        $MetricsArray=array();
        $YearArray=array();
        $YearsArray=array();
        $BigCResultArray=array();
        $PeriodTypeArray=array(array('typename'=>"Mat Month"),array('typename'=>"Mat Quarter"),array('typename'=>"Month"),array('typename'=>"Quarter"));

        $BigCResult = Bigc::find(array('order' => 'bigcname ASC'));
        foreach ($BigCResult As $result)
        {
            $BigCResultArray[] = $result->getArray();
        }


        foreach ($TimePeriodResult As $result)
        {
            $tmp= $result->getArray();
            $TimePeriodArray[] =$tmp;
            preg_match('!\d{4}!', $tmp['timeperiodname'],$matches);
            if(!in_array($matches,$YearArray)) {
                $YearArray[]=$matches;
                $YearsArray[]=array("year"=>$matches[0]);
            }
        }

        foreach ($MetricsResult As $result)
        {
            $MetricsArray[] =$result->getArray();
        }

        $MasterDataArray['periodtypedata']=$PeriodTypeArray;
        $MasterDataArray['timeperioddata']=$TimePeriodArray;
        $MasterDataArray['yeardata']=$YearsArray;
        $MasterDataArray['metricsdata']=$MetricsArray;
        $MasterDataArray['bigcdata']=$BigCResultArray;

        return $MasterDataArray;

    }
}
