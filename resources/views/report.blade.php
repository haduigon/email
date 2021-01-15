<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15">
<title>Exim statistics from 2020-12-17 06:48:44 to 2021-01-14 07:16:38</title>
</head>
<body bgcolor="white">
<h1>Exim statistics from 2020-12-17 06:48:44 to 2021-01-14 07:16:38</h1>
<ul>
<li><a href="#Grandtotal">Grand total summary</a>
<li><a href="#Transport">Deliveries by Transport</a>
<li><a href="#Messages received">Messages received per hour</a>
<li><a href="#Deliveries">Deliveries per hour</a>
<li><a href="#Time spent on the queue all messages">Time spent on the queue: all messages</a>
<li><a href="#Time spent on the queue messages with at least one remote delivery">Time spent on the queue: messages with at least one remote delivery</a>
<li><a href="#Relayed messages">Relayed messages</a>
<li><a href="#Mail rejection reason count">Top 50 mail rejection reasons by message count</a>
<li><a href="#Sending email count">Top 50 sending emails by message count</a>
<li><a href="#Sending email volume">Top 50 sending emails by volume</a>
<li><a href="#Local sender count">Top 50 local senders by message count</a>
<li><a href="#Local sender volume">Top 50 local senders by volume</a>
<li><a href="#Email destination count">Top 50 email destinations by message count</a>
<li><a href="#Email destination volume">Top 50 email destinations by volume</a>
<li><a href="#Local destination count">Top 50 local destinations by message count</a>
<li><a href="#Local destination volume">Top 50 local destinations by volume</a>
<li><a href="#Rejected ip count">Top 50 rejected ips by message count</a>
<li><a href="#Temporarily rejected ip count">Top 50 temporarily rejected ips by message count</a>
<li><a href="#errors">List of errors</a>
</ul>
<hr>
<a name="Grandtotal"></a>
<h2>Grand total summary</h2>
<table border=1>
<tr><th>TOTAL</th><th>Volume</th><th>Messages</th><th>Addresses</th><th>Emails</th><th colspan=2>At least one addr<br>Delayed</th><th colspan=2>At least one addr<br>Failed</th>
<tr><td>Received</td><td align="right"> 195KB</td><td align="right">236</td><td align="right"></td><td align="right">4</td><td align="right">0</td><td align="right"> 0.0%</td><td align="right">57</td><td align="right">24.2%</td>
<tr><td>Delivered</td><td align="right">  17KB</td><td align="right">27</td><td align="right">27</td><td align="right">9</td>
<tr><td>Rejects</td><td align="right"></td><td align="right">145</td><td align="right"></td><td align="right"></td>
<tr><td>Temp Rejects</td><td align="right"></td><td align="right">4</td><td align="right"></td><td align="right"></td>
</table>
<hr><a name="Transport"></a><h2>Deliveries by Transport</h2>
<table border=0 width="100%"><tr><td><table border=1>
<tr><th>&nbsp;</th><th>Volume</th><th>Messages</th>
<tr><td>dovecot_virtual_delivery</td><td align="right">  1806</td><td align="right">1</td>
<tr><td>remote_smtp</td><td align="right">  16KB</td><td align="right">26</td>
</tr></table></td><td></td><td></td></tr></table>

<hr><a name="Messages received"></a><h2>Messages received per hour (each dot is 3 messages)</h2>
<table border=0 width="100%">
<tr><td><pre>
00-01      0 
01-02      0 
02-03      0 
03-04      0 
04-05      0 
05-06      0 
06-07     56 ..................
07-08      0 
08-09      0 
09-10      0 
10-11      0 
11-12      0 
12-13      0 
13-14      0 
14-15      7 ..
15-16      3 .
16-17      2 
17-18      0 
18-19      3 .
19-20      0 
20-21      0 
21-22      0 
22-23    165 .......................................................
23-24      0 

