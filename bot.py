import urllib2
import time

opener = urllib2.build_opener()
opener.addheaders.append(("Cookie","Admin=0"))
f = opener.open("http://127.0.0.1/guestbook.php")
