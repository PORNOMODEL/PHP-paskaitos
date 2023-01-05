<?php

//1 task
function exercise1(): void
{
    echo date("Y-m-d");
}

exercise1();
echo PHP_EOL;

//2 task
function exercise2(): void
{
    echo date("Y-m-d H:i", strtotime("2008-12-15 15:15"));
}

exercise2();
echo PHP_EOL;

//3 task
function exercise3(): void
{
    echo date("Y M j H:i:s", strtotime('1970-03-1 15:15:00')) . "\n";

    echo date("Y M d H:i", strtotime('1970-03-01 15:15')) . "\n";

    echo date("Y M jS h:i:s A", strtotime('1970-03-1st 11:15:00 PM')) . "\n";

    echo date("Y/n/j", strtotime('1970/3/1')) . "\n";

    echo date("W", time()) . "\n";

    echo date("z", time()) . "\n";
}

exercise3();
echo PHP_EOL;

//4 task
function exercise4(): void
{
    $date1 = DateTime::createFromFormat('Y-m-d H:i:s', '2000-03-02 15:30:00');
    echo $date1->format('Y-m-d H:i:s') . "\n";

    $date2 = DateTime::createFromFormat('Y/m/d h:i:s A', '2000/02/15 08:30:00 PM');
    echo $date2->format('Y/m/d h:i:s A') . "\n";

    $date3 = DateTime::createFromFormat('Y F jS H:i:s', '2000 March 2nd 15:30:00');
    echo $date3->format('Y F jS H:i:s') . "\n";
}

exercise4();
echo PHP_EOL;

//5 task
function exercise5(): void
{
    $date = DateTime::createFromFormat('jS M Y h:i:s A', '15th Jan 2021 8:15:01 PM');

    $date->modify('+2 weeks');
    echo $date->format('jS M Y h:i:s A') . "\n";

    $date1 = DateTime::createFromFormat('jS M Y h:i:s A', '15th Jan 2021 8:15:01 PM');
    $date1->modify('+10 years');
    echo $date1->format('jS M Y h:i:s A') . "\n";

    $date2 = DateTime::createFromFormat('jS M Y h:i:s A', '15th Jan 2021 8:15:01 PM');
    $date2->modify('-5 hours');
    echo $date2->format('jS M Y h:i:s A') . "\n";

    $date->modify('last day of this month');
    echo $date->format('jS M Y h:i:s A') . "\n";

    $date->modify('first day of this month');
    echo $date->format('jS M Y h:i:s A') . "\n";

    $date->modify('next Tuesday');
    echo $date->format('jS M Y h:i:s A') . "\n";

    $date3 = DateTime::createFromFormat('jS M Y h:i:s A', '15th Jan 2021 8:15:01 PM');
    $date3->modify('-1 day -8 hours -15 minutes');
    echo $date3->format('jS M Y h:i:s A') . "\n";
}

exercise5();
echo PHP_EOL;

//6 task
function exercise6(): void
{
    $products = [
        [
            'name' => 'Wine glass',
            'last_purchase' => '2021 Jan 15 18:34:12',
        ],
        [
            'name' => 'Bread knife',
            'last_purchase' => '2020 Mar 15 23:14:00',
        ],
        [
            'name' => 'Blue chair',
            'last_purchase' => '2019 Dec 02 15:00:12',
        ],
    ];

    foreach ($products as $product) {
        $name = $product['name'];
        $last_purchase = $product['last_purchase'];
        echo $name . ' ' . $last_purchase.PHP_EOL;
    }
}

exercise6();
echo PHP_EOL;

//7 task
function exercise7($date1, $date2): string
{
    $diff = $date1->diff($date2);
    if ($diff->invert === 0) {
        return 'First date is newer';
    } else {
        return 'Second date is newer';
    }
}
echo exercise7(date_create('2022-01-25 17:13:25'), date_create('2020-01-25 17:13:25')).PHP_EOL;
echo exercise7(date_create('2020-01-25 17:13:25'), date_create('2022-01-25 17:13:25')).PHP_EOL;
echo PHP_EOL;

//8 task
function exercise8($date): void
{
    $now = new DateTime();
    $diff = $now->diff($date);

    if ($date > $now) {
        echo "Supplied date is in the future";
    } else {
        $days = $diff->format('%a');
        if ($days == 1) {
            echo "Supplied date was 1 day ago";
        } else {
            echo "Supplied date was {$days} days ago";
        }
    }
}
echo exercise8(date_create('2020-01-25 17:13:25')).PHP_EOL;
echo exercise8(date_create('2023-01-25 17:13:25')).PHP_EOL;
echo PHP_EOL;

//9 task
function exercise9($date): void
{
    $now = new DateTime();
    $diff = $now->diff($date);

    if ($diff->invert == 0) {
        echo 'Supplied date is in the future';
    } else {
        echo $diff->format('Supplied date was %y years %m months %d days');
    }
}
echo exercise9(date_create('2020-01-25 17:13:25')).PHP_EOL;
echo exercise9(date_create('2023-01-25 17:13:25')).PHP_EOL;-