<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/calendar.css">
    <link rel="stylesheet" type="text/css" title="css" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">

</head>
<body>
</body>
</html>

<?php
include "menunavigation.php";
?>

<?php
require 'src/Calendar/Month.php';
require 'src/Calendar/Events.php';
include 'Include/database.php';
global $db;
$events= new Calendar\Events();
$month = new App\Date\Month($_GET['month'] ?? null, $_GET['year'] ?? null);
$start = $month->getStartingday();
$start =$start->format('N')=== '+'? $start: $month->getStartingDay()->modify('last monday');
$weeks= $month->getWeeks();
$end = (clone $start)->modify('+' . (6 + 7 * ($weeks -1)) . ' days');
var_dump($end);
$events = $events->getEventsbetween($start, $end);
var_dump($events);
?>


<div style="font-weight: bold">
<h1 style="font-weight: bold"><?= $month->toString(); ?></h1>
<div>
    <a href="/Planning.php?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>"  class="page-link">&lt;</a>
    <a href="/Planning.php?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>"  class="page-link">&gt;</a>


<table class="calendar__table calendar__table--<?= $month->getWeeks(); ?>weeks">
    <?php for ($i = 0; $i < $weeks; $i++): ?>
        <tr>
            <?php
            foreach($month->days as $k => $day):
                $date = (clone $start)->modify("+" . ($k + $i * 7) . " days")
                ?>
                <td class="<?= $month->withinMonth($date) ? '' : 'calendar__othermonth'; ?>">
                    <?php if ($i === 0): ?>
                        <div class="calendar__weekday"><?= $day; ?></div>
                    <?php endif; ?>
                    <div class="calendar__day"><?= $date->format('d'); ?></div>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endfor; ?>
</table>

