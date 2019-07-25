<?php

require 'vendor/autoload.php';
use Aws\Ec2\Ec2Client;

$ec2Client = new Ec2Client([
    'region' => 'ap-northeast-1',
    'version' => '2016-11-15'
]);

$reservation_set = $ec2Client->describeInstances(array
    (
        'Filters' => array(
            array('Name' => 'instance-state-name', 'Values' => array('running')),
            array('Name' => 'instance-type', 'Values' => array('t2.micro', 't2.small'))
        )
    )
);

foreach($reservation_set["Reservations"] as $reservation) {

    $instance = $reservation["Instances"][0];
    $tag_name = "";
    foreach($instance["Tags"] as $tag){
        if ($tag["Key"] == "Name") $tag_name = $tag["Value"];
    }

    echo $instance["InstanceId"] . " " . $tag_name . " " . $instance["State"]
    ["Name"] . " " . $instance["PrivateIpAddress"] . " " . $instance["PublicIpAddress"]
    . " " . $instance["InstanceType"] . "\n";

}



?>