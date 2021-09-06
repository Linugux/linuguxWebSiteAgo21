#! /bin/bash

#fortune -s | cowsay -f tux  > fortuneCowsay.php

/usr/games/fortune  > /var/www/html/linugux/fortuneCowsay.php
/usr/games/cowsay -f $(ls /usr/share/cowsay/cows | sort -R | head -1) > /var/www/html/linugux/cowsay.php
cat /var/www/html/linugux/fortuneCowsay.php >> /var/www/html/linugux/fortuneRecord.php 
cat /var/www/html/linugux/cowsay.php >> /var/www/html/linugux/fortuneRecord.php 
