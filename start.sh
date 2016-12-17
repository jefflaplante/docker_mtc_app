#! /bin/bash

#rsync -aiO --exclude=data /var/www/mtc/ /var/www/html &
ln -s /var/www/mtc/data /var/www/html/data
rm -fr /var/www/html/internal_data/templates
ln -s /var/www/mtc/internal_data/templates /var/www/html/internal_data/templates

# Start php-fpm
php-fpm7.0 &
PID1=$!

# Signal Traps
stahp() {
  kill $PID1
  echo "Killed $PID1 with TERM signal."
}

interrupt() {
  kill -SIGINT $PID1
  echo "Sent $PID1 INT signal."
}

hangup() {
  kill -SIGHUP $PID1
  echo "Sent $PID1 HUP signal."
}

# Trap Signals
trap stahp TERM
trap interrupt INT
trap hangup HUP

#Wait for child processes to finish before exiting.
wait
