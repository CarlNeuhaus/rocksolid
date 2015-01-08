import urllib2



ua = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0'
url = 'http://127.0.0.1/steal.php'
req = urllib2.Request(url)  
req.add_header('User-Agent', ua)
req.add_header('Referer', "PWNCTF{flag2}")
r = urllib2.urlopen(req, timeout=60)
	    