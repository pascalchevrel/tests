<?php

print "Testing with Travis\n";

$value = 10;

if ($value > 5) {
    print "too big\n";
    exit(666);
} else {
    print "$value is an OK value\n";
    exit(0);
}
