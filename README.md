NeoHakushu
==========

react php stand alone hakushukun server.

setup
====

composer install

sqlite3 sqlite.db < schema.sqlite3.sql


bench mark
==========

```
 ab -n 1000 -c 10 'http://127.0.0.1:1337/vote'
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
Time taken for tests:   1.373 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Non-2xx responses:      1000
Total transferred:      108000 bytes
HTML transferred:       18000 bytes
Requests per second:    728.08 [#/sec] (mean)
Time per request:       13.735 [ms] (mean)
Time per request:       1.373 [ms] (mean, across all concurrent requests)
Transfer rate:          76.79 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.1      0       2
Processing:     5   14   4.1     12      35
Waiting:        5   13   4.1     12      35
Total:          6   14   4.1     12      35

Percentage of the requests served within a certain time (ms)
  50%     12
  66%     13
  75%     15
  80%     16
  90%     19
  95%     22
  98%     26
  99%     30
 100%     35 (longest request)
```
