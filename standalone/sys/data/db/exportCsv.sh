#!/bin/bash
/usr/bin/sqlite3 ./ph.sqlite <<!
.headers on
.mode csv
.output phonetic.csv
select * from ph;
!
