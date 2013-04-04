f = open('count.txt', 'r+')
strnum = f.read()
f.seek(0)
num = int(strnum[:-1])
print 'Congrats! You are visitor number', str(num) + '!'
num += 1
f.write(str(num) + '\n')
f.close()
