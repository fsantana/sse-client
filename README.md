#PHP SSE Client

(ported from Python SSE client: https://bitbucket.org/btubbs/sseclient/)

This is a PHP client library for iterating over http Server Sent Event (SSE) streams (also known as EventSource, after the name of the Javascript interface inside browsers).
The SSEClient class accepts a url on init, and is then an iterator over messages coming from the server.

Example usage can be found in "bin/test.php"
