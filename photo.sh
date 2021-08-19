#! /bin/sh

fswebcam -d /dev/video0 pepe.jpg
mv pepe.jpg /var/www/html
