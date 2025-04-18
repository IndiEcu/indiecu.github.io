<?php
header('HTTP/1.1 503 Service Unavailable');
header('Retry-After: 3600'); // Время в секундах (например, 1 час =
echo "ok";