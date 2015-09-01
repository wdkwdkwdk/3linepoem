# coding:utf-8
import urllib.request
import re
import time


url36 = 'http://36kr.com/'
urlruby = 'https://ruby-china.org/topics'
a = input("请输入你想在36kr中想搜索的内容：")
b = input("请输入你想在rubychina中想搜索的内容：")
req36=urllib.request.Request(url36)
reqruby=urllib.request.Request(urlruby)
req36.add_header('User-Agent','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.107 Safari/537.36')
reqruby.add_header('User-Agent','Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.107 Safari/537.36')
response36 = urllib.request.urlopen(url36)
responseruby = urllib.request.urlopen(urlruby)
html36 = response36.read()
htmlruby = responseruby.read()
html36 = html36.decode('utf-8')
htmlruby = htmlruby.decode('utf-8')
i = re.findall(a,html36,re.S)
x = re.findall(a,htmlruby,re.S)
print('''在36kr中找到了"%s"'''%(a)+str(len(i))+'次')
print('''在rubychina中找到了"%s"'''%(b)+str((len(x)))+'次')


