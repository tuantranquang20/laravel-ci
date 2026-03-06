<?php
// Test file - trigger redis safety check fail
$redis->keys("*");
$redis->eval("return 1");
