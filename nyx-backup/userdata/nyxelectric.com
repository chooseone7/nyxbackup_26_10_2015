--- 
customlog: 
  - 
    format: combined
    target: /usr/local/apache/domlogs/nyxelectric.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /usr/local/apache/domlogs/nyxelectric.com-bytes_log
documentroot: /home/nyxelectric/public_html
group: nyxelectric
hascgi: 1
homedir: /home/nyxelectric
ifmoduleconcurrentphpc: {}

ifmodulemodsuphpc: 
  group: nyxelectric
ip: 174.136.57.146
owner: itasurco
phpopenbasedirprotect: 1
port: 80
scriptalias: 
  - 
    path: /home/nyxelectric/public_html/cgi-bin
    url: /cgi-bin/
  - 
    path: /home/nyxelectric/public_html/cgi-bin/
    url: /cgi-bin/
serveradmin: webmaster@nyxelectric.com
serveralias: www.nyxelectric.com
servername: nyxelectric.com
usecanonicalname: 'Off'
user: nyxelectric
userdirprotect: ''
