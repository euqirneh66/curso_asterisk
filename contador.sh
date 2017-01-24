#! /bin/bash
while read VAR && [ -n ${VAR} ] ; do : ; done
sleep 1
echo "EXEC PLAYBACK beep"
echo "EXEC SAYNUMBER 3"
echo "EXEC SAYNUMBER 2"
echo "EXEC SAYNUMBER 1"
echo "HANGUP"
exit 0
