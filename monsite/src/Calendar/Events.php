<?php
namespace Calendar;

class Events {



    /**
     * @param \DateTime $start
     * @param \DateTime $end
     * @return array
     * /**
     * @var PDO
     */

    public function getEventsbetween (\DateTime $start, \DateTime $end):array
    {

        $q ="SELECT * FROM 'events' WHERE 'start' BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'";
                var_dump($q);
        return [];
    }
}



