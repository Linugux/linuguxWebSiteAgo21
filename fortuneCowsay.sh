#! /bin/bash

#fortune -s | cowsay -f tux  > fortuneCowsay.php

/usr/games/fortune  > /var/www/html/fortuneCowsay.php
/usr/games/cowsay -f $(ls /usr/share/cowsay/cows | sort -R | head -1) $(cat /var/www/html/fortuneCowsay.php) > /var/www/html/cowsay.php
cat /var/www/html/fortuneCowsay.php >> /var/www/html/fortuneRecord.php 
cat /var/www/html/cowsay.php >> /var/www/html/fortuneRecord.php 
