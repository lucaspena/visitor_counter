import sys

arg = int(sys.argv[1])

f = open('morning.txt', 'r+')
strnum = f.read()
f.seek(0)
num = int(strnum[:-1])
print num
if arg == 0:
    num += 1
f.write(str(num) + '\n')
f.close()
