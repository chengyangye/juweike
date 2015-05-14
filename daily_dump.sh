#!/bin/bash

rm -rf /opt/dumpData/data.$(date -d "-7 days" +%Y-%m-%d).sql
/opt/lampp/bin/mysql dump -u root -p test_juweike>/opt/dumpData/data.$(date +%Y-%m-%d).sql
rm -rf /opt/lampp/htdocs/juweike/wx/log/error/$(date -d "-14 days" +%Y_%m_%d)
