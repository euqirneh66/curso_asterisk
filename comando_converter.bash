find *.mp3 -type f -exec bash -c 'mpg123 -q -w "${1/.mp3/.wav}" "$1";
sox "${1/.mp3/.wav}" -r 8000 -c 1 -t ul "${1/.mp3/.ulaw}"; 
rm -rf "${1/.mp3/.wav}" -- {} \;
