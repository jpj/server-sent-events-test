<?php

header("Content-Type: text/event-stream\n\n");
while (@ob_end_flush());

while(true) {
	fwrite(fopen('php://stdout', 'w'), "Emitting event...\n");
	echo "data: event happened\n\n";
	//ob_end_flush();
	#if (ob_get_contents()) ob_end_clean();
	flush();
	sleep(4);
}
