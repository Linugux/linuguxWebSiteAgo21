#! /bin/sh

fswebcam -d /dev/video0 pepe.jpg
cp pepe.jpg /var/www/html
# scp pepe.jpg linugux@192.168.1.66:/home/linugux/Desktop