</pre>
</td><td>
</td></tr></table>
<hr><a name="Deliveries"></a><h2>Deliveries per hour (each dot is 1 delivery)</h2>
<table border=0 width="100%">
<tr><td><pre>
00-01      0 
01-02      0 
02-03      0 
03-04      0 
04-05      0 
05-06      0 
06-07      0 
07-08      0 
08-09      0 
09-10      0 
10-11      0 
11-12      0 
12-13      0 
13-14      0 
14-15      7 .......
15-16      3 ...
16-17      2 ..
17-18      0 
18-19      3 ...
19-20      0 
20-21      0 
21-22      0 
22-23     12 ............
23-24      0 

</pre>
</td><td>
</td></tr></table>
<hr><a name="Time spent on the queue all messages"></a><h2>Time spent on the queue: all messages</h2>
<table border=0 width="100%"><tr><td><table border=1>
<tr><th>Time</th><th>Messages</th><th>Percentage</th><th>Cumulative Percentage</th>
<tr><td align="right">Under 1m</td><td align="right">28</td><td align="right"> 11.6%</td><td align="right"> 11.6%</td>
<tr><td align="right">      15m</td><td align="right">152</td><td align="right"> 62.8%</td><td align="right"> 74.4%</td>
<tr><td align="right">      6h</td><td align="right">2</td><td align="right">  0.8%</td><td align="right"> 75.2%</td>
<tr><td align="right">      12h</td><td align="right">2</td><td align="right">  0.8%</td><td align="right"> 76.0%</td>
<tr><td align="right">Over  1d</td><td align="right">58</td><td align="right"> 24.0%</td><td align="right">100.0%</td>
</table></td><td></td></tr></table>

<hr><a name="Time spent on the queue messages with at least one remote delivery"></a><h2>Time spent on the queue: messages with at least one remote delivery</h2>
<table border=0 width="100%"><tr><td><table border=1>
<tr><th>Time</th><th>Messages</th><th>Percentage</th><th>Cumulative Percentage</th>
<tr><td align="right">Under 1m</td><td align="right">26</td><td align="right">100.0%</td><td align="right">100.0%</td>
</table></td><td></td></tr></table>

<hr><a name="Relayed messages"></a><h2>Relayed messages</h2>
<table border=1>
<tr><th>Count</th><th>From</th><th>To</th>
<tr><td align="right">2</td><td>localhost[127.0.0.1] haduigon@fotoded.com </td><td>aspmx.l.google.com[108.177.15.27] boss@intraffic.ua</td>
<tr><td align="right">2</td><td>localhost[127.0.0.1] haduigon@fotoded.com </td><td>aspmx.l.google.com[173.194.76.26] boss@intraffic.ua</td>
<tr><td align="right">1</td><td>localhost[127.0.0.1] haduigon@fotoded.com </td><td>aspmx.l.google.com[74.125.140.26] boss@intraffic.ua</td>
<tr><td align="right">3</td><td>localhost[127.0.0.1] haduigon@fotoded.com </td><td>gmail-smtp-in.l.google.com[173.194.76.26] haduigon@gmail.com</td>
<tr><td align="right">2</td><td>localhost[127.0.0.1] haduigon@fotoded.com </td><td>gmail-smtp-in.l.google.com[173.194.76.26] igor.khlyupin@gmail.com</td>
<tr><td align="right">1</td><td>localhost[127.0.0.1] haduigon@fotoded.com </td><td>gmail-smtp-in.l.google.com[74.125.133.26] haduigon@gmail.com</td>
<tr><td align="right">1</td><td>localhost[127.0.0.1] haduigon@fotoded.com </td><td>gmail-smtp-in.l.google.com[74.125.133.27] igor.khlyupin@gmail.com</td>
<tr><td align="right">1</td><td>localhost[127.0.0.1] haduigon@fotoded.com </td><td>gmail-smtp-in.l.google.com[74.125.71.26] haduigon@gmail.com</td>
<tr><td align="right">1</td><td>mail.buboff.com[62.171.133.55] haduigon@fotoded.com </td><td>agracom-mx1.firstwave.com.au[203.39.128.232] info@agracom.com.au</td>
<tr><td align="right">1</td><td>mail.buboff.com[62.171.133.55] haduigon@fotoded.com </td><td>agracom-mx1.firstwave.com.au[203.39.128.233] enquiries@agracom.com.au</td>
<tr><td align="right">1</td><td>mail.buboff.com[62.171.133.55] haduigon@fotoded.com </td><td>agracom-mx2.firstwave.com.au[203.39.1.233] traders@agracom.com.au</td>
<tr><td align="right">1</td><td>mail.buboff.com[62.171.133.55] haduigon@fotoded.com </td><td>agracom-mx2.firstwave.com.au[203.39.1.234] enquiries@agracom.com.au</td>
<tr><td align="right">1</td><td>mail.buboff.com[62.171.133.55] haduigon@fotoded.com </td><td>agracom-mx2.firstwave.com.au[203.39.1.234] traders@agracom.com.au</td>
<tr><td align="right">3</td><td>mail.buboff.com[62.171.133.55] haduigon@fotoded.com </td><td>aspmx.l.google.com[74.125.133.26] boss@intraffic.ua</td>
<tr><td align="right">2</td><td>mail.buboff.com[62.171.133.55] haduigon@fotoded.com </td><td>gmail-smtp-in.l.google.com[173.194.76.27] haduigon@gmail.com</td>
<tr><td align="right">1</td><td>mail.buboff.com[62.171.133.55] haduigon@fotoded.com </td><td>rayglen-com.mail.protection.outlook.com[104.47.61.36] employment@rayglen.com</td>
<tr><td align="right">1</td><td>mail.buboff.com[62.171.133.55] haduigon@fotoded.com </td><td>rayglen-com.mail.protection.outlook.com[104.47.61.36] info@rayglen.com</td>
</table>
<p>

