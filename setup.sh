#! /bin/bash

#rsync -aiO --exclude=data /var/www/mtc/ /var/www/html &
ln -s /var/www/mtc/data /var/www/html/data
#rm -fr /var/www/html/internal_data/templates
#ln -s /var/www/mtc/internal_data/templates /var/www/html/internal_data/templates
