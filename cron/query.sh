#!/bin/bash

php -q /hostdata/api.dopehosting.net/namecheap/get_com.php > /hostdata/api.dopehosting.net/public_html/namecheap/com.json
sleep 1
php -q /hostdata/api.dopehosting.net/namecheap/get_net.php > /hostdata/api.dopehosting.net/public_html/namecheap/net.json
sleep 2
php -q /hostdata/api.dopehosting.net/namecheap/get_org.php > /hostdata/api.dopehosting.net/public_html/namecheap/org.json
sleep 1
php -q /hostdata/api.dopehosting.net/namecheap/get_me.php > /hostdata/api.dopehosting.net/public_html/namecheap/me.json
sleep 2
php -q /hostdata/api.dopehosting.net/namecheap/get_xyz.php > /hostdata/api.dopehosting.net/public_html/namecheap/xyz.json
sleep 1
php -q /hostdata/api.dopehosting.net/namecheap/get_io.php > /hostdata/api.dopehosting.net/public_html/namecheap/io.json
