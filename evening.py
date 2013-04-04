import sys

arg = int(sys.argv[1])

f = open('evening.txt', 'r+')
strnum = f.read()
f.seek(0)
num = int(strnum[:-1])
if arg == 2:
    num += 1
print num
f.write(str(num) + '\n')
f.close()

