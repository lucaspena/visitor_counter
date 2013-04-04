import sys

arg = int(sys.argv[1])

f = open('afternoon.txt', 'r+')
strnum = f.read()
f.seek(0)
num = int(strnum[:-1])
print num
if arg == 1:
    num += 1
f.write(str(num) + '\n')
f.close()