Total: 25 (plus 0 unshown)

<hr><a name="Mail rejection reason count"></a><h2>Top 50 mail rejection reasons by message count</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right" nowrap>Mail rejection reason</th></tr>
<tr><td align="right">116</td><td align="right" nowrap>SMTP protocol synchronization error</td></tr>
<tr><td align="right">9</td><td align="right" nowrap>Dropped: too many syntax or protocol errors</td></tr>
<tr><td align="right">9</td><td align="right" nowrap>Rejected HELO/EHLO: syntactically invalid argument</td></tr>
<tr><td align="right">8</td><td align="right" nowrap>Rejected RCPT: Send your own mail from yourself</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>Rejected RCPT: Sender verify failed</td></tr>
<tr><td align="right">1</td><td align="right" nowrap>Rejected RCPT: Unknown user</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Mail temporary rejection reason count"></a><h2>Top 50 mail temporary rejection reasons by message count</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right" nowrap>Mail temporary rejection reason</th></tr>
<tr><td align="right">4</td><td align="right" nowrap>Temporarily rejected RCPT: Could not complete sender verify</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Sending email count"></a><h2>Top 50 sending emails by message count</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right">Bytes</th><th align="right">Average</th><th align="right" nowrap>Sending email</th></tr>
<tr><td align="right">178</td><td align="right"> 110KB</td><td align="right">   632</td><td align="right" nowrap>haduigon@fotoded.com</td></tr>
<tr><td align="right">56</td><td align="right">  83KB</td><td align="right">  1517</td><td align="right" nowrap>root@</td></tr>
<tr><td align="right">1</td><td align="right">  1806</td><td align="right">  1806</td><td align="right" nowrap>&lt;&gt;</td></tr>
<tr><td align="right">1</td><td align="right">   348</td><td align="right">   348</td><td align="right" nowrap>root@buboff.com</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Sending email volume"></a><h2>Top 50 sending emails by volume</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right">Bytes</th><th align="right">Average</th><th align="right" nowrap>Sending email</th></tr>
<tr><td align="right">178</td><td align="right"> 110KB</td><td align="right">   632</td><td align="right" nowrap>haduigon@fotoded.com</td></tr>
<tr><td align="right">56</td><td align="right">  83KB</td><td align="right">  1517</td><td align="right" nowrap>root@</td></tr>
<tr><td align="right">1</td><td align="right">  1806</td><td align="right">  1806</td><td align="right" nowrap>&lt;&gt;</td></tr>
<tr><td align="right">1</td><td align="right">   348</td><td align="right">   348</td><td align="right" nowrap>root@buboff.com</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Local sender count"></a><h2>Top 50 local senders by message count</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right">Bytes</th><th align="right">Average</th><th align="left" nowrap>Local sender</th></tr>
<tr><td align="right">57</td><td align="right">  83KB</td><td align="right">  1491</td><td align="left" nowrap>root</td></tr>
<tr><td align="right">1</td><td align="right">  1806</td><td align="right">  1806</td><td align="left" nowrap>Debian-exim</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Local sender volume"></a><h2>Top 50 local senders by volume</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right">Bytes</th><th align="right">Average</th><th align="left" nowrap>Local sender</th></tr>
<tr><td align="right">57</td><td align="right">  83KB</td><td align="right">  1491</td><td align="left" nowrap>root</td></tr>
<tr><td align="right">1</td><td align="right">  1806</td><td align="right">  1806</td><td align="left" nowrap>Debian-exim</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Email destination count"></a><h2>Top 50 email destinations by message count</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right">Addresses</th><th align="right">Bytes</th><th align="right">Average</th><th align="right" nowrap>Email destination</th></tr>
<tr><td align="right">8</td><td align="right">8</td><td align="right">  5008</td><td align="right">   626</td><td align="right" nowrap>boss@intraffic.ua</td></tr>
<tr><td align="right">8</td><td align="right">8</td><td align="right">  4681</td><td align="right">   585</td><td align="right" nowrap>haduigon@gmail.com</td></tr>
<tr><td align="right">3</td><td align="right">3</td><td align="right">  1840</td><td align="right">   613</td><td align="right" nowrap>igor.khlyupin@gmail.com</td></tr>
<tr><td align="right">2</td><td align="right">2</td><td align="right">  1283</td><td align="right">   641</td><td align="right" nowrap>enquiries@agracom.com.au</td></tr>
<tr><td align="right">2</td><td align="right">2</td><td align="right">  1275</td><td align="right">   637</td><td align="right" nowrap>traders@agracom.com.au</td></tr>
<tr><td align="right">1</td><td align="right">1</td><td align="right">  1806</td><td align="right">  1806</td><td align="right" nowrap>haduigon</td></tr>
<tr><td align="right">1</td><td align="right">1</td><td align="right">   636</td><td align="right">   636</td><td align="right" nowrap>employment@rayglen.com</td></tr>
<tr><td align="right">1</td><td align="right">1</td><td align="right">   631</td><td align="right">   631</td><td align="right" nowrap>info@agracom.com.au</td></tr>
<tr><td align="right">1</td><td align="right">1</td><td align="right">   624</td><td align="right">   624</td><td align="right" nowrap>info@rayglen.com</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Email destination volume"></a><h2>Top 50 email destinations by volume</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right">Addresses</th><th align="right">Bytes</th><th align="right">Average</th><th align="right" nowrap>Email destination</th></tr>
<tr><td align="right">8</td><td align="right">8</td><td align="right">  5008</td><td align="right">   626</td><td align="right" nowrap>boss@intraffic.ua</td></tr>
<tr><td align="right">8</td><td align="right">8</td><td align="right">  4681</td><td align="right">   585</td><td align="right" nowrap>haduigon@gmail.com</td></tr>
<tr><td align="right">3</td><td align="right">3</td><td align="right">  1840</td><td align="right">   613</td><td align="right" nowrap>igor.khlyupin@gmail.com</td></tr>
<tr><td align="right">1</td><td align="right">1</td><td align="right">  1806</td><td align="right">  1806</td><td align="right" nowrap>haduigon</td></tr>
<tr><td align="right">2</td><td align="right">2</td><td align="right">  1283</td><td align="right">   641</td><td align="right" nowrap>enquiries@agracom.com.au</td></tr>
<tr><td align="right">2</td><td align="right">2</td><td align="right">  1275</td><td align="right">   637</td><td align="right" nowrap>traders@agracom.com.au</td></tr>
<tr><td align="right">1</td><td align="right">1</td><td align="right">   636</td><td align="right">   636</td><td align="right" nowrap>employment@rayglen.com</td></tr>
<tr><td align="right">1</td><td align="right">1</td><td align="right">   631</td><td align="right">   631</td><td align="right" nowrap>info@agracom.com.au</td></tr>
<tr><td align="right">1</td><td align="right">1</td><td align="right">   624</td><td align="right">   624</td><td align="right" nowrap>info@rayglen.com</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Local destination count"></a><h2>Top 50 local destinations by message count</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right">Addresses</th><th align="right">Bytes</th><th align="right">Average</th><th align="left" nowrap>Local destination</th></tr>
<tr><td align="right">1</td><td align="right">1</td><td align="right">  1806</td><td align="right">  1806</td><td align="left" nowrap>haduigon</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Local destination volume"></a><h2>Top 50 local destinations by volume</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right">Addresses</th><th align="right">Bytes</th><th align="right">Average</th><th align="left" nowrap>Local destination</th></tr>
<tr><td align="right">1</td><td align="right">1</td><td align="right">  1806</td><td align="right">  1806</td><td align="left" nowrap>haduigon</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Rejected ip count"></a><h2>Top 50 rejected ips by message count</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right" nowrap>Rejected ip</th></tr>
<tr><td align="right">8</td><td align="right" nowrap>[127.0.0.1]</td></tr>
<tr><td align="right">8</td><td align="right" nowrap>[178.73.215.171]</td></tr>
<tr><td align="right">7</td><td align="right" nowrap>[71.6.232.5]</td></tr>
<tr><td align="right">4</td><td align="right" nowrap>[183.136.225.45]</td></tr>
<tr><td align="right">4</td><td align="right" nowrap>[192.241.219.62]</td></tr>
<tr><td align="right">3</td><td align="right" nowrap>[106.75.2.200]</td></tr>
<tr><td align="right">3</td><td align="right" nowrap>[167.71.34.158]</td></tr>
<tr><td align="right">3</td><td align="right" nowrap>[167.71.36.200]</td></tr>
<tr><td align="right">3</td><td align="right" nowrap>[185.167.98.154]</td></tr>
<tr><td align="right">3</td><td align="right" nowrap>[213.108.134.156]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[176.32.32.236]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[183.129.159.244]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[185.143.221.233]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[185.167.96.236]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[185.167.97.160]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[185.167.97.229]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.197.251]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.203.165]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.204.120]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.205.177]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.210.193]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.211.123]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.211.252]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.211.59]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.212.103]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.212.111]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.213.196]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.213.41]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.215.169]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.216.133]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.219.140]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.220.31]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.221.137]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.223.149]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.223.187]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.224.140]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.224.64]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.224.76]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[192.241.236.71]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[207.154.232.23]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[207.154.234.4]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[208.100.26.230]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[208.100.26.232]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[71.6.232.9]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[89.248.165.25]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[94.102.49.193]</td></tr>
<tr><td align="right">1</td><td align="right" nowrap>[103.59.46.129]</td></tr>
<tr><td align="right">1</td><td align="right" nowrap>[119.28.149.239]</td></tr>
<tr><td align="right">1</td><td align="right" nowrap>[14.128.63.158]</td></tr>
<tr><td align="right">1</td><td align="right" nowrap>[172.105.77.209]</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="Temporarily rejected ip count"></a><h2>Top 50 temporarily rejected ips by message count</h2>
<table border=0 width="100%">
<tr><td>
<table border=1>
<tr><th align="right">Messages</th><th align="right" nowrap>Temporarily rejected ip</th></tr>
<tr><td align="right">2</td><td align="right" nowrap>[193.56.28.212]</td></tr>
<tr><td align="right">2</td><td align="right" nowrap>[46.29.160.198]</td></tr>
</table>
</td><td>
</td><td>
</td></tr></table>

<hr><a name="errors"></a><h2>List of errors</h2>
<ul><li><b>Count - Error</b>
<li>1 - dnbvchdfbwdlf@dfjvh.ckfo: Unrouteable address
<li>56 - root@: mail domain "" is syntactically invalid
</ul>
<p>
Errors encountered: 57
</body>
</html>
