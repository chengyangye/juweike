#!/bin/bash

rm -f ./wx/public_html/data/runtime/Cache/Home/*.php
rm -f ./wx/public_html/data/runtime/Cache/System/*.php
rm -f ./wx/public_html/data/runtime/Cache/User/*.php
rm -f ./wx/public_html/data/runtime/Cache/Wap/*.php

rm -f ./wx/public_html/admin2/data/runtime/Cache/Home/*.php
rm -f ./wx/public_html/admin2/data/runtime/Cache/System/*.php
rm -f ./wx/public_html/admin2/data/runtime/Cache/User/*.php
rm -f ./wx/public_html/admin2/data/runtime/Cache/Wap/*.php

find -name Thumbs.db |xargs rm -rf


