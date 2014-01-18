NeoHakushu
==========

react php stand alone hakushukun server.

setup
====

composer install

sqlite3 sqlite.db < schema.sqlite3.sql


bench mark
==========

on MBP13r 2013 php5.5.7

```
06:22:17 ~$ ab -n 1000 -c 10 'http://127.0.0.1:1337/vote'
This is ApacheBench, Version 2.3 <$Revision: 655654 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking 127.0.0.1 (be patient)
Completed 100 requests
Completed 200 requests
Completed 300 requests
Completed 400 requests
Completed 500 requests
Completed 600 requests
Completed 700 requests
Completed 800 requests
Completed 900 requests
Completed 1000 requests
Finished 1000 requests


Server Software:
Server Hostname:        127.0.0.1
Server Port:            1337

Document Path:          /vote
Document Length:        18 bytes

Concurrency Level:      10
Time taken for tests:   1.176 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Non-2xx responses:      1000
Total transferred:      108000 bytes
HTML transferred:       18000 bytes
Requests per second:    850.53 [#/sec] (mean)
Time per request:       11.757 [ms] (mean)
Time per request:       1.176 [ms] (mean, across all concurrent requests)
Transfer rate:          89.70 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.0      0       1
Processing:     3   12   4.9     10      56
Waiting:        3   11   4.9     10      56
Total:          4   12   4.9     10      56

Percentage of the requests served within a certain time (ms)
  50%     10
  66%     11
  75%     11
  80%     12
  90%     15
  95%     16
  98%     21
  99%     50
 100%     56 (longest request)
 ```
