<?php

# Memcached Example

echo "<div>
<h1>Memcached PHP - Example</h1>
<p>Memcached is a general-purpose distributed memory caching system. It is often used to speed up dynamic database-driven websites by caching data and objects in RAM to reduce the number of times an external data source (such as a database or API) must be read.</p>
<hr>
</div>";



# Connect to Memcached
echo 'Connect to Memcached <br> <code>$memcached = new Memcached();</code>';
$memcached = new Memcached();
$memcached->addServer('localhost', 11211);

# Set a value
echo '<br><br>Set a value <br> <code>$memcached->set("date-key", "date("Y-m-d H:i:s")");</code>';
$memcached->set('key', date('Y-m-d H:i:s'));

# Get a value
echo '<br><br>Get a value <br> <code>$memcached->get("date-key");</code>';
echo '<br>Value: ' . $memcached->get('key');


# Delete a value
echo '<br><br>Delete a value <br> <code>$memcached->delete("date-key");</code>';
$memcached->delete('date-key');

# Flush all values
echo '<br><br>Flush all values <br> <code>$memcached->flush();</code>';
$memcached->flush();

# get inexistent value
echo '<br><br>Get inexistent value <br> <code>$memcached->get("date-key");</code>';
echo '<br>Value: ' . $memcached->get('date-key');

# get stats
echo '<br><br>Get stats <br> <code>$memcached->getStats();</code>';
echo '<br>Stats: <pre>';
print_r($memcached->getStats());
echo '</pre>';

